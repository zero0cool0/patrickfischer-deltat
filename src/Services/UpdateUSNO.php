<?php

namespace PatrickFischer\DeltaT\Services;

use Carbon\Carbon;
use Exception;
use Illuminate\Support\Collection;
use PatrickFischer\DeltaT\Time;
use Illuminate\Support\Str;

class UpdateUSNO
{
    public function run()
    {
        /**
         * Order is important as the lookup will move downwards in the file
         * and there are overlapping time periods provided by these files
         */
        $input_data = [
            'measured' => [
                'url' => 'https://maia.usno.navy.mil/ser7/deltat.data',
                'line_processor' => 'sliding_processor_data',
                'name' => 'deltat.data',
                'skip' => 0,
            ],
            'predicted' => [
                'url' => 'https://maia.usno.navy.mil/ser7/deltat.preds',
                'line_processor' => 'sliding_processor_preds',
                'name' => 'deltat.preds',
                'skip' => 1,
            ],
            'historic' => [
                'url' => 'https://maia.usno.navy.mil/ser7/historic_deltat.data',
                'line_processor' => 'sliding_processor_historic',
                'name' => 'historic_deltat.data',
                'skip' => 2,
            ],
        ];


        $output_string = ""; $first = true;
        $file_hashes = "";

        foreach ($input_data as $key => $a) {
            $data = file_get_contents($a['url']);
            if (!$data) {
                throw new \Exception("GenerateDeltaT: Can't pull {$a['name']}");
            }
            $file_hashes .= "     * {$a['url']}: ".sha1($data)."\n";
            collect(preg_split("/\r\n|\n|\r/", $data))
                ->filter(function (string $line) {
                    return trim($line) != "";
                })
                ->skip($a['skip'])
                ->sliding(2)
                ->each(function ($group) use ($a, &$output_string, $key, &$first) {
                    $row = $this->{$a['line_processor']}($group);
                    if ($row[1] <= $row[0]) {
                        throw new Exception("Error in input data for row " . implode('|', $row));
                    }
                    $if = "else if";
                    if ($first) {
                        $if = "if";
                        $first = false;
                    }
                    $output_string .=
                        "        {$if} (\$mjd >= {$row[0]} && \$mjd < {$row[1]}) { // $key: {$row[3]}\n"
                        . "          return {$row[2]};\n"
                        . "        }\n";
                });
        }

        $s = Str::of(file_get_contents(__DIR__ . '/../../resources/DeltaTUSNO.php'))
        ->replace('        // __REPLACE_THIS__', $output_string)
        ->replace('__GENERATED_TIMESTAMP__', Carbon::now()->toIso8601String())
        ->replace('     * __FILE_HASHES__', $file_hashes)
        ;
        

        file_put_contents(__DIR__ . '/../DeltaTUSNO.php', $s);
    }

    private function sliding_processor_data(Collection $group): array
    {
        //  1973  2  1  43.4724
        $l1 = preg_split('/\s+/', trim($group->first()));
        $l2 = preg_split('/\s+/', trim($group->last()));

        $mjd1 = Time::Mjd((int)$l1[0], (int)$l1[1], (int)$l1[2], 0, 0, 0);
        $mjd2 = Time::Mjd((int)$l2[0], (int)$l2[1], (int)$l2[2], 0, 0, 0);

        return [
            $mjd1,
            $mjd2,
            $l1[3],
            "{$group->first()} - {$group->last()}"
        ];
    }

    private function sliding_processor_preds(Collection $group): array
    {
        // 59762.000	2022.50	69.29	-0.104	0.031
        $l1 = preg_split('/\s+/', trim($group->first()));
        $l2 = preg_split('/\s+/', trim($group->last()));

        $mjd1 = (float)$l1[0];
        $mjd2 = (float)$l2[0];

        return [
            $mjd1,
            $mjd2,
            $l1[2],
            "{$group->first()} - {$group->last()}"
        ];
    }


    private function sliding_processor_historic(Collection $group): array
    {
        // 1657.000     44       12        -4       41
        // 1657.500     43       15        -5       48
        $l1 = preg_split('/\s+/', trim($group->first()));
        $l2 = preg_split('/\s+/', trim($group->last()));
        $year1 = (float)$l1[0];
        $year_int1 = (int)$year1;
        $fraction1 = $year1 - $year_int1;
        $year2 = (float)$l2[0];
        $year_int2 = (int)$year2;
        $fraction2 = $year2 - $year_int2;

        $mjd1 = Time::Mjd($year_int1, 1, 1, 0, 0, 0) + $fraction1 * 365;
        $mjd2 = Time::Mjd($year_int2, 1, 1, 0, 0, 0) + $fraction2 * 365;

        return [
            $mjd1,
            $mjd2,
            $l1[1],
            "{$group->first()} - {$group->last()}"
        ];
    }
}

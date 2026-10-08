<?php

namespace PatrickFischer\DeltaT;

use Carbon\Carbon;

class Time
{
    public static function mjdFromCarbon(Carbon $c)
    {
        $offset = $c->timezone->getOffset($c);
        return Time::mjd($c->year, $c->month, $c->day, $c->hour, $c->minute, $c->second)
            - $offset / 86400.0;
    }

    /**
     * Calculates date/time from Modified Julian Date
     * 
     * @param float $Mjd Modified Julian Date
     * @param string $tz Timezone to receive Carbon result
     * @return Carbon datetime 
     */
    public static function carbonFromMjd(float $Mjd, string $tz): Carbon
    {
        $a = intval($Mjd + 2400001.0);

        if ($a < 2299161) {
            $b = 0;
            $c = $a + 1524;
        } else {
            $b = intval(($a - 1867216.25) / 36524.25);
            $c = $a +  $b - intval($b / 4) + 1525;
        }

        $d     = intval(($c - 122.1) / 365.25);
        $e     = 365 * $d + intval($d / 4);
        $f     = intval(($c - $e) / 30.6001);

        $Day   = $c - $e - intval(30.6001 * $f);
        $Month = $f - 1 - 12 * intval($f / 14);
        $Year  = $d - 4715 - intval((7 + $Month) / 10);

        $FracOfDay = $Mjd - floor($Mjd);

        $x = 24.0 * $FracOfDay;
        $Hour = intval($x);
        $x = 60 * ($x - $Hour);
        $Minute = intval($x);
        $x = 60 * ($x - $Minute);
        $Second = $x;

        $c = Carbon::create($Year, $Month, $Day, $Hour, $Minute, (int)$Second, "UTC");
        $c->tz($tz);

        return $c;
    }

    /**
     * Calculates Modified Julian Date (MJD) of provided Gregorian date and time (UTC)
     * 
     * @param int $Year Gregorian Calendar Year
     * @param int $Month Gregorian Calendar Month
     * @param int $Day   Gregorian Calendar Day
     * @param int $Hour Hour
     * @param int $Min Minute
     * @param float $Sec Second
     * @return float
     */
    public static function mjd(int $Year, int $Month, int $Day, int $Hour, int $Min = 0, float $Sec = 0.0): float
    {

        if ($Month <= 2) {
            $Month += 12;
            --$Year;
        }

        $b = 0;
        if ((10000 * $Year + 100 * $Month + $Day) <= 15821004) {
            $b = -2 + intval(($Year + 4716) / 4) - 1179;     // Julianischer Kalender
        } else {
            $b = intval($Year / 400) - intval($Year / 100) + intval($Year / 4);  // Gregorianischer Kalender
        }

        $MjdMidnight = 365 * $Year - 679004 + intval($b) + intval(30.6001 * ($Month + 1)) + $Day;
        $FracOfDay   = Time::Astro_Ddd($Hour, $Min, $Sec);

        return $MjdMidnight + $FracOfDay / 24.0;
    }

    public static function Astro_Ddd(int $D, int $M, float $S)
    {
        $sign = 1.0;

        if (($D < 0) || ($M < 0) || ($S < 0)) {
            $sign = -1.0;
        } else {
            $sign = 1.0;
        }

        return  $sign * (abs($D) + abs($M) / 60.0 + abs($S) / 3600.0);
    }
}

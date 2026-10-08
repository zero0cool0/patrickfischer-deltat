<?php

namespace PatrickFischer\DeltaT;

use Carbon\Carbon;

class DeltaT
{
    /**
     * Lookup delta T by Modified Julian Date
     * USNO data sources (measured, predicted and historical, in that order) take precedence,
     * followed by a simple polynominal expression that covers all dates outside the USNO
     * 
     * @param float|Carbon $date expressed as modified julian date or Carbon object
     * @return DeltaTLookupResult Result including delta T in seconds and the calculation/lookup source
     */
    public static function lookup(float|Carbon $date): DeltaTLookupResult
    {
        $mjd = null;
        if (is_a($date, Carbon::class)) {
            $mjd = Time::mjdFromCarbon($date);
        } else {
            $mjd = $date;
        }

        $delta_t = DeltaTUSNO::lookup($mjd);

        if ($delta_t !== null) {
            return new DeltaTLookupResult($delta_t, DeltaTLookupSource::USNO);
        }

        if (!is_a($date, Carbon::class)) {
            $date = Time::carbonFromMjd($mjd, "UTC");
        }

        // Fallback
        $delta_t = DeltaTPolynominal::forYearAndMonth($date->year, $date->month);
        return new DeltaTLookupResult($delta_t, DeltaTLookupSource::Polynominal);
    }
}

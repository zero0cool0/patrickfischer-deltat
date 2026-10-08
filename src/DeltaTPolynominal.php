<?php

namespace PatrickFischer\DeltaT;

class DeltaTPolynominal
{
    /**
     * Calculates DeltaT according to a polynominal expressen
     * @see https://eclipse.gsfc.nasa.gov/SEhelp/deltatpoly2004.html
     * @param int $year Gregorian year
     * @param int $month Gregorian month
     * @return float Delta T in seconds
     */
    public static function forYearAndMonth(int $year, int $month): float
    {
        $y = $year + ($month - 0.5) / 12;

        if ($year < -500) {
            $u = ($year - 1820) / 100;
            return -20 + 32 * pow($u, 2);
        } else if ($year < 500) {
            $u = $y / 100;
            return 10583.6 - 1014.41 * $u + 33.78311 * pow($u, 2)
                - 5.952053 * pow($u, 3)
                - 0.1798452 * pow($u, 4)
                + 0.022174192 * pow($u, 5) + 0.0090316521 * pow($u, 6);
        } else if ($year < 1600) {
            $u = ($y - 1000) / 100;
            return 1574.2 - 556.01 * $u + 71.23472 * pow($u, 2)
                + 0.319781 * pow($u, 3)
                - 0.8503463 * pow($u, 4)
                - 0.005050998 * pow($u, 5) + 0.0083572073 * pow($u, 6);
        } else if ($year < 1700) {
            $t = $y - 1600;
            return 120 - 0.9808 * $t - 0.01532 * pow($t, 2) + pow($t, 3) / 7129;
        } else if ($year < 1800) {
            $t = $y - 1700;
            return 8.83 + 0.1603 * $t - 0.0059285 * pow($t, 2)
                + 0.00013336 * pow($t, 3) - pow($t, 4) / 1174000;
        } else if ($year < 1860) {
            $t = $y - 1800;
            return 13.72 - 0.332447 * $t + 0.0068612 * pow($t, 2)
                + 0.0041116 * pow($t, 3) - 0.00037436 * pow($t, 4)
                + 0.0000121272 * pow($t, 5) - 0.0000001699 * pow($t, 6)
                + 0.000000000875 * pow($t, 7);
        } else if ($year < 1900) {
            $t = $y - 1860;
            return 7.62 + 0.5737 * $t - 0.251754 * pow($t, 2)
                + 0.01680668 * pow($t, 3)
                - 0.0004473624 * pow($t, 4) + pow($t, 5) / 233174;
        } else if ($year < 1920) {
            $t = $y - 1900;
            return -2.79 + 1.494119 * $t - 0.0598939 * pow($t, 2)
                + 0.0061966 * pow($t, 3) - 0.000197 * pow($t, 4);
        } else if ($year < 1941) {
            $t = $y - 1920;
            return 21.20 + 0.84493 * $t - 0.076100 * pow($t, 2)
                + 0.0020936 * pow($t, 3);
        } else if ($year < 1961) {
            $t = $y - 1950;
            return 29.07 + 0.407 * $t - pow($t, 2) / 233 + pow($t, 3) / 2547;
        } else if ($year < 1986) {
            $t = $y - 1975;
            return 45.45 + 1.067 * $t - pow($t, 2) / 260 - pow($t, 3) / 718;
        } else if ($year < 2005) {
            $t = $y - 2000;
            return 63.86 + 0.3345 * $t - 0.060374 * pow($t, 2)
                + 0.0017275 * pow($t, 3) + 0.000651814 * pow($t, 4)
                + 0.00002373599 * pow($t, 5);
        } else if ($year < 2050) {
            $t = $y - 2000;
            return 62.92 + 0.32217 * $t + 0.005589 * pow($t, 2);
        } else if ($year < 2150) {
            return -20 + 32 * pow((($y - 1820) / 100), 2) - 0.5628 * (2150 - $y);
        } else {
            $u = ($year - 1820) / 100;
            return -20 + 32 * $u * $u;
        }
    }
}

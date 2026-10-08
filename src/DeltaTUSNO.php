<?php

namespace PatrickFischer\DeltaT;

class DeltaTUSNO
{
    /**
     * Lookup delta T by Modified Julian Date
     * Generated: 2026-10-08T06:12:47+00:00
     * File hashes:
     * https://maia.usno.navy.mil/ser7/deltat.data: a5ade99a34db9ca5efa45f0e2e5ce89ef07fb8f8
     * https://maia.usno.navy.mil/ser7/deltat.preds: 2302f5e197c0b1f91d08ef8b40ee6076ca7c2695
     * https://maia.usno.navy.mil/ser7/historic_deltat.data: b14cda66bfa2ebb4da3f732cb98739c7833ee28d

     * 
     * @param float $mjd expressed as Modified Julian Date
     * @return ?float Result including delta T in seconds or null if outside range
     */
    public static function lookup(float $mjd): ?float {
        if ($mjd >= 41714 && $mjd < 41742) { // measured:  1973  2  1  43.4724 -  1973  3  1  43.5648
          return 43.4724;
        }
        else if ($mjd >= 41742 && $mjd < 41773) { // measured:  1973  3  1  43.5648 -  1973  4  1  43.6737
          return 43.5648;
        }
        else if ($mjd >= 41773 && $mjd < 41803) { // measured:  1973  4  1  43.6737 -  1973  5  1  43.7782
          return 43.6737;
        }
        else if ($mjd >= 41803 && $mjd < 41834) { // measured:  1973  5  1  43.7782 -  1973  6  1  43.8763
          return 43.7782;
        }
        else if ($mjd >= 41834 && $mjd < 41864) { // measured:  1973  6  1  43.8763 -  1973  7  1  43.9562
          return 43.8763;
        }
        else if ($mjd >= 41864 && $mjd < 41895) { // measured:  1973  7  1  43.9562 -  1973  8  1  44.0315
          return 43.9562;
        }
        else if ($mjd >= 41895 && $mjd < 41926) { // measured:  1973  8  1  44.0315 -  1973  9  1  44.1132
          return 44.0315;
        }
        else if ($mjd >= 41926 && $mjd < 41956) { // measured:  1973  9  1  44.1132 -  1973 10  1  44.1982
          return 44.1132;
        }
        else if ($mjd >= 41956 && $mjd < 41987) { // measured:  1973 10  1  44.1982 -  1973 11  1  44.2952
          return 44.1982;
        }
        else if ($mjd >= 41987 && $mjd < 42017) { // measured:  1973 11  1  44.2952 -  1973 12  1  44.3936
          return 44.2952;
        }
        else if ($mjd >= 42017 && $mjd < 42048) { // measured:  1973 12  1  44.3936 -  1974  1  1  44.4841
          return 44.3936;
        }
        else if ($mjd >= 42048 && $mjd < 42079) { // measured:  1974  1  1  44.4841 -  1974  2  1  44.5646
          return 44.4841;
        }
        else if ($mjd >= 42079 && $mjd < 42107) { // measured:  1974  2  1  44.5646 -  1974  3  1  44.6425
          return 44.5646;
        }
        else if ($mjd >= 42107 && $mjd < 42138) { // measured:  1974  3  1  44.6425 -  1974  4  1  44.7386
          return 44.6425;
        }
        else if ($mjd >= 42138 && $mjd < 42168) { // measured:  1974  4  1  44.7386 -  1974  5  1  44.8370
          return 44.7386;
        }
        else if ($mjd >= 42168 && $mjd < 42199) { // measured:  1974  5  1  44.8370 -  1974  6  1  44.9302
          return 44.8370;
        }
        else if ($mjd >= 42199 && $mjd < 42229) { // measured:  1974  6  1  44.9302 -  1974  7  1  44.9986
          return 44.9302;
        }
        else if ($mjd >= 42229 && $mjd < 42260) { // measured:  1974  7  1  44.9986 -  1974  8  1  45.0584
          return 44.9986;
        }
        else if ($mjd >= 42260 && $mjd < 42291) { // measured:  1974  8  1  45.0584 -  1974  9  1  45.1284
          return 45.0584;
        }
        else if ($mjd >= 42291 && $mjd < 42321) { // measured:  1974  9  1  45.1284 -  1974 10  1  45.2064
          return 45.1284;
        }
        else if ($mjd >= 42321 && $mjd < 42352) { // measured:  1974 10  1  45.2064 -  1974 11  1  45.2980
          return 45.2064;
        }
        else if ($mjd >= 42352 && $mjd < 42382) { // measured:  1974 11  1  45.2980 -  1974 12  1  45.3897
          return 45.2980;
        }
        else if ($mjd >= 42382 && $mjd < 42413) { // measured:  1974 12  1  45.3897 -  1975  1  1  45.4761
          return 45.3897;
        }
        else if ($mjd >= 42413 && $mjd < 42444) { // measured:  1975  1  1  45.4761 -  1975  2  1  45.5632
          return 45.4761;
        }
        else if ($mjd >= 42444 && $mjd < 42472) { // measured:  1975  2  1  45.5632 -  1975  3  1  45.6450
          return 45.5632;
        }
        else if ($mjd >= 42472 && $mjd < 42503) { // measured:  1975  3  1  45.6450 -  1975  4  1  45.7375
          return 45.6450;
        }
        else if ($mjd >= 42503 && $mjd < 42533) { // measured:  1975  4  1  45.7375 -  1975  5  1  45.8284
          return 45.7375;
        }
        else if ($mjd >= 42533 && $mjd < 42564) { // measured:  1975  5  1  45.8284 -  1975  6  1  45.9133
          return 45.8284;
        }
        else if ($mjd >= 42564 && $mjd < 42594) { // measured:  1975  6  1  45.9133 -  1975  7  1  45.9820
          return 45.9133;
        }
        else if ($mjd >= 42594 && $mjd < 42625) { // measured:  1975  7  1  45.9820 -  1975  8  1  46.0407
          return 45.9820;
        }
        else if ($mjd >= 42625 && $mjd < 42656) { // measured:  1975  8  1  46.0407 -  1975  9  1  46.1067
          return 46.0407;
        }
        else if ($mjd >= 42656 && $mjd < 42686) { // measured:  1975  9  1  46.1067 -  1975 10  1  46.1825
          return 46.1067;
        }
        else if ($mjd >= 42686 && $mjd < 42717) { // measured:  1975 10  1  46.1825 -  1975 11  1  46.2789
          return 46.1825;
        }
        else if ($mjd >= 42717 && $mjd < 42747) { // measured:  1975 11  1  46.2789 -  1975 12  1  46.3713
          return 46.2789;
        }
        else if ($mjd >= 42747 && $mjd < 42778) { // measured:  1975 12  1  46.3713 -  1976  1  1  46.4567
          return 46.3713;
        }
        else if ($mjd >= 42778 && $mjd < 42809) { // measured:  1976  1  1  46.4567 -  1976  2  1  46.5445
          return 46.4567;
        }
        else if ($mjd >= 42809 && $mjd < 42838) { // measured:  1976  2  1  46.5445 -  1976  3  1  46.6311
          return 46.5445;
        }
        else if ($mjd >= 42838 && $mjd < 42869) { // measured:  1976  3  1  46.6311 -  1976  4  1  46.7302
          return 46.6311;
        }
        else if ($mjd >= 42869 && $mjd < 42899) { // measured:  1976  4  1  46.7302 -  1976  5  1  46.8284
          return 46.7302;
        }
        else if ($mjd >= 42899 && $mjd < 42930) { // measured:  1976  5  1  46.8284 -  1976  6  1  46.9247
          return 46.8284;
        }
        else if ($mjd >= 42930 && $mjd < 42960) { // measured:  1976  6  1  46.9247 -  1976  7  1  46.9970
          return 46.9247;
        }
        else if ($mjd >= 42960 && $mjd < 42991) { // measured:  1976  7  1  46.9970 -  1976  8  1  47.0709
          return 46.9970;
        }
        else if ($mjd >= 42991 && $mjd < 43022) { // measured:  1976  8  1  47.0709 -  1976  9  1  47.1451
          return 47.0709;
        }
        else if ($mjd >= 43022 && $mjd < 43052) { // measured:  1976  9  1  47.1451 -  1976 10  1  47.2362
          return 47.1451;
        }
        else if ($mjd >= 43052 && $mjd < 43083) { // measured:  1976 10  1  47.2362 -  1976 11  1  47.3413
          return 47.2362;
        }
        else if ($mjd >= 43083 && $mjd < 43113) { // measured:  1976 11  1  47.3413 -  1976 12  1  47.4319
          return 47.3413;
        }
        else if ($mjd >= 43113 && $mjd < 43144) { // measured:  1976 12  1  47.4319 -  1977  1  1  47.5214
          return 47.4319;
        }
        else if ($mjd >= 43144 && $mjd < 43175) { // measured:  1977  1  1  47.5214 -  1977  2  1  47.6049
          return 47.5214;
        }
        else if ($mjd >= 43175 && $mjd < 43203) { // measured:  1977  2  1  47.6049 -  1977  3  1  47.6837
          return 47.6049;
        }
        else if ($mjd >= 43203 && $mjd < 43234) { // measured:  1977  3  1  47.6837 -  1977  4  1  47.7781
          return 47.6837;
        }
        else if ($mjd >= 43234 && $mjd < 43264) { // measured:  1977  4  1  47.7781 -  1977  5  1  47.8771
          return 47.7781;
        }
        else if ($mjd >= 43264 && $mjd < 43295) { // measured:  1977  5  1  47.8771 -  1977  6  1  47.9687
          return 47.8771;
        }
        else if ($mjd >= 43295 && $mjd < 43325) { // measured:  1977  6  1  47.9687 -  1977  7  1  48.0348
          return 47.9687;
        }
        else if ($mjd >= 43325 && $mjd < 43356) { // measured:  1977  7  1  48.0348 -  1977  8  1  48.0942
          return 48.0348;
        }
        else if ($mjd >= 43356 && $mjd < 43387) { // measured:  1977  8  1  48.0942 -  1977  9  1  48.1608
          return 48.0942;
        }
        else if ($mjd >= 43387 && $mjd < 43417) { // measured:  1977  9  1  48.1608 -  1977 10  1  48.2460
          return 48.1608;
        }
        else if ($mjd >= 43417 && $mjd < 43448) { // measured:  1977 10  1  48.2460 -  1977 11  1  48.3439
          return 48.2460;
        }
        else if ($mjd >= 43448 && $mjd < 43478) { // measured:  1977 11  1  48.3439 -  1977 12  1  48.4355
          return 48.3439;
        }
        else if ($mjd >= 43478 && $mjd < 43509) { // measured:  1977 12  1  48.4355 -  1978  1  1  48.5344
          return 48.4355;
        }
        else if ($mjd >= 43509 && $mjd < 43540) { // measured:  1978  1  1  48.5344 -  1978  2  1  48.6325
          return 48.5344;
        }
        else if ($mjd >= 43540 && $mjd < 43568) { // measured:  1978  2  1  48.6325 -  1978  3  1  48.7294
          return 48.6325;
        }
        else if ($mjd >= 43568 && $mjd < 43599) { // measured:  1978  3  1  48.7294 -  1978  4  1  48.8365
          return 48.7294;
        }
        else if ($mjd >= 43599 && $mjd < 43629) { // measured:  1978  4  1  48.8365 -  1978  5  1  48.9353
          return 48.8365;
        }
        else if ($mjd >= 43629 && $mjd < 43660) { // measured:  1978  5  1  48.9353 -  1978  6  1  49.0319
          return 48.9353;
        }
        else if ($mjd >= 43660 && $mjd < 43690) { // measured:  1978  6  1  49.0319 -  1978  7  1  49.1013
          return 49.0319;
        }
        else if ($mjd >= 43690 && $mjd < 43721) { // measured:  1978  7  1  49.1013 -  1978  8  1  49.1591
          return 49.1013;
        }
        else if ($mjd >= 43721 && $mjd < 43752) { // measured:  1978  8  1  49.1591 -  1978  9  1  49.2286
          return 49.1591;
        }
        else if ($mjd >= 43752 && $mjd < 43782) { // measured:  1978  9  1  49.2286 -  1978 10  1  49.3070
          return 49.2286;
        }
        else if ($mjd >= 43782 && $mjd < 43813) { // measured:  1978 10  1  49.3070 -  1978 11  1  49.4018
          return 49.3070;
        }
        else if ($mjd >= 43813 && $mjd < 43843) { // measured:  1978 11  1  49.4018 -  1978 12  1  49.4945
          return 49.4018;
        }
        else if ($mjd >= 43843 && $mjd < 43874) { // measured:  1978 12  1  49.4945 -  1979  1  1  49.5861
          return 49.4945;
        }
        else if ($mjd >= 43874 && $mjd < 43905) { // measured:  1979  1  1  49.5861 -  1979  2  1  49.6805
          return 49.5861;
        }
        else if ($mjd >= 43905 && $mjd < 43933) { // measured:  1979  2  1  49.6805 -  1979  3  1  49.7602
          return 49.6805;
        }
        else if ($mjd >= 43933 && $mjd < 43964) { // measured:  1979  3  1  49.7602 -  1979  4  1  49.8556
          return 49.7602;
        }
        else if ($mjd >= 43964 && $mjd < 43994) { // measured:  1979  4  1  49.8556 -  1979  5  1  49.9489
          return 49.8556;
        }
        else if ($mjd >= 43994 && $mjd < 44025) { // measured:  1979  5  1  49.9489 -  1979  6  1  50.0347
          return 49.9489;
        }
        else if ($mjd >= 44025 && $mjd < 44055) { // measured:  1979  6  1  50.0347 -  1979  7  1  50.1019
          return 50.0347;
        }
        else if ($mjd >= 44055 && $mjd < 44086) { // measured:  1979  7  1  50.1019 -  1979  8  1  50.1622
          return 50.1019;
        }
        else if ($mjd >= 44086 && $mjd < 44117) { // measured:  1979  8  1  50.1622 -  1979  9  1  50.2260
          return 50.1622;
        }
        else if ($mjd >= 44117 && $mjd < 44147) { // measured:  1979  9  1  50.2260 -  1979 10  1  50.2968
          return 50.2260;
        }
        else if ($mjd >= 44147 && $mjd < 44178) { // measured:  1979 10  1  50.2968 -  1979 11  1  50.3831
          return 50.2968;
        }
        else if ($mjd >= 44178 && $mjd < 44208) { // measured:  1979 11  1  50.3831 -  1979 12  1  50.4599
          return 50.3831;
        }
        else if ($mjd >= 44208 && $mjd < 44239) { // measured:  1979 12  1  50.4599 -  1980  1  1  50.5387
          return 50.4599;
        }
        else if ($mjd >= 44239 && $mjd < 44270) { // measured:  1980  1  1  50.5387 -  1980  2  1  50.6160
          return 50.5387;
        }
        else if ($mjd >= 44270 && $mjd < 44299) { // measured:  1980  2  1  50.6160 -  1980  3  1  50.6866
          return 50.6160;
        }
        else if ($mjd >= 44299 && $mjd < 44330) { // measured:  1980  3  1  50.6866 -  1980  4  1  50.7658
          return 50.6866;
        }
        else if ($mjd >= 44330 && $mjd < 44360) { // measured:  1980  4  1  50.7658 -  1980  5  1  50.8454
          return 50.7658;
        }
        else if ($mjd >= 44360 && $mjd < 44391) { // measured:  1980  5  1  50.8454 -  1980  6  1  50.9187
          return 50.8454;
        }
        else if ($mjd >= 44391 && $mjd < 44421) { // measured:  1980  6  1  50.9187 -  1980  7  1  50.9761
          return 50.9187;
        }
        else if ($mjd >= 44421 && $mjd < 44452) { // measured:  1980  7  1  50.9761 -  1980  8  1  51.0278
          return 50.9761;
        }
        else if ($mjd >= 44452 && $mjd < 44483) { // measured:  1980  8  1  51.0278 -  1980  9  1  51.0843
          return 51.0278;
        }
        else if ($mjd >= 44483 && $mjd < 44513) { // measured:  1980  9  1  51.0843 -  1980 10  1  51.1538
          return 51.0843;
        }
        else if ($mjd >= 44513 && $mjd < 44544) { // measured:  1980 10  1  51.1538 -  1980 11  1  51.2319
          return 51.1538;
        }
        else if ($mjd >= 44544 && $mjd < 44574) { // measured:  1980 11  1  51.2319 -  1980 12  1  51.3063
          return 51.2319;
        }
        else if ($mjd >= 44574 && $mjd < 44605) { // measured:  1980 12  1  51.3063 -  1981  1  1  51.3808
          return 51.3063;
        }
        else if ($mjd >= 44605 && $mjd < 44636) { // measured:  1981  1  1  51.3808 -  1981  2  1  51.4526
          return 51.3808;
        }
        else if ($mjd >= 44636 && $mjd < 44664) { // measured:  1981  2  1  51.4526 -  1981  3  1  51.5160
          return 51.4526;
        }
        else if ($mjd >= 44664 && $mjd < 44695) { // measured:  1981  3  1  51.5160 -  1981  4  1  51.5985
          return 51.5160;
        }
        else if ($mjd >= 44695 && $mjd < 44725) { // measured:  1981  4  1  51.5985 -  1981  5  1  51.6809
          return 51.5985;
        }
        else if ($mjd >= 44725 && $mjd < 44756) { // measured:  1981  5  1  51.6809 -  1981  6  1  51.7573
          return 51.6809;
        }
        else if ($mjd >= 44756 && $mjd < 44786) { // measured:  1981  6  1  51.7573 -  1981  7  1  51.8133
          return 51.7573;
        }
        else if ($mjd >= 44786 && $mjd < 44817) { // measured:  1981  7  1  51.8133 -  1981  8  1  51.8532
          return 51.8133;
        }
        else if ($mjd >= 44817 && $mjd < 44848) { // measured:  1981  8  1  51.8532 -  1981  9  1  51.9014
          return 51.8532;
        }
        else if ($mjd >= 44848 && $mjd < 44878) { // measured:  1981  9  1  51.9014 -  1981 10  1  51.9603
          return 51.9014;
        }
        else if ($mjd >= 44878 && $mjd < 44909) { // measured:  1981 10  1  51.9603 -  1981 11  1  52.0328
          return 51.9603;
        }
        else if ($mjd >= 44909 && $mjd < 44939) { // measured:  1981 11  1  52.0328 -  1981 12  1  52.0985
          return 52.0328;
        }
        else if ($mjd >= 44939 && $mjd < 44970) { // measured:  1981 12  1  52.0985 -  1982  1  1  52.1668
          return 52.0985;
        }
        else if ($mjd >= 44970 && $mjd < 45001) { // measured:  1982  1  1  52.1668 -  1982  2  1  52.2316
          return 52.1668;
        }
        else if ($mjd >= 45001 && $mjd < 45029) { // measured:  1982  2  1  52.2316 -  1982  3  1  52.2938
          return 52.2316;
        }
        else if ($mjd >= 45029 && $mjd < 45060) { // measured:  1982  3  1  52.2938 -  1982  4  1  52.3680
          return 52.2938;
        }
        else if ($mjd >= 45060 && $mjd < 45090) { // measured:  1982  4  1  52.3680 -  1982  5  1  52.4465
          return 52.3680;
        }
        else if ($mjd >= 45090 && $mjd < 45121) { // measured:  1982  5  1  52.4465 -  1982  6  1  52.5180
          return 52.4465;
        }
        else if ($mjd >= 45121 && $mjd < 45151) { // measured:  1982  6  1  52.5180 -  1982  7  1  52.5751
          return 52.5180;
        }
        else if ($mjd >= 45151 && $mjd < 45182) { // measured:  1982  7  1  52.5751 -  1982  8  1  52.6178
          return 52.5751;
        }
        else if ($mjd >= 45182 && $mjd < 45213) { // measured:  1982  8  1  52.6178 -  1982  9  1  52.6668
          return 52.6178;
        }
        else if ($mjd >= 45213 && $mjd < 45243) { // measured:  1982  9  1  52.6668 -  1982 10  1  52.7340
          return 52.6668;
        }
        else if ($mjd >= 45243 && $mjd < 45274) { // measured:  1982 10  1  52.7340 -  1982 11  1  52.8056
          return 52.7340;
        }
        else if ($mjd >= 45274 && $mjd < 45304) { // measured:  1982 11  1  52.8056 -  1982 12  1  52.8792
          return 52.8056;
        }
        else if ($mjd >= 45304 && $mjd < 45335) { // measured:  1982 12  1  52.8792 -  1983  1  1  52.9565
          return 52.8792;
        }
        else if ($mjd >= 45335 && $mjd < 45366) { // measured:  1983  1  1  52.9565 -  1983  2  1  53.0445
          return 52.9565;
        }
        else if ($mjd >= 45366 && $mjd < 45394) { // measured:  1983  2  1  53.0445 -  1983  3  1  53.1268
          return 53.0445;
        }
        else if ($mjd >= 45394 && $mjd < 45425) { // measured:  1983  3  1  53.1268 -  1983  4  1  53.2197
          return 53.1268;
        }
        else if ($mjd >= 45425 && $mjd < 45455) { // measured:  1983  4  1  53.2197 -  1983  5  1  53.3024
          return 53.2197;
        }
        else if ($mjd >= 45455 && $mjd < 45486) { // measured:  1983  5  1  53.3024 -  1983  6  1  53.3747
          return 53.3024;
        }
        else if ($mjd >= 45486 && $mjd < 45516) { // measured:  1983  6  1  53.3747 -  1983  7  1  53.4335
          return 53.3747;
        }
        else if ($mjd >= 45516 && $mjd < 45547) { // measured:  1983  7  1  53.4335 -  1983  8  1  53.4778
          return 53.4335;
        }
        else if ($mjd >= 45547 && $mjd < 45578) { // measured:  1983  8  1  53.4778 -  1983  9  1  53.5300
          return 53.4778;
        }
        else if ($mjd >= 45578 && $mjd < 45608) { // measured:  1983  9  1  53.5300 -  1983 10  1  53.5845
          return 53.5300;
        }
        else if ($mjd >= 45608 && $mjd < 45639) { // measured:  1983 10  1  53.5845 -  1983 11  1  53.6523
          return 53.5845;
        }
        else if ($mjd >= 45639 && $mjd < 45669) { // measured:  1983 11  1  53.6523 -  1983 12  1  53.7256
          return 53.6523;
        }
        else if ($mjd >= 45669 && $mjd < 45700) { // measured:  1983 12  1  53.7256 -  1984  1  1  53.7882
          return 53.7256;
        }
        else if ($mjd >= 45700 && $mjd < 45731) { // measured:  1984  1  1  53.7882 -  1984  2  1  53.8367
          return 53.7882;
        }
        else if ($mjd >= 45731 && $mjd < 45760) { // measured:  1984  2  1  53.8367 -  1984  3  1  53.8830
          return 53.8367;
        }
        else if ($mjd >= 45760 && $mjd < 45791) { // measured:  1984  3  1  53.8830 -  1984  4  1  53.9443
          return 53.8830;
        }
        else if ($mjd >= 45791 && $mjd < 45821) { // measured:  1984  4  1  53.9443 -  1984  5  1  54.0042
          return 53.9443;
        }
        else if ($mjd >= 45821 && $mjd < 45852) { // measured:  1984  5  1  54.0042 -  1984  6  1  54.0536
          return 54.0042;
        }
        else if ($mjd >= 45852 && $mjd < 45882) { // measured:  1984  6  1  54.0536 -  1984  7  1  54.0856
          return 54.0536;
        }
        else if ($mjd >= 45882 && $mjd < 45913) { // measured:  1984  7  1  54.0856 -  1984  8  1  54.1084
          return 54.0856;
        }
        else if ($mjd >= 45913 && $mjd < 45944) { // measured:  1984  8  1  54.1084 -  1984  9  1  54.1463
          return 54.1084;
        }
        else if ($mjd >= 45944 && $mjd < 45974) { // measured:  1984  9  1  54.1463 -  1984 10  1  54.1914
          return 54.1463;
        }
        else if ($mjd >= 45974 && $mjd < 46005) { // measured:  1984 10  1  54.1914 -  1984 11  1  54.2452
          return 54.1914;
        }
        else if ($mjd >= 46005 && $mjd < 46035) { // measured:  1984 11  1  54.2452 -  1984 12  1  54.2958
          return 54.2452;
        }
        else if ($mjd >= 46035 && $mjd < 46066) { // measured:  1984 12  1  54.2958 -  1985  1  1  54.3427
          return 54.2958;
        }
        else if ($mjd >= 46066 && $mjd < 46097) { // measured:  1985  1  1  54.3427 -  1985  2  1  54.3911
          return 54.3427;
        }
        else if ($mjd >= 46097 && $mjd < 46125) { // measured:  1985  2  1  54.3911 -  1985  3  1  54.4320
          return 54.3911;
        }
        else if ($mjd >= 46125 && $mjd < 46156) { // measured:  1985  3  1  54.4320 -  1985  4  1  54.4898
          return 54.4320;
        }
        else if ($mjd >= 46156 && $mjd < 46186) { // measured:  1985  4  1  54.4898 -  1985  5  1  54.5456
          return 54.4898;
        }
        else if ($mjd >= 46186 && $mjd < 46217) { // measured:  1985  5  1  54.5456 -  1985  6  1  54.5977
          return 54.5456;
        }
        else if ($mjd >= 46217 && $mjd < 46247) { // measured:  1985  6  1  54.5977 -  1985  7  1  54.6355
          return 54.5977;
        }
        else if ($mjd >= 46247 && $mjd < 46278) { // measured:  1985  7  1  54.6355 -  1985  8  1  54.6532
          return 54.6355;
        }
        else if ($mjd >= 46278 && $mjd < 46309) { // measured:  1985  8  1  54.6532 -  1985  9  1  54.6776
          return 54.6532;
        }
        else if ($mjd >= 46309 && $mjd < 46339) { // measured:  1985  9  1  54.6776 -  1985 10  1  54.7174
          return 54.6776;
        }
        else if ($mjd >= 46339 && $mjd < 46370) { // measured:  1985 10  1  54.7174 -  1985 11  1  54.7741
          return 54.7174;
        }
        else if ($mjd >= 46370 && $mjd < 46400) { // measured:  1985 11  1  54.7741 -  1985 12  1  54.8253
          return 54.7741;
        }
        else if ($mjd >= 46400 && $mjd < 46431) { // measured:  1985 12  1  54.8253 -  1986  1  1  54.8713
          return 54.8253;
        }
        else if ($mjd >= 46431 && $mjd < 46462) { // measured:  1986  1  1  54.8713 -  1986  2  1  54.9161
          return 54.8713;
        }
        else if ($mjd >= 46462 && $mjd < 46490) { // measured:  1986  2  1  54.9161 -  1986  3  1  54.9581
          return 54.9161;
        }
        else if ($mjd >= 46490 && $mjd < 46521) { // measured:  1986  3  1  54.9581 -  1986  4  1  54.9997
          return 54.9581;
        }
        else if ($mjd >= 46521 && $mjd < 46551) { // measured:  1986  4  1  54.9997 -  1986  5  1  55.0476
          return 54.9997;
        }
        else if ($mjd >= 46551 && $mjd < 46582) { // measured:  1986  5  1  55.0476 -  1986  6  1  55.0912
          return 55.0476;
        }
        else if ($mjd >= 46582 && $mjd < 46612) { // measured:  1986  6  1  55.0912 -  1986  7  1  55.1132
          return 55.0912;
        }
        else if ($mjd >= 46612 && $mjd < 46643) { // measured:  1986  7  1  55.1132 -  1986  8  1  55.1328
          return 55.1132;
        }
        else if ($mjd >= 46643 && $mjd < 46674) { // measured:  1986  8  1  55.1328 -  1986  9  1  55.1532
          return 55.1328;
        }
        else if ($mjd >= 46674 && $mjd < 46704) { // measured:  1986  9  1  55.1532 -  1986 10  1  55.1898
          return 55.1532;
        }
        else if ($mjd >= 46704 && $mjd < 46735) { // measured:  1986 10  1  55.1898 -  1986 11  1  55.2416
          return 55.1898;
        }
        else if ($mjd >= 46735 && $mjd < 46765) { // measured:  1986 11  1  55.2416 -  1986 12  1  55.2838
          return 55.2416;
        }
        else if ($mjd >= 46765 && $mjd < 46796) { // measured:  1986 12  1  55.2838 -  1987  1  1  55.3222
          return 55.2838;
        }
        else if ($mjd >= 46796 && $mjd < 46827) { // measured:  1987  1  1  55.3222 -  1987  2  1  55.3613
          return 55.3222;
        }
        else if ($mjd >= 46827 && $mjd < 46855) { // measured:  1987  2  1  55.3613 -  1987  3  1  55.4063
          return 55.3613;
        }
        else if ($mjd >= 46855 && $mjd < 46886) { // measured:  1987  3  1  55.4063 -  1987  4  1  55.4629
          return 55.4063;
        }
        else if ($mjd >= 46886 && $mjd < 46916) { // measured:  1987  4  1  55.4629 -  1987  5  1  55.5111
          return 55.4629;
        }
        else if ($mjd >= 46916 && $mjd < 46947) { // measured:  1987  5  1  55.5111 -  1987  6  1  55.5524
          return 55.5111;
        }
        else if ($mjd >= 46947 && $mjd < 46977) { // measured:  1987  6  1  55.5524 -  1987  7  1  55.5812
          return 55.5524;
        }
        else if ($mjd >= 46977 && $mjd < 47008) { // measured:  1987  7  1  55.5812 -  1987  8  1  55.6004
          return 55.5812;
        }
        else if ($mjd >= 47008 && $mjd < 47039) { // measured:  1987  8  1  55.6004 -  1987  9  1  55.6262
          return 55.6004;
        }
        else if ($mjd >= 47039 && $mjd < 47069) { // measured:  1987  9  1  55.6262 -  1987 10  1  55.6656
          return 55.6262;
        }
        else if ($mjd >= 47069 && $mjd < 47100) { // measured:  1987 10  1  55.6656 -  1987 11  1  55.7168
          return 55.6656;
        }
        else if ($mjd >= 47100 && $mjd < 47130) { // measured:  1987 11  1  55.7168 -  1987 12  1  55.7698
          return 55.7168;
        }
        else if ($mjd >= 47130 && $mjd < 47161) { // measured:  1987 12  1  55.7698 -  1988  1  1  55.8197
          return 55.7698;
        }
        else if ($mjd >= 47161 && $mjd < 47192) { // measured:  1988  1  1  55.8197 -  1988  2  1  55.8615
          return 55.8197;
        }
        else if ($mjd >= 47192 && $mjd < 47221) { // measured:  1988  2  1  55.8615 -  1988  3  1  55.9130
          return 55.8615;
        }
        else if ($mjd >= 47221 && $mjd < 47252) { // measured:  1988  3  1  55.9130 -  1988  4  1  55.9663
          return 55.9130;
        }
        else if ($mjd >= 47252 && $mjd < 47282) { // measured:  1988  4  1  55.9663 -  1988  5  1  56.0220
          return 55.9663;
        }
        else if ($mjd >= 47282 && $mjd < 47313) { // measured:  1988  5  1  56.0220 -  1988  6  1  56.0700
          return 56.0220;
        }
        else if ($mjd >= 47313 && $mjd < 47343) { // measured:  1988  6  1  56.0700 -  1988  7  1  56.0939
          return 56.0700;
        }
        else if ($mjd >= 47343 && $mjd < 47374) { // measured:  1988  7  1  56.0939 -  1988  8  1  56.1105
          return 56.0939;
        }
        else if ($mjd >= 47374 && $mjd < 47405) { // measured:  1988  8  1  56.1105 -  1988  9  1  56.1314
          return 56.1105;
        }
        else if ($mjd >= 47405 && $mjd < 47435) { // measured:  1988  9  1  56.1314 -  1988 10  1  56.1611
          return 56.1314;
        }
        else if ($mjd >= 47435 && $mjd < 47466) { // measured:  1988 10  1  56.1611 -  1988 11  1  56.2068
          return 56.1611;
        }
        else if ($mjd >= 47466 && $mjd < 47496) { // measured:  1988 11  1  56.2068 -  1988 12  1  56.2583
          return 56.2068;
        }
        else if ($mjd >= 47496 && $mjd < 47527) { // measured:  1988 12  1  56.2583 -  1989  1  1  56.3000
          return 56.2583;
        }
        else if ($mjd >= 47527 && $mjd < 47558) { // measured:  1989  1  1  56.3000 -  1989  2  1  56.3399
          return 56.3000;
        }
        else if ($mjd >= 47558 && $mjd < 47586) { // measured:  1989  2  1  56.3399 -  1989  3  1  56.3790
          return 56.3399;
        }
        else if ($mjd >= 47586 && $mjd < 47617) { // measured:  1989  3  1  56.3790 -  1989  4  1  56.4283
          return 56.3790;
        }
        else if ($mjd >= 47617 && $mjd < 47647) { // measured:  1989  4  1  56.4283 -  1989  5  1  56.4804
          return 56.4283;
        }
        else if ($mjd >= 47647 && $mjd < 47678) { // measured:  1989  5  1  56.4804 -  1989  6  1  56.5352
          return 56.4804;
        }
        else if ($mjd >= 47678 && $mjd < 47708) { // measured:  1989  6  1  56.5352 -  1989  7  1  56.5697
          return 56.5352;
        }
        else if ($mjd >= 47708 && $mjd < 47739) { // measured:  1989  7  1  56.5697 -  1989  8  1  56.5983
          return 56.5697;
        }
        else if ($mjd >= 47739 && $mjd < 47770) { // measured:  1989  8  1  56.5983 -  1989  9  1  56.6328
          return 56.5983;
        }
        else if ($mjd >= 47770 && $mjd < 47800) { // measured:  1989  9  1  56.6328 -  1989 10  1  56.6739
          return 56.6328;
        }
        else if ($mjd >= 47800 && $mjd < 47831) { // measured:  1989 10  1  56.6739 -  1989 11  1  56.7332
          return 56.6739;
        }
        else if ($mjd >= 47831 && $mjd < 47861) { // measured:  1989 11  1  56.7332 -  1989 12  1  56.7972
          return 56.7332;
        }
        else if ($mjd >= 47861 && $mjd < 47892) { // measured:  1989 12  1  56.7972 -  1990  1  1  56.8553
          return 56.7972;
        }
        else if ($mjd >= 47892 && $mjd < 47923) { // measured:  1990  1  1  56.8553 -  1990  2  1  56.9111
          return 56.8553;
        }
        else if ($mjd >= 47923 && $mjd < 47951) { // measured:  1990  2  1  56.9111 -  1990  3  1  56.9755
          return 56.9111;
        }
        else if ($mjd >= 47951 && $mjd < 47982) { // measured:  1990  3  1  56.9755 -  1990  4  1  57.0471
          return 56.9755;
        }
        else if ($mjd >= 47982 && $mjd < 48012) { // measured:  1990  4  1  57.0471 -  1990  5  1  57.1136
          return 57.0471;
        }
        else if ($mjd >= 48012 && $mjd < 48043) { // measured:  1990  5  1  57.1136 -  1990  6  1  57.1738
          return 57.1136;
        }
        else if ($mjd >= 48043 && $mjd < 48073) { // measured:  1990  6  1  57.1738 -  1990  7  1  57.2226
          return 57.1738;
        }
        else if ($mjd >= 48073 && $mjd < 48104) { // measured:  1990  7  1  57.2226 -  1990  8  1  57.2597
          return 57.2226;
        }
        else if ($mjd >= 48104 && $mjd < 48135) { // measured:  1990  8  1  57.2597 -  1990  9  1  57.3073
          return 57.2597;
        }
        else if ($mjd >= 48135 && $mjd < 48165) { // measured:  1990  9  1  57.3073 -  1990 10  1  57.3643
          return 57.3073;
        }
        else if ($mjd >= 48165 && $mjd < 48196) { // measured:  1990 10  1  57.3643 -  1990 11  1  57.4334
          return 57.3643;
        }
        else if ($mjd >= 48196 && $mjd < 48226) { // measured:  1990 11  1  57.4334 -  1990 12  1  57.5016
          return 57.4334;
        }
        else if ($mjd >= 48226 && $mjd < 48257) { // measured:  1990 12  1  57.5016 -  1991  1  1  57.5653
          return 57.5016;
        }
        else if ($mjd >= 48257 && $mjd < 48288) { // measured:  1991  1  1  57.5653 -  1991  2  1  57.6333
          return 57.5653;
        }
        else if ($mjd >= 48288 && $mjd < 48316) { // measured:  1991  2  1  57.6333 -  1991  3  1  57.6973
          return 57.6333;
        }
        else if ($mjd >= 48316 && $mjd < 48347) { // measured:  1991  3  1  57.6973 -  1991  4  1  57.7711
          return 57.6973;
        }
        else if ($mjd >= 48347 && $mjd < 48377) { // measured:  1991  4  1  57.7711 -  1991  5  1  57.8407
          return 57.7711;
        }
        else if ($mjd >= 48377 && $mjd < 48408) { // measured:  1991  5  1  57.8407 -  1991  6  1  57.9058
          return 57.8407;
        }
        else if ($mjd >= 48408 && $mjd < 48438) { // measured:  1991  6  1  57.9058 -  1991  7  1  57.9576
          return 57.9058;
        }
        else if ($mjd >= 48438 && $mjd < 48469) { // measured:  1991  7  1  57.9576 -  1991  8  1  57.9975
          return 57.9576;
        }
        else if ($mjd >= 48469 && $mjd < 48500) { // measured:  1991  8  1  57.9975 -  1991  9  1  58.0426
          return 57.9975;
        }
        else if ($mjd >= 48500 && $mjd < 48530) { // measured:  1991  9  1  58.0426 -  1991 10  1  58.1043
          return 58.0426;
        }
        else if ($mjd >= 48530 && $mjd < 48561) { // measured:  1991 10  1  58.1043 -  1991 11  1  58.1679
          return 58.1043;
        }
        else if ($mjd >= 48561 && $mjd < 48591) { // measured:  1991 11  1  58.1679 -  1991 12  1  58.2389
          return 58.1679;
        }
        else if ($mjd >= 48591 && $mjd < 48622) { // measured:  1991 12  1  58.2389 -  1992  1  1  58.3092
          return 58.2389;
        }
        else if ($mjd >= 48622 && $mjd < 48653) { // measured:  1992  1  1  58.3092 -  1992  2  1  58.3833
          return 58.3092;
        }
        else if ($mjd >= 48653 && $mjd < 48682) { // measured:  1992  2  1  58.3833 -  1992  3  1  58.4537
          return 58.3833;
        }
        else if ($mjd >= 48682 && $mjd < 48713) { // measured:  1992  3  1  58.4537 -  1992  4  1  58.5401
          return 58.4537;
        }
        else if ($mjd >= 48713 && $mjd < 48743) { // measured:  1992  4  1  58.5401 -  1992  5  1  58.6228
          return 58.5401;
        }
        else if ($mjd >= 48743 && $mjd < 48774) { // measured:  1992  5  1  58.6228 -  1992  6  1  58.6917
          return 58.6228;
        }
        else if ($mjd >= 48774 && $mjd < 48804) { // measured:  1992  6  1  58.6917 -  1992  7  1  58.7410
          return 58.6917;
        }
        else if ($mjd >= 48804 && $mjd < 48835) { // measured:  1992  7  1  58.7410 -  1992  8  1  58.7836
          return 58.7410;
        }
        else if ($mjd >= 48835 && $mjd < 48866) { // measured:  1992  8  1  58.7836 -  1992  9  1  58.8406
          return 58.7836;
        }
        else if ($mjd >= 48866 && $mjd < 48896) { // measured:  1992  9  1  58.8406 -  1992 10  1  58.8986
          return 58.8406;
        }
        else if ($mjd >= 48896 && $mjd < 48927) { // measured:  1992 10  1  58.8986 -  1992 11  1  58.9714
          return 58.8986;
        }
        else if ($mjd >= 48927 && $mjd < 48957) { // measured:  1992 11  1  58.9714 -  1992 12  1  59.0438
          return 58.9714;
        }
        else if ($mjd >= 48957 && $mjd < 48988) { // measured:  1992 12  1  59.0438 -  1993  1  1  59.1218
          return 59.0438;
        }
        else if ($mjd >= 48988 && $mjd < 49019) { // measured:  1993  1  1  59.1218 -  1993  2  1  59.2003
          return 59.1218;
        }
        else if ($mjd >= 49019 && $mjd < 49047) { // measured:  1993  2  1  59.2003 -  1993  3  1  59.2747
          return 59.2003;
        }
        else if ($mjd >= 49047 && $mjd < 49078) { // measured:  1993  3  1  59.2747 -  1993  4  1  59.3574
          return 59.2747;
        }
        else if ($mjd >= 49078 && $mjd < 49108) { // measured:  1993  4  1  59.3574 -  1993  5  1  59.4434
          return 59.3574;
        }
        else if ($mjd >= 49108 && $mjd < 49139) { // measured:  1993  5  1  59.4434 -  1993  6  1  59.5242
          return 59.4434;
        }
        else if ($mjd >= 49139 && $mjd < 49169) { // measured:  1993  6  1  59.5242 -  1993  7  1  59.5850
          return 59.5242;
        }
        else if ($mjd >= 49169 && $mjd < 49200) { // measured:  1993  7  1  59.5850 -  1993  8  1  59.6343
          return 59.5850;
        }
        else if ($mjd >= 49200 && $mjd < 49231) { // measured:  1993  8  1  59.6343 -  1993  9  1  59.6928
          return 59.6343;
        }
        else if ($mjd >= 49231 && $mjd < 49261) { // measured:  1993  9  1  59.6928 -  1993 10  1  59.7588
          return 59.6928;
        }
        else if ($mjd >= 49261 && $mjd < 49292) { // measured:  1993 10  1  59.7588 -  1993 11  1  59.8386
          return 59.7588;
        }
        else if ($mjd >= 49292 && $mjd < 49322) { // measured:  1993 11  1  59.8386 -  1993 12  1  59.9111
          return 59.8386;
        }
        else if ($mjd >= 49322 && $mjd < 49353) { // measured:  1993 12  1  59.9111 -  1994  1  1  59.9845
          return 59.9111;
        }
        else if ($mjd >= 49353 && $mjd < 49384) { // measured:  1994  1  1  59.9845 -  1994  2  1  60.0564
          return 59.9845;
        }
        else if ($mjd >= 49384 && $mjd < 49412) { // measured:  1994  2  1  60.0564 -  1994  3  1  60.1231
          return 60.0564;
        }
        else if ($mjd >= 49412 && $mjd < 49443) { // measured:  1994  3  1  60.1231 -  1994  4  1  60.2042
          return 60.1231;
        }
        else if ($mjd >= 49443 && $mjd < 49473) { // measured:  1994  4  1  60.2042 -  1994  5  1  60.2804
          return 60.2042;
        }
        else if ($mjd >= 49473 && $mjd < 49504) { // measured:  1994  5  1  60.2804 -  1994  6  1  60.3530
          return 60.2804;
        }
        else if ($mjd >= 49504 && $mjd < 49534) { // measured:  1994  6  1  60.3530 -  1994  7  1  60.4012
          return 60.3530;
        }
        else if ($mjd >= 49534 && $mjd < 49565) { // measured:  1994  7  1  60.4012 -  1994  8  1  60.4440
          return 60.4012;
        }
        else if ($mjd >= 49565 && $mjd < 49596) { // measured:  1994  8  1  60.4440 -  1994  9  1  60.4900
          return 60.4440;
        }
        else if ($mjd >= 49596 && $mjd < 49626) { // measured:  1994  9  1  60.4900 -  1994 10  1  60.5578
          return 60.4900;
        }
        else if ($mjd >= 49626 && $mjd < 49657) { // measured:  1994 10  1  60.5578 -  1994 11  1  60.6324
          return 60.5578;
        }
        else if ($mjd >= 49657 && $mjd < 49687) { // measured:  1994 11  1  60.6324 -  1994 12  1  60.7059
          return 60.6324;
        }
        else if ($mjd >= 49687 && $mjd < 49718) { // measured:  1994 12  1  60.7059 -  1995  1  1  60.7853
          return 60.7059;
        }
        else if ($mjd >= 49718 && $mjd < 49749) { // measured:  1995  1  1  60.7853 -  1995  2  1  60.8664
          return 60.7853;
        }
        else if ($mjd >= 49749 && $mjd < 49777) { // measured:  1995  2  1  60.8664 -  1995  3  1  60.9387
          return 60.8664;
        }
        else if ($mjd >= 49777 && $mjd < 49808) { // measured:  1995  3  1  60.9387 -  1995  4  1  61.0277
          return 60.9387;
        }
        else if ($mjd >= 49808 && $mjd < 49838) { // measured:  1995  4  1  61.0277 -  1995  5  1  61.1103
          return 61.0277;
        }
        else if ($mjd >= 49838 && $mjd < 49869) { // measured:  1995  5  1  61.1103 -  1995  6  1  61.1870
          return 61.1103;
        }
        else if ($mjd >= 49869 && $mjd < 49899) { // measured:  1995  6  1  61.1870 -  1995  7  1  61.2454
          return 61.1870;
        }
        else if ($mjd >= 49899 && $mjd < 49930) { // measured:  1995  7  1  61.2454 -  1995  8  1  61.2881
          return 61.2454;
        }
        else if ($mjd >= 49930 && $mjd < 49961) { // measured:  1995  8  1  61.2881 -  1995  9  1  61.3378
          return 61.2881;
        }
        else if ($mjd >= 49961 && $mjd < 49991) { // measured:  1995  9  1  61.3378 -  1995 10  1  61.4036
          return 61.3378;
        }
        else if ($mjd >= 49991 && $mjd < 50022) { // measured:  1995 10  1  61.4036 -  1995 11  1  61.4760
          return 61.4036;
        }
        else if ($mjd >= 50022 && $mjd < 50052) { // measured:  1995 11  1  61.4760 -  1995 12  1  61.5525
          return 61.4760;
        }
        else if ($mjd >= 50052 && $mjd < 50083) { // measured:  1995 12  1  61.5525 -  1996  1  1  61.6287
          return 61.5525;
        }
        else if ($mjd >= 50083 && $mjd < 50114) { // measured:  1996  1  1  61.6287 -  1996  2  1  61.6846
          return 61.6287;
        }
        else if ($mjd >= 50114 && $mjd < 50143) { // measured:  1996  2  1  61.6846 -  1996  3  1  61.7433
          return 61.6846;
        }
        else if ($mjd >= 50143 && $mjd < 50174) { // measured:  1996  3  1  61.7433 -  1996  4  1  61.8132
          return 61.7433;
        }
        else if ($mjd >= 50174 && $mjd < 50204) { // measured:  1996  4  1  61.8132 -  1996  5  1  61.8823
          return 61.8132;
        }
        else if ($mjd >= 50204 && $mjd < 50235) { // measured:  1996  5  1  61.8823 -  1996  6  1  61.9497
          return 61.8823;
        }
        else if ($mjd >= 50235 && $mjd < 50265) { // measured:  1996  6  1  61.9497 -  1996  7  1  61.9969
          return 61.9497;
        }
        else if ($mjd >= 50265 && $mjd < 50296) { // measured:  1996  7  1  61.9969 -  1996  8  1  62.0343
          return 61.9969;
        }
        else if ($mjd >= 50296 && $mjd < 50327) { // measured:  1996  8  1  62.0343 -  1996  9  1  62.0714
          return 62.0343;
        }
        else if ($mjd >= 50327 && $mjd < 50357) { // measured:  1996  9  1  62.0714 -  1996 10  1  62.1202
          return 62.0714;
        }
        else if ($mjd >= 50357 && $mjd < 50388) { // measured:  1996 10  1  62.1202 -  1996 11  1  62.1810
          return 62.1202;
        }
        else if ($mjd >= 50388 && $mjd < 50418) { // measured:  1996 11  1  62.1810 -  1996 12  1  62.2382
          return 62.1810;
        }
        else if ($mjd >= 50418 && $mjd < 50449) { // measured:  1996 12  1  62.2382 -  1997  1  1  62.2950
          return 62.2382;
        }
        else if ($mjd >= 50449 && $mjd < 50480) { // measured:  1997  1  1  62.2950 -  1997  2  1  62.3506
          return 62.2950;
        }
        else if ($mjd >= 50480 && $mjd < 50508) { // measured:  1997  2  1  62.3506 -  1997  3  1  62.3995
          return 62.3506;
        }
        else if ($mjd >= 50508 && $mjd < 50539) { // measured:  1997  3  1  62.3995 -  1997  4  1  62.4754
          return 62.3995;
        }
        else if ($mjd >= 50539 && $mjd < 50569) { // measured:  1997  4  1  62.4754 -  1997  5  1  62.5463
          return 62.4754;
        }
        else if ($mjd >= 50569 && $mjd < 50600) { // measured:  1997  5  1  62.5463 -  1997  6  1  62.6136
          return 62.5463;
        }
        else if ($mjd >= 50600 && $mjd < 50630) { // measured:  1997  6  1  62.6136 -  1997  7  1  62.6571
          return 62.6136;
        }
        else if ($mjd >= 50630 && $mjd < 50661) { // measured:  1997  7  1  62.6571 -  1997  8  1  62.6942
          return 62.6571;
        }
        else if ($mjd >= 50661 && $mjd < 50692) { // measured:  1997  8  1  62.6942 -  1997  9  1  62.7383
          return 62.6942;
        }
        else if ($mjd >= 50692 && $mjd < 50722) { // measured:  1997  9  1  62.7383 -  1997 10  1  62.7926
          return 62.7383;
        }
        else if ($mjd >= 50722 && $mjd < 50753) { // measured:  1997 10  1  62.7926 -  1997 11  1  62.8567
          return 62.7926;
        }
        else if ($mjd >= 50753 && $mjd < 50783) { // measured:  1997 11  1  62.8567 -  1997 12  1  62.9146
          return 62.8567;
        }
        else if ($mjd >= 50783 && $mjd < 50814) { // measured:  1997 12  1  62.9146 -  1998  1  1  62.9659
          return 62.9146;
        }
        else if ($mjd >= 50814 && $mjd < 50845) { // measured:  1998  1  1  62.9659 -  1998  2  1  63.0217
          return 62.9659;
        }
        else if ($mjd >= 50845 && $mjd < 50873) { // measured:  1998  2  1  63.0217 -  1998  3  1  63.0807
          return 63.0217;
        }
        else if ($mjd >= 50873 && $mjd < 50904) { // measured:  1998  3  1  63.0807 -  1998  4  1  63.1462
          return 63.0807;
        }
        else if ($mjd >= 50904 && $mjd < 50934) { // measured:  1998  4  1  63.1462 -  1998  5  1  63.2053
          return 63.1462;
        }
        else if ($mjd >= 50934 && $mjd < 50965) { // measured:  1998  5  1  63.2053 -  1998  6  1  63.2599
          return 63.2053;
        }
        else if ($mjd >= 50965 && $mjd < 50995) { // measured:  1998  6  1  63.2599 -  1998  7  1  63.2844
          return 63.2599;
        }
        else if ($mjd >= 50995 && $mjd < 51026) { // measured:  1998  7  1  63.2844 -  1998  8  1  63.2961
          return 63.2844;
        }
        else if ($mjd >= 51026 && $mjd < 51057) { // measured:  1998  8  1  63.2961 -  1998  9  1  63.3126
          return 63.2961;
        }
        else if ($mjd >= 51057 && $mjd < 51087) { // measured:  1998  9  1  63.3126 -  1998 10  1  63.3422
          return 63.3126;
        }
        else if ($mjd >= 51087 && $mjd < 51118) { // measured:  1998 10  1  63.3422 -  1998 11  1  63.3871
          return 63.3422;
        }
        else if ($mjd >= 51118 && $mjd < 51148) { // measured:  1998 11  1  63.3871 -  1998 12  1  63.4339
          return 63.3871;
        }
        else if ($mjd >= 51148 && $mjd < 51179) { // measured:  1998 12  1  63.4339 -  1999  1  1  63.4673
          return 63.4339;
        }
        else if ($mjd >= 51179 && $mjd < 51210) { // measured:  1999  1  1  63.4673 -  1999  2  1  63.4979
          return 63.4673;
        }
        else if ($mjd >= 51210 && $mjd < 51238) { // measured:  1999  2  1  63.4979 -  1999  3  1  63.5319
          return 63.4979;
        }
        else if ($mjd >= 51238 && $mjd < 51269) { // measured:  1999  3  1  63.5319 -  1999  4  1  63.5679
          return 63.5319;
        }
        else if ($mjd >= 51269 && $mjd < 51299) { // measured:  1999  4  1  63.5679 -  1999  5  1  63.6104
          return 63.5679;
        }
        else if ($mjd >= 51299 && $mjd < 51330) { // measured:  1999  5  1  63.6104 -  1999  6  1  63.6444
          return 63.6104;
        }
        else if ($mjd >= 51330 && $mjd < 51360) { // measured:  1999  6  1  63.6444 -  1999  7  1  63.6642
          return 63.6444;
        }
        else if ($mjd >= 51360 && $mjd < 51391) { // measured:  1999  7  1  63.6642 -  1999  8  1  63.6739
          return 63.6642;
        }
        else if ($mjd >= 51391 && $mjd < 51422) { // measured:  1999  8  1  63.6739 -  1999  9  1  63.6926
          return 63.6739;
        }
        else if ($mjd >= 51422 && $mjd < 51452) { // measured:  1999  9  1  63.6926 -  1999 10  1  63.7147
          return 63.6926;
        }
        else if ($mjd >= 51452 && $mjd < 51483) { // measured:  1999 10  1  63.7147 -  1999 11  1  63.7518
          return 63.7147;
        }
        else if ($mjd >= 51483 && $mjd < 51513) { // measured:  1999 11  1  63.7518 -  1999 12  1  63.7927
          return 63.7518;
        }
        else if ($mjd >= 51513 && $mjd < 51544) { // measured:  1999 12  1  63.7927 -  2000  1  1  63.8285
          return 63.7927;
        }
        else if ($mjd >= 51544 && $mjd < 51575) { // measured:  2000  1  1  63.8285 -  2000  2  1  63.8557
          return 63.8285;
        }
        else if ($mjd >= 51575 && $mjd < 51604) { // measured:  2000  2  1  63.8557 -  2000  3  1  63.8804
          return 63.8557;
        }
        else if ($mjd >= 51604 && $mjd < 51635) { // measured:  2000  3  1  63.8804 -  2000  4  1  63.9075
          return 63.8804;
        }
        else if ($mjd >= 51635 && $mjd < 51665) { // measured:  2000  4  1  63.9075 -  2000  5  1  63.9393
          return 63.9075;
        }
        else if ($mjd >= 51665 && $mjd < 51696) { // measured:  2000  5  1  63.9393 -  2000  6  1  63.9691
          return 63.9393;
        }
        else if ($mjd >= 51696 && $mjd < 51726) { // measured:  2000  6  1  63.9691 -  2000  7  1  63.9799
          return 63.9691;
        }
        else if ($mjd >= 51726 && $mjd < 51757) { // measured:  2000  7  1  63.9799 -  2000  8  1  63.9833
          return 63.9799;
        }
        else if ($mjd >= 51757 && $mjd < 51788) { // measured:  2000  8  1  63.9833 -  2000  9  1  63.9938
          return 63.9833;
        }
        else if ($mjd >= 51788 && $mjd < 51818) { // measured:  2000  9  1  63.9938 -  2000 10  1  64.0093
          return 63.9938;
        }
        else if ($mjd >= 51818 && $mjd < 51849) { // measured:  2000 10  1  64.0093 -  2000 11  1  64.0400
          return 64.0093;
        }
        else if ($mjd >= 51849 && $mjd < 51879) { // measured:  2000 11  1  64.0400 -  2000 12  1  64.0670
          return 64.0400;
        }
        else if ($mjd >= 51879 && $mjd < 51910) { // measured:  2000 12  1  64.0670 -  2001  1  1  64.0908
          return 64.0670;
        }
        else if ($mjd >= 51910 && $mjd < 51941) { // measured:  2001  1  1  64.0908 -  2001  2  1  64.1068
          return 64.0908;
        }
        else if ($mjd >= 51941 && $mjd < 51969) { // measured:  2001  2  1  64.1068 -  2001  3  1  64.1282
          return 64.1068;
        }
        else if ($mjd >= 51969 && $mjd < 52000) { // measured:  2001  3  1  64.1282 -  2001  4  1  64.1584
          return 64.1282;
        }
        else if ($mjd >= 52000 && $mjd < 52030) { // measured:  2001  4  1  64.1584 -  2001  5  1  64.1833
          return 64.1584;
        }
        else if ($mjd >= 52030 && $mjd < 52061) { // measured:  2001  5  1  64.1833 -  2001  6  1  64.2094
          return 64.1833;
        }
        else if ($mjd >= 52061 && $mjd < 52091) { // measured:  2001  6  1  64.2094 -  2001  7  1  64.2117
          return 64.2094;
        }
        else if ($mjd >= 52091 && $mjd < 52122) { // measured:  2001  7  1  64.2117 -  2001  8  1  64.2073
          return 64.2117;
        }
        else if ($mjd >= 52122 && $mjd < 52153) { // measured:  2001  8  1  64.2073 -  2001  9  1  64.2116
          return 64.2073;
        }
        else if ($mjd >= 52153 && $mjd < 52183) { // measured:  2001  9  1  64.2116 -  2001 10  1  64.2223
          return 64.2116;
        }
        else if ($mjd >= 52183 && $mjd < 52214) { // measured:  2001 10  1  64.2223 -  2001 11  1  64.2500
          return 64.2223;
        }
        else if ($mjd >= 52214 && $mjd < 52244) { // measured:  2001 11  1  64.2500 -  2001 12  1  64.2761
          return 64.2500;
        }
        else if ($mjd >= 52244 && $mjd < 52275) { // measured:  2001 12  1  64.2761 -  2002  1  1  64.2998
          return 64.2761;
        }
        else if ($mjd >= 52275 && $mjd < 52306) { // measured:  2002  1  1  64.2998 -  2002  2  1  64.3192
          return 64.2998;
        }
        else if ($mjd >= 52306 && $mjd < 52334) { // measured:  2002  2  1  64.3192 -  2002  3  1  64.3450
          return 64.3192;
        }
        else if ($mjd >= 52334 && $mjd < 52365) { // measured:  2002  3  1  64.3450 -  2002  4  1  64.3735
          return 64.3450;
        }
        else if ($mjd >= 52365 && $mjd < 52395) { // measured:  2002  4  1  64.3735 -  2002  5  1  64.3943
          return 64.3735;
        }
        else if ($mjd >= 52395 && $mjd < 52426) { // measured:  2002  5  1  64.3943 -  2002  6  1  64.4151
          return 64.3943;
        }
        else if ($mjd >= 52426 && $mjd < 52456) { // measured:  2002  6  1  64.4151 -  2002  7  1  64.4132
          return 64.4151;
        }
        else if ($mjd >= 52456 && $mjd < 52487) { // measured:  2002  7  1  64.4132 -  2002  8  1  64.4118
          return 64.4132;
        }
        else if ($mjd >= 52487 && $mjd < 52518) { // measured:  2002  8  1  64.4118 -  2002  9  1  64.4097
          return 64.4118;
        }
        else if ($mjd >= 52518 && $mjd < 52548) { // measured:  2002  9  1  64.4097 -  2002 10  1  64.4168
          return 64.4097;
        }
        else if ($mjd >= 52548 && $mjd < 52579) { // measured:  2002 10  1  64.4168 -  2002 11  1  64.4329
          return 64.4168;
        }
        else if ($mjd >= 52579 && $mjd < 52609) { // measured:  2002 11  1  64.4329 -  2002 12  1  64.4511
          return 64.4329;
        }
        else if ($mjd >= 52609 && $mjd < 52640) { // measured:  2002 12  1  64.4511 -  2003  1  1  64.4734
          return 64.4511;
        }
        else if ($mjd >= 52640 && $mjd < 52671) { // measured:  2003  1  1  64.4734 -  2003  2  1  64.4893
          return 64.4734;
        }
        else if ($mjd >= 52671 && $mjd < 52699) { // measured:  2003  2  1  64.4893 -  2003  3  1  64.5053
          return 64.4893;
        }
        else if ($mjd >= 52699 && $mjd < 52730) { // measured:  2003  3  1  64.5053 -  2003  4  1  64.5269
          return 64.5053;
        }
        else if ($mjd >= 52730 && $mjd < 52760) { // measured:  2003  4  1  64.5269 -  2003  5  1  64.5471
          return 64.5269;
        }
        else if ($mjd >= 52760 && $mjd < 52791) { // measured:  2003  5  1  64.5471 -  2003  6  1  64.5597
          return 64.5471;
        }
        else if ($mjd >= 52791 && $mjd < 52821) { // measured:  2003  6  1  64.5597 -  2003  7  1  64.5512
          return 64.5597;
        }
        else if ($mjd >= 52821 && $mjd < 52852) { // measured:  2003  7  1  64.5512 -  2003  8  1  64.5371
          return 64.5512;
        }
        else if ($mjd >= 52852 && $mjd < 52883) { // measured:  2003  8  1  64.5371 -  2003  9  1  64.5359
          return 64.5371;
        }
        else if ($mjd >= 52883 && $mjd < 52913) { // measured:  2003  9  1  64.5359 -  2003 10  1  64.5415
          return 64.5359;
        }
        else if ($mjd >= 52913 && $mjd < 52944) { // measured:  2003 10  1  64.5415 -  2003 11  1  64.5544
          return 64.5415;
        }
        else if ($mjd >= 52944 && $mjd < 52974) { // measured:  2003 11  1  64.5544 -  2003 12  1  64.5654
          return 64.5544;
        }
        else if ($mjd >= 52974 && $mjd < 53005) { // measured:  2003 12  1  64.5654 -  2004  1  1  64.5736
          return 64.5654;
        }
        else if ($mjd >= 53005 && $mjd < 53036) { // measured:  2004  1  1  64.5736 -  2004  2  1  64.5891
          return 64.5736;
        }
        else if ($mjd >= 53036 && $mjd < 53065) { // measured:  2004  2  1  64.5891 -  2004  3  1  64.6015
          return 64.5891;
        }
        else if ($mjd >= 53065 && $mjd < 53096) { // measured:  2004  3  1  64.6015 -  2004  4  1  64.6176
          return 64.6015;
        }
        else if ($mjd >= 53096 && $mjd < 53126) { // measured:  2004  4  1  64.6176 -  2004  5  1  64.6374
          return 64.6176;
        }
        else if ($mjd >= 53126 && $mjd < 53157) { // measured:  2004  5  1  64.6374 -  2004  6  1  64.6549
          return 64.6374;
        }
        else if ($mjd >= 53157 && $mjd < 53187) { // measured:  2004  6  1  64.6549 -  2004  7  1  64.6530
          return 64.6549;
        }
        else if ($mjd >= 53187 && $mjd < 53218) { // measured:  2004  7  1  64.6530 -  2004  8  1  64.6379
          return 64.6530;
        }
        else if ($mjd >= 53218 && $mjd < 53249) { // measured:  2004  8  1  64.6379 -  2004  9  1  64.6372
          return 64.6379;
        }
        else if ($mjd >= 53249 && $mjd < 53279) { // measured:  2004  9  1  64.6372 -  2004 10  1  64.6400
          return 64.6372;
        }
        else if ($mjd >= 53279 && $mjd < 53310) { // measured:  2004 10  1  64.6400 -  2004 11  1  64.6543
          return 64.6400;
        }
        else if ($mjd >= 53310 && $mjd < 53340) { // measured:  2004 11  1  64.6543 -  2004 12  1  64.6723
          return 64.6543;
        }
        else if ($mjd >= 53340 && $mjd < 53371) { // measured:  2004 12  1  64.6723 -  2005  1  1  64.6876
          return 64.6723;
        }
        else if ($mjd >= 53371 && $mjd < 53402) { // measured:  2005  1  1  64.6876 -  2005  2  1  64.7052
          return 64.6876;
        }
        else if ($mjd >= 53402 && $mjd < 53430) { // measured:  2005  2  1  64.7052 -  2005  3  1  64.7313
          return 64.7052;
        }
        else if ($mjd >= 53430 && $mjd < 53461) { // measured:  2005  3  1  64.7313 -  2005  4  1  64.7575
          return 64.7313;
        }
        else if ($mjd >= 53461 && $mjd < 53491) { // measured:  2005  4  1  64.7575 -  2005  5  1  64.7811
          return 64.7575;
        }
        else if ($mjd >= 53491 && $mjd < 53522) { // measured:  2005  5  1  64.7811 -  2005  6  1  64.8001
          return 64.7811;
        }
        else if ($mjd >= 53522 && $mjd < 53552) { // measured:  2005  6  1  64.8001 -  2005  7  1  64.7995
          return 64.8001;
        }
        else if ($mjd >= 53552 && $mjd < 53583) { // measured:  2005  7  1  64.7995 -  2005  8  1  64.7876
          return 64.7995;
        }
        else if ($mjd >= 53583 && $mjd < 53614) { // measured:  2005  8  1  64.7876 -  2005  9  1  64.7831
          return 64.7876;
        }
        else if ($mjd >= 53614 && $mjd < 53644) { // measured:  2005  9  1  64.7831 -  2005 10  1  64.7921
          return 64.7831;
        }
        else if ($mjd >= 53644 && $mjd < 53675) { // measured:  2005 10  1  64.7921 -  2005 11  1  64.8096
          return 64.7921;
        }
        else if ($mjd >= 53675 && $mjd < 53705) { // measured:  2005 11  1  64.8096 -  2005 12  1  64.8311
          return 64.8096;
        }
        else if ($mjd >= 53705 && $mjd < 53736) { // measured:  2005 12  1  64.8311 -  2006  1  1  64.8452
          return 64.8311;
        }
        else if ($mjd >= 53736 && $mjd < 53767) { // measured:  2006  1  1  64.8452 -  2006  2  1  64.8597
          return 64.8452;
        }
        else if ($mjd >= 53767 && $mjd < 53795) { // measured:  2006  2  1  64.8597 -  2006  3  1  64.8850
          return 64.8597;
        }
        else if ($mjd >= 53795 && $mjd < 53826) { // measured:  2006  3  1  64.8850 -  2006  4  1  64.9175
          return 64.8850;
        }
        else if ($mjd >= 53826 && $mjd < 53856) { // measured:  2006  4  1  64.9175 -  2006  5  1  64.9480
          return 64.9175;
        }
        else if ($mjd >= 53856 && $mjd < 53887) { // measured:  2006  5  1  64.9480 -  2006  6  1  64.9794
          return 64.9480;
        }
        else if ($mjd >= 53887 && $mjd < 53917) { // measured:  2006  6  1  64.9794 -  2006  7  1  64.9895
          return 64.9794;
        }
        else if ($mjd >= 53917 && $mjd < 53948) { // measured:  2006  7  1  64.9895 -  2006  8  1  65.0028
          return 64.9895;
        }
        else if ($mjd >= 53948 && $mjd < 53979) { // measured:  2006  8  1  65.0028 -  2006  9  1  65.0138
          return 65.0028;
        }
        else if ($mjd >= 53979 && $mjd < 54009) { // measured:  2006  9  1  65.0138 -  2006 10  1  65.0371
          return 65.0138;
        }
        else if ($mjd >= 54009 && $mjd < 54040) { // measured:  2006 10  1  65.0371 -  2006 11  1  65.0773
          return 65.0371;
        }
        else if ($mjd >= 54040 && $mjd < 54070) { // measured:  2006 11  1  65.0773 -  2006 12  1  65.1122
          return 65.0773;
        }
        else if ($mjd >= 54070 && $mjd < 54101) { // measured:  2006 12  1  65.1122 -  2007  1  1  65.1464
          return 65.1122;
        }
        else if ($mjd >= 54101 && $mjd < 54132) { // measured:  2007  1  1  65.1464 -  2007  2  1  65.1833
          return 65.1464;
        }
        else if ($mjd >= 54132 && $mjd < 54160) { // measured:  2007  2  1  65.1833 -  2007  3  1  65.2145
          return 65.1833;
        }
        else if ($mjd >= 54160 && $mjd < 54191) { // measured:  2007  3  1  65.2145 -  2007  4  1  65.2494
          return 65.2145;
        }
        else if ($mjd >= 54191 && $mjd < 54221) { // measured:  2007  4  1  65.2494 -  2007  5  1  65.2921
          return 65.2494;
        }
        else if ($mjd >= 54221 && $mjd < 54252) { // measured:  2007  5  1  65.2921 -  2007  6  1  65.3279
          return 65.2921;
        }
        else if ($mjd >= 54252 && $mjd < 54282) { // measured:  2007  6  1  65.3279 -  2007  7  1  65.3413
          return 65.3279;
        }
        else if ($mjd >= 54282 && $mjd < 54313) { // measured:  2007  7  1  65.3413 -  2007  8  1  65.3452
          return 65.3413;
        }
        else if ($mjd >= 54313 && $mjd < 54344) { // measured:  2007  8  1  65.3452 -  2007  9  1  65.3496
          return 65.3452;
        }
        else if ($mjd >= 54344 && $mjd < 54374) { // measured:  2007  9  1  65.3496 -  2007 10  1  65.3711
          return 65.3496;
        }
        else if ($mjd >= 54374 && $mjd < 54405) { // measured:  2007 10  1  65.3711 -  2007 11  1  65.3972
          return 65.3711;
        }
        else if ($mjd >= 54405 && $mjd < 54435) { // measured:  2007 11  1  65.3972 -  2007 12  1  65.4296
          return 65.3972;
        }
        else if ($mjd >= 54435 && $mjd < 54466) { // measured:  2007 12  1  65.4296 -  2008  1  1  65.4573
          return 65.4296;
        }
        else if ($mjd >= 54466 && $mjd < 54497) { // measured:  2008  1  1  65.4573 -  2008  2  1  65.4868
          return 65.4573;
        }
        else if ($mjd >= 54497 && $mjd < 54526) { // measured:  2008  2  1  65.4868 -  2008  3  1  65.5152
          return 65.4868;
        }
        else if ($mjd >= 54526 && $mjd < 54557) { // measured:  2008  3  1  65.5152 -  2008  4  1  65.5450
          return 65.5152;
        }
        else if ($mjd >= 54557 && $mjd < 54587) { // measured:  2008  4  1  65.5450 -  2008  5  1  65.5781
          return 65.5450;
        }
        else if ($mjd >= 54587 && $mjd < 54618) { // measured:  2008  5  1  65.5781 -  2008  6  1  65.6127
          return 65.5781;
        }
        else if ($mjd >= 54618 && $mjd < 54648) { // measured:  2008  6  1  65.6127 -  2008  7  1  65.6288
          return 65.6127;
        }
        else if ($mjd >= 54648 && $mjd < 54679) { // measured:  2008  7  1  65.6288 -  2008  8  1  65.6370
          return 65.6288;
        }
        else if ($mjd >= 54679 && $mjd < 54710) { // measured:  2008  8  1  65.6370 -  2008  9  1  65.6493
          return 65.6370;
        }
        else if ($mjd >= 54710 && $mjd < 54740) { // measured:  2008  9  1  65.6493 -  2008 10  1  65.6760
          return 65.6493;
        }
        else if ($mjd >= 54740 && $mjd < 54771) { // measured:  2008 10  1  65.6760 -  2008 11  1  65.7097
          return 65.6760;
        }
        else if ($mjd >= 54771 && $mjd < 54801) { // measured:  2008 11  1  65.7097 -  2008 12  1  65.7461
          return 65.7097;
        }
        else if ($mjd >= 54801 && $mjd < 54832) { // measured:  2008 12  1  65.7461 -  2009  1  1  65.7768
          return 65.7461;
        }
        else if ($mjd >= 54832 && $mjd < 54863) { // measured:  2009  1  1  65.7768 -  2009  2  1  65.8025
          return 65.7768;
        }
        else if ($mjd >= 54863 && $mjd < 54891) { // measured:  2009  2  1  65.8025 -  2009  3  1  65.8237
          return 65.8025;
        }
        else if ($mjd >= 54891 && $mjd < 54922) { // measured:  2009  3  1  65.8237 -  2009  4  1  65.8595
          return 65.8237;
        }
        else if ($mjd >= 54922 && $mjd < 54952) { // measured:  2009  4  1  65.8595 -  2009  5  1  65.8973
          return 65.8595;
        }
        else if ($mjd >= 54952 && $mjd < 54983) { // measured:  2009  5  1  65.8973 -  2009  6  1  65.9323
          return 65.8973;
        }
        else if ($mjd >= 54983 && $mjd < 55013) { // measured:  2009  6  1  65.9323 -  2009  7  1  65.9509
          return 65.9323;
        }
        else if ($mjd >= 55013 && $mjd < 55044) { // measured:  2009  7  1  65.9509 -  2009  8  1  65.9534
          return 65.9509;
        }
        else if ($mjd >= 55044 && $mjd < 55075) { // measured:  2009  8  1  65.9534 -  2009  9  1  65.9628
          return 65.9534;
        }
        else if ($mjd >= 55075 && $mjd < 55105) { // measured:  2009  9  1  65.9628 -  2009 10  1  65.9839
          return 65.9628;
        }
        else if ($mjd >= 55105 && $mjd < 55136) { // measured:  2009 10  1  65.9839 -  2009 11  1  66.0147
          return 65.9839;
        }
        else if ($mjd >= 55136 && $mjd < 55166) { // measured:  2009 11  1  66.0147 -  2009 12  1  66.0420
          return 66.0147;
        }
        else if ($mjd >= 55166 && $mjd < 55197) { // measured:  2009 12  1  66.0420 -  2010  1  1  66.0699
          return 66.0420;
        }
        else if ($mjd >= 55197 && $mjd < 55228) { // measured:  2010  1  1  66.0699 -  2010  2  1  66.0961
          return 66.0699;
        }
        else if ($mjd >= 55228 && $mjd < 55256) { // measured:  2010  2  1  66.0961 -  2010  3  1  66.1310
          return 66.0961;
        }
        else if ($mjd >= 55256 && $mjd < 55287) { // measured:  2010  3  1  66.1310 -  2010  4  1  66.1683
          return 66.1310;
        }
        else if ($mjd >= 55287 && $mjd < 55317) { // measured:  2010  4  1  66.1683 -  2010  5  1  66.2072
          return 66.1683;
        }
        else if ($mjd >= 55317 && $mjd < 55348) { // measured:  2010  5  1  66.2072 -  2010  6  1  66.2356
          return 66.2072;
        }
        else if ($mjd >= 55348 && $mjd < 55378) { // measured:  2010  6  1  66.2356 -  2010  7  1  66.2409
          return 66.2356;
        }
        else if ($mjd >= 55378 && $mjd < 55409) { // measured:  2010  7  1  66.2409 -  2010  8  1  66.2335
          return 66.2409;
        }
        else if ($mjd >= 55409 && $mjd < 55440) { // measured:  2010  8  1  66.2335 -  2010  9  1  66.2349
          return 66.2335;
        }
        else if ($mjd >= 55440 && $mjd < 55470) { // measured:  2010  9  1  66.2349 -  2010 10  1  66.2441
          return 66.2349;
        }
        else if ($mjd >= 55470 && $mjd < 55501) { // measured:  2010 10  1  66.2441 -  2010 11  1  66.2751
          return 66.2441;
        }
        else if ($mjd >= 55501 && $mjd < 55531) { // measured:  2010 11  1  66.2751 -  2010 12  1  66.3054
          return 66.2751;
        }
        else if ($mjd >= 55531 && $mjd < 55562) { // measured:  2010 12  1  66.3054 -  2011  1  1  66.3246
          return 66.3054;
        }
        else if ($mjd >= 55562 && $mjd < 55593) { // measured:  2011  1  1  66.3246 -  2011  2  1  66.3406
          return 66.3246;
        }
        else if ($mjd >= 55593 && $mjd < 55621) { // measured:  2011  2  1  66.3406 -  2011  3  1  66.3624
          return 66.3406;
        }
        else if ($mjd >= 55621 && $mjd < 55652) { // measured:  2011  3  1  66.3624 -  2011  4  1  66.3957
          return 66.3624;
        }
        else if ($mjd >= 55652 && $mjd < 55682) { // measured:  2011  4  1  66.3957 -  2011  5  1  66.4289
          return 66.3957;
        }
        else if ($mjd >= 55682 && $mjd < 55713) { // measured:  2011  5  1  66.4289 -  2011  6  1  66.4619
          return 66.4289;
        }
        else if ($mjd >= 55713 && $mjd < 55743) { // measured:  2011  6  1  66.4619 -  2011  7  1  66.4749
          return 66.4619;
        }
        else if ($mjd >= 55743 && $mjd < 55774) { // measured:  2011  7  1  66.4749 -  2011  8  1  66.4751
          return 66.4749;
        }
        else if ($mjd >= 55774 && $mjd < 55805) { // measured:  2011  8  1  66.4751 -  2011  9  1  66.4829
          return 66.4751;
        }
        else if ($mjd >= 55805 && $mjd < 55835) { // measured:  2011  9  1  66.4829 -  2011 10  1  66.5056
          return 66.4829;
        }
        else if ($mjd >= 55835 && $mjd < 55866) { // measured:  2011 10  1  66.5056 -  2011 11  1  66.5383
          return 66.5056;
        }
        else if ($mjd >= 55866 && $mjd < 55896) { // measured:  2011 11  1  66.5383 -  2011 12  1  66.5706
          return 66.5383;
        }
        else if ($mjd >= 55896 && $mjd < 55927) { // measured:  2011 12  1  66.5706 -  2012  1  1  66.6030
          return 66.5706;
        }
        else if ($mjd >= 55927 && $mjd < 55958) { // measured:  2012  1  1  66.6030 -  2012  2  1  66.6340
          return 66.6030;
        }
        else if ($mjd >= 55958 && $mjd < 55987) { // measured:  2012  2  1  66.6340 -  2012  3  1  66.6569
          return 66.6340;
        }
        else if ($mjd >= 55987 && $mjd < 56018) { // measured:  2012  3  1  66.6569 -  2012  4  1  66.6925
          return 66.6569;
        }
        else if ($mjd >= 56018 && $mjd < 56048) { // measured:  2012  4  1  66.6925 -  2012  5  1  66.7289
          return 66.6925;
        }
        else if ($mjd >= 56048 && $mjd < 56079) { // measured:  2012  5  1  66.7289 -  2012  6  1  66.7579
          return 66.7289;
        }
        else if ($mjd >= 56079 && $mjd < 56109) { // measured:  2012  6  1  66.7579 -  2012  7  1  66.7708
          return 66.7579;
        }
        else if ($mjd >= 56109 && $mjd < 56140) { // measured:  2012  7  1  66.7708 -  2012  8  1  66.7740
          return 66.7708;
        }
        else if ($mjd >= 56140 && $mjd < 56171) { // measured:  2012  8  1  66.7740 -  2012  9  1  66.7846
          return 66.7740;
        }
        else if ($mjd >= 56171 && $mjd < 56201) { // measured:  2012  9  1  66.7846 -  2012 10  1  66.8103
          return 66.7846;
        }
        else if ($mjd >= 56201 && $mjd < 56232) { // measured:  2012 10  1  66.8103 -  2012 11  1  66.8400
          return 66.8103;
        }
        else if ($mjd >= 56232 && $mjd < 56262) { // measured:  2012 11  1  66.8400 -  2012 12  1  66.8779
          return 66.8400;
        }
        else if ($mjd >= 56262 && $mjd < 56293) { // measured:  2012 12  1  66.8779 -  2013  1  1  66.9069
          return 66.8779;
        }
        else if ($mjd >= 56293 && $mjd < 56324) { // measured:  2013  1  1  66.9069 -  2013  2  1  66.9443
          return 66.9069;
        }
        else if ($mjd >= 56324 && $mjd < 56352) { // measured:  2013  2  1  66.9443 -  2013  3  1  66.9763
          return 66.9443;
        }
        else if ($mjd >= 56352 && $mjd < 56383) { // measured:  2013  3  1  66.9763 -  2013  4  1  67.0258
          return 66.9763;
        }
        else if ($mjd >= 56383 && $mjd < 56413) { // measured:  2013  4  1  67.0258 -  2013  5  1  67.0716
          return 67.0258;
        }
        else if ($mjd >= 56413 && $mjd < 56444) { // measured:  2013  5  1  67.0716 -  2013  6  1  67.1100
          return 67.0716;
        }
        else if ($mjd >= 56444 && $mjd < 56474) { // measured:  2013  6  1  67.1100 -  2013  7  1  67.1266
          return 67.1100;
        }
        else if ($mjd >= 56474 && $mjd < 56505) { // measured:  2013  7  1  67.1266 -  2013  8  1  67.1331
          return 67.1266;
        }
        else if ($mjd >= 56505 && $mjd < 56536) { // measured:  2013  8  1  67.1331 -  2013  9  1  67.1458
          return 67.1331;
        }
        else if ($mjd >= 56536 && $mjd < 56566) { // measured:  2013  9  1  67.1458 -  2013 10  1  67.1717
          return 67.1458;
        }
        else if ($mjd >= 56566 && $mjd < 56597) { // measured:  2013 10  1  67.1717 -  2013 11  1  67.2091
          return 67.1717;
        }
        else if ($mjd >= 56597 && $mjd < 56627) { // measured:  2013 11  1  67.2091 -  2013 12  1  67.2460
          return 67.2091;
        }
        else if ($mjd >= 56627 && $mjd < 56658) { // measured:  2013 12  1  67.2460 -  2014  1  1  67.2810
          return 67.2460;
        }
        else if ($mjd >= 56658 && $mjd < 56689) { // measured:  2014  1  1  67.2810 -  2014  2  1  67.3136
          return 67.2810;
        }
        else if ($mjd >= 56689 && $mjd < 56717) { // measured:  2014  2  1  67.3136 -  2014  3  1  67.3457
          return 67.3136;
        }
        else if ($mjd >= 56717 && $mjd < 56748) { // measured:  2014  3  1  67.3457 -  2014  4  1  67.3890
          return 67.3457;
        }
        else if ($mjd >= 56748 && $mjd < 56778) { // measured:  2014  4  1  67.3890 -  2014  5  1  67.4318
          return 67.3890;
        }
        else if ($mjd >= 56778 && $mjd < 56809) { // measured:  2014  5  1  67.4318 -  2014  6  1  67.4666
          return 67.4318;
        }
        else if ($mjd >= 56809 && $mjd < 56839) { // measured:  2014  6  1  67.4666 -  2014  7  1  67.4858
          return 67.4666;
        }
        else if ($mjd >= 56839 && $mjd < 56870) { // measured:  2014  7  1  67.4858 -  2014  8  1  67.4989
          return 67.4858;
        }
        else if ($mjd >= 56870 && $mjd < 56901) { // measured:  2014  8  1  67.4989 -  2014  9  1  67.5111
          return 67.4989;
        }
        else if ($mjd >= 56901 && $mjd < 56931) { // measured:  2014  9  1  67.5111 -  2014 10  1  67.5353
          return 67.5111;
        }
        else if ($mjd >= 56931 && $mjd < 56962) { // measured:  2014 10  1  67.5353 -  2014 11  1  67.5711
          return 67.5353;
        }
        else if ($mjd >= 56962 && $mjd < 56992) { // measured:  2014 11  1  67.5711 -  2014 12  1  67.6070
          return 67.5711;
        }
        else if ($mjd >= 56992 && $mjd < 57023) { // measured:  2014 12  1  67.6070 -  2015  1  1  67.6439
          return 67.6070;
        }
        else if ($mjd >= 57023 && $mjd < 57054) { // measured:  2015  1  1  67.6439 -  2015  2  1  67.6765
          return 67.6439;
        }
        else if ($mjd >= 57054 && $mjd < 57082) { // measured:  2015  2  1  67.6765 -  2015  3  1  67.7117
          return 67.6765;
        }
        else if ($mjd >= 57082 && $mjd < 57113) { // measured:  2015  3  1  67.7117 -  2015  4  1  67.7591
          return 67.7117;
        }
        else if ($mjd >= 57113 && $mjd < 57143) { // measured:  2015  4  1  67.7591 -  2015  5  1  67.8012
          return 67.7591;
        }
        else if ($mjd >= 57143 && $mjd < 57174) { // measured:  2015  5  1  67.8012 -  2015  6  1  67.8402
          return 67.8012;
        }
        else if ($mjd >= 57174 && $mjd < 57204) { // measured:  2015  6  1  67.8402 -  2015  7  1  67.8606
          return 67.8402;
        }
        else if ($mjd >= 57204 && $mjd < 57235) { // measured:  2015  7  1  67.8606 -  2015  8  1  67.8822
          return 67.8606;
        }
        else if ($mjd >= 57235 && $mjd < 57266) { // measured:  2015  8  1  67.8822 -  2015  9  1  67.9120
          return 67.8822;
        }
        else if ($mjd >= 57266 && $mjd < 57296) { // measured:  2015  9  1  67.9120 -  2015 10  1  67.9546
          return 67.9120;
        }
        else if ($mjd >= 57296 && $mjd < 57327) { // measured:  2015 10  1  67.9546 -  2015 11  1  68.0055
          return 67.9546;
        }
        else if ($mjd >= 57327 && $mjd < 57357) { // measured:  2015 11  1  68.0055 -  2015 12  1  68.0514
          return 68.0055;
        }
        else if ($mjd >= 57357 && $mjd < 57388) { // measured:  2015 12  1  68.0514 -  2016  1  1  68.1024
          return 68.0514;
        }
        else if ($mjd >= 57388 && $mjd < 57419) { // measured:  2016  1  1  68.1024 -  2016  2  1  68.1577
          return 68.1024;
        }
        else if ($mjd >= 57419 && $mjd < 57448) { // measured:  2016  2  1  68.1577 -  2016  3  1  68.2044
          return 68.1577;
        }
        else if ($mjd >= 57448 && $mjd < 57479) { // measured:  2016  3  1  68.2044 -  2016  4  1  68.2665
          return 68.2044;
        }
        else if ($mjd >= 57479 && $mjd < 57509) { // measured:  2016  4  1  68.2665 -  2016  5  1  68.3188
          return 68.2665;
        }
        else if ($mjd >= 57509 && $mjd < 57540) { // measured:  2016  5  1  68.3188 -  2016  6  1  68.3704
          return 68.3188;
        }
        else if ($mjd >= 57540 && $mjd < 57570) { // measured:  2016  6  1  68.3704 -  2016  7  1  68.3964
          return 68.3704;
        }
        else if ($mjd >= 57570 && $mjd < 57601) { // measured:  2016  7  1  68.3964 -  2016  8  1  68.4094
          return 68.3964;
        }
        else if ($mjd >= 57601 && $mjd < 57632) { // measured:  2016  8  1  68.4094 -  2016  9  1  68.4305
          return 68.4094;
        }
        else if ($mjd >= 57632 && $mjd < 57662) { // measured:  2016  9  1  68.4305 -  2016 10  1  68.4630
          return 68.4305;
        }
        else if ($mjd >= 57662 && $mjd < 57693) { // measured:  2016 10  1  68.4630 -  2016 11  1  68.5078
          return 68.4630;
        }
        else if ($mjd >= 57693 && $mjd < 57723) { // measured:  2016 11  1  68.5078 -  2016 12  1  68.5537
          return 68.5078;
        }
        else if ($mjd >= 57723 && $mjd < 57754) { // measured:  2016 12  1  68.5537 -  2017  1  1  68.5927
          return 68.5537;
        }
        else if ($mjd >= 57754 && $mjd < 57785) { // measured:  2017  1  1  68.5927 -  2017  2  1  68.6298
          return 68.5927;
        }
        else if ($mjd >= 57785 && $mjd < 57813) { // measured:  2017  2  1  68.6298 -  2017  3  1  68.6671
          return 68.6298;
        }
        else if ($mjd >= 57813 && $mjd < 57844) { // measured:  2017  3  1  68.6671 -  2017  4  1  68.7135
          return 68.6671;
        }
        else if ($mjd >= 57844 && $mjd < 57874) { // measured:  2017  4  1  68.7135 -  2017  5  1  68.7623
          return 68.7135;
        }
        else if ($mjd >= 57874 && $mjd < 57905) { // measured:  2017  5  1  68.7623 -  2017  6  1  68.8033
          return 68.7623;
        }
        else if ($mjd >= 57905 && $mjd < 57935) { // measured:  2017  6  1  68.8033 -  2017  7  1  68.8245
          return 68.8033;
        }
        else if ($mjd >= 57935 && $mjd < 57966) { // measured:  2017  7  1  68.8245 -  2017  8  1  68.8373
          return 68.8245;
        }
        else if ($mjd >= 57966 && $mjd < 57997) { // measured:  2017  8  1  68.8373 -  2017  9  1  68.8477
          return 68.8373;
        }
        else if ($mjd >= 57997 && $mjd < 58027) { // measured:  2017  9  1  68.8477 -  2017 10  1  68.8689
          return 68.8477;
        }
        else if ($mjd >= 58027 && $mjd < 58058) { // measured:  2017 10  1  68.8689 -  2017 11  1  68.9006
          return 68.8689;
        }
        else if ($mjd >= 58058 && $mjd < 58088) { // measured:  2017 11  1  68.9006 -  2017 12  1  68.9355
          return 68.9006;
        }
        else if ($mjd >= 58088 && $mjd < 58119) { // measured:  2017 12  1  68.9355 -  2018  1  1  68.9676
          return 68.9355;
        }
        else if ($mjd >= 58119 && $mjd < 58150) { // measured:  2018  1  1  68.9676 -  2018  2  1  68.9875
          return 68.9676;
        }
        else if ($mjd >= 58150 && $mjd < 58178) { // measured:  2018  2  1  68.9875 -  2018  3  1  69.0176
          return 68.9875;
        }
        else if ($mjd >= 58178 && $mjd < 58209) { // measured:  2018  3  1  69.0176 -  2018  4  1  69.0499
          return 69.0176;
        }
        else if ($mjd >= 58209 && $mjd < 58239) { // measured:  2018  4  1  69.0499 -  2018  5  1  69.0823
          return 69.0499;
        }
        else if ($mjd >= 58239 && $mjd < 58270) { // measured:  2018  5  1  69.0823 -  2018  6  1  69.1070
          return 69.0823;
        }
        else if ($mjd >= 58270 && $mjd < 58300) { // measured:  2018  6  1  69.1070 -  2018  7  1  69.1134
          return 69.1070;
        }
        else if ($mjd >= 58300 && $mjd < 58331) { // measured:  2018  7  1  69.1134 -  2018  8  1  69.1142
          return 69.1134;
        }
        else if ($mjd >= 58331 && $mjd < 58362) { // measured:  2018  8  1  69.1142 -  2018  9  1  69.1207
          return 69.1142;
        }
        else if ($mjd >= 58362 && $mjd < 58392) { // measured:  2018  9  1  69.1207 -  2018 10  1  69.1356
          return 69.1207;
        }
        else if ($mjd >= 58392 && $mjd < 58423) { // measured:  2018 10  1  69.1356 -  2018 11  1  69.1646
          return 69.1356;
        }
        else if ($mjd >= 58423 && $mjd < 58453) { // measured:  2018 11  1  69.1646 -  2018 12  1  69.1964
          return 69.1646;
        }
        else if ($mjd >= 58453 && $mjd < 58484) { // measured:  2018 12  1  69.1964 -  2019  1  1  69.2202
          return 69.1964;
        }
        else if ($mjd >= 58484 && $mjd < 58515) { // measured:  2019  1  1  69.2202 -  2019  2  1  69.2452
          return 69.2202;
        }
        else if ($mjd >= 58515 && $mjd < 58543) { // measured:  2019  2  1  69.2452 -  2019  3  1  69.2733
          return 69.2452;
        }
        else if ($mjd >= 58543 && $mjd < 58574) { // measured:  2019  3  1  69.2733 -  2019  4  1  69.3032
          return 69.2733;
        }
        else if ($mjd >= 58574 && $mjd < 58604) { // measured:  2019  4  1  69.3032 -  2019  5  1  69.3326
          return 69.3032;
        }
        else if ($mjd >= 58604 && $mjd < 58635) { // measured:  2019  5  1  69.3326 -  2019  6  1  69.3541
          return 69.3326;
        }
        else if ($mjd >= 58635 && $mjd < 58665) { // measured:  2019  6  1  69.3541 -  2019  7  1  69.3582
          return 69.3541;
        }
        else if ($mjd >= 58665 && $mjd < 58696) { // measured:  2019  7  1  69.3582 -  2019  8  1  69.3442
          return 69.3582;
        }
        else if ($mjd >= 58696 && $mjd < 58727) { // measured:  2019  8  1  69.3442 -  2019  9  1  69.3376
          return 69.3442;
        }
        else if ($mjd >= 58727 && $mjd < 58757) { // measured:  2019  9  1  69.3376 -  2019 10  1  69.3377
          return 69.3376;
        }
        else if ($mjd >= 58757 && $mjd < 58788) { // measured:  2019 10  1  69.3377 -  2019 11  1  69.3432
          return 69.3377;
        }
        else if ($mjd >= 58788 && $mjd < 58818) { // measured:  2019 11  1  69.3432 -  2019 12  1  69.3540
          return 69.3432;
        }
        else if ($mjd >= 58818 && $mjd < 58849) { // measured:  2019 12  1  69.3540 -  2020  1  1  69.3612
          return 69.3540;
        }
        else if ($mjd >= 58849 && $mjd < 58880) { // measured:  2020  1  1  69.3612 -  2020  2  1  69.3752
          return 69.3612;
        }
        else if ($mjd >= 58880 && $mjd < 58909) { // measured:  2020  2  1  69.3752 -  2020  3  1  69.3890
          return 69.3752;
        }
        else if ($mjd >= 58909 && $mjd < 58940) { // measured:  2020  3  1  69.3890 -  2020  4  1  69.4092
          return 69.3890;
        }
        else if ($mjd >= 58940 && $mjd < 58970) { // measured:  2020  4  1  69.4092 -  2020  5  1  69.4265
          return 69.4092;
        }
        else if ($mjd >= 58970 && $mjd < 59001) { // measured:  2020  5  1  69.4265 -  2020  6  1  69.4386
          return 69.4265;
        }
        else if ($mjd >= 59001 && $mjd < 59031) { // measured:  2020  6  1  69.4386 -  2020  7  1  69.4241
          return 69.4386;
        }
        else if ($mjd >= 59031 && $mjd < 59062) { // measured:  2020  7  1  69.4241 -  2020  8  1  69.3921
          return 69.4241;
        }
        else if ($mjd >= 59062 && $mjd < 59093) { // measured:  2020  8  1  69.3921 -  2020  9  1  69.3693
          return 69.3921;
        }
        else if ($mjd >= 59093 && $mjd < 59123) { // measured:  2020  9  1  69.3693 -  2020 10  1  69.3575
          return 69.3693;
        }
        else if ($mjd >= 59123 && $mjd < 59154) { // measured:  2020 10  1  69.3575 -  2020 11  1  69.3593
          return 69.3575;
        }
        else if ($mjd >= 59154 && $mjd < 59184) { // measured:  2020 11  1  69.3593 -  2020 12  1  69.3630
          return 69.3593;
        }
        else if ($mjd >= 59184 && $mjd < 59215) { // measured:  2020 12  1  69.3630 -  2021  1  1  69.3594
          return 69.3630;
        }
        else if ($mjd >= 59215 && $mjd < 59246) { // measured:  2021  1  1  69.3594 -  2021  2  1  69.3510
          return 69.3594;
        }
        else if ($mjd >= 59246 && $mjd < 59274) { // measured:  2021  2  1  69.3510 -  2021  3  1  69.3538
          return 69.3510;
        }
        else if ($mjd >= 59274 && $mjd < 59305) { // measured:  2021  3  1  69.3538 -  2021  4  1  69.3582
          return 69.3538;
        }
        else if ($mjd >= 59305 && $mjd < 59335) { // measured:  2021  4  1  69.3582 -  2021  5  1  69.3673
          return 69.3582;
        }
        else if ($mjd >= 59335 && $mjd < 59366) { // measured:  2021  5  1  69.3673 -  2021  6  1  69.3679
          return 69.3673;
        }
        else if ($mjd >= 59366 && $mjd < 59396) { // measured:  2021  6  1  69.3679 -  2021  7  1  69.3514
          return 69.3679;
        }
        else if ($mjd >= 59396 && $mjd < 59427) { // measured:  2021  7  1  69.3514 -  2021  8  1  69.3273
          return 69.3514;
        }
        else if ($mjd >= 59427 && $mjd < 59458) { // measured:  2021  8  1  69.3273 -  2021  9  1  69.3033
          return 69.3273;
        }
        else if ($mjd >= 59458 && $mjd < 59488) { // measured:  2021  9  1  69.3033 -  2021 10  1  69.2892
          return 69.3033;
        }
        else if ($mjd >= 59488 && $mjd < 59519) { // measured:  2021 10  1  69.2892 -  2021 11  1  69.2881
          return 69.2892;
        }
        else if ($mjd >= 59519 && $mjd < 59549) { // measured:  2021 11  1  69.2881 -  2021 12  1  69.2908
          return 69.2881;
        }
        else if ($mjd >= 59549 && $mjd < 59580) { // measured:  2021 12  1  69.2908 -  2022  1  1  69.2945
          return 69.2908;
        }
        else if ($mjd >= 59580 && $mjd < 59611) { // measured:  2022  1  1  69.2945 -  2022  2  1  69.2914
          return 69.2945;
        }
        else if ($mjd >= 59611 && $mjd < 59639) { // measured:  2022  2  1  69.2914 -  2022  3  1  69.2861
          return 69.2914;
        }
        else if ($mjd >= 59639 && $mjd < 59670) { // measured:  2022  3  1  69.2861 -  2022  4  1  69.2835
          return 69.2861;
        }
        else if ($mjd >= 59670 && $mjd < 59700) { // measured:  2022  4  1  69.2835 -  2022  5  1  69.2816
          return 69.2835;
        }
        else if ($mjd >= 59700 && $mjd < 59731) { // measured:  2022  5  1  69.2816 -  2022  6  1  69.2799
          return 69.2816;
        }
        else if ($mjd >= 59731 && $mjd < 59761) { // measured:  2022  6  1  69.2799 -  2022  7  1  69.2527
          return 69.2799;
        }
        else if ($mjd >= 59761 && $mjd < 59792) { // measured:  2022  7  1  69.2527 -  2022  8  1  69.2213
          return 69.2527;
        }
        else if ($mjd >= 59792 && $mjd < 59823) { // measured:  2022  8  1  69.2213 -  2022  9  1  69.1975
          return 69.2213;
        }
        else if ($mjd >= 59823 && $mjd < 59853) { // measured:  2022  9  1  69.1975 -  2022 10  1  69.1891
          return 69.1975;
        }
        else if ($mjd >= 59853 && $mjd < 59884) { // measured:  2022 10  1  69.1891 -  2022 11  1  69.1942
          return 69.1891;
        }
        else if ($mjd >= 59884 && $mjd < 59914) { // measured:  2022 11  1  69.1942 -  2022 12  1  69.2036
          return 69.1942;
        }
        else if ($mjd >= 59914 && $mjd < 59945) { // measured:  2022 12  1  69.2036 -  2023  1  1  69.2039
          return 69.2036;
        }
        else if ($mjd >= 59945 && $mjd < 59976) { // measured:  2023  1  1  69.2039 -  2023  2  1  69.1986
          return 69.2039;
        }
        else if ($mjd >= 59976 && $mjd < 60004) { // measured:  2023  2  1  69.1986 -  2023  3  1  69.1993
          return 69.1986;
        }
        else if ($mjd >= 60004 && $mjd < 60035) { // measured:  2023  3  1  69.1993 -  2023  4  1  69.2084
          return 69.1993;
        }
        else if ($mjd >= 60035 && $mjd < 60065) { // measured:  2023  4  1  69.2084 -  2023  5  1  69.2183
          return 69.2084;
        }
        else if ($mjd >= 60065 && $mjd < 60096) { // measured:  2023  5  1  69.2183 -  2023  6  1  69.2300
          return 69.2183;
        }
        else if ($mjd >= 60096 && $mjd < 60126) { // measured:  2023  6  1  69.2300 -  2023  7  1  69.2201
          return 69.2300;
        }
        else if ($mjd >= 60126 && $mjd < 60157) { // measured:  2023  7  1  69.2201 -  2023  8  1  69.1988
          return 69.2201;
        }
        else if ($mjd >= 60157 && $mjd < 60188) { // measured:  2023  8  1  69.1988 -  2023  9  1  69.1814
          return 69.1988;
        }
        else if ($mjd >= 60188 && $mjd < 60218) { // measured:  2023  9  1  69.1814 -  2023 10  1  69.1723
          return 69.1814;
        }
        else if ($mjd >= 60218 && $mjd < 60249) { // measured:  2023 10  1  69.1723 -  2023 11  1  69.1727
          return 69.1723;
        }
        else if ($mjd >= 60249 && $mjd < 60279) { // measured:  2023 11  1  69.1727 -  2023 12  1  69.1724
          return 69.1727;
        }
        else if ($mjd >= 60279 && $mjd < 60310) { // measured:  2023 12  1  69.1724 -  2024  1  1  69.1752
          return 69.1724;
        }
        else if ($mjd >= 60310 && $mjd < 60341) { // measured:  2024  1  1  69.1752 -  2024  2  1  69.1797
          return 69.1752;
        }
        else if ($mjd >= 60341 && $mjd < 60370) { // measured:  2024  2  1  69.1797 -  2024  3  1  69.1874
          return 69.1797;
        }
        else if ($mjd >= 60370 && $mjd < 60401) { // measured:  2024  3  1  69.1874 -  2024  4  1  69.1983
          return 69.1874;
        }
        else if ($mjd >= 60401 && $mjd < 60431) { // measured:  2024  4  1  69.1983 -  2024  5  1  69.2018
          return 69.1983;
        }
        else if ($mjd >= 60431 && $mjd < 60462) { // measured:  2024  5  1  69.2018 -  2024  6  1  69.2044
          return 69.2018;
        }
        else if ($mjd >= 60462 && $mjd < 60492) { // measured:  2024  6  1  69.2044 -  2024  7  1  69.1879
          return 69.2044;
        }
        else if ($mjd >= 60492 && $mjd < 60523) { // measured:  2024  7  1  69.1879 -  2024  8  1  69.1588
          return 69.1879;
        }
        else if ($mjd >= 60523 && $mjd < 60554) { // measured:  2024  8  1  69.1588 -  2024  9  1  69.1322
          return 69.1588;
        }
        else if ($mjd >= 60554 && $mjd < 60584) { // measured:  2024  9  1  69.1322 -  2024 10  1  69.1250
          return 69.1322;
        }
        else if ($mjd >= 60584 && $mjd < 60615) { // measured:  2024 10  1  69.1250 -  2024 11  1  69.1304
          return 69.1250;
        }
        else if ($mjd >= 60615 && $mjd < 60645) { // measured:  2024 11  1  69.1304 -  2024 12  1  69.1345
          return 69.1304;
        }
        else if ($mjd >= 60645 && $mjd < 60676) { // measured:  2024 12  1  69.1345 -  2025  1  1  69.1377
          return 69.1345;
        }
        else if ($mjd >= 60676 && $mjd < 60707) { // measured:  2025  1  1  69.1377 -  2025  2  1  69.1366
          return 69.1377;
        }
        else if ($mjd >= 60707 && $mjd < 60735) { // measured:  2025  2  1  69.1366 -  2025  3  1  69.1384
          return 69.1366;
        }
        else if ($mjd >= 60735 && $mjd < 60766) { // measured:  2025  3  1  69.1384 -  2025  4  1  69.1471
          return 69.1384;
        }
        else if ($mjd >= 60766 && $mjd < 60796) { // measured:  2025  4  1  69.1471 -  2025  5  1  69.1542
          return 69.1471;
        }
        else if ($mjd >= 60796 && $mjd < 60827) { // measured:  2025  5  1  69.1542 -  2025  6  1  69.1550
          return 69.1542;
        }
        else if ($mjd >= 60827 && $mjd < 60857) { // measured:  2025  6  1  69.1550 -  2025  7  1  69.1406
          return 69.1550;
        }
        else if ($mjd >= 60857 && $mjd < 60888) { // measured:  2025  7  1  69.1406 -  2025  8  1  69.1219
          return 69.1406;
        }
        else if ($mjd >= 60888 && $mjd < 60919) { // measured:  2025  8  1  69.1219 -  2025  9  1  69.0994
          return 69.1219;
        }
        else if ($mjd >= 60919 && $mjd < 60949) { // measured:  2025  9  1  69.0994 -  2025 10  1  69.0909
          return 69.0994;
        }
        else if ($mjd >= 60949 && $mjd < 60980) { // measured:  2025 10  1  69.0909 -  2025 11  1  69.0909
          return 69.0909;
        }
        else if ($mjd >= 60980 && $mjd < 61010) { // measured:  2025 11  1  69.0909 -  2025 12  1  69.1042
          return 69.0909;
        }
        else if ($mjd >= 61010 && $mjd < 61041) { // measured:  2025 12  1  69.1042 -  2026  1  1  69.1099
          return 69.1042;
        }
        else if ($mjd >= 61041 && $mjd < 61072) { // measured:  2026  1  1  69.1099 -  2026  2  1  69.1133
          return 69.1099;
        }
        else if ($mjd >= 61072 && $mjd < 61100) { // measured:  2026  2  1  69.1133 -  2026  3  1  69.1168
          return 69.1133;
        }
        else if ($mjd >= 61100 && $mjd < 61131) { // measured:  2026  3  1  69.1168 -  2026  4  1  69.1330
          return 69.1168;
        }
        else if ($mjd >= 61131 && $mjd < 61161) { // measured:  2026  4  1  69.1330 -  2026  5  1  69.1511
          return 69.1330;
        }
        else if ($mjd >= 61161 && $mjd < 61192) { // measured:  2026  5  1  69.1511 -  2026  6  1  69.1662
          return 69.1511;
        }
        else if ($mjd >= 61192 && $mjd < 61222) { // measured:  2026  6  1  69.1662 -  2026  7  1  69.1695
          return 69.1662;
        }
        else if ($mjd >= 61222 && $mjd < 61253) { // measured:  2026  7  1  69.1695 -  2026  8  1  69.1713
          return 69.1695;
        }
        else if ($mjd >= 61253 && $mjd < 61284) { // measured:  2026  8  1  69.1713 -  2026  9  1  69.1816
          return 69.1713;
        }
        else if ($mjd >= 61284 && $mjd < 61314) { // measured:  2026  9  1  69.1816 -  2026 10  1  69.2065
          return 69.1816;
        }
        else if ($mjd >= 59762 && $mjd < 59853) { // predicted: 59762.000	2022.50	69.29	-0.104	0.031 - 59853.000	2022.75	69.21	-0.025	0.021
          return 69.29;
        }
        else if ($mjd >= 59853 && $mjd < 59945) { // predicted: 59853.000	2022.75	69.21	-0.025	0.021 - 59945.000	2023.00	69.21	-0.021	0.019
          return 69.21;
        }
        else if ($mjd >= 59945 && $mjd < 60036) { // predicted: 59945.000	2023.00	69.21	-0.021	0.019 - 60036.000	2023.25	69.20	-0.020	0.021
          return 69.21;
        }
        else if ($mjd >= 60036 && $mjd < 60127) { // predicted: 60036.000	2023.25	69.20	-0.020	0.021 - 60127.000	2023.50	69.18	 	0.024
          return 69.20;
        }
        else if ($mjd >= 60127 && $mjd < 60219) { // predicted: 60127.000	2023.50	69.18	 	0.024 - 60219.000	2023.75	69.11		0.027
          return 69.18;
        }
        else if ($mjd >= 60219 && $mjd < 60310) { // predicted: 60219.000	2023.75	69.11		0.027 - 60310.000	2024.00	69.11	 	0.033
          return 69.11;
        }
        else if ($mjd >= 60310 && $mjd < 60401) { // predicted: 60310.000	2024.00	69.11	 	0.033 - 60401.000	2024.25	69.11	 	0.043
          return 69.11;
        }
        else if ($mjd >= 60401 && $mjd < 60493) { // predicted: 60401.000	2024.25	69.11	 	0.043 - 60493.000	2024.50	69.10	 	0.056
          return 69.11;
        }
        else if ($mjd >= 60493 && $mjd < 60584) { // predicted: 60493.000	2024.50	69.10	 	0.056 - 60584.000	2024.75	69.03	 	0.070
          return 69.10;
        }
        else if ($mjd >= 60584 && $mjd < 60675) { // predicted: 60584.000	2024.75	69.03	 	0.070 - 60675.000	2025.00	69.04	 	0.088
          return 69.03;
        }
        else if ($mjd >= 60675 && $mjd < 60767) { // predicted: 60675.000	2025.00	69.04	 	0.088 - 60767.000	2025.25	69.07	 	0.109
          return 69.04;
        }
        else if ($mjd >= 60767 && $mjd < 60858) { // predicted: 60767.000	2025.25	69.07	 	0.109 - 60858.000	2025.50	69.06	 	0.133
          return 69.07;
        }
        else if ($mjd >= 60858 && $mjd < 60949) { // predicted: 60858.000	2025.50	69.06	 	0.133 - 60949.000	2025.75	69.01	 	0.159
          return 69.06;
        }
        else if ($mjd >= 60949 && $mjd < 61041) { // predicted: 60949.000	2025.75	69.01	 	0.159 - 61041.000	2026.00	69.05	 	0.189
          return 69.01;
        }
        else if ($mjd >= 61041 && $mjd < 61132) { // predicted: 61041.000	2026.00	69.05	 	0.189 - 61132.000	2026.25	69.09	 	0.223
          return 69.05;
        }
        else if ($mjd >= 61132 && $mjd < 61223) { // predicted: 61132.000	2026.25	69.09	 	0.223 - 61223.000	2026.50	69.11	 	0.257
          return 69.09;
        }
        else if ($mjd >= 61223 && $mjd < 61314) { // predicted: 61223.000	2026.50	69.11	 	0.257 - 61314.000	2026.75	69.09	 	0.291
          return 69.11;
        }
        else if ($mjd >= 61314 && $mjd < 61406) { // predicted: 61314.000	2026.75	69.09	 	0.291 - 61406.000	2027.00	69.14	 	0.327
          return 69.09;
        }
        else if ($mjd >= 61406 && $mjd < 61497) { // predicted: 61406.000	2027.00	69.14	 	0.327 - 61497.000	2027.25	69.21		0.367
          return 69.14;
        }
        else if ($mjd >= 61497 && $mjd < 61588) { // predicted: 61497.000	2027.25	69.21		0.367 - 61588.000	2027.50	69.26		0.408
          return 69.21;
        }
        else if ($mjd >= 61588 && $mjd < 61680) { // predicted: 61588.000	2027.50	69.26		0.408 - 61680.000	2027.75	69.26		0.446
          return 69.26;
        }
        else if ($mjd >= 61680 && $mjd < 61771) { // predicted: 61680.000	2027.75	69.26		0.446 - 61771.000	2028.00	69.34		0.486
          return 69.26;
        }
        else if ($mjd >= 61771 && $mjd < 61862) { // predicted: 61771.000	2028.00	69.34		0.486 - 61862.000	2028.25	69.44		0.525
          return 69.34;
        }
        else if ($mjd >= 61862 && $mjd < 61954) { // predicted: 61862.000	2028.25	69.44		0.525 - 61954.000	2028.50	69.51		0.566
          return 69.44;
        }
        else if ($mjd >= 61954 && $mjd < 62045) { // predicted: 61954.000	2028.50	69.51		0.566 - 62045.000	2028.75	69.54		0.603
          return 69.51;
        }
        else if ($mjd >= 62045 && $mjd < 62136) { // predicted: 62045.000	2028.75	69.54		0.603 - 62136.000	2029.00	69.63		0.637
          return 69.54;
        }
        else if ($mjd >= 62136 && $mjd < 62228) { // predicted: 62136.000	2029.00	69.63		0.637 - 62228.000	2029.25	69.75		0.672
          return 69.63;
        }
        else if ($mjd >= 62228 && $mjd < 62319) { // predicted: 62228.000	2029.25	69.75		0.672 - 62319.000	2029.50	69.83		0.711
          return 69.75;
        }
        else if ($mjd >= 62319 && $mjd < 62410) { // predicted: 62319.000	2029.50	69.83		0.711 - 62410.000	2029.75	69.87		0.742
          return 69.83;
        }
        else if ($mjd >= 62410 && $mjd < 62502) { // predicted: 62410.000	2029.75	69.87		0.742 - 62502.000	2030.00	69.97		0.768
          return 69.87;
        }
        else if ($mjd >= 62502 && $mjd < 62593) { // predicted: 62502.000	2030.00	69.97		0.768 - 62593.000	2030.25	70.08		0.794
          return 69.97;
        }
        else if ($mjd >= 62593 && $mjd < 62684) { // predicted: 62593.000	2030.25	70.08		0.794 - 62684.000	2030.50	70.17		0.823
          return 70.08;
        }
        else if ($mjd >= 62684 && $mjd < 62775) { // predicted: 62684.000	2030.50	70.17		0.823 - 62775.000	2030.75	70.21		0.849
          return 70.17;
        }
        else if ($mjd >= 62775 && $mjd < 62867) { // predicted: 62775.000	2030.75	70.21		0.849 - 62867.000	2031.00	70.32		0.871
          return 70.21;
        }
        else if ($mjd >= 62867 && $mjd < 62958) { // predicted: 62867.000	2031.00	70.32		0.871 - 62958.000	2031.25	70.42		0.891
          return 70.32;
        }
        else if ($mjd >= 62958 && $mjd < 63049) { // predicted: 62958.000	2031.25	70.42		0.891 - 63049.000	2031.50	70.51		0.913
          return 70.42;
        }
        else if ($mjd >= 63049 && $mjd < 63141) { // predicted: 63049.000	2031.50	70.51		0.913 - 63141.000	2031.75	70.53		0.926
          return 70.51;
        }
        else if ($mjd >= 63141 && $mjd < 63232) { // predicted: 63141.000	2031.75	70.53		0.926 - 63232.000	2032.00	70.62		0.937
          return 70.53;
        }
        else if ($mjd >= 63232 && $mjd < 63323) { // predicted: 63232.000	2032.00	70.62		0.937 - 63323.000	2032.25	70.72		0.952
          return 70.62;
        }
        else if ($mjd >= 63323 && $mjd < 63415) { // predicted: 63323.000	2032.25	70.72		0.952 - 63415.000	2032.50	70.82		0.975
          return 70.72;
        }
        else if ($mjd >= 63415 && $mjd < 63506) { // predicted: 63415.000	2032.50	70.82		0.975 - 63506.000	2032.75	70.86		1
          return 70.82;
        }
        else if ($mjd >= 63506 && $mjd < 63597) { // predicted: 63506.000	2032.75	70.86		1 - 63597.000	2033.00	70.98		1
          return 70.86;
        }
        else if ($mjd >= 63597 && $mjd < 63689) { // predicted: 63597.000	2033.00	70.98		1 - 63689.000	2033.25	71.10		1
          return 70.98;
        }
        else if ($mjd >= 63689 && $mjd < 63780) { // predicted: 63689.000	2033.25	71.10		1 - 63780.000	2033.50	71.20		1
          return 71.10;
        }
        else if ($mjd >= 63780 && $mjd < 63871) { // predicted: 63780.000	2033.50	71.20		1 - 63871.000	2033.75	71.25		1
          return 71.20;
        }
        else if ($mjd >= -73733 && $mjd < -73550.5) { // historic: 1657.000     44       12        -4       41 - 1657.500     43       15        -5       48
          return 44;
        }
        else if ($mjd >= -73550.5 && $mjd < -73368) { // historic: 1657.500     43       15        -5       48 - 1658.000     43       10        -6       58
          return 43;
        }
        else if ($mjd >= -73368 && $mjd < -73185.5) { // historic: 1658.000     43       10        -6       58 - 1658.500     41       10        -6       38
          return 43;
        }
        else if ($mjd >= -73185.5 && $mjd < -73003) { // historic: 1658.500     41       10        -6       38 - 1659.000     40       12        -6       37
          return 41;
        }
        else if ($mjd >= -73003 && $mjd < -72820.5) { // historic: 1659.000     40       12        -6       37 - 1659.500     39       14        -5       45
          return 40;
        }
        else if ($mjd >= -72820.5 && $mjd < -72638) { // historic: 1659.500     39       14        -5       45 - 1660.000     38       15        -4       53
          return 39;
        }
        else if ($mjd >= -72638 && $mjd < -72455.5) { // historic: 1660.000     38       15        -4       53 - 1660.500     37       16        -3       59
          return 38;
        }
        else if ($mjd >= -72455.5 && $mjd < -72272) { // historic: 1660.500     37       16        -3       59 - 1661.000     37       16        -2       62
          return 37;
        }
        else if ($mjd >= -72272 && $mjd < -72089.5) { // historic: 1661.000     37       16        -2       62 - 1661.500     36       16        -1       63
          return 37;
        }
        else if ($mjd >= -72089.5 && $mjd < -71907) { // historic: 1661.500     36       16        -1       63 - 1662.000     36       15         1       62
          return 36;
        }
        else if ($mjd >= -71907 && $mjd < -71724.5) { // historic: 1662.000     36       15         1       62 - 1662.500     36       15         2       60
          return 36;
        }
        else if ($mjd >= -71724.5 && $mjd < -71542) { // historic: 1662.500     36       15         2       60 - 1663.000     37        9         2       59
          return 36;
        }
        else if ($mjd >= -71542 && $mjd < -71359.5) { // historic: 1663.000     37        9         2       59 - 1663.500     37        9         0       33
          return 37;
        }
        else if ($mjd >= -71359.5 && $mjd < -71177) { // historic: 1663.500     37        9         0       33 - 1664.000     38        7        -1       35
          return 37;
        }
        else if ($mjd >= -71177 && $mjd < -70994.5) { // historic: 1664.000     38        7        -1       35 - 1664.500     37        7        -3       27
          return 38;
        }
        else if ($mjd >= -70994.5 && $mjd < -70811) { // historic: 1664.500     37        7        -3       27 - 1665.000     36        9        -4       28
          return 37;
        }
        else if ($mjd >= -70811 && $mjd < -70628.5) { // historic: 1665.000     36        9        -4       28 - 1665.500     36       11        -4       35
          return 36;
        }
        else if ($mjd >= -70628.5 && $mjd < -70446) { // historic: 1665.500     36       11        -4       35 - 1666.000     35       13        -3       43
          return 36;
        }
        else if ($mjd >= -70446 && $mjd < -70263.5) { // historic: 1666.000     35       13        -3       43 - 1666.500     35       14        -3       49
          return 35;
        }
        else if ($mjd >= -70263.5 && $mjd < -70081) { // historic: 1666.500     35       14        -3       49 - 1667.000     34       15        -3       54
          return 35;
        }
        else if ($mjd >= -70081 && $mjd < -69898.5) { // historic: 1667.000     34       15        -3       54 - 1667.500     33       15        -3       58
          return 34;
        }
        else if ($mjd >= -69898.5 && $mjd < -69716) { // historic: 1667.500     33       15        -3       58 - 1668.000     33       15        -3       60
          return 33;
        }
        else if ($mjd >= -69716 && $mjd < -69533.5) { // historic: 1668.000     33       15        -3       60 - 1668.500     32       15        -3       59
          return 33;
        }
        else if ($mjd >= -69533.5 && $mjd < -69350) { // historic: 1668.500     32       15        -3       59 - 1669.000     32       14        -3       58
          return 32;
        }
        else if ($mjd >= -69350 && $mjd < -69167.5) { // historic: 1669.000     32       14        -3       58 - 1669.500     31       13        -3       55
          return 32;
        }
        else if ($mjd >= -69167.5 && $mjd < -68985) { // historic: 1669.500     31       13        -3       55 - 1670.000     31       12        -3       51
          return 31;
        }
        else if ($mjd >= -68985 && $mjd < -68802.5) { // historic: 1670.000     31       12        -3       51 - 1670.500     30       11        -3       47
          return 31;
        }
        else if ($mjd >= -68802.5 && $mjd < -68620) { // historic: 1670.500     30       11        -3       47 - 1671.000     30        6        -2       44
          return 30;
        }
        else if ($mjd >= -68620 && $mjd < -68437.5) { // historic: 1671.000     30        6        -2       44 - 1671.500     29        7        -1       24
          return 30;
        }
        else if ($mjd >= -68437.5 && $mjd < -68255) { // historic: 1671.500     29        7        -1       24 - 1672.000     29        6        -1       29
          return 29;
        }
        else if ($mjd >= -68255 && $mjd < -68072.5) { // historic: 1672.000     29        6        -1       29 - 1672.500     29       11        -1       22
          return 29;
        }
        else if ($mjd >= -68072.5 && $mjd < -67889) { // historic: 1672.500     29       11        -1       22 - 1673.000     29       10        -1       44
          return 29;
        }
        else if ($mjd >= -67889 && $mjd < -67706.5) { // historic: 1673.000     29       10        -1       44 - 1673.500     29       11        -2       37
          return 29;
        }
        else if ($mjd >= -67706.5 && $mjd < -67524) { // historic: 1673.500     29       11        -2       37 - 1674.000     28        9        -3       44
          return 29;
        }
        else if ($mjd >= -67524 && $mjd < -67341.5) { // historic: 1674.000     28        9        -3       44 - 1674.500     28        9        -3       36
          return 28;
        }
        else if ($mjd >= -67341.5 && $mjd < -67159) { // historic: 1674.500     28        9        -3       36 - 1675.000     27       10        -3       33
          return 28;
        }
        else if ($mjd >= -67159 && $mjd < -66976.5) { // historic: 1675.000     27       10        -3       33 - 1675.500     27       12        -3       40
          return 27;
        }
        else if ($mjd >= -66976.5 && $mjd < -66794) { // historic: 1675.500     27       12        -3       40 - 1676.000     26        8        -3       47
          return 27;
        }
        else if ($mjd >= -66794 && $mjd < -66611.5) { // historic: 1676.000     26        8        -3       47 - 1676.500     26        9        -2       31
          return 26;
        }
        else if ($mjd >= -66611.5 && $mjd < -66428) { // historic: 1676.500     26        9        -2       31 - 1677.000     25       11        -1       34
          return 26;
        }
        else if ($mjd >= -66428 && $mjd < -66245.5) { // historic: 1677.000     25       11        -1       34 - 1677.500     25       12         0       41
          return 25;
        }
        else if ($mjd >= -66245.5 && $mjd < -66063) { // historic: 1677.500     25       12         0       41 - 1678.000     25        8         1       46
          return 25;
        }
        else if ($mjd >= -66063 && $mjd < -65880.5) { // historic: 1678.000     25        8         1       46 - 1678.500     26       11         1       30
          return 25;
        }
        else if ($mjd >= -65880.5 && $mjd < -65698) { // historic: 1678.500     26       11         1       30 - 1679.000     26        9         0       42
          return 26;
        }
        else if ($mjd >= -65698 && $mjd < -65515.5) { // historic: 1679.000     26        9         0       42 - 1679.500     26       11        -1       34
          return 26;
        }
        else if ($mjd >= -65515.5 && $mjd < -65333) { // historic: 1679.500     26       11        -1       34 - 1680.000     26        9        -2       41
          return 26;
        }
        else if ($mjd >= -65333 && $mjd < -65150.5) { // historic: 1680.000     26        9        -2       41 - 1680.500     25        9        -2       33
          return 26;
        }
        else if ($mjd >= -65150.5 && $mjd < -64967) { // historic: 1680.500     25        9        -2       33 - 1681.000     25       11        -2       36
          return 25;
        }
        else if ($mjd >= -64967 && $mjd < -64784.5) { // historic: 1681.000     25       11        -2       36 - 1681.500     25       12        -1       42
          return 25;
        }
        else if ($mjd >= -64784.5 && $mjd < -64602) { // historic: 1681.500     25       12        -1       42 - 1682.000     24        8        -1       48
          return 25;
        }
        else if ($mjd >= -64602 && $mjd < -64419.5) { // historic: 1682.000     24        8        -1       48 - 1682.500     24       10        -1       31
          return 24;
        }
        else if ($mjd >= -64419.5 && $mjd < -64237) { // historic: 1682.500     24       10        -1       31 - 1683.000     24        8        -1       40
          return 24;
        }
        else if ($mjd >= -64237 && $mjd < -64054.5) { // historic: 1683.000     24        8        -1       40 - 1683.500     24       10        -1       32
          return 24;
        }
        else if ($mjd >= -64054.5 && $mjd < -63872) { // historic: 1683.500     24       10        -1       32 - 1684.000     24        8         0       40
          return 24;
        }
        else if ($mjd >= -63872 && $mjd < -63689.5) { // historic: 1684.000     24        8         0       40 - 1684.500     24       11         0       32
          return 24;
        }
        else if ($mjd >= -63689.5 && $mjd < -63506) { // historic: 1684.500     24       11         0       32 - 1685.000     24        8         0       41
          return 24;
        }
        else if ($mjd >= -63506 && $mjd < -63323.5) { // historic: 1685.000     24        8         0       41 - 1685.500     24       10         0       33
          return 24;
        }
        else if ($mjd >= -63323.5 && $mjd < -63141) { // historic: 1685.500     24       10         0       33 - 1686.000     24        8        -1       40
          return 24;
        }
        else if ($mjd >= -63141 && $mjd < -62958.5) { // historic: 1686.000     24        8        -1       40 - 1686.500     24        9        -1       32
          return 24;
        }
        else if ($mjd >= -62958.5 && $mjd < -62776) { // historic: 1686.500     24        9        -1       32 - 1687.000     23        9        -2       33
          return 24;
        }
        else if ($mjd >= -62776 && $mjd < -62593.5) { // historic: 1687.000     23        9        -2       33 - 1687.500     23       11        -1       36
          return 23;
        }
        else if ($mjd >= -62593.5 && $mjd < -62411) { // historic: 1687.500     23       11        -1       36 - 1688.000     23       12        -1       41
          return 23;
        }
        else if ($mjd >= -62411 && $mjd < -62228.5) { // historic: 1688.000     23       12        -1       41 - 1688.500     23       13        -1       46
          return 23;
        }
        else if ($mjd >= -62228.5 && $mjd < -62045) { // historic: 1688.500     23       13        -1       46 - 1689.000     22       14        -1       51
          return 23;
        }
        else if ($mjd >= -62045 && $mjd < -61862.5) { // historic: 1689.000     22       14        -1       51 - 1689.500     22       15        -1       56
          return 22;
        }
        else if ($mjd >= -61862.5 && $mjd < -61680) { // historic: 1689.500     22       15        -1       56 - 1690.000     22       16        -1       60
          return 22;
        }
        else if ($mjd >= -61680 && $mjd < -61497.5) { // historic: 1690.000     22       16        -1       60 - 1690.500     22       17        -1       64
          return 22;
        }
        else if ($mjd >= -61497.5 && $mjd < -61315) { // historic: 1690.500     22       17        -1       64 - 1691.000     22       18        -1       67
          return 22;
        }
        else if ($mjd >= -61315 && $mjd < -61132.5) { // historic: 1691.000     22       18        -1       67 - 1691.500     21       18        -1       69
          return 22;
        }
        else if ($mjd >= -61132.5 && $mjd < -60950) { // historic: 1691.500     21       18        -1       69 - 1692.000     21       19        -1       71
          return 21;
        }
        else if ($mjd >= -60950 && $mjd < -60767.5) { // historic: 1692.000     21       19        -1       71 - 1692.500     21       19        -1       73
          return 21;
        }
        else if ($mjd >= -60767.5 && $mjd < -60584) { // historic: 1692.500     21       19        -1       73 - 1693.000     21       19        -1       74
          return 21;
        }
        else if ($mjd >= -60584 && $mjd < -60401.5) { // historic: 1693.000     21       19        -1       74 - 1693.500     21       19        -1       74
          return 21;
        }
        else if ($mjd >= -60401.5 && $mjd < -60219) { // historic: 1693.500     21       19        -1       74 - 1694.000     21       19        -1       74
          return 21;
        }
        else if ($mjd >= -60219 && $mjd < -60036.5) { // historic: 1694.000     21       19        -1       74 - 1694.500     21       18         0       73
          return 21;
        }
        else if ($mjd >= -60036.5 && $mjd < -59854) { // historic: 1694.500     21       18         0       73 - 1695.000     21       18         0       71
          return 21;
        }
        else if ($mjd >= -59854 && $mjd < -59671.5) { // historic: 1695.000     21       18         0       71 - 1695.500     20       17         0       69
          return 21;
        }
        else if ($mjd >= -59671.5 && $mjd < -59489) { // historic: 1695.500     20       17         0       69 - 1696.000     20       17         0       67
          return 20;
        }
        else if ($mjd >= -59489 && $mjd < -59306.5) { // historic: 1696.000     20       17         0       67 - 1696.500     20       16         0       65
          return 20;
        }
        else if ($mjd >= -59306.5 && $mjd < -59123) { // historic: 1696.500     20       16         0       65 - 1697.000     20       15         0       62
          return 20;
        }
        else if ($mjd >= -59123 && $mjd < -58940.5) { // historic: 1697.000     20       15         0       62 - 1697.500     20       15         0       59
          return 20;
        }
        else if ($mjd >= -58940.5 && $mjd < -58758) { // historic: 1697.500     20       15         0       59 - 1698.000     20       14         0       57
          return 20;
        }
        else if ($mjd >= -58758 && $mjd < -58575.5) { // historic: 1698.000     20       14         0       57 - 1698.500     20       14         0       55
          return 20;
        }
        else if ($mjd >= -58575.5 && $mjd < -58393) { // historic: 1698.500     20       14         0       55 - 1699.000     20        8         0       55
          return 20;
        }
        else if ($mjd >= -58393 && $mjd < -58210.5) { // historic: 1699.000     20        8         0       55 - 1699.500     20        8         0       32
          return 20;
        }
        else if ($mjd >= -58210.5 && $mjd < -58028) { // historic: 1699.500     20        8         0       32 - 1700.000     21       10         0       33
          return 20;
        }
        else if ($mjd >= -58028 && $mjd < -57845.5) { // historic: 1700.000     21       10         0       33 - 1700.500     21       12         0       38
          return 21;
        }
        else if ($mjd >= -57845.5 && $mjd < -57663) { // historic: 1700.500     21       12         0       38 - 1701.000     21        8        -1       45
          return 21;
        }
        else if ($mjd >= -57663 && $mjd < -57480.5) { // historic: 1701.000     21        8        -1       45 - 1701.500     20        7        -1       31
          return 21;
        }
        else if ($mjd >= -57480.5 && $mjd < -57298) { // historic: 1701.500     20        7        -1       31 - 1702.000     20        8        -1       27
          return 20;
        }
        else if ($mjd >= -57298 && $mjd < -57115.5) { // historic: 1702.000     20        8        -1       27 - 1702.500     20       10        -1       33
          return 20;
        }
        else if ($mjd >= -57115.5 && $mjd < -56933) { // historic: 1702.500     20       10        -1       33 - 1703.000     20       11        -1       38
          return 20;
        }
        else if ($mjd >= -56933 && $mjd < -56750.5) { // historic: 1703.000     20       11        -1       38 - 1703.500     20       11        -1       41
          return 20;
        }
        else if ($mjd >= -56750.5 && $mjd < -56568) { // historic: 1703.500     20       11        -1       41 - 1704.000     19       11        -1       42
          return 20;
        }
        else if ($mjd >= -56568 && $mjd < -56385.5) { // historic: 1704.000     19       11        -1       42 - 1704.500     19       11        -1       43
          return 19;
        }
        else if ($mjd >= -56385.5 && $mjd < -56202) { // historic: 1704.500     19       11        -1       43 - 1705.000     19        6         0       43
          return 19;
        }
        else if ($mjd >= -56202 && $mjd < -56019.5) { // historic: 1705.000     19        6         0       43 - 1705.500     19        7         1       24
          return 19;
        }
        else if ($mjd >= -56019.5 && $mjd < -55837) { // historic: 1705.500     19        7         1       24 - 1706.000     19        6         1       28
          return 19;
        }
        else if ($mjd >= -55837 && $mjd < -55654.5) { // historic: 1706.000     19        6         1       28 - 1706.500     20        9         0       22
          return 19;
        }
        else if ($mjd >= -55654.5 && $mjd < -55472) { // historic: 1706.500     20        9         0       22 - 1707.000     20        7         0       34
          return 20;
        }
        else if ($mjd >= -55472 && $mjd < -55289.5) { // historic: 1707.000     20        7         0       34 - 1707.500     20        7         0       28
          return 20;
        }
        else if ($mjd >= -55289.5 && $mjd < -55107) { // historic: 1707.500     20        7         0       28 - 1708.000     20        8         0       27
          return 20;
        }
        else if ($mjd >= -55107 && $mjd < -54924.5) { // historic: 1708.000     20        8         0       27 - 1708.500     19       10         1       32
          return 20;
        }
        else if ($mjd >= -54924.5 && $mjd < -54741) { // historic: 1708.500     19       10         1       32 - 1709.000     20        6         1       37
          return 19;
        }
        else if ($mjd >= -54741 && $mjd < -54558.5) { // historic: 1709.000     20        6         1       37 - 1709.500     20        7         1       24
          return 20;
        }
        else if ($mjd >= -54558.5 && $mjd < -54376) { // historic: 1709.500     20        7         1       24 - 1710.000     20        6         1       28
          return 20;
        }
        else if ($mjd >= -54376 && $mjd < -54193.5) { // historic: 1710.000     20        6         1       28 - 1710.500     20        8         1       23
          return 20;
        }
        else if ($mjd >= -54193.5 && $mjd < -54011) { // historic: 1710.500     20        8         1       23 - 1711.000     20        6         1       30
          return 20;
        }
        else if ($mjd >= -54011 && $mjd < -53828.5) { // historic: 1711.000     20        6         1       30 - 1711.500     20        8         1       24
          return 20;
        }
        else if ($mjd >= -53828.5 && $mjd < -53646) { // historic: 1711.500     20        8         1       24 - 1712.000     21        6         1       30
          return 20;
        }
        else if ($mjd >= -53646 && $mjd < -53463.5) { // historic: 1712.000     21        6         1       30 - 1712.500     21        8         0       24
          return 21;
        }
        else if ($mjd >= -53463.5 && $mjd < -53280) { // historic: 1712.500     21        8         0       24 - 1713.000     21        7         0       31
          return 21;
        }
        else if ($mjd >= -53280 && $mjd < -53097.5) { // historic: 1713.000     21        7         0       31 - 1713.500     21        8         0       25
          return 21;
        }
        else if ($mjd >= -53097.5 && $mjd < -52915) { // historic: 1713.500     21        8         0       25 - 1714.000     21        7         0       33
          return 21;
        }
        else if ($mjd >= -52915 && $mjd < -52732.5) { // historic: 1714.000     21        7         0       33 - 1714.500     21        9         0       26
          return 21;
        }
        else if ($mjd >= -52732.5 && $mjd < -52550) { // historic: 1714.500     21        9         0       26 - 1715.000     21        7         0       33
          return 21;
        }
        else if ($mjd >= -52550 && $mjd < -52367.5) { // historic: 1715.000     21        7         0       33 - 1715.500     21        8         0       27
          return 21;
        }
        else if ($mjd >= -52367.5 && $mjd < -52185) { // historic: 1715.500     21        8         0       27 - 1716.000     21        9         0       29
          return 21;
        }
        else if ($mjd >= -52185 && $mjd < -52002.5) { // historic: 1716.000     21        9         0       29 - 1716.500     21       10         1       35
          return 21;
        }
        else if ($mjd >= -52002.5 && $mjd < -51819) { // historic: 1716.500     21       10         1       35 - 1717.000     21        7         1       39
          return 21;
        }
        else if ($mjd >= -51819 && $mjd < -51636.5) { // historic: 1717.000     21        7         1       39 - 1717.500     21        8         0       26
          return 21;
        }
        else if ($mjd >= -51636.5 && $mjd < -51454) { // historic: 1717.500     21        8         0       26 - 1718.000     21        6         0       30
          return 21;
        }
        else if ($mjd >= -51454 && $mjd < -51271.5) { // historic: 1718.000     21        6         0       30 - 1718.500     21        8         0       24
          return 21;
        }
        else if ($mjd >= -51271.5 && $mjd < -51089) { // historic: 1718.500     21        8         0       24 - 1719.000     21        6         0       29
          return 21;
        }
        else if ($mjd >= -51089 && $mjd < -50906.5) { // historic: 1719.000     21        6         0       29 - 1719.500     21        7         0       23
          return 21;
        }
        else if ($mjd >= -50906.5 && $mjd < -50724) { // historic: 1719.500     21        7         0       23 - 1720.000     21.1      5.7      -0.2     27.4
          return 21;
        }
        else if ($mjd >= -50724 && $mjd < -50541.5) { // historic: 1720.000     21.1      5.7      -0.2     27.4 - 1720.500     21.0      5.1      -0.3     22.2
          return 21.1;
        }
        else if ($mjd >= -50541.5 && $mjd < -50358) { // historic: 1720.500     21.0      5.1      -0.3     22.2 - 1721.000     21.0      5.5      -0.3     19.6
          return 21.0;
        }
        else if ($mjd >= -50358 && $mjd < -50175.5) { // historic: 1721.000     21.0      5.5      -0.3     19.6 - 1721.500     21.0      6.0      -0.3     21.3
          return 21.0;
        }
        else if ($mjd >= -50175.5 && $mjd < -49993) { // historic: 1721.500     21.0      6.0      -0.3     21.3 - 1722.000     20.9      6.6      -0.4     23.4
          return 21.0;
        }
        else if ($mjd >= -49993 && $mjd < -49810.5) { // historic: 1722.000     20.9      6.6      -0.4     23.4 - 1722.500     20.8      7.1      -0.6     25.5
          return 20.9;
        }
        else if ($mjd >= -49810.5 && $mjd < -49628) { // historic: 1722.500     20.8      7.1      -0.6     25.5 - 1723.000     20.7      7.5      -0.8     27.4
          return 20.8;
        }
        else if ($mjd >= -49628 && $mjd < -49445.5) { // historic: 1723.000     20.7      7.5      -0.8     27.4 - 1723.500     20.6      7.8      -0.9     29.0
          return 20.7;
        }
        else if ($mjd >= -49445.5 && $mjd < -49263) { // historic: 1723.500     20.6      7.8      -0.9     29.0 - 1724.000     20.4      8.1      -1.1     30.3
          return 20.6;
        }
        else if ($mjd >= -49263 && $mjd < -49080.5) { // historic: 1724.000     20.4      8.1      -1.1     30.3 - 1724.500     20.2      8.3      -1.3     31.3
          return 20.4;
        }
        else if ($mjd >= -49080.5 && $mjd < -48897) { // historic: 1724.500     20.2      8.3      -1.3     31.3 - 1725.000     20.0      8.4      -1.4     32.1
          return 20.2;
        }
        else if ($mjd >= -48897 && $mjd < -48714.5) { // historic: 1725.000     20.0      8.4      -1.4     32.1 - 1725.500     19.7      8.6      -1.6     32.7
          return 20.0;
        }
        else if ($mjd >= -48714.5 && $mjd < -48532) { // historic: 1725.500     19.7      8.6      -1.6     32.7 - 1726.000     19.4      8.8      -1.9     33.2
          return 19.7;
        }
        else if ($mjd >= -48532 && $mjd < -48349.5) { // historic: 1726.000     19.4      8.8      -1.9     33.2 - 1726.500     19.1      9.0      -2.1     33.9
          return 19.4;
        }
        else if ($mjd >= -48349.5 && $mjd < -48167) { // historic: 1726.500     19.1      9.0      -2.1     33.9 - 1727.000     18.7      4.9      -2.3     34.9
          return 19.1;
        }
        else if ($mjd >= -48167 && $mjd < -47984.5) { // historic: 1727.000     18.7      4.9      -2.3     34.9 - 1727.500     18.3      4.4      -2.3     18.9
          return 18.7;
        }
        else if ($mjd >= -47984.5 && $mjd < -47802) { // historic: 1727.500     18.3      4.4      -2.3     18.9 - 1728.000     17.8      5.2      -2.1     17.0
          return 18.3;
        }
        else if ($mjd >= -47802 && $mjd < -47619.5) { // historic: 1728.000     17.8      5.2      -2.1     17.0 - 1728.500     17.4      6.3      -1.8     20.2
          return 17.8;
        }
        else if ($mjd >= -47619.5 && $mjd < -47436) { // historic: 1728.500     17.4      6.3      -1.8     20.2 - 1729.000     17.0      4.1      -1.5     24.4
          return 17.4;
        }
        else if ($mjd >= -47436 && $mjd < -47253.5) { // historic: 1729.000     17.0      4.1      -1.5     24.4 - 1729.500     16.8      3.3      -1.3     15.8
          return 17.0;
        }
        else if ($mjd >= -47253.5 && $mjd < -47071) { // historic: 1729.500     16.8      3.3      -1.3     15.8 - 1730.000     16.6      3.6      -1.2     12.8
          return 16.8;
        }
        else if ($mjd >= -47071 && $mjd < -46888.5) { // historic: 1730.000     16.6      3.6      -1.2     12.8 - 1730.500     16.4      3.9      -1.2     13.8
          return 16.6;
        }
        else if ($mjd >= -46888.5 && $mjd < -46706) { // historic: 1730.500     16.4      3.9      -1.2     13.8 - 1731.000     16.1      4.3      -1.2     15.1
          return 16.4;
        }
        else if ($mjd >= -46706 && $mjd < -46523.5) { // historic: 1731.000     16.1      4.3      -1.2     15.1 - 1731.500     15.9      4.7      -1.2     16.5
          return 16.1;
        }
        else if ($mjd >= -46523.5 && $mjd < -46341) { // historic: 1731.500     15.9      4.7      -1.2     16.5 - 1732.000     15.7      5.1      -1.2     18.1
          return 15.9;
        }
        else if ($mjd >= -46341 && $mjd < -46158.5) { // historic: 1732.000     15.7      5.1      -1.2     18.1 - 1732.500     15.5      5.6      -1.4     19.8
          return 15.7;
        }
        else if ($mjd >= -46158.5 && $mjd < -45975) { // historic: 1732.500     15.5      5.6      -1.4     19.8 - 1733.000     15.3      3.2      -1.5     21.6
          return 15.5;
        }
        else if ($mjd >= -45975 && $mjd < -45792.5) { // historic: 1733.000     15.3      3.2      -1.5     21.6 - 1733.500     15.0      2.8      -1.4     12.4
          return 15.3;
        }
        else if ($mjd >= -45792.5 && $mjd < -45610) { // historic: 1733.500     15.0      2.8      -1.4     12.4 - 1734.000     14.7      3.3      -1.2     10.8
          return 15.0;
        }
        else if ($mjd >= -45610 && $mjd < -45427.5) { // historic: 1734.000     14.7      3.3      -1.2     10.8 - 1734.500     14.5      3.7      -1.0     12.8
          return 14.7;
        }
        else if ($mjd >= -45427.5 && $mjd < -45245) { // historic: 1734.500     14.5      3.7      -1.0     12.8 - 1735.000     14.3      4.1      -0.6     14.5
          return 14.5;
        }
        else if ($mjd >= -45245 && $mjd < -45062.5) { // historic: 1735.000     14.3      4.1      -0.6     14.5 - 1735.500     14.2      4.3      -0.3     15.7
          return 14.3;
        }
        else if ($mjd >= -45062.5 && $mjd < -44880) { // historic: 1735.500     14.2      4.3      -0.3     15.7 - 1736.000     14.1      2.5      -0.2     16.8
          return 14.2;
        }
        else if ($mjd >= -44880 && $mjd < -44697.5) { // historic: 1736.000     14.1      2.5      -0.2     16.8 - 1736.500     14.1      2.4      -0.4      9.7
          return 14.1;
        }
        else if ($mjd >= -44697.5 && $mjd < -44514) { // historic: 1736.500     14.1      2.4      -0.4      9.7 - 1737.000     14.1      1.8      -0.7      9.3
          return 14.1;
        }
        else if ($mjd >= -44514 && $mjd < -44331.5) { // historic: 1737.000     14.1      1.8      -0.7      9.3 - 1737.500     13.9      1.8      -0.8      7.0
          return 14.1;
        }
        else if ($mjd >= -44331.5 && $mjd < -44149) { // historic: 1737.500     13.9      1.8      -0.8      7.0 - 1738.000     13.7      1.4      -0.6      7.0
          return 13.9;
        }
        else if ($mjd >= -44149 && $mjd < -43966.5) { // historic: 1738.000     13.7      1.4      -0.6      7.0 - 1738.500     13.6      1.6      -0.4      5.3
          return 13.7;
        }
        else if ($mjd >= -43966.5 && $mjd < -43784) { // historic: 1738.500     13.6      1.6      -0.4      5.3 - 1739.000     13.5      1.3      -0.3      6.2
          return 13.6;
        }
        else if ($mjd >= -43784 && $mjd < -43601.5) { // historic: 1739.000     13.5      1.3      -0.3      6.2 - 1739.500     13.5      2.8      -0.2      5.0
          return 13.5;
        }
        else if ($mjd >= -43601.5 && $mjd < -43419) { // historic: 1739.500     13.5      2.8      -0.2      5.0 - 1740.000     13.5      3.5      -0.1     10.8
          return 13.5;
        }
        else if ($mjd >= -43419 && $mjd < -43236.5) { // historic: 1740.000     13.5      3.5      -0.1     10.8 - 1740.500     13.5      4.3      -0.2     13.6
          return 13.5;
        }
        else if ($mjd >= -43236.5 && $mjd < -43053) { // historic: 1740.500     13.5      4.3      -0.2     13.6 - 1741.000     13.4      4.9      -0.2     16.6
          return 13.5;
        }
        else if ($mjd >= -43053 && $mjd < -42870.5) { // historic: 1741.000     13.4      4.9      -0.2     16.6 - 1741.500     13.4      5.4      -0.2     19.1
          return 13.4;
        }
        else if ($mjd >= -42870.5 && $mjd < -42688) { // historic: 1741.500     13.4      5.4      -0.2     19.1 - 1742.000     13.4      5.7      -0.2     21.0
          return 13.4;
        }
        else if ($mjd >= -42688 && $mjd < -42505.5) { // historic: 1742.000     13.4      5.7      -0.2     21.0 - 1742.500     13.4      5.9      -0.2     22.2
          return 13.4;
        }
        else if ($mjd >= -42505.5 && $mjd < -42323) { // historic: 1742.500     13.4      5.9      -0.2     22.2 - 1743.000     13.3      5.8      -0.2     22.7
          return 13.4;
        }
        else if ($mjd >= -42323 && $mjd < -42140.5) { // historic: 1743.000     13.3      5.8      -0.2     22.7 - 1743.500     13.3      5.6      -0.2     22.6
          return 13.3;
        }
        else if ($mjd >= -42140.5 && $mjd < -41958) { // historic: 1743.500     13.3      5.6      -0.2     22.6 - 1744.000     13.2      5.2      -0.2     21.7
          return 13.3;
        }
        else if ($mjd >= -41958 && $mjd < -41775.5) { // historic: 1744.000     13.2      5.2      -0.2     21.7 - 1744.500     13.2      4.8      -0.2     20.3
          return 13.2;
        }
        else if ($mjd >= -41775.5 && $mjd < -41592) { // historic: 1744.500     13.2      4.8      -0.2     20.3 - 1745.000     13.2      4.2      -0.2     18.4
          return 13.2;
        }
        else if ($mjd >= -41592 && $mjd < -41409.5) { // historic: 1745.000     13.2      4.2      -0.2     18.4 - 1745.500     13.1      3.8      -0.2     16.3
          return 13.2;
        }
        else if ($mjd >= -41409.5 && $mjd < -41227) { // historic: 1745.500     13.1      3.8      -0.2     16.3 - 1746.000     13.1      2.4      -0.1     14.6
          return 13.1;
        }
        else if ($mjd >= -41227 && $mjd < -41044.5) { // historic: 1746.000     13.1      2.4      -0.1     14.6 - 1746.500     13.1      2.9       0.1      9.3
          return 13.1;
        }
        else if ($mjd >= -41044.5 && $mjd < -40862) { // historic: 1746.500     13.1      2.9       0.1      9.3 - 1747.000     13.0      2.3       0.4     11.2
          return 13.1;
        }
        else if ($mjd >= -40862 && $mjd < -40679.5) { // historic: 1747.000     13.0      2.3       0.4     11.2 - 1747.500     13.2      2.5       0.6      9.1
          return 13.0;
        }
        else if ($mjd >= -40679.5 && $mjd < -40497) { // historic: 1747.500     13.2      2.5       0.6      9.1 - 1748.000     13.3      3.1       0.7      9.6
          return 13.2;
        }
        else if ($mjd >= -40497 && $mjd < -40314.5) { // historic: 1748.000     13.3      3.1       0.7      9.6 - 1748.500     13.4      3.6       0.6     11.8
          return 13.3;
        }
        else if ($mjd >= -40314.5 && $mjd < -40131) { // historic: 1748.500     13.4      3.6       0.6     11.8 - 1749.000     13.5      4.1       0.6     14.1
          return 13.4;
        }
        else if ($mjd >= -40131 && $mjd < -39948.5) { // historic: 1749.000     13.5      4.1       0.6     14.1 - 1749.500     13.6      4.4       0.5     15.9
          return 13.5;
        }
        else if ($mjd >= -39948.5 && $mjd < -39766) { // historic: 1749.500     13.6      4.4       0.5     15.9 - 1750.000     13.7      4.6       0.5     17.2
          return 13.6;
        }
        else if ($mjd >= -39766 && $mjd < -39583.5) { // historic: 1750.000     13.7      4.6       0.5     17.2 - 1750.500     13.8      4.6       0.4     17.8
          return 13.7;
        }
        else if ($mjd >= -39583.5 && $mjd < -39401) { // historic: 1750.500     13.8      4.6       0.4     17.8 - 1751.000     13.9      4.5       0.4     17.9
          return 13.8;
        }
        else if ($mjd >= -39401 && $mjd < -39218.5) { // historic: 1751.000     13.9      4.5       0.4     17.9 - 1751.500     14.0      4.3       0.3     17.4
          return 13.9;
        }
        else if ($mjd >= -39218.5 && $mjd < -39036) { // historic: 1751.500     14.0      4.3       0.3     17.4 - 1752.000     14.0      4.0       0.3     16.6
          return 14.0;
        }
        else if ($mjd >= -39036 && $mjd < -38853.5) { // historic: 1752.000     14.0      4.0       0.3     16.6 - 1752.500     14.1      3.8       0.2     15.6
          return 14.0;
        }
        else if ($mjd >= -38853.5 && $mjd < -38670) { // historic: 1752.500     14.1      3.8       0.2     15.6 - 1753.000     14.1      2.2       0.2     14.8
          return 14.1;
        }
        else if ($mjd >= -38670 && $mjd < -38487.5) { // historic: 1753.000     14.1      2.2       0.2     14.8 - 1753.500     14.1      2.3       0.3      8.4
          return 14.1;
        }
        else if ($mjd >= -38487.5 && $mjd < -38305) { // historic: 1753.500     14.1      2.3       0.3      8.4 - 1754.000     14.1      1.8       0.4      9.1
          return 14.1;
        }
        else if ($mjd >= -38305 && $mjd < -38122.5) { // historic: 1754.000     14.1      1.8       0.4      9.1 - 1754.500     14.2      1.9       0.4      7.1
          return 14.1;
        }
        else if ($mjd >= -38122.5 && $mjd < -37940) { // historic: 1754.500     14.2      1.9       0.4      7.1 - 1755.000     14.3      2.2       0.4      7.2
          return 14.2;
        }
        else if ($mjd >= -37940 && $mjd < -37757.5) { // historic: 1755.000     14.3      2.2       0.4      7.2 - 1755.500     14.4      2.5       0.4      8.6
          return 14.3;
        }
        else if ($mjd >= -37757.5 && $mjd < -37575) { // historic: 1755.500     14.4      2.5       0.4      8.6 - 1756.000     14.4      2.6       0.3      9.6
          return 14.4;
        }
        else if ($mjd >= -37575 && $mjd < -37392.5) { // historic: 1756.000     14.4      2.6       0.3      9.6 - 1756.500     14.5      2.8       0.3     10.2
          return 14.4;
        }
        else if ($mjd >= -37392.5 && $mjd < -37209) { // historic: 1756.500     14.5      2.8       0.3     10.2 - 1757.000     14.6      1.7       0.3     10.7
          return 14.5;
        }
        else if ($mjd >= -37209 && $mjd < -37026.5) { // historic: 1757.000     14.6      1.7       0.3     10.7 - 1757.500     14.6      1.9       0.2      6.4
          return 14.6;
        }
        else if ($mjd >= -37026.5 && $mjd < -36844) { // historic: 1757.500     14.6      1.9       0.2      6.4 - 1758.000     14.7      1.6       0.2      7.5
          return 14.6;
        }
        else if ($mjd >= -36844 && $mjd < -36661.5) { // historic: 1758.000     14.7      1.6       0.2      7.5 - 1758.500     14.7      1.9       0.2      6.0
          return 14.7;
        }
        else if ($mjd >= -36661.5 && $mjd < -36479) { // historic: 1758.500     14.7      1.9       0.2      6.0 - 1759.000     14.7      2.3       0.2      7.3
          return 14.7;
        }
        else if ($mjd >= -36479 && $mjd < -36296.5) { // historic: 1759.000     14.7      2.3       0.2      7.3 - 1759.500     14.8      2.8       0.2      9.1
          return 14.7;
        }
        else if ($mjd >= -36296.5 && $mjd < -36114) { // historic: 1759.500     14.8      2.8       0.2      9.1 - 1760.000     14.8      3.2       0.3     10.9
          return 14.8;
        }
        else if ($mjd >= -36114 && $mjd < -35931.5) { // historic: 1760.000     14.8      3.2       0.3     10.9 - 1760.500     14.9      3.4       0.3     12.3
          return 14.8;
        }
        else if ($mjd >= -35931.5 && $mjd < -35748) { // historic: 1760.500     14.9      3.4       0.3     12.3 - 1761.000     14.9      3.6       0.3     13.3
          return 14.9;
        }
        else if ($mjd >= -35748 && $mjd < -35565.5) { // historic: 1761.000     14.9      3.6       0.3     13.3 - 1761.500     15.0      3.5       0.4     13.7
          return 14.9;
        }
        else if ($mjd >= -35565.5 && $mjd < -35383) { // historic: 1761.500     15.0      3.5       0.4     13.7 - 1762.000     15.0      3.4       0.4     13.7
          return 15.0;
        }
        else if ($mjd >= -35383 && $mjd < -35200.5) { // historic: 1762.000     15.0      3.4       0.4     13.7 - 1762.500     15.1      3.2       0.4     13.3
          return 15.0;
        }
        else if ($mjd >= -35200.5 && $mjd < -35018) { // historic: 1762.500     15.1      3.2       0.4     13.3 - 1763.000     15.2      3.0       0.5     12.5
          return 15.1;
        }
        else if ($mjd >= -35018 && $mjd < -34835.5) { // historic: 1763.000     15.2      3.0       0.5     12.5 - 1763.500     15.3      2.8       0.5     11.6
          return 15.2;
        }
        else if ($mjd >= -34835.5 && $mjd < -34653) { // historic: 1763.500     15.3      2.8       0.5     11.6 - 1764.000     15.4      1.6       0.5     10.8
          return 15.3;
        }
        else if ($mjd >= -34653 && $mjd < -34470.5) { // historic: 1764.000     15.4      1.6       0.5     10.8 - 1764.500     15.5      1.9       0.4      6.4
          return 15.4;
        }
        else if ($mjd >= -34470.5 && $mjd < -34287) { // historic: 1764.500     15.5      1.9       0.4      6.4 - 1765.000     15.6      1.5       0.4      7.5
          return 15.5;
        }
        else if ($mjd >= -34287 && $mjd < -34104.5) { // historic: 1765.000     15.6      1.5       0.4      7.5 - 1765.500     15.6      1.9       0.5      6.0
          return 15.6;
        }
        else if ($mjd >= -34104.5 && $mjd < -33922) { // historic: 1765.500     15.6      1.9       0.5      6.0 - 1766.000     15.6      1.5       0.7      7.4
          return 15.6;
        }
        else if ($mjd >= -33922 && $mjd < -33739.5) { // historic: 1766.000     15.6      1.5       0.7      7.4 - 1766.500     15.8      1.4       0.5      6.0
          return 15.6;
        }
        else if ($mjd >= -33739.5 && $mjd < -33557) { // historic: 1766.500     15.8      1.4       0.5      6.0 - 1767.000     15.9      1.0       0.1      5.3
          return 15.8;
        }
        else if ($mjd >= -33557 && $mjd < -33374.5) { // historic: 1767.000     15.9      1.0       0.1      5.3 - 1767.500     15.9      1.2      -0.2      3.8
          return 15.9;
        }
        else if ($mjd >= -33374.5 && $mjd < -33192) { // historic: 1767.500     15.9      1.2      -0.2      3.8 - 1768.000     15.9      0.9      -0.3      4.5
          return 15.9;
        }
        else if ($mjd >= -33192 && $mjd < -33009.5) { // historic: 1768.000     15.9      0.9      -0.3      4.5 - 1768.500     15.8      1.2      -0.3      3.5
          return 15.9;
        }
        else if ($mjd >= -33009.5 && $mjd < -32826) { // historic: 1768.500     15.8      1.2      -0.3      3.5 - 1769.000     15.7      0.9      -0.1      4.5
          return 15.8;
        }
        else if ($mjd >= -32826 && $mjd < -32643.5) { // historic: 1769.000     15.7      0.9      -0.1      4.5 - 1769.500     15.8      1.2      -0.1      3.6
          return 15.7;
        }
        else if ($mjd >= -32643.5 && $mjd < -32461) { // historic: 1769.500     15.8      1.2      -0.1      3.6 - 1770.000     15.7      0.9      -0.2      4.5
          return 15.8;
        }
        else if ($mjd >= -32461 && $mjd < -32278.5) { // historic: 1770.000     15.7      0.9      -0.2      4.5 - 1770.500     15.7      1.1       0.0      3.6
          return 15.7;
        }
        else if ($mjd >= -32278.5 && $mjd < -32096) { // historic: 1770.500     15.7      1.1       0.0      3.6 - 1771.000     15.7      0.9       0.3      4.4
          return 15.7;
        }
        else if ($mjd >= -32096 && $mjd < -31913.5) { // historic: 1771.000     15.7      0.9       0.3      4.4 - 1771.500     15.8      1.2       0.6      3.5
          return 15.7;
        }
        else if ($mjd >= -31913.5 && $mjd < -31731) { // historic: 1771.500     15.8      1.2       0.6      3.5 - 1772.000     15.9      1.0       0.7      4.7
          return 15.8;
        }
        else if ($mjd >= -31731 && $mjd < -31548.5) { // historic: 1772.000     15.9      1.0       0.7      4.7 - 1772.500     16.1      1.1       0.3      3.8
          return 15.9;
        }
        else if ($mjd >= -31548.5 && $mjd < -31365) { // historic: 1772.500     16.1      1.1       0.3      3.8 - 1773.000     16.1      0.9      -0.3      4.3
          return 16.1;
        }
        else if ($mjd >= -31365 && $mjd < -31182.5) { // historic: 1773.000     16.1      0.9      -0.3      4.3 - 1773.500     16.0      0.8      -0.5      3.4
          return 16.1;
        }
        else if ($mjd >= -31182.5 && $mjd < -31000) { // historic: 1773.500     16.0      0.8      -0.5      3.4 - 1774.000     15.9      0.6      -0.6      3.2
          return 16.0;
        }
        else if ($mjd >= -31000 && $mjd < -30817.5) { // historic: 1774.000     15.9      0.6      -0.6      3.2 - 1774.500     15.9      1.2      -0.8      2.3
          return 15.9;
        }
        else if ($mjd >= -30817.5 && $mjd < -30635) { // historic: 1774.500     15.9      1.2      -0.8      2.3 - 1775.000     15.7      1.0      -1.0      4.7
          return 15.9;
        }
        else if ($mjd >= -30635 && $mjd < -30452.5) { // historic: 1775.000     15.7      1.0      -1.0      4.7 - 1775.500     15.4      1.4      -0.6      3.9
          return 15.7;
        }
        else if ($mjd >= -30452.5 && $mjd < -30270) { // historic: 1775.500     15.4      1.4      -0.6      3.9 - 1776.000     15.3      1.2       0.0      5.6
          return 15.4;
        }
        else if ($mjd >= -30270 && $mjd < -30087.5) { // historic: 1776.000     15.3      1.2       0.0      5.6 - 1776.500     15.4      1.8       0.4      4.6
          return 15.3;
        }
        else if ($mjd >= -30087.5 && $mjd < -29904) { // historic: 1776.500     15.4      1.8       0.4      4.6 - 1777.000     15.5      1.5       0.4      6.9
          return 15.4;
        }
        else if ($mjd >= -29904 && $mjd < -29721.5) { // historic: 1777.000     15.5      1.5       0.4      6.9 - 1777.500     15.6      1.8       0.2      5.7
          return 15.5;
        }
        else if ($mjd >= -29721.5 && $mjd < -29539) { // historic: 1777.500     15.6      1.8       0.2      5.7 - 1778.000     15.6      1.4       0.1      7.0
          return 15.6;
        }
        else if ($mjd >= -29539 && $mjd < -29356.5) { // historic: 1778.000     15.6      1.4       0.1      7.0 - 1778.500     15.6      1.8       0.0      5.6
          return 15.6;
        }
        else if ($mjd >= -29356.5 && $mjd < -29174) { // historic: 1778.500     15.6      1.8       0.0      5.6 - 1779.000     15.6      1.5       0.0      6.9
          return 15.6;
        }
        else if ($mjd >= -29174 && $mjd < -28991.5) { // historic: 1779.000     15.6      1.5       0.0      6.9 - 1779.500     15.6      1.6      -0.1      5.6
          return 15.6;
        }
        else if ($mjd >= -28991.5 && $mjd < -28809) { // historic: 1779.500     15.6      1.6      -0.1      5.6 - 1780.000     15.6      1.9      -0.1      6.1
          return 15.6;
        }
        else if ($mjd >= -28809 && $mjd < -28626.5) { // historic: 1780.000     15.6      1.9      -0.1      6.1 - 1780.500     15.6      2.2      -0.2      7.4
          return 15.6;
        }
        else if ($mjd >= -28626.5 && $mjd < -28443) { // historic: 1780.500     15.6      2.2      -0.2      7.4 - 1781.000     15.5      2.3      -0.3      8.4
          return 15.6;
        }
        else if ($mjd >= -28443 && $mjd < -28260.5) { // historic: 1781.000     15.5      2.3      -0.3      8.4 - 1781.500     15.5      2.4      -0.4      9.1
          return 15.5;
        }
        else if ($mjd >= -28260.5 && $mjd < -28078) { // historic: 1781.500     15.5      2.4      -0.4      9.1 - 1782.000     15.4      2.4      -0.5      9.3
          return 15.5;
        }
        else if ($mjd >= -28078 && $mjd < -27895.5) { // historic: 1782.000     15.4      2.4      -0.5      9.3 - 1782.500     15.3      2.4      -0.6      9.2
          return 15.4;
        }
        else if ($mjd >= -27895.5 && $mjd < -27713) { // historic: 1782.500     15.3      2.4      -0.6      9.2 - 1783.000     15.2      1.4      -0.7      9.1
          return 15.3;
        }
        else if ($mjd >= -27713 && $mjd < -27530.5) { // historic: 1783.000     15.2      1.4      -0.7      9.1 - 1783.500     15.1      1.7      -0.8      5.4
          return 15.2;
        }
        else if ($mjd >= -27530.5 && $mjd < -27348) { // historic: 1783.500     15.1      1.7      -0.8      5.4 - 1784.000     14.9      1.3      -0.9      6.5
          return 15.1;
        }
        else if ($mjd >= -27348 && $mjd < -27165.5) { // historic: 1784.000     14.9      1.3      -0.9      6.5 - 1784.500     14.8      1.7      -0.9      5.2
          return 14.9;
        }
        else if ($mjd >= -27165.5 && $mjd < -26982) { // historic: 1784.500     14.8      1.7      -0.9      5.2 - 1785.000     14.6      1.4      -0.9      6.7
          return 14.8;
        }
        else if ($mjd >= -26982 && $mjd < -26799.5) { // historic: 1785.000     14.6      1.4      -0.9      6.7 - 1785.500     14.4      1.8      -0.8      5.3
          return 14.6;
        }
        else if ($mjd >= -26799.5 && $mjd < -26617) { // historic: 1785.500     14.4      1.8      -0.8      5.3 - 1786.000     14.3      1.5      -0.6      7.0
          return 14.4;
        }
        else if ($mjd >= -26617 && $mjd < -26434.5) { // historic: 1786.000     14.3      1.5      -0.6      7.0 - 1786.500     14.2      1.7      -0.1      5.7
          return 14.3;
        }
        else if ($mjd >= -26434.5 && $mjd < -26252) { // historic: 1786.500     14.2      1.7      -0.1      5.7 - 1787.000     14.1      1.3       0.3      6.5
          return 14.2;
        }
        else if ($mjd >= -26252 && $mjd < -26069.5) { // historic: 1787.000     14.1      1.3       0.3      6.5 - 1787.500     14.2      1.1      -0.2      5.1
          return 14.1;
        }
        else if ($mjd >= -26069.5 && $mjd < -25887) { // historic: 1787.500     14.2      1.1      -0.2      5.1 - 1788.000     14.2      0.7      -1.1      4.2
          return 14.2;
        }
        else if ($mjd >= -25887 && $mjd < -25704.5) { // historic: 1788.000     14.2      0.7      -1.1      4.2 - 1788.500     13.9      1.0      -1.3      2.8
          return 14.2;
        }
        else if ($mjd >= -25704.5 && $mjd < -25521) { // historic: 1788.500     13.9      1.0      -1.3      2.8 - 1789.000     13.7      0.8      -1.2      3.7
          return 13.9;
        }
        else if ($mjd >= -25521 && $mjd < -25338.5) { // historic: 1789.000     13.7      0.8      -1.2      3.7 - 1789.500     13.5      1.0      -1.0      3.0
          return 13.7;
        }
        else if ($mjd >= -25338.5 && $mjd < -25156) { // historic: 1789.500     13.5      1.0      -1.0      3.0 - 1790.000     13.3      0.8      -0.7      3.9
          return 13.5;
        }
        else if ($mjd >= -25156 && $mjd < -24973.5) { // historic: 1790.000     13.3      0.8      -0.7      3.9 - 1790.500     13.1      1.3      -0.3      3.2
          return 13.3;
        }
        else if ($mjd >= -24973.5 && $mjd < -24791) { // historic: 1790.500     13.1      1.3      -0.3      3.2 - 1791.000     13.0      1.1       0.0      5.0
          return 13.1;
        }
        else if ($mjd >= -24791 && $mjd < -24608.5) { // historic: 1791.000     13.0      1.1       0.0      5.0 - 1791.500     13.2      1.8       0.0      4.1
          return 13.0;
        }
        else if ($mjd >= -24608.5 && $mjd < -24426) { // historic: 1791.500     13.2      1.8       0.0      4.1 - 1792.000     13.2      1.5       0.0      7.0
          return 13.2;
        }
        else if ($mjd >= -24426 && $mjd < -24243.5) { // historic: 1792.000     13.2      1.5       0.0      7.0 - 1792.500     13.1      1.8       0.1      5.9
          return 13.2;
        }
        else if ($mjd >= -24243.5 && $mjd < -24060) { // historic: 1792.500     13.1      1.8       0.1      5.9 - 1793.000     13.1      1.4       0.4      7.0
          return 13.1;
        }
        else if ($mjd >= -24060 && $mjd < -23877.5) { // historic: 1793.000     13.1      1.4       0.4      7.0 - 1793.500     13.2      1.8       0.6      5.6
          return 13.1;
        }
        else if ($mjd >= -23877.5 && $mjd < -23695) { // historic: 1793.500     13.2      1.8       0.6      5.6 - 1794.000     13.3      1.5       0.5      7.0
          return 13.2;
        }
        else if ($mjd >= -23695 && $mjd < -23512.5) { // historic: 1794.000     13.3      1.5       0.5      7.0 - 1794.500     13.5      1.9       0.1      5.6
          return 13.3;
        }
        else if ($mjd >= -23512.5 && $mjd < -23330) { // historic: 1794.500     13.5      1.9       0.1      5.6 - 1795.000     13.5      1.5      -0.3      7.3
          return 13.5;
        }
        else if ($mjd >= -23330 && $mjd < -23147.5) { // historic: 1795.000     13.5      1.5      -0.3      7.3 - 1795.500     13.4      2.3      -0.5      5.8
          return 13.5;
        }
        else if ($mjd >= -23147.5 && $mjd < -22965) { // historic: 1795.500     13.4      2.3      -0.5      5.8 - 1796.000     13.2      1.9      -0.4      9.0
          return 13.4;
        }
        else if ($mjd >= -22965 && $mjd < -22782.5) { // historic: 1796.000     13.2      1.9      -0.4      9.0 - 1796.500     13.2      2.4      -0.3      7.4
          return 13.2;
        }
        else if ($mjd >= -22782.5 && $mjd < -22599) { // historic: 1796.500     13.2      2.4      -0.3      7.4 - 1797.000     13.1      1.9      -0.4      9.3
          return 13.2;
        }
        else if ($mjd >= -22599 && $mjd < -22416.5) { // historic: 1797.000     13.1      1.9      -0.4      9.3 - 1797.500     13.1      2.3      -0.6      7.5
          return 13.1;
        }
        else if ($mjd >= -22416.5 && $mjd < -22234) { // historic: 1797.500     13.1      2.3      -0.6      7.5 - 1798.000     13.0      1.9      -0.8      9.1
          return 13.1;
        }
        else if ($mjd >= -22234 && $mjd < -22051.5) { // historic: 1798.000     13.0      1.9      -0.8      9.1 - 1798.500     12.8      2.1      -0.7      7.2
          return 13.0;
        }
        else if ($mjd >= -22051.5 && $mjd < -21869) { // historic: 1798.500     12.8      2.1      -0.7      7.2 - 1799.000     12.6      1.7      -0.6      8.3
          return 12.8;
        }
        else if ($mjd >= -21869 && $mjd < -21686.5) { // historic: 1799.000     12.6      1.7      -0.6      8.3 - 1799.500     12.7      2.4      -0.7      6.5
          return 12.6;
        }
        else if ($mjd >= -21686.5 && $mjd < -21504) { // historic: 1799.500     12.7      2.4      -0.7      6.5 - 1800.000     12.6      1.9      -0.9      9.2
          return 12.7;
        }
        else if ($mjd >= -21504 && $mjd < -21321.5) { // historic: 1800.000     12.6      1.9      -0.9      9.2 - 1800.500     12.3      2.4      -1.1      7.5
          return 12.6;
        }
        else if ($mjd >= -21321.5 && $mjd < -21139) { // historic: 1800.500     12.3      2.4      -1.1      7.5 - 1801.000     12.0      2.0      -1.0      9.4
          return 12.3;
        }
        else if ($mjd >= -21139 && $mjd < -20956.5) { // historic: 1801.000     12.0      2.0      -1.0      9.4 - 1801.500     11.9      2.4      -0.9      7.6
          return 12.0;
        }
        else if ($mjd >= -20956.5 && $mjd < -20774) { // historic: 1801.500     11.9      2.4      -0.9      7.6 - 1802.000     11.8      1.9      -0.9      9.3
          return 11.9;
        }
        else if ($mjd >= -20774 && $mjd < -20591.5) { // historic: 1802.000     11.8      1.9      -0.9      9.3 - 1802.500     11.6      2.5      -1.0      7.4
          return 11.8;
        }
        else if ($mjd >= -20591.5 && $mjd < -20409) { // historic: 1802.500     11.6      2.5      -1.0      7.4 - 1803.000     11.4      2.0      -0.9      9.8
          return 11.6;
        }
        else if ($mjd >= -20409 && $mjd < -20226.5) { // historic: 1803.000     11.4      2.0      -0.9      9.8 - 1803.500     11.2      2.3      -0.6      7.9
          return 11.4;
        }
        else if ($mjd >= -20226.5 && $mjd < -20044) { // historic: 1803.500     11.2      2.3      -0.6      7.9 - 1804.000     11.1      1.8      -0.2      9.0
          return 11.2;
        }
        else if ($mjd >= -20044 && $mjd < -19861.5) { // historic: 1804.000     11.1      1.8      -0.2      9.0 - 1804.500     11.1      2.2       0.0      7.0
          return 11.1;
        }
        else if ($mjd >= -19861.5 && $mjd < -19678) { // historic: 1804.500     11.1      2.2       0.0      7.0 - 1805.000     11.1      1.8       0.1      8.5
          return 11.1;
        }
        else if ($mjd >= -19678 && $mjd < -19495.5) { // historic: 1805.000     11.1      1.8       0.1      8.5 - 1805.500     11.1      1.8       0.1      6.8
          return 11.1;
        }
        else if ($mjd >= -19495.5 && $mjd < -19313) { // historic: 1805.500     11.1      1.8       0.1      6.8 - 1806.000     11.1      2.1       0.1      6.9
          return 11.1;
        }
        else if ($mjd >= -19313 && $mjd < -19130.5) { // historic: 1806.000     11.1      2.1       0.1      6.9 - 1806.500     11.2      2.4       0.1      8.2
          return 11.1;
        }
        else if ($mjd >= -19130.5 && $mjd < -18948) { // historic: 1806.500     11.2      2.4       0.1      8.2 - 1807.000     11.1      1.5       0.2      9.4
          return 11.2;
        }
        else if ($mjd >= -18948 && $mjd < -18765.5) { // historic: 1807.000     11.1      1.5       0.2      9.4 - 1807.500     11.1      2.0       0.5      6.0
          return 11.1;
        }
        else if ($mjd >= -18765.5 && $mjd < -18583) { // historic: 1807.500     11.1      2.0       0.5      6.0 - 1808.000     11.2      1.6       0.8      7.7
          return 11.1;
        }
        else if ($mjd >= -18583 && $mjd < -18400.5) { // historic: 1808.000     11.2      1.6       0.8      7.7 - 1808.500     11.4      1.5       0.3      6.2
          return 11.2;
        }
        else if ($mjd >= -18400.5 && $mjd < -18217) { // historic: 1808.500     11.4      1.5       0.3      6.2 - 1809.000     11.5      1.1      -0.2      5.7
          return 11.4;
        }
        else if ($mjd >= -18217 && $mjd < -18034.5) { // historic: 1809.000     11.5      1.1      -0.2      5.7 - 1809.500     11.3      1.2      -0.2      4.2
          return 11.5;
        }
        else if ($mjd >= -18034.5 && $mjd < -17852) { // historic: 1809.500     11.3      1.2      -0.2      4.2 - 1810.000     11.2      1.5       0.5      4.8
          return 11.3;
        }
        else if ($mjd >= -17852 && $mjd < -17669.5) { // historic: 1810.000     11.2      1.5       0.5      4.8 - 1810.500     11.4      1.0       0.9      5.9
          return 11.2;
        }
        else if ($mjd >= -17669.5 && $mjd < -17487) { // historic: 1810.500     11.4      1.0       0.9      5.9 - 1811.000     11.7      2.1       0.8      4.1
          return 11.4;
        }
        else if ($mjd >= -17487 && $mjd < -17304.5) { // historic: 1811.000     11.7      2.1       0.8      4.1 - 1811.500     11.9      1.8       0.4      8.3
          return 11.7;
        }
        else if ($mjd >= -17304.5 && $mjd < -17122) { // historic: 1811.500     11.9      1.8       0.4      8.3 - 1812.000     11.9      2.6      -0.1      7.0
          return 11.9;
        }
        else if ($mjd >= -17122 && $mjd < -16939.5) { // historic: 1812.000     11.9      2.6      -0.1      7.0 - 1812.500     11.9      2.2      -0.2     10.2
          return 11.9;
        }
        else if ($mjd >= -16939.5 && $mjd < -16756) { // historic: 1812.500     11.9      2.2      -0.2     10.2 - 1813.000     11.8      2.6      -0.1      8.3
          return 11.9;
        }
        else if ($mjd >= -16756 && $mjd < -16573.5) { // historic: 1813.000     11.8      2.6      -0.1      8.3 - 1813.500     11.7      2.1       0.0     10.3
          return 11.8;
        }
        else if ($mjd >= -16573.5 && $mjd < -16391) { // historic: 1813.500     11.7      2.1       0.0     10.3 - 1814.000     11.8      2.6       0.0      8.2
          return 11.7;
        }
        else if ($mjd >= -16391 && $mjd < -16208.5) { // historic: 1814.000     11.8      2.6       0.0      8.2 - 1814.500     11.8      2.1      -0.1     10.2
          return 11.8;
        }
        else if ($mjd >= -16208.5 && $mjd < -16026) { // historic: 1814.500     11.8      2.1      -0.1     10.2 - 1815.000     11.8      2.7      -0.2      8.3
          return 11.8;
        }
        else if ($mjd >= -16026 && $mjd < -15843.5) { // historic: 1815.000     11.8      2.7      -0.2      8.3 - 1815.500     11.7      3.1      -0.3     10.4
          return 11.8;
        }
        else if ($mjd >= -15843.5 && $mjd < -15661) { // historic: 1815.500     11.7      3.1      -0.3     10.4 - 1816.000     11.6      3.5      -0.4     12.2
          return 11.7;
        }
        else if ($mjd >= -15661 && $mjd < -15478.5) { // historic: 1816.000     11.6      3.5      -0.4     12.2 - 1816.500     11.6      2.4      -0.4     13.7
          return 11.6;
        }
        else if ($mjd >= -15478.5 && $mjd < -15295) { // historic: 1816.500     11.6      2.4      -0.4     13.7 - 1817.000     11.5      3.0      -0.3      9.3
          return 11.6;
        }
        else if ($mjd >= -15295 && $mjd < -15112.5) { // historic: 1817.000     11.5      3.0      -0.3      9.3 - 1817.500     11.5      2.4      -0.3     11.5
          return 11.5;
        }
        else if ($mjd >= -15112.5 && $mjd < -14930) { // historic: 1817.500     11.5      2.4      -0.3     11.5 - 1818.000     11.4      2.9      -0.2      9.2
          return 11.5;
        }
        else if ($mjd >= -14930 && $mjd < -14747.5) { // historic: 1818.000     11.4      2.9      -0.2      9.2 - 1818.500     11.4      2.3      -0.3     11.2
          return 11.4;
        }
        else if ($mjd >= -14747.5 && $mjd < -14565) { // historic: 1818.500     11.4      2.3      -0.3     11.2 - 1819.000     11.3      2.8      -0.4      8.9
          return 11.4;
        }
        else if ($mjd >= -14565 && $mjd < -14382.5) { // historic: 1819.000     11.3      2.8      -0.4      8.9 - 1819.500     11.3      2.2      -0.3     10.8
          return 11.3;
        }
        else if ($mjd >= -14382.5 && $mjd < -14200) { // historic: 1819.500     11.3      2.2      -0.3     10.8 - 1820.000     11.13     2.15     -0.48     8.61
          return 11.3;
        }
        else if ($mjd >= -14200 && $mjd < -14017.5) { // historic: 1820.000     11.13     2.15     -0.48     8.61 - 1820.500     11.16     1.60     -0.86     8.34
          return 11.13;
        }
        else if ($mjd >= -14017.5 && $mjd < -13834) { // historic: 1820.500     11.16     1.60     -0.86     8.34 - 1821.000     10.94     1.86     -1.48     6.21
          return 11.16;
        }
        else if ($mjd >= -13834 && $mjd < -13651.5) { // historic: 1821.000     10.94     1.86     -1.48     6.21 - 1821.500     10.72     1.47     -1.85     7.20
          return 10.94;
        }
        else if ($mjd >= -13651.5 && $mjd < -13469) { // historic: 1821.500     10.72     1.47     -1.85     7.20 - 1822.000     10.29     1.14     -1.38     5.68
          return 10.72;
        }
        else if ($mjd >= -13469 && $mjd < -13286.5) { // historic: 1822.000     10.29     1.14     -1.38     5.68 - 1822.500     10.04     0.75     -0.62     4.42
          return 10.29;
        }
        else if ($mjd >= -13286.5 && $mjd < -13104) { // historic: 1822.500     10.04     0.75     -0.62     4.42 - 1823.000      9.94     0.68     -0.28     2.92
          return 10.04;
        }
        else if ($mjd >= -13104 && $mjd < -12921.5) { // historic: 1823.000      9.94     0.68     -0.28     2.92 - 1823.500      9.91     0.48     -0.20     2.62
          return 9.94;
        }
        else if ($mjd >= -12921.5 && $mjd < -12739) { // historic: 1823.500      9.91     0.48     -0.20     2.62 - 1824.000      9.88     1.07     -0.28     1.86
          return 9.91;
        }
        else if ($mjd >= -12739 && $mjd < -12556.5) { // historic: 1824.000      9.88     1.07     -0.28     1.86 - 1824.500      9.86     0.91     -0.43     4.14
          return 9.88;
        }
        else if ($mjd >= -12556.5 && $mjd < -12373) { // historic: 1824.500      9.86     0.91     -0.43     4.14 - 1825.000      9.72     1.16     -0.34     3.54
          return 9.86;
        }
        else if ($mjd >= -12373 && $mjd < -12190.5) { // historic: 1825.000      9.72     1.16     -0.34     3.54 - 1825.500      9.67     0.93     -0.17     4.49
          return 9.72;
        }
        else if ($mjd >= -12190.5 && $mjd < -12008) { // historic: 1825.500      9.67     0.93     -0.17     4.49 - 1826.000      9.66     1.04     -0.25     3.60
          return 9.67;
        }
        else if ($mjd >= -12008 && $mjd < -11825.5) { // historic: 1826.000      9.66     1.04     -0.25     3.60 - 1826.500      9.64     0.81     -0.51     4.04
          return 9.66;
        }
        else if ($mjd >= -11825.5 && $mjd < -11643) { // historic: 1826.500      9.64     0.81     -0.51     4.04 - 1827.000      9.51     1.31     -0.74     3.13
          return 9.64;
        }
        else if ($mjd >= -11643 && $mjd < -11460.5) { // historic: 1827.000      9.51     1.31     -0.74     3.13 - 1827.500      9.40     1.10     -0.96     5.09
          return 9.51;
        }
        else if ($mjd >= -11460.5 && $mjd < -11278) { // historic: 1827.500      9.40     1.10     -0.96     5.09 - 1828.000      9.21     1.06     -1.37     4.25
          return 9.40;
        }
        else if ($mjd >= -11278 && $mjd < -11095.5) { // historic: 1828.000      9.21     1.06     -1.37     4.25 - 1828.500      9.00     0.79     -1.76     4.11
          return 9.21;
        }
        else if ($mjd >= -11095.5 && $mjd < -10912) { // historic: 1828.500      9.00     0.79     -1.76     4.11 - 1829.000      8.60     0.96     -1.84     3.05
          return 9.00;
        }
        else if ($mjd >= -10912 && $mjd < -10729.5) { // historic: 1829.000      8.60     0.96     -1.84     3.05 - 1829.500      8.29     0.77     -1.65     3.73
          return 8.60;
        }
        else if ($mjd >= -10729.5 && $mjd < -10547) { // historic: 1829.500      8.29     0.77     -1.65     3.73 - 1830.000      7.95     0.88     -1.28     2.98
          return 8.29;
        }
        else if ($mjd >= -10547 && $mjd < -10364.5) { // historic: 1830.000      7.95     0.88     -1.28     2.98 - 1830.500      7.73     0.69     -0.89     3.41
          return 7.95;
        }
        else if ($mjd >= -10364.5 && $mjd < -10182) { // historic: 1830.500      7.73     0.69     -0.89     3.41 - 1831.000      7.59     1.11     -0.67     2.66
          return 7.73;
        }
        else if ($mjd >= -10182 && $mjd < -9999.5) { // historic: 1831.000      7.59     1.11     -0.67     2.66 - 1831.500      7.49     0.92     -0.64     4.29
          return 7.59;
        }
        else if ($mjd >= -9999.5 && $mjd < -9817) { // historic: 1831.500      7.49     0.92     -0.64     4.29 - 1832.000      7.36     1.53     -0.66     3.55
          return 7.49;
        }
        else if ($mjd >= -9817 && $mjd < -9634.5) { // historic: 1832.000      7.36     1.53     -0.66     3.55 - 1832.500      7.26     1.27     -0.68     5.91
          return 7.36;
        }
        else if ($mjd >= -9634.5 && $mjd < -9451) { // historic: 1832.500      7.26     1.27     -0.68     5.91 - 1833.000      7.10     1.59     -0.64     4.93
          return 7.26;
        }
        else if ($mjd >= -9451 && $mjd < -9268.5) { // historic: 1833.000      7.10     1.59     -0.64     4.93 - 1833.500      7.00     1.27     -0.56     6.14
          return 7.10;
        }
        else if ($mjd >= -9268.5 && $mjd < -9086) { // historic: 1833.500      7.00     1.27     -0.56     6.14 - 1834.000      6.89     1.56     -0.49     4.91
          return 7.00;
        }
        else if ($mjd >= -9086 && $mjd < -8903.5) { // historic: 1834.000      6.89     1.56     -0.49     4.91 - 1834.500      6.82     1.25     -0.49     6.05
          return 6.89;
        }
        else if ($mjd >= -8903.5 && $mjd < -8721) { // historic: 1834.500      6.82     1.25     -0.49     6.05 - 1835.000      6.73     1.27     -0.80     4.84
          return 6.82;
        }
        else if ($mjd >= -8721 && $mjd < -8538.5) { // historic: 1835.000      6.73     1.27     -0.80     4.84 - 1835.500      6.64     0.97     -1.11     4.92
          return 6.73;
        }
        else if ($mjd >= -8538.5 && $mjd < -8356) { // historic: 1835.500      6.64     0.97     -1.11     4.92 - 1836.000      6.39     0.52     -0.74     3.75
          return 6.64;
        }
        else if ($mjd >= -8356 && $mjd < -8173.5) { // historic: 1836.000      6.39     0.52     -0.74     3.75 - 1836.500      6.28     0.12     -0.09     2.01
          return 6.39;
        }
        else if ($mjd >= -8173.5 && $mjd < -7990) { // historic: 1836.500      6.28     0.12     -0.09     2.01 - 1837.000      6.25     0.24     -0.02     0.48
          return 6.28;
        }
        else if ($mjd >= -7990 && $mjd < -7807.5) { // historic: 1837.000      6.25     0.24     -0.02     0.48 - 1837.500      6.27     0.21      0.01     0.94
          return 6.25;
        }
        else if ($mjd >= -7807.5 && $mjd < -7625) { // historic: 1837.500      6.27     0.21      0.01     0.94 - 1838.000      6.25     0.28     -0.03     0.80
          return 6.27;
        }
        else if ($mjd >= -7625 && $mjd < -7442.5) { // historic: 1838.000      6.25     0.28     -0.03     0.80 - 1838.500      6.27     0.23     -0.10     1.08
          return 6.25;
        }
        else if ($mjd >= -7442.5 && $mjd < -7260) { // historic: 1838.500      6.27     0.23     -0.10     1.08 - 1839.000      6.22     0.27     -0.04     0.87
          return 6.27;
        }
        else if ($mjd >= -7260 && $mjd < -7077.5) { // historic: 1839.000      6.22     0.27     -0.04     0.87 - 1839.500      6.24     0.21      0.04     1.03
          return 6.22;
        }
        else if ($mjd >= -7077.5 && $mjd < -6895) { // historic: 1839.500      6.24     0.21      0.04     1.03 - 1840.000      6.22     0.28      0.13     0.81
          return 6.24;
        }
        else if ($mjd >= -6895 && $mjd < -6712.5) { // historic: 1840.000      6.22     0.28      0.13     0.81 - 1840.500      6.27     0.23      0.28     1.08
          return 6.22;
        }
        else if ($mjd >= -6712.5 && $mjd < -6529) { // historic: 1840.500      6.27     0.23      0.28     1.08 - 1841.000      6.30     0.22      0.19     0.87
          return 6.27;
        }
        else if ($mjd >= -6529 && $mjd < -6346.5) { // historic: 1841.000      6.30     0.22      0.19     0.87 - 1841.500      6.36     0.16      0.08     0.86
          return 6.30;
        }
        else if ($mjd >= -6346.5 && $mjd < -6164) { // historic: 1841.500      6.36     0.16      0.08     0.86 - 1842.000      6.35     0.59     -0.02     0.61
          return 6.36;
        }
        else if ($mjd >= -6164 && $mjd < -5981.5) { // historic: 1842.000      6.35     0.59     -0.02     0.61 - 1842.500      6.37     0.51     -0.10     2.28
          return 6.35;
        }
        else if ($mjd >= -5981.5 && $mjd < -5799) { // historic: 1842.500      6.37     0.51     -0.10     2.28 - 1843.000      6.32     0.64     -0.04     1.98
          return 6.37;
        }
        else if ($mjd >= -5799 && $mjd < -5616.5) { // historic: 1843.000      6.32     0.64     -0.04     1.98 - 1843.500      6.33     0.51      0.07     2.49
          return 6.32;
        }
        else if ($mjd >= -5616.5 && $mjd < -5434) { // historic: 1843.500      6.33     0.51      0.07     2.49 - 1844.000      6.33     0.72      0.11     1.99
          return 6.33;
        }
        else if ($mjd >= -5434 && $mjd < -5251.5) { // historic: 1844.000      6.33     0.72      0.11     1.99 - 1844.500      6.37     0.59      0.11     2.81
          return 6.33;
        }
        else if ($mjd >= -5251.5 && $mjd < -5068) { // historic: 1844.500      6.37     0.59      0.11     2.81 - 1845.000      6.37     0.69      0.09     2.30
          return 6.37;
        }
        else if ($mjd >= -5068 && $mjd < -4885.5) { // historic: 1845.000      6.37     0.69      0.09     2.30 - 1845.500      6.41     0.54      0.07     2.66
          return 6.37;
        }
        else if ($mjd >= -4885.5 && $mjd < -4703) { // historic: 1845.500      6.41     0.54      0.07     2.66 - 1846.000      6.40     0.47      0.11     2.11
          return 6.41;
        }
        else if ($mjd >= -4703 && $mjd < -4520.5) { // historic: 1846.000      6.40     0.47      0.11     2.11 - 1846.500      6.44     0.33      0.20     1.81
          return 6.40;
        }
        else if ($mjd >= -4520.5 && $mjd < -4338) { // historic: 1846.500      6.44     0.33      0.20     1.81 - 1847.000      6.46     0.41      0.13     1.28
          return 6.44;
        }
        else if ($mjd >= -4338 && $mjd < -4155.5) { // historic: 1847.000      6.46     0.41      0.13     1.28 - 1847.500      6.51     0.33      0.01     1.59
          return 6.46;
        }
        else if ($mjd >= -4155.5 && $mjd < -3973) { // historic: 1847.500      6.51     0.33      0.01     1.59 - 1848.000      6.48     0.41      0.06     1.27
          return 6.51;
        }
        else if ($mjd >= -3973 && $mjd < -3790.5) { // historic: 1848.000      6.48     0.41      0.06     1.27 - 1848.500      6.51     0.33      0.17     1.61
          return 6.48;
        }
        else if ($mjd >= -3790.5 && $mjd < -3607) { // historic: 1848.500      6.51     0.33      0.17     1.61 - 1849.000      6.53     0.57      0.14     1.28
          return 6.51;
        }
        else if ($mjd >= -3607 && $mjd < -3424.5) { // historic: 1849.000      6.53     0.57      0.14     1.28 - 1849.500      6.58     0.47      0.07     2.20
          return 6.53;
        }
        else if ($mjd >= -3424.5 && $mjd < -3242) { // historic: 1849.500      6.58     0.47      0.07     2.20 - 1850.000      6.55     0.70      0.22     1.84
          return 6.58;
        }
        else if ($mjd >= -3242 && $mjd < -3059.5) { // historic: 1850.000      6.55     0.70      0.22     1.84 - 1850.500      6.61     0.58      0.45     2.71
          return 6.55;
        }
        else if ($mjd >= -3059.5 && $mjd < -2877) { // historic: 1850.500      6.61     0.58      0.45     2.71 - 1851.000      6.69     0.73      0.48     2.23
          return 6.61;
        }
        else if ($mjd >= -2877 && $mjd < -2694.5) { // historic: 1851.000      6.69     0.73      0.48     2.23 - 1851.500      6.80     0.58      0.41     2.82
          return 6.69;
        }
        else if ($mjd >= -2694.5 && $mjd < -2512) { // historic: 1851.500      6.80     0.58      0.41     2.82 - 1852.000      6.84     0.76      0.44     2.26
          return 6.80;
        }
        else if ($mjd >= -2512 && $mjd < -2329.5) { // historic: 1852.000      6.84     0.76      0.44     2.26 - 1852.500      6.94     0.61      0.49     2.95
          return 6.84;
        }
        else if ($mjd >= -2329.5 && $mjd < -2146) { // historic: 1852.500      6.94     0.61      0.49     2.95 - 1853.000      7.03     0.87      0.42     2.37
          return 6.94;
        }
        else if ($mjd >= -2146 && $mjd < -1963.5) { // historic: 1853.000      7.03     0.87      0.42     2.37 - 1853.500      7.13     0.71      0.29     3.38
          return 7.03;
        }
        else if ($mjd >= -1963.5 && $mjd < -1781) { // historic: 1853.500      7.13     0.71      0.29     3.38 - 1854.000      7.15     0.84      0.26     2.77
          return 7.13;
        }
        else if ($mjd >= -1781 && $mjd < -1598.5) { // historic: 1854.000      7.15     0.84      0.26     2.77 - 1854.500      7.22     0.66      0.26     3.23
          return 7.15;
        }
        else if ($mjd >= -1598.5 && $mjd < -1416) { // historic: 1854.500      7.22     0.66      0.26     3.23 - 1855.000      7.26     0.81      0.09     2.55
          return 7.22;
        }
        else if ($mjd >= -1416 && $mjd < -1233.5) { // historic: 1855.000      7.26     0.81      0.09     2.55 - 1855.500      7.30     0.65     -0.16     3.14
          return 7.26;
        }
        else if ($mjd >= -1233.5 && $mjd < -1051) { // historic: 1855.500      7.30     0.65     -0.16     3.14 - 1856.000      7.23     0.74     -0.14     2.50
          return 7.30;
        }
        else if ($mjd >= -1051 && $mjd < -868.5) { // historic: 1856.000      7.23     0.74     -0.14     2.50 - 1856.500      7.22     0.58      0.03     2.87
          return 7.23;
        }
        else if ($mjd >= -868.5 && $mjd < -685) { // historic: 1856.500      7.22     0.58      0.03     2.87 - 1857.000      7.21     0.49     -0.27     2.26
          return 7.22;
        }
        else if ($mjd >= -685 && $mjd < -502.5) { // historic: 1857.000      7.21     0.49     -0.27     2.26 - 1857.500      7.20     0.34     -0.82     1.91
          return 7.21;
        }
        else if ($mjd >= -502.5 && $mjd < -320) { // historic: 1857.500      7.20     0.34     -0.82     1.91 - 1858.000      6.99     0.37     -0.17     1.33
          return 7.20;
        }
        else if ($mjd >= -320 && $mjd < -137.5) { // historic: 1858.000      6.99     0.37     -0.17     1.33 - 1858.500      6.98     0.28      0.72     1.45
          return 6.99;
        }
        else if ($mjd >= -137.5 && $mjd < 45) { // historic: 1858.500      6.98     0.28      0.72     1.45 - 1859.000      7.19     0.71      0.73     1.08
          return 6.98;
        }
        else if ($mjd >= 45 && $mjd < 227.5) { // historic: 1859.000      7.19     0.71      0.73     1.08 - 1859.500      7.36     0.61      0.25     2.74
          return 7.19;
        }
        else if ($mjd >= 227.5 && $mjd < 410) { // historic: 1859.500      7.36     0.61      0.25     2.74 - 1860.000      7.35     0.70      0.12     2.36
          return 7.36;
        }
        else if ($mjd >= 410 && $mjd < 592.5) { // historic: 1860.000      7.35     0.70      0.12     2.36 - 1860.500      7.39     0.51      0.19     2.70
          return 7.35;
        }
        else if ($mjd >= 592.5 && $mjd < 776) { // historic: 1860.500      7.39     0.51      0.19     2.70 - 1861.000      7.41     0.49      0.07     1.97
          return 7.39;
        }
        else if ($mjd >= 776 && $mjd < 958.5) { // historic: 1861.000      7.41     0.49      0.07     1.97 - 1861.500      7.45     0.44     -0.41     1.89
          return 7.41;
        }
        else if ($mjd >= 958.5 && $mjd < 1141) { // historic: 1861.500      7.45     0.44     -0.41     1.89 - 1862.000      7.36     0.32     -1.04     1.71
          return 7.45;
        }
        else if ($mjd >= 1141 && $mjd < 1323.5) { // historic: 1862.000      7.36     0.32     -1.04     1.71 - 1862.500      7.18     0.18     -1.18     1.24
          return 7.36;
        }
        else if ($mjd >= 1323.5 && $mjd < 1506) { // historic: 1862.500      7.18     0.18     -1.18     1.24 - 1863.000      6.95     0.06     -1.34     0.69
          return 7.18;
        }
        else if ($mjd >= 1506 && $mjd < 1688.5) { // historic: 1863.000      6.95     0.06     -1.34     0.69 - 1863.500      6.72     0.08     -1.37     0.22
          return 6.95;
        }
        else if ($mjd >= 1688.5 && $mjd < 1871) { // historic: 1863.500      6.72     0.08     -1.37     0.22 - 1864.000      6.45     0.06     -1.30     0.29
          return 6.72;
        }
        else if ($mjd >= 1871 && $mjd < 2053.5) { // historic: 1864.000      6.45     0.06     -1.30     0.29 - 1864.500      6.24     0.22     -1.60     0.22
          return 6.45;
        }
        else if ($mjd >= 2053.5 && $mjd < 2237) { // historic: 1864.500      6.24     0.22     -1.60     0.22 - 1865.000      5.92     0.19     -1.92     0.84
          return 6.24;
        }
        else if ($mjd >= 2237 && $mjd < 2419.5) { // historic: 1865.000      5.92     0.19     -1.92     0.84 - 1865.500      5.59     0.21     -2.30     0.73
          return 5.92;
        }
        else if ($mjd >= 2419.5 && $mjd < 2602) { // historic: 1865.500      5.59     0.21     -2.30     0.73 - 1866.000      5.15     0.16     -2.78     0.80
          return 5.59;
        }
        else if ($mjd >= 2602 && $mjd < 2784.5) { // historic: 1866.000      5.15     0.16     -2.78     0.80 - 1866.500      4.67     0.14     -2.95     0.62
          return 5.15;
        }
        else if ($mjd >= 2784.5 && $mjd < 2967) { // historic: 1866.500      4.67     0.14     -2.95     0.62 - 1867.000      4.11     0.09     -3.27     0.53
          return 4.67;
        }
        else if ($mjd >= 2967 && $mjd < 3149.5) { // historic: 1867.000      4.11     0.09     -3.27     0.53 - 1867.500      3.52     0.26     -3.06     0.36
          return 4.11;
        }
        else if ($mjd >= 3149.5 && $mjd < 3332) { // historic: 1867.500      3.52     0.26     -3.06     0.36 - 1868.000      2.94     0.22     -2.72     1.00
          return 3.52;
        }
        else if ($mjd >= 3332 && $mjd < 3514.5) { // historic: 1868.000      2.94     0.22     -2.72     1.00 - 1868.500      2.47     0.24     -2.64     0.86
          return 2.94;
        }
        else if ($mjd >= 3514.5 && $mjd < 3698) { // historic: 1868.500      2.47     0.24     -2.64     0.86 - 1869.000      1.97     0.18     -2.56     0.93
          return 2.47;
        }
        else if ($mjd >= 3698 && $mjd < 3880.5) { // historic: 1869.000      1.97     0.18     -2.56     0.93 - 1869.500      1.52     0.28     -2.54     0.72
          return 1.97;
        }
        else if ($mjd >= 3880.5 && $mjd < 4063) { // historic: 1869.500      1.52     0.28     -2.54     0.72 - 1870.000      1.04     0.23     -2.52     1.08
          return 1.52;
        }
        else if ($mjd >= 4063 && $mjd < 4245.5) { // historic: 1870.000      1.04     0.23     -2.52     1.08 - 1870.500      0.60     0.38     -2.54     0.89
          return 1.04;
        }
        else if ($mjd >= 4245.5 && $mjd < 4428) { // historic: 1870.500      0.60     0.38     -2.54     0.89 - 1871.000      0.11     0.31     -2.58     1.45
          return 0.60;
        }
        else if ($mjd >= 4428 && $mjd < 4610.5) { // historic: 1871.000      0.11     0.31     -2.58     1.45 - 1871.500     -0.34     0.36     -2.52     1.21
          return 0.11;
        }
        else if ($mjd >= 4610.5 && $mjd < 4793) { // historic: 1871.500     -0.34     0.36     -2.52     1.21 - 1872.000     -0.82     0.29     -2.45     1.41
          return -0.34;
        }
        else if ($mjd >= 4793 && $mjd < 4975.5) { // historic: 1872.000     -0.82     0.29     -2.45     1.41 - 1872.500     -1.25     0.37     -2.34     1.11
          return -0.82;
        }
        else if ($mjd >= 4975.5 && $mjd < 5159) { // historic: 1872.500     -1.25     0.37     -2.34     1.11 - 1873.000     -1.70     0.30     -2.22     1.44
          return -1.25;
        }
        else if ($mjd >= 5159 && $mjd < 5341.5) { // historic: 1873.000     -1.70     0.30     -2.22     1.44 - 1873.500     -2.08     0.38     -2.10     1.16
          return -1.70;
        }
        else if ($mjd >= 5341.5 && $mjd < 5524) { // historic: 1873.500     -2.08     0.38     -2.10     1.16 - 1874.000     -2.48     0.31     -1.96     1.48
          return -2.08;
        }
        else if ($mjd >= 5524 && $mjd < 5706.5) { // historic: 1874.000     -2.48     0.31     -1.96     1.48 - 1874.500     -2.82     0.24     -1.89     1.19
          return -2.48;
        }
        else if ($mjd >= 5706.5 && $mjd < 5889) { // historic: 1874.500     -2.82     0.24     -1.89     1.19 - 1875.000     -3.19     0.16     -1.85     0.95
          return -2.82;
        }
        else if ($mjd >= 5889 && $mjd < 6071.5) { // historic: 1875.000     -3.19     0.16     -1.85     0.95 - 1875.500     -3.50     0.22     -1.75     0.63
          return -3.19;
        }
        else if ($mjd >= 6071.5 && $mjd < 6254) { // historic: 1875.500     -3.50     0.22     -1.75     0.63 - 1876.000     -3.84     0.18     -1.73     0.86
          return -3.50;
        }
        else if ($mjd >= 6254 && $mjd < 6436.5) { // historic: 1876.000     -3.84     0.18     -1.73     0.86 - 1876.500     -4.14     0.25     -1.45     0.69
          return -3.84;
        }
        else if ($mjd >= 6436.5 && $mjd < 6620) { // historic: 1876.500     -4.14     0.25     -1.45     0.69 - 1877.000     -4.43     0.20     -1.05     0.95
          return -4.14;
        }
        else if ($mjd >= 6620 && $mjd < 6802.5) { // historic: 1877.000     -4.43     0.20     -1.05     0.95 - 1877.500     -4.59     0.16     -0.96     0.78
          return -4.43;
        }
        else if ($mjd >= 6802.5 && $mjd < 6985) { // historic: 1877.500     -4.59     0.16     -0.96     0.78 - 1878.000     -4.79     0.10     -0.84     0.61
          return -4.59;
        }
        else if ($mjd >= 6985 && $mjd < 7167.5) { // historic: 1878.000     -4.79     0.10     -0.84     0.61 - 1878.500     -4.92     0.11     -0.80     0.40
          return -4.79;
        }
        else if ($mjd >= 7167.5 && $mjd < 7350) { // historic: 1878.500     -4.92     0.11     -0.80     0.40 - 1879.000     -5.09     0.08     -0.91     0.41
          return -4.92;
        }
        else if ($mjd >= 7350 && $mjd < 7532.5) { // historic: 1879.000     -5.09     0.08     -0.91     0.41 - 1879.500     -5.24     0.14     -0.55     0.31
          return -5.09;
        }
        else if ($mjd >= 7532.5 && $mjd < 7715) { // historic: 1879.500     -5.24     0.14     -0.55     0.31 - 1880.000     -5.36     0.12     -0.04     0.55
          return -5.24;
        }
        else if ($mjd >= 7715 && $mjd < 7897.5) { // historic: 1880.000     -5.36     0.12     -0.04     0.55 - 1880.500     -5.34     0.11      0.01     0.46
          return -5.36;
        }
        else if ($mjd >= 7897.5 && $mjd < 8081) { // historic: 1880.500     -5.34     0.11      0.01     0.46 - 1881.000     -5.37     0.08      0.13     0.44
          return -5.34;
        }
        else if ($mjd >= 8081 && $mjd < 8263.5) { // historic: 1881.000     -5.37     0.08      0.13     0.44 - 1881.500     -5.32     0.12      0.02     0.33
          return -5.37;
        }
        else if ($mjd >= 8263.5 && $mjd < 8446) { // historic: 1881.500     -5.32     0.12      0.02     0.33 - 1882.000     -5.34     0.10     -0.08     0.45
          return -5.32;
        }
        else if ($mjd >= 8446 && $mjd < 8628.5) { // historic: 1882.000     -5.34     0.10     -0.08     0.45 - 1882.500     -5.33     0.11     -0.24     0.37
          return -5.34;
        }
        else if ($mjd >= 8628.5 && $mjd < 8811) { // historic: 1882.500     -5.33     0.11     -0.24     0.37 - 1883.000     -5.40     0.09     -0.51     0.43
          return -5.33;
        }
        else if ($mjd >= 8811 && $mjd < 8993.5) { // historic: 1883.000     -5.40     0.09     -0.51     0.43 - 1883.500     -5.47     0.12     -0.48     0.33
          return -5.40;
        }
        else if ($mjd >= 8993.5 && $mjd < 9176) { // historic: 1883.500     -5.47     0.12     -0.48     0.33 - 1884.000     -5.58     0.10     -0.57     0.46
          return -5.47;
        }
        else if ($mjd >= 9176 && $mjd < 9358.5) { // historic: 1884.000     -5.58     0.10     -0.57     0.46 - 1884.500     -5.66     0.12     -0.28     0.37
          return -5.58;
        }
        else if ($mjd >= 9358.5 && $mjd < 9542) { // historic: 1884.500     -5.66     0.12     -0.28     0.37 - 1885.000     -5.74     0.09      0.15     0.46
          return -5.66;
        }
        else if ($mjd >= 9542 && $mjd < 9724.5) { // historic: 1885.000     -5.74     0.09      0.15     0.46 - 1885.500     -5.68     0.08      0.12     0.36
          return -5.74;
        }
        else if ($mjd >= 9724.5 && $mjd < 9907) { // historic: 1885.500     -5.68     0.08      0.12     0.36 - 1886.000     -5.69     0.06      0.09     0.32
          return -5.68;
        }
        else if ($mjd >= 9907 && $mjd < 10089.5) { // historic: 1886.000     -5.69     0.06      0.09     0.32 - 1886.500     -5.65     0.05     -0.01     0.23
          return -5.69;
        }
        else if ($mjd >= 10089.5 && $mjd < 10272) { // historic: 1886.500     -5.65     0.05     -0.01     0.23 - 1887.000     -5.67     0.03     -0.17     0.19
          return -5.65;
        }
        else if ($mjd >= 10272 && $mjd < 10454.5) { // historic: 1887.000     -5.67     0.03     -0.17     0.19 - 1887.500     -5.68     0.08     -0.15     0.12
          return -5.67;
        }
        else if ($mjd >= 10454.5 && $mjd < 10637) { // historic: 1887.500     -5.68     0.08     -0.15     0.12 - 1888.000     -5.73     0.07     -0.11     0.33
          return -5.68;
        }
        else if ($mjd >= 10637 && $mjd < 10819.5) { // historic: 1888.000     -5.73     0.07     -0.11     0.33 - 1888.500     -5.72     0.10     -0.15     0.28
          return -5.73;
        }
        else if ($mjd >= 10819.5 && $mjd < 11003) { // historic: 1888.500     -5.72     0.10     -0.15     0.28 - 1889.000     -5.78     0.08     -0.19     0.39
          return -5.72;
        }
        else if ($mjd >= 11003 && $mjd < 11185.5) { // historic: 1889.000     -5.78     0.08     -0.19     0.39 - 1889.500     -5.79     0.08     -0.27     0.32
          return -5.78;
        }
        else if ($mjd >= 11185.5 && $mjd < 11368) { // historic: 1889.500     -5.79     0.08     -0.27     0.32 - 1890.000     -5.86     0.06     -0.31     0.30
          return -5.79;
        }
        else if ($mjd >= 11368 && $mjd < 11550.5) { // historic: 1890.000     -5.86     0.06     -0.31     0.30 - 1890.500     -5.89     0.07     -0.49     0.22
          return -5.86;
        }
        else if ($mjd >= 11550.5 && $mjd < 11733) { // historic: 1890.500     -5.89     0.07     -0.49     0.22 - 1891.000     -6.01     0.06     -0.78     0.27
          return -5.89;
        }
        else if ($mjd >= 11733 && $mjd < 11915.5) { // historic: 1891.000     -6.01     0.06     -0.78     0.27 - 1891.500     -6.13     0.11     -0.74     0.22
          return -6.01;
        }
        else if ($mjd >= 11915.5 && $mjd < 12098) { // historic: 1891.500     -6.13     0.11     -0.74     0.22 - 1892.000     -6.28     0.09     -0.84     0.41
          return -6.13;
        }
        else if ($mjd >= 12098 && $mjd < 12280.5) { // historic: 1892.000     -6.28     0.09     -0.84     0.41 - 1892.500     -6.41     0.12     -0.47     0.34
          return -6.28;
        }
        else if ($mjd >= 12280.5 && $mjd < 12464) { // historic: 1892.500     -6.41     0.12     -0.47     0.34 - 1893.000     -6.53     0.10      0.03     0.47
          return -6.41;
        }
        else if ($mjd >= 12464 && $mjd < 12646.5) { // historic: 1893.000     -6.53     0.10      0.03     0.47 - 1893.500     -6.49     0.11      0.12     0.38
          return -6.53;
        }
        else if ($mjd >= 12646.5 && $mjd < 12829) { // historic: 1893.500     -6.49     0.11      0.12     0.38 - 1894.000     -6.50     0.08      0.11     0.42
          return -6.49;
        }
        else if ($mjd >= 12829 && $mjd < 13011.5) { // historic: 1894.000     -6.50     0.08      0.11     0.42 - 1894.500     -6.45     0.08      0.38     0.33
          return -6.50;
        }
        else if ($mjd >= 13011.5 && $mjd < 13194) { // historic: 1894.500     -6.45     0.08      0.38     0.33 - 1895.000     -6.41     0.06      0.67     0.32
          return -6.45;
        }
        else if ($mjd >= 13194 && $mjd < 13376.5) { // historic: 1895.000     -6.41     0.06      0.67     0.32 - 1895.500     -6.26     0.12      0.94     0.23
          return -6.41;
        }
        else if ($mjd >= 13376.5 && $mjd < 13559) { // historic: 1895.500     -6.26     0.12      0.94     0.23 - 1896.000     -6.11     0.10      1.04     0.45
          return -6.26;
        }
        else if ($mjd >= 13559 && $mjd < 13741.5) { // historic: 1896.000     -6.11     0.10      1.04     0.45 - 1896.500     -5.90     0.11      1.65     0.38
          return -6.11;
        }
        else if ($mjd >= 13741.5 && $mjd < 13925) { // historic: 1896.500     -5.90     0.11      1.65     0.38 - 1897.000     -5.63     0.09      2.55     0.43
          return -5.90;
        }
        else if ($mjd >= 13925 && $mjd < 14107.5) { // historic: 1897.000     -5.63     0.09      2.55     0.43 - 1897.500     -5.13     0.09      2.59     0.34
          return -5.63;
        }
        else if ($mjd >= 14107.5 && $mjd < 14290) { // historic: 1897.500     -5.13     0.09      2.59     0.34 - 1898.000     -4.68     0.07      2.60     0.35
          return -5.13;
        }
        else if ($mjd >= 14290 && $mjd < 14472.5) { // historic: 1898.000     -4.68     0.07      2.60     0.35 - 1898.500     -4.19     0.05      2.67     0.27
          return -4.68;
        }
        else if ($mjd >= 14472.5 && $mjd < 14655) { // historic: 1898.500     -4.19     0.05      2.67     0.27 - 1899.000     -3.72     0.02      2.66     0.18
          return -4.19;
        }
        else if ($mjd >= 14655 && $mjd < 14837.5) { // historic: 1899.000     -3.72     0.02      2.66     0.18 - 1899.500     -3.21     0.08      2.93     0.10
          return -3.72;
        }
        else if ($mjd >= 14837.5 && $mjd < 15020) { // historic: 1899.500     -3.21     0.08      2.93     0.10 - 1900.000     -2.70     0.07      3.21     0.31
          return -3.21;
        }
        else if ($mjd >= 15020 && $mjd < 15202.5) { // historic: 1900.000     -2.70     0.07      3.21     0.31 - 1900.500     -2.09     0.06      3.46     0.27
          return -2.70;
        }
        else if ($mjd >= 15202.5 && $mjd < 15385) { // historic: 1900.500     -2.09     0.06      3.46     0.27 - 1901.000     -1.48     0.04      3.89     0.23
          return -2.09;
        }
        else if ($mjd >= 15385 && $mjd < 15567.5) { // historic: 1901.000     -1.48     0.04      3.89     0.23 - 1901.500     -0.75     0.07      3.81     0.16
          return -1.48;
        }
        else if ($mjd >= 15567.5 && $mjd < 15750) { // historic: 1901.500     -0.75     0.07      3.81     0.16 - 1902.000     -0.08     0.05      3.69     0.25
          return -0.75;
        }
        else if ($mjd >= 15750 && $mjd < 15932.5) { // historic: 1902.000     -0.08     0.05      3.69     0.25 - 1902.500      0.62     0.06      3.65     0.21
          return -0.08;
        }
        else if ($mjd >= 15932.5 && $mjd < 16115) { // historic: 1902.500      0.62     0.06      3.65     0.21 - 1903.000      1.26     0.04      3.61     0.22
          return 0.62;
        }
        else if ($mjd >= 16115 && $mjd < 16297.5) { // historic: 1903.000      1.26     0.04      3.61     0.22 - 1903.500      1.95     0.06      3.63     0.17
          return 1.26;
        }
        else if ($mjd >= 16297.5 && $mjd < 16480) { // historic: 1903.500      1.95     0.06      3.63     0.17 - 1904.000      2.59     0.05      3.69     0.23
          return 1.95;
        }
        else if ($mjd >= 16480 && $mjd < 16662.5) { // historic: 1904.000      2.59     0.05      3.69     0.23 - 1904.500      3.28     0.12      3.62     0.19
          return 2.59;
        }
        else if ($mjd >= 16662.5 && $mjd < 16846) { // historic: 1904.500      3.28     0.12      3.62     0.19 - 1905.000      3.92     0.11      3.61     0.48
          return 3.28;
        }
        else if ($mjd >= 16846 && $mjd < 17028.5) { // historic: 1905.000      3.92     0.11      3.61     0.48 - 1905.500      4.61     0.18      3.36     0.41
          return 3.92;
        }
        else if ($mjd >= 17028.5 && $mjd < 17211) { // historic: 1905.500      4.61     0.18      3.36     0.41 - 1906.000      5.20     0.15      2.83     0.70
          return 4.61;
        }
        else if ($mjd >= 17211 && $mjd < 17393.5) { // historic: 1906.000      5.20     0.15      2.83     0.70 - 1906.500      5.73     0.20      3.19     0.59
          return 5.20;
        }
        else if ($mjd >= 17393.5 && $mjd < 17576) { // historic: 1906.500      5.73     0.20      3.19     0.59 - 1907.000      6.29     0.17      3.75     0.79
          return 5.73;
        }
        else if ($mjd >= 17576 && $mjd < 17758.5) { // historic: 1907.000      6.29     0.17      3.75     0.79 - 1907.500      7.00     0.13      3.85     0.64
          return 6.29;
        }
        else if ($mjd >= 17758.5 && $mjd < 17941) { // historic: 1907.500      7.00     0.13      3.85     0.64 - 1908.000      7.68     0.09      4.10     0.50
          return 7.00;
        }
        else if ($mjd >= 17941 && $mjd < 18123.5) { // historic: 1908.000      7.68     0.09      4.10     0.50 - 1908.500      8.45     0.09      3.83     0.33
          return 7.68;
        }
        else if ($mjd >= 18123.5 && $mjd < 18307) { // historic: 1908.500      8.45     0.09      3.83     0.33 - 1909.000      9.13     0.06      3.45     0.33
          return 8.45;
        }
        else if ($mjd >= 18307 && $mjd < 18489.5) { // historic: 1909.000      9.13     0.06      3.45     0.33 - 1909.500      9.78     0.12      3.43     0.25
          return 9.13;
        }
        else if ($mjd >= 18489.5 && $mjd < 18672) { // historic: 1909.500      9.78     0.12      3.43     0.25 - 1910.000     10.38     0.10      3.22     0.47
          return 9.78;
        }
        else if ($mjd >= 18672 && $mjd < 18854.5) { // historic: 1910.000     10.38     0.10      3.22     0.47 - 1910.500     10.99     0.16      3.67     0.39
          return 10.38;
        }
        else if ($mjd >= 18854.5 && $mjd < 19037) { // historic: 1910.500     10.99     0.16      3.67     0.39 - 1911.000     11.64     0.13      4.41     0.62
          return 10.99;
        }
        else if ($mjd >= 19037 && $mjd < 19219.5) { // historic: 1911.000     11.64     0.13      4.41     0.62 - 1911.500     12.47     0.13      4.27     0.51
          return 11.64;
        }
        else if ($mjd >= 19219.5 && $mjd < 19402) { // historic: 1911.500     12.47     0.13      4.27     0.51 - 1912.000     13.23     0.10      4.13     0.51
          return 12.47;
        }
        else if ($mjd >= 19402 && $mjd < 19584.5) { // historic: 1912.000     13.23     0.10      4.13     0.51 - 1912.500     14.00     0.09      3.91     0.39
          return 13.23;
        }
        else if ($mjd >= 19584.5 && $mjd < 19768) { // historic: 1912.500     14.00     0.09      3.91     0.39 - 1913.000     14.69     0.06      3.65     0.33
          return 14.00;
        }
        else if ($mjd >= 19768 && $mjd < 19950.5) { // historic: 1913.000     14.69     0.06      3.65     0.33 - 1913.500     15.38     0.06      3.49     0.23
          return 14.69;
        }
        else if ($mjd >= 19950.5 && $mjd < 20133) { // historic: 1913.500     15.38     0.06      3.49     0.23 - 1914.000     16.00     0.04      3.38     0.22
          return 15.38;
        }
        else if ($mjd >= 20133 && $mjd < 20315.5) { // historic: 1914.000     16.00     0.04      3.38     0.22 - 1914.500     16.64     0.06      3.13     0.16
          return 16.00;
        }
        else if ($mjd >= 20315.5 && $mjd < 20498) { // historic: 1914.500     16.64     0.06      3.13     0.16 - 1915.000     17.19     0.05      2.79     0.24
          return 16.64;
        }
        else if ($mjd >= 20498 && $mjd < 20680.5) { // historic: 1915.000     17.19     0.05      2.79     0.24 - 1915.500     17.72     0.05      2.70     0.20
          return 17.19;
        }
        else if ($mjd >= 20680.5 && $mjd < 20863) { // historic: 1915.500     17.72     0.05      2.70     0.20 - 1916.000     18.19     0.03      2.52     0.18
          return 17.72;
        }
        else if ($mjd >= 20863 && $mjd < 21045.5) { // historic: 1916.000     18.19     0.03      2.52     0.18 - 1916.500     18.67     0.10      2.62     0.13
          return 18.19;
        }
        else if ($mjd >= 21045.5 && $mjd < 21229) { // historic: 1916.500     18.67     0.10      2.62     0.13 - 1917.000     19.13     0.08      2.94     0.37
          return 18.67;
        }
        else if ($mjd >= 21229 && $mjd < 21411.5) { // historic: 1917.000     19.13     0.08      2.94     0.37 - 1917.500     19.69     0.18      2.57     0.32
          return 19.13;
        }
        else if ($mjd >= 21411.5 && $mjd < 21594) { // historic: 1917.500     19.69     0.18      2.57     0.32 - 1918.000     20.14     0.16      2.09     0.70
          return 19.69;
        }
        else if ($mjd >= 21594 && $mjd < 21776.5) { // historic: 1918.000     20.14     0.16      2.09     0.70 - 1918.500     20.54     0.13      1.85     0.60
          return 20.14;
        }
        else if ($mjd >= 21776.5 && $mjd < 21959) { // historic: 1918.500     20.54     0.13      1.85     0.60 - 1919.000     20.86     0.09      1.46     0.51
          return 20.54;
        }
        else if ($mjd >= 21959 && $mjd < 22141.5) { // historic: 1919.000     20.86     0.09      1.46     0.51 - 1919.500     21.14     0.21      1.59     0.35
          return 20.86;
        }
        else if ($mjd >= 22141.5 && $mjd < 22324) { // historic: 1919.500     21.14     0.21      1.59     0.35 - 1920.000     21.41     0.18      1.90     0.82
          return 21.14;
        }
        else if ($mjd >= 22324 && $mjd < 22506.5) { // historic: 1920.000     21.41     0.18      1.90     0.82 - 1920.500     21.78     0.22      1.64     0.70
          return 21.41;
        }
        else if ($mjd >= 22506.5 && $mjd < 22690) { // historic: 1920.500     21.78     0.22      1.64     0.70 - 1921.000     22.06     0.17      1.21     0.84
          return 21.78;
        }
        else if ($mjd >= 22690 && $mjd < 22872.5) { // historic: 1921.000     22.06     0.17      1.21     0.84 - 1921.500     22.30     0.15      1.26     0.67
          return 22.06;
        }
        else if ($mjd >= 22872.5 && $mjd < 23055) { // historic: 1921.500     22.30     0.15      1.26     0.67 - 1922.000     22.51     0.11      1.40     0.58
          return 22.30;
        }
        else if ($mjd >= 23055 && $mjd < 23237.5) { // historic: 1922.000     22.51     0.11      1.40     0.58 - 1922.500     22.79     0.07      1.33     0.42
          return 22.51;
        }
        else if ($mjd >= 23237.5 && $mjd < 23420) { // historic: 1922.500     22.79     0.07      1.33     0.42 - 1923.000     23.01     0.04      1.41     0.28
          return 22.79;
        }
        else if ($mjd >= 23420 && $mjd < 23602.5) { // historic: 1923.000     23.01     0.04      1.41     0.28 - 1923.500     23.29     0.05      1.04     0.16
          return 23.01;
        }
        else if ($mjd >= 23602.5 && $mjd < 23785) { // historic: 1923.500     23.29     0.05      1.04     0.16 - 1924.000     23.46     0.04      0.39     0.19
          return 23.29;
        }
        else if ($mjd >= 23785 && $mjd < 23967.5) { // historic: 1924.000     23.46     0.04      0.39     0.19 - 1924.500     23.55     0.05      0.57     0.15
          return 23.46;
        }
        else if ($mjd >= 23967.5 && $mjd < 24151) { // historic: 1924.500     23.55     0.05      0.57     0.15 - 1925.000     23.63     0.04      0.76     0.20
          return 23.55;
        }
        else if ($mjd >= 24151 && $mjd < 24333.5) { // historic: 1925.000     23.63     0.04      0.76     0.20 - 1925.500     23.80     0.07      0.95     0.16
          return 23.63;
        }
        else if ($mjd >= 24333.5 && $mjd < 24516) { // historic: 1925.500     23.80     0.07      0.95     0.16 - 1926.000     23.95     0.06      1.54     0.27
          return 23.80;
        }
        else if ($mjd >= 24516 && $mjd < 24698.5) { // historic: 1926.000     23.95     0.06      1.54     0.27 - 1926.500     24.25     0.09      0.88     0.22
          return 23.95;
        }
        else if ($mjd >= 24698.5 && $mjd < 24881) { // historic: 1926.500     24.25     0.09      0.88     0.22 - 1927.000     24.39     0.07      0.01     0.34
          return 24.25;
        }
        else if ($mjd >= 24881 && $mjd < 25063.5) { // historic: 1927.000     24.39     0.07      0.01     0.34 - 1927.500     24.42     0.05     -0.27     0.29
          return 24.39;
        }
        else if ($mjd >= 25063.5 && $mjd < 25246) { // historic: 1927.500     24.42     0.05     -0.27     0.29 - 1928.000     24.34     0.03     -0.79     0.19
          return 24.42;
        }
        else if ($mjd >= 25246 && $mjd < 25428.5) { // historic: 1928.000     24.34     0.03     -0.79     0.19 - 1928.500     24.22     0.02     -0.56     0.10
          return 24.34;
        }
        else if ($mjd >= 25428.5 && $mjd < 25612) { // historic: 1928.500     24.22     0.02     -0.56     0.10 - 1929.000     24.10     0.02     -0.23     0.09
          return 24.22;
        }
        else if ($mjd >= 25612 && $mjd < 25794.5) { // historic: 1929.000     24.10     0.02     -0.23     0.09 - 1929.500     24.08     0.01     -0.19     0.06
          return 24.10;
        }
        else if ($mjd >= 25794.5 && $mjd < 25977) { // historic: 1929.500     24.08     0.01     -0.19     0.06 - 1930.000     24.02     0.00     -0.05     0.04
          return 24.08;
        }
        else if ($mjd >= 25977 && $mjd < 26159.5) { // historic: 1930.000     24.02     0.00     -0.05     0.04 - 1930.500     24.04     0.01     -0.15     0.01
          return 24.02;
        }
        else if ($mjd >= 26159.5 && $mjd < 26342) { // historic: 1930.500     24.04     0.01     -0.15     0.01 - 1931.000     23.98     0.01     -0.54     0.06
          return 24.04;
        }
        else if ($mjd >= 26342 && $mjd < 26524.5) { // historic: 1931.000     23.98     0.01     -0.54     0.06 - 1931.500     23.91     0.02      0.00     0.05
          return 23.98;
        }
        else if ($mjd >= 26524.5 && $mjd < 26707) { // historic: 1931.500     23.91     0.02      0.00     0.05 - 1932.000     23.89     0.02      0.20     0.08
          return 23.91;
        }
        else if ($mjd >= 26707 && $mjd < 26889.5) { // historic: 1932.000     23.89     0.02      0.20     0.08 - 1932.500     23.95     0.02      0.06     0.07
          return 23.89;
        }
        else if ($mjd >= 26889.5 && $mjd < 27073) { // historic: 1932.500     23.95     0.02      0.06     0.07 - 1933.000     23.93     0.02     -0.22     0.08
          return 23.95;
        }
        else if ($mjd >= 27073 && $mjd < 27255.5) { // historic: 1933.000     23.93     0.02     -0.22     0.08 - 1933.500     23.92     0.02     -0.10     0.06
          return 23.93;
        }
        else if ($mjd >= 27255.5 && $mjd < 27438) { // historic: 1933.500     23.92     0.02     -0.10     0.06 - 1934.000     23.88     0.02      0.21     0.08
          return 23.92;
        }
        else if ($mjd >= 27438 && $mjd < 27620.5) { // historic: 1934.000     23.88     0.02      0.21     0.08 - 1934.500     23.94     0.03     -0.04     0.06
          return 23.88;
        }
        else if ($mjd >= 27620.5 && $mjd < 27803) { // historic: 1934.500     23.94     0.03     -0.04     0.06 - 1935.000     23.91     0.02     -0.62     0.10
          return 23.94;
        }
        else if ($mjd >= 27803 && $mjd < 27985.5) { // historic: 1935.000     23.91     0.02     -0.62     0.10 - 1935.500     23.82     0.03     -0.21     0.08
          return 23.91;
        }
        else if ($mjd >= 27985.5 && $mjd < 28168) { // historic: 1935.500     23.82     0.03     -0.21     0.08 - 1936.000     23.76     0.02      0.48     0.11
          return 23.82;
        }
        else if ($mjd >= 28168 && $mjd < 28350.5) { // historic: 1936.000     23.76     0.02      0.48     0.11 - 1936.500     23.87     0.02      0.34     0.09
          return 23.76;
        }
        else if ($mjd >= 28350.5 && $mjd < 28534) { // historic: 1936.500     23.87     0.02      0.34     0.09 - 1937.000     23.91     0.02      0.13     0.09
          return 23.87;
        }
        else if ($mjd >= 28534 && $mjd < 28716.5) { // historic: 1937.000     23.91     0.02      0.13     0.09 - 1937.500     23.95     0.02      0.17     0.06
          return 23.91;
        }
        else if ($mjd >= 28716.5 && $mjd < 28899) { // historic: 1937.500     23.95     0.02      0.17     0.06 - 1938.000     23.96     0.01      0.08     0.06
          return 23.95;
        }
        else if ($mjd >= 28899 && $mjd < 29081.5) { // historic: 1938.000     23.96     0.01      0.08     0.06 - 1938.500     24.00     0.04      0.38     0.05
          return 23.96;
        }
        else if ($mjd >= 29081.5 && $mjd < 29264) { // historic: 1938.500     24.00     0.04      0.38     0.05 - 1939.000     24.04     0.04      0.83     0.05
          return 24.00;
        }
        else if ($mjd >= 29264 && $mjd < 29446.5) { // historic: 1939.000     24.04     0.04      0.83     0.05 - 1939.500     24.20     0.04      0.95     0.11
          return 24.04;
        }
        else if ($mjd >= 29446.5 && $mjd < 29629) { // historic: 1939.500     24.20     0.04      0.95     0.11 - 1940.000     24.35     0.03      1.29     0.08
          return 24.20;
        }
        else if ($mjd >= 29629 && $mjd < 29811.5) { // historic: 1940.000     24.35     0.03      1.29     0.08 - 1940.500     24.61     0.02      1.30     0.04
          return 24.35;
        }
        else if ($mjd >= 29811.5 && $mjd < 29995) { // historic: 1940.500     24.61     0.02      1.30     0.04 - 1941.000     24.82     0.01      1.30     0.08
          return 24.61;
        }
        else if ($mjd >= 29995 && $mjd < 30177.5) { // historic: 1941.000     24.82     0.01      1.30     0.08 - 1941.500     25.09     0.01      1.29     0.07
          return 24.82;
        }
        else if ($mjd >= 30177.5 && $mjd < 30360) { // historic: 1941.500     25.09     0.01      1.29     0.07 - 1942.000     25.30     0.01      1.23     0.17
          return 25.09;
        }
        else if ($mjd >= 30360 && $mjd < 30542.5) { // historic: 1942.000     25.30     0.01      1.23     0.17 - 1942.500     25.56     0.01      1.30     0.21
          return 25.30;
        }
        else if ($mjd >= 30542.5 && $mjd < 30725) { // historic: 1942.500     25.56     0.01      1.30     0.21 - 1943.000     25.77     0.01      1.38     0.11
          return 25.56;
        }
        else if ($mjd >= 30725 && $mjd < 30907.5) { // historic: 1943.000     25.77     0.01      1.38     0.11 - 1943.500     26.05     0.02      1.43     0.19
          return 25.77;
        }
        else if ($mjd >= 30907.5 && $mjd < 31090) { // historic: 1943.500     26.05     0.02      1.43     0.19 - 1944.000     26.27     0.01      1.52     0.19
          return 26.05;
        }
        else if ($mjd >= 31090 && $mjd < 31272.5) { // historic: 1944.000     26.27     0.01      1.52     0.19 - 1944.500     26.54     0.02      1.44     0.24
          return 26.27;
        }
        else if ($mjd >= 31272.5 && $mjd < 31456) { // historic: 1944.500     26.54     0.02      1.44     0.24 - 1945.000     26.76     0.01      1.16     0.81
          return 26.54;
        }
        else if ($mjd >= 31456 && $mjd < 31638.5) { // historic: 1945.000     26.76     0.01      1.16     0.81 - 1945.500     27.04     0.02      1.29     0.85
          return 26.76;
        }
        else if ($mjd >= 31638.5 && $mjd < 31821) { // historic: 1945.500     27.04     0.02      1.29     0.85 - 1946.000     27.27     0.01      1.25     0.94
          return 27.04;
        }
        else if ($mjd >= 31821 && $mjd < 32003.5) { // historic: 1946.000     27.27     0.01      1.25     0.94 - 1946.500     27.55     0.01      1.40     1.07
          return 27.27;
        }
        else if ($mjd >= 32003.5 && $mjd < 32186) { // historic: 1946.500     27.55     0.01      1.40     1.07 - 1947.000     27.77     0.01      1.30     1.20
          return 27.55;
        }
        else if ($mjd >= 32186 && $mjd < 32368.5) { // historic: 1947.000     27.77     0.01      1.30     1.20 - 1947.500     28.03     0.01      1.24     0.84
          return 27.77;
        }
        else if ($mjd >= 32368.5 && $mjd < 32551) { // historic: 1947.500     28.03     0.01      1.24     0.84 - 1948.000     28.25     0.01      1.22     0.87
          return 28.03;
        }
        else if ($mjd >= 32551 && $mjd < 32733.5) { // historic: 1948.000     28.25     0.01      1.22     0.87 - 1948.500     28.50     0.01      1.19     0.93
          return 28.25;
        }
        else if ($mjd >= 32733.5 && $mjd < 32917) { // historic: 1948.500     28.50     0.01      1.19     0.93 - 1949.000     28.70     0.01      1.23     1.04
          return 28.50;
        }
        else if ($mjd >= 32917 && $mjd < 33099.5) { // historic: 1949.000     28.70     0.01      1.23     1.04 - 1949.500     28.95     0.01      1.13     1.13
          return 28.70;
        }
        else if ($mjd >= 33099.5 && $mjd < 33282) { // historic: 1949.500     28.95     0.01      1.13     1.13 - 1950.000     29.15     0.01      1.21     0.74
          return 28.95;
        }
        else if ($mjd >= 33282 && $mjd < 33464.5) { // historic: 1950.000     29.15     0.01      1.21     0.74 - 1950.500     29.38     0.01      1.19     0.81
          return 29.15;
        }
        else if ($mjd >= 33464.5 && $mjd < 33647) { // historic: 1950.500     29.38     0.01      1.19     0.81 - 1951.000     29.57     0.01      1.24     0.84
          return 29.38;
        }
        else if ($mjd >= 33647 && $mjd < 33829.5) { // historic: 1951.000     29.57     0.01      1.24     0.84 - 1951.500     29.80     0.01      1.04     0.89
          return 29.57;
        }
        else if ($mjd >= 33829.5 && $mjd < 34012) { // historic: 1951.500     29.80     0.01      1.04     0.89 - 1952.000     29.97     0.01      1.05     1.12
          return 29.80;
        }
        else if ($mjd >= 34012 && $mjd < 34194.5) { // historic: 1952.000     29.97     0.01      1.05     1.12 - 1952.500     30.19     0.01      0.94     0.89
          return 29.97;
        }
        else if ($mjd >= 34194.5 && $mjd < 34378) { // historic: 1952.500     30.19     0.01      0.94     0.89 - 1953.000     30.36     0.01      1.10     0.97
          return 30.19;
        }
        else if ($mjd >= 34378 && $mjd < 34560.5) { // historic: 1953.000     30.36     0.01      1.10     0.97 - 1953.500     30.57     0.01      1.03     0.12
          return 30.36;
        }
        else if ($mjd >= 34560.5 && $mjd < 34743) { // historic: 1953.500     30.57     0.01      1.03     0.12 - 1954.000     30.72     0.01      0.91     0.09
          return 30.57;
        }
        else if ($mjd >= 34743 && $mjd < 34925.5) { // historic: 1954.000     30.72     0.01      0.91     0.09 - 1954.500     30.93     0.01      0.64     0.10
          return 30.72;
        }
        else if ($mjd >= 34925.5 && $mjd < 35108) { // historic: 1954.500     30.93     0.01      0.64     0.10 - 1955.000     31.07     0.01      0.74     0.11
          return 30.93;
        }
        else if ($mjd >= 35108 && $mjd < 35290.5) { // historic: 1955.000     31.07     0.01      0.74     0.11 - 1955.500     31.24     0.01      1.37     0.01
          return 31.07;
        }
        else if ($mjd >= 35290.5 && $mjd < 35473) { // historic: 1955.500     31.24     0.01      1.37     0.01 - 1956.000     31.349    0.003     0.27     0.03
          return 31.24;
        }
        else if ($mjd >= 35473 && $mjd < 35655.5) { // historic: 1956.000     31.349    0.003     0.27     0.03 - 1956.500     31.516    0.003     0.99     0.12
          return 31.349;
        }
        else if ($mjd >= 35655.5 && $mjd < 35839) { // historic: 1956.500     31.516    0.003     0.99     0.12 - 1957.000     31.677    0.003     0.99     0.15
          return 31.516;
        }
        else if ($mjd >= 35839 && $mjd < 36021.5) { // historic: 1957.000     31.677    0.003     0.99     0.15 - 1957.500     31.923    0.003     1.36     0.16
          return 31.677;
        }
        else if ($mjd >= 36021.5 && $mjd < 36204) { // historic: 1957.500     31.923    0.003     1.36     0.16 - 1958.000     32.166    0.003     1.57     0.11
          return 31.923;
        }
        else if ($mjd >= 36204 && $mjd < 36386.5) { // historic: 1958.000     32.166    0.003     1.57     0.11 - 1958.500     32.449    0.003     1.37     0.18
          return 32.166;
        }
        else if ($mjd >= 36386.5 && $mjd < 36569) { // historic: 1958.500     32.449    0.003     1.37     0.18 - 1959.000     32.671    0.003     1.42     0.12
          return 32.449;
        }
        else if ($mjd >= 36569 && $mjd < 36751.5) { // historic: 1959.000     32.671    0.003     1.42     0.12 - 1959.500     32.919    0.003     1.39     0.08
          return 32.671;
        }
        else if ($mjd >= 36751.5 && $mjd < 36934) { // historic: 1959.500     32.919    0.003     1.39     0.08 - 1960.000     33.150    0.003     1.26     0.10
          return 32.919;
        }
        else if ($mjd >= 36934 && $mjd < 37116.5) { // historic: 1960.000     33.150    0.003     1.26     0.10 - 1960.500     33.397    0.003     1.06     0.11
          return 33.150;
        }
        else if ($mjd >= 37116.5 && $mjd < 37300) { // historic: 1960.500     33.397    0.003     1.06     0.11 - 1961.000     33.584    0.003     1.01     0.19
          return 33.397;
        }
        else if ($mjd >= 37300 && $mjd < 37482.5) { // historic: 1961.000     33.584    0.003     1.01     0.19 - 1961.500     33.804    0.003     1.29     0.10
          return 33.584;
        }
        else if ($mjd >= 37482.5 && $mjd < 37665) { // historic: 1961.500     33.804    0.003     1.29     0.10 - 1962.000     33.992    0.001     1.15     0.07
          return 33.804;
        }
        else if ($mjd >= 37665 && $mjd < 37847.5) { // historic: 1962.000     33.992    0.001     1.15     0.07 - 1962.500     34.240    0.001     1.23     0.03
          return 33.992;
        }
        else if ($mjd >= 37847.5 && $mjd < 38030) { // historic: 1962.500     34.240    0.001     1.23     0.03 - 1963.000     34.466    0.001     1.05     0.03
          return 34.240;
        }
        else if ($mjd >= 38030 && $mjd < 38212.5) { // historic: 1963.000     34.466    0.001     1.05     0.03 - 1963.500     34.731    0.001     1.41     0.05
          return 34.466;
        }
        else if ($mjd >= 38212.5 && $mjd < 38395) { // historic: 1963.500     34.731    0.001     1.41     0.05 - 1964.000     35.030    0.001     1.92     0.02
          return 34.731;
        }
        else if ($mjd >= 38395 && $mjd < 38577.5) { // historic: 1964.000     35.030    0.001     1.92     0.02 - 1964.500     35.400    0.001     1.82     0.03
          return 35.030;
        }
        else if ($mjd >= 38577.5 && $mjd < 38761) { // historic: 1964.500     35.400    0.001     1.82     0.03 - 1965.000     35.738    0.001     1.88     0.03
          return 35.400;
        }
        else if ($mjd >= 38761 && $mjd < 38943.5) { // historic: 1965.000     35.738    0.001     1.88     0.03 - 1965.500     36.147    0.001     2.30     0.02
          return 35.738;
        }
        else if ($mjd >= 38943.5 && $mjd < 39126) { // historic: 1965.500     36.147    0.001     2.30     0.02 - 1966.000     36.546    0.001     2.23     0.03
          return 36.147;
        }
        else if ($mjd >= 39126 && $mjd < 39308.5) { // historic: 1966.000     36.546    0.001     2.23     0.03 - 1966.500     36.995    0.001     2.38     0.03
          return 36.546;
        }
        else if ($mjd >= 39308.5 && $mjd < 39491) { // historic: 1966.500     36.995    0.001     2.38     0.03 - 1967.000     37.429    0.001     2.22     0.03
          return 36.995;
        }
        else if ($mjd >= 39491 && $mjd < 39673.5) { // historic: 1967.000     37.429    0.001     2.22     0.03 - 1967.500     37.879    0.001     2.36     0.02
          return 37.429;
        }
        else if ($mjd >= 39673.5 && $mjd < 39856) { // historic: 1967.500     37.879    0.001     2.36     0.02 - 1968.000     38.291    0.001     2.44     0.03
          return 37.879;
        }
        else if ($mjd >= 39856 && $mjd < 40038.5) { // historic: 1968.000     38.291    0.001     2.44     0.03 - 1968.500     38.753    0.001     2.64     0.03
          return 38.291;
        }
        else if ($mjd >= 40038.5 && $mjd < 40222) { // historic: 1968.500     38.753    0.001     2.64     0.03 - 1969.000     39.204    0.001     2.38     0.03
          return 38.753;
        }
        else if ($mjd >= 40222 && $mjd < 40404.5) { // historic: 1969.000     39.204    0.001     2.38     0.03 - 1969.500     39.707    0.001     2.66     0.02
          return 39.204;
        }
        else if ($mjd >= 40404.5 && $mjd < 40587) { // historic: 1969.500     39.707    0.001     2.66     0.02 - 1970.000     40.182    0.001     2.74     0.02
          return 39.707;
        }
        else if ($mjd >= 40587 && $mjd < 40769.5) { // historic: 1970.000     40.182    0.001     2.74     0.02 - 1970.500     40.706    0.001     2.64     0.02
          return 40.182;
        }
        else if ($mjd >= 40769.5 && $mjd < 40952) { // historic: 1970.500     40.706    0.001     2.64     0.02 - 1971.000     41.170    0.001     2.43     0.03
          return 40.706;
        }
        else if ($mjd >= 40952 && $mjd < 41134.5) { // historic: 1971.000     41.170    0.001     2.43     0.03 - 1971.500     41.686    0.001     3.10     0.03
          return 41.170;
        }
        else if ($mjd >= 41134.5 && $mjd < 41317) { // historic: 1971.500     41.686    0.001     3.10     0.03 - 1972.000     42.227    0.001     2.94     0.03
          return 41.686;
        }
        else if ($mjd >= 41317 && $mjd < 41499.5) { // historic: 1972.000     42.227    0.001     2.94     0.03 - 1972.500     42.825    0.001     3.19     0.02
          return 42.227;
        }
        else if ($mjd >= 41499.5 && $mjd < 41683) { // historic: 1972.500     42.825    0.001     3.19     0.02 - 1973.000     43.373    0.001     3.04     0.02
          return 42.825;
        }
        else if ($mjd >= 41683 && $mjd < 41865.5) { // historic: 1973.000     43.373    0.001     3.04     0.02 - 1973.500     43.959    0.001     3.08     0.02
          return 43.373;
        }
        else if ($mjd >= 41865.5 && $mjd < 42048) { // historic: 1973.500     43.959    0.001     3.08     0.02 - 1974.000     44.486    0.001     2.41     0.03
          return 43.959;
        }
        else if ($mjd >= 42048 && $mjd < 42230.5) { // historic: 1974.000     44.486    0.001     2.41     0.03 - 1974.500     44.997    0.001     2.71     0.02
          return 44.486;
        }
        else if ($mjd >= 42230.5 && $mjd < 42413) { // historic: 1974.500     44.997    0.001     2.71     0.02 - 1975.000     45.477    0.001     2.62     0.03
          return 44.997;
        }
        else if ($mjd >= 42413 && $mjd < 42595.5) { // historic: 1975.000     45.477    0.001     2.62     0.03 - 1975.500     45.983    0.001     2.64     0.03
          return 45.477;
        }
        else if ($mjd >= 42595.5 && $mjd < 42778) { // historic: 1975.500     45.983    0.001     2.64     0.03 - 1976.000     46.458    0.001     2.65     0.03
          return 45.983;
        }
        else if ($mjd >= 42778 && $mjd < 42960.5) { // historic: 1976.000     46.458    0.001     2.65     0.03 - 1976.500     46.997    0.001     3.02     0.05
          return 46.458;
        }
        else if ($mjd >= 42960.5 && $mjd < 43144) { // historic: 1976.500     46.997    0.001     3.02     0.05 - 1977.000     47.521    0.001     2.63     0.03
          return 46.997;
        }
        else if ($mjd >= 43144 && $mjd < 43326.5) { // historic: 1977.000     47.521    0.001     2.63     0.03 - 1977.500     48.034    0.001     2.59     0.03
          return 47.521;
        }
        else if ($mjd >= 43326.5 && $mjd < 43509) { // historic: 1977.500     48.034    0.001     2.59     0.03 - 1978.000     48.535    0.001     2.99     0.03
          return 48.034;
        }
        else if ($mjd >= 43509 && $mjd < 43691.5) { // historic: 1978.000     48.535    0.001     2.99     0.03 - 1978.500     49.099    0.001     2.60     0.04
          return 48.535;
        }
        else if ($mjd >= 43691.5 && $mjd < 43874) { // historic: 1978.500     49.099    0.001     2.60     0.04 - 1979.000     49.589    0.001     2.73     0.02
          return 49.099;
        }
        else if ($mjd >= 43874 && $mjd < 44056.5) { // historic: 1979.000     49.589    0.001     2.73     0.02 - 1979.500     50.102    0.001     2.66     0.02
          return 49.589;
        }
        else if ($mjd >= 44056.5 && $mjd < 44239) { // historic: 1979.500     50.102    0.001     2.66     0.02 - 1980.000     50.540    0.001     2.34     0.02
          return 50.102;
        }
        else if ($mjd >= 44239 && $mjd < 44421.5) { // historic: 1980.000     50.540    0.001     2.34     0.02 - 1980.500     50.975    0.001     2.33     0.02
          return 50.540;
        }
        else if ($mjd >= 44421.5 && $mjd < 44605) { // historic: 1980.500     50.975    0.001     2.33     0.02 - 1981.000     51.382    0.001     2.19     0.02
          return 50.975;
        }
        else if ($mjd >= 44605 && $mjd < 44787.5) { // historic: 1981.000     51.382    0.001     2.19     0.02 - 1981.500     51.810    0.001     2.11     0.02
          return 51.382;
        }
        else if ($mjd >= 44787.5 && $mjd < 44970) { // historic: 1981.500     51.810    0.001     2.11     0.02 - 1982.000     52.168    0.001     1.95     0.02
          return 51.810;
        }
        else if ($mjd >= 44970 && $mjd < 45152.5) { // historic: 1982.000     52.168    0.001     1.95     0.02 - 1982.500     52.572    0.001     2.12     0.03
          return 52.168;
        }
        else if ($mjd >= 45152.5 && $mjd < 45335) { // historic: 1982.500     52.572    0.001     2.12     0.03 - 1983.000     52.957    0.001     2.60     0.03
          return 52.572;
        }
        else if ($mjd >= 45335 && $mjd < 45517.5) { // historic: 1983.000     52.957    0.001     2.60     0.03 - 1983.500     53.434    0.001     2.14     0.04
          return 52.957;
        }
        else if ($mjd >= 45517.5 && $mjd < 45700) { // historic: 1983.500     53.434    0.001     2.14     0.04 - 1984.000     53.789    0.001     1.46     0.03
          return 53.434;
        }
        else if ($mjd >= 45700 && $mjd < 45882.5) { // historic: 1984.000     53.789    0.001     1.46     0.03 - 1984.500     54.087    0.001     1.45     0.04
          return 53.789;
        }

        
        return null;
    }
}

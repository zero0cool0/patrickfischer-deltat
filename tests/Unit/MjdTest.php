<?php

namespace PatrickFischer\DeltaT\Tests\Unit;

use Carbon\Carbon;
use PatrickFischer\DeltaT\DeltaT;
use PatrickFischer\DeltaT\Time;
use PHPUnit\Framework\TestCase;

class MjdTest extends TestCase
{
    public function test_mjd()
    {
        $c = Carbon::create(2026, 1, 1, 12, 30, 30);
        $this->assertEqualsWithDelta(61041.52118055556, Time::mjdFromCarbon($c), 1E-9);

        $c = Carbon::create(2024, 2, 29, 1, 30, 30);
        $this->assertEqualsWithDelta(60369.06284722222, Time::mjdFromCarbon($c), 1E-9);
    }
}
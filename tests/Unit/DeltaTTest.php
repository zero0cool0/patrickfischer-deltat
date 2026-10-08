<?php

namespace PatrickFischer\DeltaT\Tests\Unit;

use Carbon\Carbon;
use PatrickFischer\DeltaT\DeltaT;
use PatrickFischer\DeltaT\Time;
use PHPUnit\Framework\TestCase;

class DeltaTTest extends TestCase
{

    public function test_deltat()
    {

        $c = Carbon::createFromTimestamp(1780939338);
        $this->assertEquals(69.09, DeltaT::lookup(Time::mjdFromCarbon($c))->value);

        $c = Carbon::create(2010, 8, 2, 12, 0, 0);
        $this->assertEquals(66.2335, DeltaT::lookup(Time::mjdFromCarbon($c))->value);

        // predicated, this is likely to change
        $c = Carbon::create(2029, 2, 2, 12, 0, 0);
        $this->assertEquals(69.63, DeltaT::lookup(Time::mjdFromCarbon($c))->value);

        // historical
        $c = Carbon::create(1920, 2, 2, 12, 0, 0);
        $this->assertEquals(21.41, DeltaT::lookup(Time::mjdFromCarbon($c))->value);

        $c = Carbon::create(1898, 2, 1, 12, 0, 0);
        $this->assertEquals(-4.68, DeltaT::lookup(Time::mjdFromCarbon($c))->value);

        $c = Carbon::create(1000, 7, 14, 12, 0, 0);
        $this->assertEqualsWithDelta(1571.1903692632, DeltaT::lookup(Time::mjdFromCarbon($c))->value, 1E-9);
    }
}

<?php

namespace PatrickFischer\DeltaT;

class DeltaTLookupResult
{
    public function __construct(public float $value, public DeltaTLookupSource $source)
    {
    }
}
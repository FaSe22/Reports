<?php

namespace Fase22\Reports\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Fase22\Reports\Reports
 */
class Reports extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Fase22\Reports\Reports::class;
    }
}

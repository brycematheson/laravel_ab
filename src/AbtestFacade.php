<?php

namespace Brycematheson\Abtest;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Brycematheson\Abtest\Abtest
 */
class AbtestFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Abtest';
    }
}

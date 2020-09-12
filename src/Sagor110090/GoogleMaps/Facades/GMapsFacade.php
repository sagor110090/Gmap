<?php namespace Sagor110090\GoogleMaps\Facades;

use Illuminate\Support\Facades\Facade;

class GMapsFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'GMaps';
    }
}

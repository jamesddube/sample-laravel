<?php

namespace Jamesddube\SampleLaravel;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Jamesddube\SampleLaravel\Skeleton\SkeletonClass
 */
class SampleLaravelFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'sample-laravel';
    }
}

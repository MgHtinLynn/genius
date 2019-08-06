<?php

namespace MgHtinLynn\Genius;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MgHtinLynn\Genius\Skeleton\SkeletonClass
 */
class GeniusFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'genius';
    }
}

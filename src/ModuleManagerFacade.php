<?php

namespace junaidraza\ModuleManager;

use Illuminate\Support\Facades\Facade;

/**
 * @see \junaidraza\ModuleManager\Skeleton\SkeletonClass
 */
class ModuleManagerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'module-manager';
    }
}

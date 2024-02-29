<?php
namespace BuiltByBuilder\EasyNavPlus;
/**
 * This file is part of EasyNavPlus,
 * Easy navigation tools for Laravel.
 *
 * @license MIT
 * @package EasyNavPlus
 */

use Illuminate\Support\Facades\Facade;

class EasyNavPlusFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'easynavplus';
    }
}

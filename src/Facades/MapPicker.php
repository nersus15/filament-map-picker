<?php

declare(strict_types=1);

namespace Nersus15\MapPicker\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nersus15\MapPicker\MapPicker
 */
class MapPicker extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Nersus15\MapPicker\MapPicker::class;
    }
}

<?php

namespace KevPercy\PasswordGenerator\Facades;

use Illuminate\Support\Facades\Facade;

class PasswordGenerator extends Facade
{
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'password';
    }
}

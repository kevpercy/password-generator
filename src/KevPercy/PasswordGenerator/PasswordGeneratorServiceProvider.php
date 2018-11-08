<?php

namespace KevPercy\PasswordGenerator;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use KevPercy\PasswordGenerator\PasswordGenerator;

/**
 * Class PasswordGeneratorServiceProvider
 * @package KevPercy\PasswordGenerator
 */
class PasswordGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('password', function ($app) {
            return new PasswordGenerator;
        });

        $this->app->booting(function () {
            $loader = AliasLoader::getInstance();
            $loader->alias('Password', 'KevPercy\PasswordGenerator\Facades\PasswordGenerator');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['password'];
    }
}

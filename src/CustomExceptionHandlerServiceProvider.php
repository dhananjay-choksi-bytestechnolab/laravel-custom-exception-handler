<?php

namespace BytesTechnolabs\CustomExceptionHandler;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Debug\ExceptionHandler;

class CustomExceptionHandlerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Check if the configuration file has been published
        if (!$this->app->runningInConsole() && !config('custom_exception_handler')) {
            // If the configuration hasn't been published, merge the package's default configuration
            // with Laravel's configuration.
            $this->mergeConfigFrom(__DIR__.'/config/custom_exception_handler.php', 'custom_exception_handler');
        }
        
        // Register the custom exception handler as a singleton.
        $this->app->singleton(ExceptionHandler::class, CustomExceptionHandler::class);

        // Publish the package's configuration file to the Laravel project.
        $this->publishes([
            __DIR__.'/config/custom_exception_handler.php' => config_path('custom_exception_handler.php'),
        ], 'config');
    }

    public function register()
    {
        // Register any package-specific services here
    }
}

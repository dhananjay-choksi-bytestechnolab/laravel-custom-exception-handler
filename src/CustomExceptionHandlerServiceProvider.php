<?php

namespace BytesTechnolabs\CustomExceptionHandler;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Debug\ExceptionHandler;

class CustomExceptionHandlerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->singleton(ExceptionHandler::class, CustomExceptionHandler::class);

        // Publish the configuration file
        $this->publishes([
            __DIR__.'/config/custom_exception_handler.php' => config_path('custom_exception_handler.php'),
        ], 'config');
        
        // $this->app['validator']->resolver(function ($translator, $data, $rules, $messages) {
        //     return new StartsWithXRule();
        // });
    }

    public function register()
    {
        // Register any package-specific services here
    }
}

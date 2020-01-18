<?php
namespace Lizeng\Im;

use Illuminate\Support\ServiceProvider;

class ImServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . DIRECTORY_SEPARATOR . 'public' => public_path('lizeng'),
        ], 'public');

        $this->publishes([
            __DIR__ . DIRECTORY_SEPARATOR . 'config' . DIRECTORY_SEPARATOR . 'lizeng.php' => config_path('lizeng.php'),
        ], 'config');


        $this->loadRoutesFrom(__DIR__ . '/routes.php');
    }

    public function register()
    {
        $this->app->make('Lizeng\Im\Controller\TestController');
        $this->loadViewsFrom(__DIR__.'/View', 'lizeng');
    }
}
<?php

namespace ShakibZaman\Post;
class PostServiceProvider extends \Illuminate\Support\ServiceProvider{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','Post');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->SeederResources();

    }
    public function register()
    {

    }
    protected function SeederResources()
    {
        $this->publishes([
            __DIR__ . '/database/seeds/PostSeeder.php' => database_path('seeds/PostSeeder.php'),
        ]);
    }
}

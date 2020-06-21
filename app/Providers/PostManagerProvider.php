<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Post\PostManager;

class PostManagerProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(PostManager::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
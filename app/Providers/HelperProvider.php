<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelperProvider extends ServiceProvider
{
    /**
     * Load all helper function
     *
     * @return void
     */
    public function boot()
    {
        foreach (glob(app_path('Helpers' . '/*.php')) as $file) {
            require_once $file;
        }
    }
}

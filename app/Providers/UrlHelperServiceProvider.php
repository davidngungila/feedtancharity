<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class UrlHelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Load helper functions
        require_once app_path('Helpers/UrlHelper.php');
    }
}

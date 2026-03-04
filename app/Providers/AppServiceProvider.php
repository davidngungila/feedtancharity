<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Register getSiteUrl helper function for Blade templates
        Blade::directive('getSiteUrl', function ($path = null) {
            $environment = app()->environment();
            
            if ($environment === 'local') {
                $baseUrl = 'http://127.0.0.1:8002';
            } else {
                $baseUrl = 'https://charity.feedtancmg.org';
            }
            
            if ($path) {
                return "<?php echo '{$baseUrl}/' . ltrim({$path}, '/') . '; ?>";
            }
            
            return "<?php echo '{$baseUrl}'; ?>";
        });
    }
}

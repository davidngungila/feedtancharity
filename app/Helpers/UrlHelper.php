<?php

if (!function_exists('getSiteUrl')) {
    function getSiteUrl($path = '')
    {
        $environment = app()->environment();
        
        if ($environment === 'local') {
            $baseUrl = 'http://127.0.0.1:8002';
        } else {
            $baseUrl = 'https://charity.feedtancmg.org';
        }
        
        return $baseUrl . '/' . ltrim($path, '/');
    }
}

if (!function_exists('isLocalEnvironment')) {
    function isLocalEnvironment()
    {
        return app()->environment('local');
    }
}

if (!function_exists('isProductionEnvironment')) {
    function isProductionEnvironment()
    {
        return !app()->environment('local');
    }
}

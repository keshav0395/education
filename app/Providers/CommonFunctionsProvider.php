<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CommonFunctionsProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        require_once __DIR__ . '/../Http/Helpers/CommonFunctions.php';
        require_once __DIR__ . '/../Http/Helpers/HtmlHelper.php';
    }
}

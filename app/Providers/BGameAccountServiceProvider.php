<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BGameAccountServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        require_once app_path() . '/Helpers/BGameAccount/BGameAccount.php';
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

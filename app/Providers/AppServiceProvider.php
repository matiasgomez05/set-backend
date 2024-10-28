<?php

namespace App\Providers;

//use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    /*
    * Segun la documentacion oficial de Laravel, para versiones de MySQL anteriores a 10.2.2 
    * se debe utilizar el Schema::defaultStringLength dentro de boot, y usar el soporte de
    * Facades/schema para que éste funcione correctamente.  
    */
    public function boot()
    {
        //Schema::defaultStringLength(191);
    }
}

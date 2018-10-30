<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Request;
class LaravelAppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $halaman='';
        if (Request::segment(1)=='produk')
        {
            $halaman = 'produk';
        }
        elseif (Request::segment(1)=='about')
        {
            $halaman = 'about';
        }
        else $halaman='';
        view()->share('halaman',$halaman);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
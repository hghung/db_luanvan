<?php

namespace App\Providers;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\ServiceProvider;
use ConsoleTVs\Charts\Registrar as Charts;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Charts $charts)
    {
        /// để không bị lỗi S4201 trong migrate
        Schema::defaultStringLength(191);

        $charts->register([
            \App\Charts\ChartCus::class
        ]);
    }
}

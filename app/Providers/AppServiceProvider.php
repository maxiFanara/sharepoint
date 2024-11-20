<?php

namespace App\Providers;

use App\Models\Canal;
use App\Models\Carpeta;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
        View::share('carpetas', Carpeta::all());
        View::share('canales', Canal::all());
    }
}

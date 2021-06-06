<?php

namespace App\Providers;

use App\Helpers\Importer;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('importer', fn () => new Importer(config('constants.api_endpoint')));
    }
}

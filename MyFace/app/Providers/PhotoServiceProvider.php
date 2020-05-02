<?php

namespace App\Providers;

use App\Services\PhotoService;
use Carbon\Laravel\ServiceProvider;

class PhotoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(PhotoService::class, function () {
            return new PhotoService();
        });
    }
}

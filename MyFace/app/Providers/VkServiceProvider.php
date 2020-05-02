<?php

namespace App\Providers;

use App\Services\PhotoService;
use App\Services\VkService;
use Carbon\Laravel\ServiceProvider;

class VkServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(VkService::class, function () {
            return new VkService(app()->make(PhotoService::class));
        });
    }
}

<?php

namespace Proclame\LaravelNotifyAdmin;

use Illuminate\Support\ServiceProvider;

class NotifyAdminServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/notify-admin.php',
            'notify-admin'
        );
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/notify-admin.php' => config_path('notify-admin.php'),
        ]);
    }
}

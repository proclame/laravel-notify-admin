<?php

namespace Proclame\LaravelNotifyAdmin;

use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class Admin
{
    use Notifiable;

    public function routeNotificationFor($driver, $notification = null)
    {
        if (config()->has('notify-admin.'.Str::kebab($driver))) {
            return config('notify-admin.'.Str::kebab($driver));
        }

        if ($driver === 'database') {
            return $this->notifications();
        }

        return null;
    }
}

<?php

use Proclame\LaravelNotifyAdmin\Admin;

if (! function_exists('notify_admin')) {
    function notify_admin(\Illuminate\Notifications\Notification $notification)
    {
        (new Admin())->notify($notification);
    }
}

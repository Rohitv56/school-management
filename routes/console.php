<?php

use App\Console\Commands\SendDailyAttendanceNotifications;
use App\Console\Commands\SendScheduledMessage;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::call(function () {
    (new \App\Console\Commands\SentMessage)->handle();
    (new SendScheduledMessage())->handle();
})->everyMinute();
Schedule::call(function () {
    (new SendDailyAttendanceNotifications)->handle();
})->dailyAt('8:00');

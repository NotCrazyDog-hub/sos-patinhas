<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

Route::view('/', 'index');

Route::get('/transparencia', fn () => redirect('/#transparencia'));
Route::get('/doar', fn () => redirect('/#doar'));

Route::get('/cron/schedule-run', function () {
    if (request('token') !== config('app.cron_secret')) {
        abort(403);
    }
    Artisan::call('schedule:run');
    return response()->json(['status' => 'executed']);
});

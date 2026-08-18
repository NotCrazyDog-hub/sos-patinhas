<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;

Route::view('/', 'index');

Route::get('/transparencia', fn () => redirect('/#transparencia'));
Route::get('/doar', fn () => redirect('/#doar'));

Route::get('/cron/schedule-run', function () {
    if (request('token') !== config('app.cron_secret')) {
        abort(403);
    }

    try {
        Artisan::call('schedule:run');
        return response()->json(['status' => 'executed'], 200);
    } catch (\Throwable $e) {
        Log::error('Falha na execução do Cron: ' . $e->getMessage(), [
            'exception' => $e
        ]);
        return response()->json(['status' => 'failed', 'message' => 'Check Render logs'], 500);
    }
});

<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'index');

Route::get('/transparencia', fn () => redirect('/#transparencia'));
Route::get('/doar', fn () => redirect('/#doar'));

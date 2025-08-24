<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get('/', function () {
    return view('welcome');
});

// Demo route to understand request flow
Route::get('/lifecycle', [DemoController::class, 'index']);

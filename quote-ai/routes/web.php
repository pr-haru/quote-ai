<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/quote', [IndexController::class, 'index']);
Route::get('/quote/result', [IndexController::class, 'sendMessage']);
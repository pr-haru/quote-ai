<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmotionController;
Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';


Route::get('/emotion', [EmotionController::class, 'index']);

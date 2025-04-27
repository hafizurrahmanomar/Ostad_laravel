<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResponseController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [HomeController::class, 'index']);

///Response practice

Route::get('/response', [ResponseController::class, 'response']);

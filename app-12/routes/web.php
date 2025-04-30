<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SiteController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [HomeController::class, 'index']);

///Response practice

Route::get('/response', [ResponseController::class, 'response']);
///Request practice
Route::get('/request', [RequestController::class, 'request_practice']);
Route::get('/prams/{name}/{city}', [RequestController::class, 'prams']);
Route::post('/myJson', [RequestController::class, 'myJson']);
Route::post('/form_data', [RequestController::class, 'form_data']);
Route::post('/Ip_address', [RequestController::class, 'Ip_address']);



///new template convert to laravel site

Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/menu', [SiteController::class, 'menu'])->name('menu');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/reservations', [SiteController::class, 'reservations'])->name('reserve');

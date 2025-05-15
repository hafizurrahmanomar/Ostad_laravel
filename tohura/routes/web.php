<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;



Route::get('/',[SiteController::class,'home'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/menu', [SiteController::class, 'menu'])->name('menu');
Route::get('/reservations', [SiteController::class, 'reservations'])->name('reservations');
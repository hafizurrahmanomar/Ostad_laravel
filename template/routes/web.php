<?php

use App\Http\Controllers\helloController;
use App\Http\Controllers\allTaskController;
use App\Http\Controllers\siteController;
use Illuminate\Support\Facades\Route;

//hello hello route
Route::get('/hello', [helloController::class, 'hello']);
//task all task route
Route::get('/allTask', [allTaskController::class, 'allTask']);

//site index route
Route::get('/', [siteController::class, 'index'])->name('home');
Route::get('/menu', [siteController::class, 'menu'])->name('menu');
Route::get('/about', [siteController::class, 'about'])->name('about');
Route::get('/reservations', [siteController::class, 'reservations'])->name('res');
Route::get('/styles', [siteController::class, 'styles'])->name('styles');
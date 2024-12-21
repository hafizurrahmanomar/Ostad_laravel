<?php
use App\Http\Controllers\demoController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\fileController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//Laravel Response
Route::get('/demo1', [demoController::class, 'demo1']);
//Laravel request
Route::get('/demo2', [demoController::class, 'demo2']);
Route::get('/about',[aboutController::class,'about']);
Route::get('/about/me',[aboutController::class,'aboutMe']);
Route::get('/download',action: [fileController::class,'download']);
Route::get('/download/invoice/{invoiceId}',action: [fileController::class,'downloadId']);
Route::get('/download/invoice/{invoiceId}/type/{FileType?}',action: [fileController::class,'downloadIdWithFileType']);
Route::get('/download/invoice', action: [fileController::class, 'error']);
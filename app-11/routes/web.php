<?php
use App\Http\Controllers\demoController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\fileController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/demo1', [demoController::class, 'demo1']);
Route::get('/about',[aboutController::class,'about']);
Route::get('/about/me',[aboutController::class,'aboutMe']);
Route::get('/download',action: [fileController::class,'download']);
Route::get('/download/invoice/{invoiceId}',action: [fileController::class,'downloadId']);
Route::get('/download/invoice/{invoiceId}/type/{FileType?}',action: [fileController::class,'downloadIdWithFileType']);
Route::get('/download/invoice', action: [fileController::class, 'error']);
//Laravel methods
Route::get('/demo2', [demoController::class, 'demo2']);
Route::post('/demo2', [demoController::class, 'demo2']);
Route::patch('/demo2', [demoController::class, 'demo2']);
Route::delete('/demo2', [demoController::class, 'demo2']);
Route::put('/demo2', [demoController::class, 'demo2']);
Route::get('/demo7', [demoController::class, 'demo7']);
Route::get('/demo8/{name}/{age}', [demoController::class, 'demo8']);
Route::post('/demo9', [demoController::class, 'demo9']);
Route::post('/demo10', [demoController::class, 'demo10']);
Route::post('/demo11', [demoController::class, 'demo11']);
Route::post('/demo12', [demoController::class, 'demo12']);
Route::post('/demo13', [demoController::class, 'demo13']);
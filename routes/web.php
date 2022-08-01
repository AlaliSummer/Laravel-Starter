<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadFileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/show', function () {
    return view('show');
});
Route::get('/upload', [UploadFileController::class, 'UploadFile']);
Route::post('/uploaded', [UploadFileController::class, 'UploadedDone'])->name('file.upload');
// Test B1
// Test B2
// First testing of GitKraken whith commit "First GitKraken"
// empty
//new
//other one
Route::get('test','Admin\FirstController@Show');
Route::get('test1','Admin\FirstController@Show1');
Route::get('test2','Admin\FirstController@Show2');
Route::get('testshow','Admin\FirstController@Show');
Route::get('testing','Admin\FirstController@Show');
Route::get('show','Admin\FirstController@Show');

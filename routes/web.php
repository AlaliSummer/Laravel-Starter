<?php

use Illuminate\Support\Facades\Route;

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
// Test B1
// Test B2
// First testing of GitKraken whith commit "First GitKraken"
// empty

Route::get('test','Admin\FirstController@Show');
Route::get('test1','Admin\FirstController@Show1');
Route::get('test2','Admin\FirstController@Show2');
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
Route::get('hi/{id}', function ($id) {
    return 'The id is'.$id;
})->where('id','[0-9]+');
Route::get('user/show/{id}',[\App\Http\Controllers\User\UserController::class,'show']);
Route::resource('user/login',\App\Http\Controllers\User\LoginController::class);
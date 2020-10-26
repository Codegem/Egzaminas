<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'App\Http\Controllers\Controller@showall');

Route::get('/forma', 'App\Http\Controllers\Controller@forma');

Route::post('/submit', 'App\Http\Controllers\Controller@store');

Route::get('/all', 'App\Http\Controllers\Controller@showall');

Route::get('/destroy.{imone}', 'App\Http\Controllers\ImonesController@destroy');

Route::get('/edit.{imone}', 'App\Http\Controllers\ImonesController@edit');

Route::post('/update.{imone}', 'App\Http\Controllers\ImonesController@update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/manage', 'App\Http\Controllers\Controller@manage');


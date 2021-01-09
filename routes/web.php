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
    return view('landing');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/pesan', 'PesanController@index')->middleware('auth');
Route::get('/check/{id}', 'PesanController@checkStatus')->middleware('auth');

Route::post('/komen', 'PesanController@store');

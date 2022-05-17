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

//Route::get('/comics', 'ComicController@index');
//Route::get('/comics/{id}', 'ComicController@show');

Route::prefix('comics')
->name('comics.')
->group(function () {
    Route::get('', 'ComicController@index')->name('index');
    Route::get('/{id}', 'ComicController@show')->name('show');
});

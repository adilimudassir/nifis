<?php

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

Route::prefix('divorce')->middleware(['auth'])->group(function() {
    Route::get('/', 'DivorceController@index')->name('divorce.index');
    Route::post('/register', 'DivorceController@store')->name('divorce.register');
});

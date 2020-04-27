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

Route::get('/', function () {
    return redirect()->route('user.homepage');
});



Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    'namespace' => 'User'
], function () {
    Route::get('login', 'UserController@login')->name('login');
    Route::get('register', 'UserController@register')->name('register');

    Route::get('homepage','UserController@homepage')->name('homepage');

    Route::get('room','UserController@room')->name('room');

    Route::get('resting-place','UserController@restingplace')->name('restingplace');
});

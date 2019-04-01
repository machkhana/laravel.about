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

Route::get('/','web\HomeController@index')->name('home');
Route::post('/addpoll','Web\PollController@store')->name('addpoll');

Auth::routes();
Route::group(['middleware' => ['web', 'auth'], 'prefix' => 'admin', 'as' => 'admin.'], function() {
    Route::get('/', 'Admin\HomeController@index')->name('dashboard');
    Route::resource('/region','Admin\RegionController');
    Route::resource('/poll','Admin\PollController');
    Route::resource('/like','Admin\LikeController');
});

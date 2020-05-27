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
    return view('frontend/master');
});

Auth::routes();

Route::get('/login/social/{provider}', 'Auth\LoginSocialController@redirectToProvider');
Route::any('/login/social/{provider}/callback', 'Auth\LoginSocialController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');

<?php

Auth::routes();

Route::get('/login/social/{provider}', 'Auth\LoginSocialController@redirectToProvider');
Route::any('/login/social/{provider}/callback', 'Auth\LoginSocialController@handleProviderCallback');

Route::prefix('post')->group(function () {
    Route::get('/', 'PostController@index')->name('index');
    Route::get('/{_id}', 'PostController@post_detail')->name('post');
    Route::post('/create', 'PostController@store')->name('post_create');
    Route::get('/edit/', 'PostController@edit')->name('post_edit');
});
Route::get('/create', 'PostController@create')->name('create');



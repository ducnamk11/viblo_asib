<?php

Auth::routes();
Route::get('/login/social/{provider}', 'Auth\LoginSocialController@redirectToProvider');
Route::any('/login/social/{provider}/callback', 'Auth\LoginSocialController@handleProviderCallback');

Route::prefix('p')->group(function () {
    Route::get('/', 'PostController@index')->name('index');
    Route::get('/{_id}', 'PostController@postDetail')->name('post.detail');
});

Route::group(['prefix' => 'me', 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'post'], function () {
        Route::get('/create', 'PostController@create')->name('post.create');
        Route::post('/create', 'PostController@store');
        Route::get('/edit/', 'PostController@edit')->name('post.edit');
    });
    Route::group(['prefix' => 'account'], function () {
    });
});


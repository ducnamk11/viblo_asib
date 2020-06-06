<?php

Auth::routes();
Route::get('/login/social/{provider}', 'Auth\LoginSocialController@redirectToProvider');
Route::any('/login/social/{provider}/callback', 'Auth\LoginSocialController@handleProviderCallback');
Route::get('/', 'HomeController@index')->name('index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::any('/search', 'HomeController@search')->name('search');

Route::prefix('p')->group(function () {
    Route::get('/author/{_id}', 'HomeController@authorDetail')->name('author.index');
    Route::get('/{slug}/{_id}', 'HomeController@postDetail')->name('post.detail');
    Route::post('/{slug}/{_id}', 'HomeController@postComment')->name('post.detail');
});
Route::group(['prefix' => 'me', 'namespace' => 'User', 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'post'], function () {
        Route::get('/', function () {
        })->name('user.post.list');
        Route::get('/create', 'PostController@create')->name('user.post.create');
        Route::post('/create', 'PostController@store');
        Route::get('/edit', 'PostController@edit')->name('user.post.edit');
    });
    Route::group(['prefix' => 'account'], function () {
        Route::get('/', 'AccountController@index')->name('user.account.index');
    });
});

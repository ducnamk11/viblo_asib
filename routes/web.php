<?php

Auth::routes();
Route::get('/login/social/{provider}', 'Auth\LoginSocialController@redirectToProvider');
Route::any('/login/social/{provider}/callback', 'Auth\LoginSocialController@handleProviderCallback');
Route::get('/', 'HomeController@index')->name('index');

Route::prefix('p')->group(function () {
    Route::get('/{slug}/{_id}', 'HomeController@postDetail')->name('post.detail');
    Route::get('/author/{_id}', 'HomeController@authorDetail')->name('author.index');
});

/**
 * @todo phần tên route cũng phải sủa lại trong view, ok, cai nay t lam dc, thế khi nào làm xong thì xóa đi, ok
 */
Route::group(['prefix' => 'me', 'namespace' => 'User', 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'post'], function ()  {
        Route::get('/', function () {})->name('user.post.list'); // @todo khi nào viết xong method thì sửa phần closure. ok
        Route::get('/create', 'PostController@create')->name('user.post.create');
        Route::post('/create', 'PostController@store');
        Route::get('/edit', 'PostController@edit')->name('user.post.edit');
    });

    Route::group(['prefix' => 'account'], function () {
        Route::get('/', 'AccountController@index')->name('user.account.index');
    });
});
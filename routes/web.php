<?php

Auth::routes();
Route::get('/login/social/{provider}', 'Auth\LoginSocialController@redirectToProvider');
Route::any('/login/social/{provider}/callback', 'Auth\LoginSocialController@handleProviderCallback');
Route::get('/', 'HomeController@index')->name('index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::any('/search', 'HomeController@search')->name('search');

Route::prefix('p')->group(function () {
    Route::get('/author/{_id}', 'HomeController@authorDetail')->name('author.index');
    Route::get('/{slug}', 'HomeController@postDetail')->name('post.detail');
    Route::post('/{slug}', 'User\CommentController@postComment')->name('post.comment');
    Route::get('/vote/{id}/up', 'User\VoteController@up')->name('user.vote.store');
    Route::get('/vote/{id}/down', 'User\VoteController@down')->name('user.vote.store');
 
});
Route::group(['prefix' => 'me', 'namespace' => 'User', 'middleware' => 'auth'], function () {
    Route::group(['prefix' => 'post'], function () { 
        Route::get('/create', 'PostController@create')->name('user.post.create');
        Route::post('/create', 'PostController@store');
        Route::get('/edit', 'PostController@edit')->name('user.post.edit');


    });
    Route::group(['prefix' => 'account'], function () {
        Route::get('/', 'AccountController@index')->name('user.account.index');
        Route::get('/edit', 'AccountController@showEditForm')->name('user.account.edit');
        Route::post('/edit', 'AccountController@Edit')->name('user.account.postEdit');

    });
});
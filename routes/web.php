<?php

Auth::routes();
Route::get('/redirect/{provider}', 'Auth\LoginSocialController@redirectToProvider')->name('admin.redirect');
Route::get('/callback/{provider}', 'Auth\LoginSocialController@handleProviderCallback');

Route::get('/', 'HomeController@index')->name('index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::any('/search', 'HomeController@search')->name('search');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['role:super-admin|admin', 'auth']], function () {
    Route::get('/', 'UserManagerController@index')->name('admin.user');
    Route::prefix('/user')->group(function () {
        Route::get('/edit/{_id}', 'UserManagerController@edit')->name('admin.user.edit');
        Route::post('/edit/{_id}', 'UserManagerController@update')->name('admin.user.update');
        Route::any('/delete/{_id}', 'UserManagerController@delete')->name('admin.user.delete');
    });
    Route::prefix('post')->group(function () {
        Route::get('/', 'PostManagerController@index')->name('admin.post');
        Route::get('/view/{_id}', 'PostManagerController@view')->name('admin.post.view');
        Route::get('/edit/{_id}', 'PostManagerController@edit')->name('admin.post.edit');
        Route::post('/edit/{_id}', 'PostManagerController@update')->name('admin.post.update');
        Route::any('/publish/{_id}', 'PostManagerController@publish')->name('admin.post.publish');
        Route::get('/delete/{_id}', 'PostManagerController@delete')->name('admin.post.delete');
    });
    Route::prefix('permission')->group(function () {
        Route::get('/', 'PermissionController@index')->name('admin.permission');
        Route::post('/', 'PermissionController@store')->name('admin.permission.store');
        Route::get('/edit', 'PermissionController@edit')->name('admin.permission.edit');
        Route::get('/delete/{_id}', 'PermissionController@delete')->name('admin.permission.delete');
    });
    Route::prefix('role')->group(function () {
        Route::get('/', 'RoleController@index')->name('admin.role');
        Route::post('/', 'RoleController@store')->name('admin.role.store');
        Route::get('/edit', 'RoleController@edit')->name('admin.role.edit');
        Route::get('/delete/{_id}', 'RoleController@delete')->name('admin.role.delete');
    });
});

Route::prefix('p')->group(function () {
    Route::get('/author/{_id}', 'HomeController@authorDetail')->name('author.index');
    Route::get('/{slug}', 'HomeController@postDetail')->name('post.detail');
    Route::post('/{slug}', 'User\CommentController@postComment')->name('post.comment');
    Route::get('/vote/{postId}/{voteValue}', 'User\VoteController@vote')->name('user.vote.store');
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
        Route::get('/voted', 'LogController@getVotedPost')->name('user.account.voted');
        Route::get('/commented', 'LogController@getCommentedPost')->name('user.account.commented');

    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

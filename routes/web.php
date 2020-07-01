<?php

Auth::routes();
//Route::get('/login/social/{provider}', 'Auth\LoginSocialController@redirectToProvider');
//Route::any('/login/social/{provider}/callback', 'Auth\LoginSocialController@handleProviderCallback');

//Route::get('/redirect', 'Auth\LoginSocialController@redirectToProvider')->name('admin.redirect');
//Route::get('/callback', 'Auth\LoginSocialController@handleProviderCallback');

Route::get('/redirect/{provider}', 'Auth\LoginSocialController@redirectToProvider')->name('admin.redirect');
Route::get('/callback/{provider}', 'Auth\LoginSocialController@handleProviderCallback');

Route::get('/', 'HomeController@index')->name('index');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::any('/search', 'HomeController@search')->name('search');

Route::prefix('admin')->group(function () {
    Route::get('/', 'UserController@index')->name('admin.user');
    Route::prefix('/user')->group(function () {
        Route::get('/edit/{_id}', 'UserController@edit')->name('admin.user.edit');
        Route::post('/edit/{_id}', 'UserController@update')->name('admin.user.update');
    });
    Route::prefix('post')->group(function () {
        Route::get('/', 'PostController@index')->name('admin.post');
        Route::get('/add', 'PostController@add')->name('admin.post.add');
        Route::get('/edit', 'PostController@edit')->name('admin.post.edit');
        Route::get('/delete', 'PostController@index')->name('admin.post.delete');
    });
    Route::prefix('permission')->group(function () {
        Route::get('/', 'PermissionController@index')->name('admin.permission');
        Route::post('/', 'PermissionController@store')->name('admin.permission.store');
        Route::get('/edit', 'PermissionController@edit')->name('admin.permission.edit');
        Route::get('/delete', 'PermissionController@index')->name('admin.permission.delete');
    });
    Route::prefix('role')->group(function () {
        Route::get('/', 'RoleController@index')->name('admin.role');
        Route::post('/', 'RoleController@store')->name('admin.role.store');
        Route::get('/edit', 'RoleController@edit')->name('admin.role.edit');
        Route::get('/delete', 'RoleController@index')->name('admin.role.delete');
    });


});
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
        Route::get('/voted', 'LogController@getVotedPost')->name('user.account.voted');
        Route::get('/commented', 'LogController@getCommentedPost')->name('user.account.commented');

    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

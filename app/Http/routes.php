<?php

Route::group(['middleware' => ['web']], function () {

    // Home
    Route::get('/', [
        'uses' => 'HomeController@index',
        'as' => 'home'
    ]);
    Route::get('language/{lang}', 'HomeController@language')->where('lang', '[A-Za-z_-]+');

    //demo
    Route::get('/WelcomeController', 'WelcomeController@index');
    Route::get('/WelcomeController/echoMessage', 'WelcomeController@echoMessage');
    Route::get('/WelcomeController/contact', 'WelcomeController@contact');
    Route::get('/WelcomeController/about', 'WelcomeController@about');

    // Customers
    Route::get('customers', 'CustomersController@index');
    Route::get('customers/get/{id}', 'CustomersController@get');
    Route::put('customers/update/{id?}', 'CustomersController@update');
    Route::post('customers/create', 'CustomersController@create');
    Route::delete('customers/delete/{id?}', 'CustomersController@delete');
    Route::get('customers/getListCustomers', 'CustomersController@getListCustomers');
    Route::get('customers/search', 'CustomersController@search');

    // Admin
    Route::get('admin', [
        'uses' => 'AdminController@admin',
        'as' => 'admin',
        'middleware' => 'admin'
    ]);

    Route::get('medias', [
        'uses' => 'AdminController@filemanager',
        'as' => 'medias',
        'middleware' => 'redac'
    ]);


    // Blog
    Route::get('blog/order', ['uses' => 'BlogController@indexOrder', 'as' => 'blog.order']);
    Route::get('articles', 'BlogController@indexFront');
    Route::get('blog/tag', 'BlogController@tag');
    Route::get('blog/search', 'BlogController@search');

    Route::put('postseen/{id}', 'BlogController@updateSeen');
    Route::put('postactive/{id}', 'BlogController@updateActive');

    Route::resource('blog', 'BlogController');

    // Comment
    Route::resource('comment', 'CommentController', [
        'except' => ['create', 'show']
    ]);

    Route::put('commentseen/{id}', 'CommentController@updateSeen');
    Route::put('uservalid/{id}', 'CommentController@valid');


    // Contact
    Route::resource('contact', 'ContactController', [
        'except' => ['show', 'edit']
    ]);


    // User
    Route::get('user/sort/{role}', 'UserController@indexSort');

    Route::get('user/roles', 'UserController@getRoles');
    Route::post('user/roles', 'UserController@postRoles');

    Route::put('userseen/{user}', 'UserController@updateSeen');

    Route::resource('user', 'UserController');

    // Authentication routes...
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');
    Route::get('auth/confirm/{token}', 'Auth\AuthController@getConfirm');

    // Resend routes...
    Route::get('auth/resend', 'Auth\AuthController@getResend');

    // Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');

    // Password reset link request routes...
    Route::get('password/email', 'Auth\PasswordController@getEmail');
    Route::post('password/email', 'Auth\PasswordController@postEmail');

    // Password reset routes...
    Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
    Route::post('password/reset', 'Auth\PasswordController@postReset');

});
<?php

# Home
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

# Registration
Route::get('/register', ['as' => 'registration', 'uses' => 'RegistrationController@create'])->before('guest');
Route::post('/register', ['as' => 'registration.store', 'uses' => 'RegistrationController@store']);

# Authentication
Route::get('login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::get('logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);

# Blog/Comment Test
// Route::get('blog', ['as' => 'blog', 'uses' => 'BlogsController@index']);
Route::resource('blogs', 'BlogsController');

# Profile
Route::resource('profile', 'ProfilesController', ['only' => ['show', 'edit', 'update']]);
Route::get('/user/{username}', ['as' => 'profile', 'uses' => 'ProfilesController@show']);


<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home.welcome');
})->name('view.home');

Route::get('/login', function () {
    return view('user.login');
})->name('view.login');

Route::get('/signup', function () {
    return view('user.signup');
})->name('view.user');

Route::post('/signin', [
    'uses' => 'UserController@postSignIn',
    'as' => 'post.signin'
]);

Route::post('/user', [
    'uses' => 'UserController@postSignUp',
    'as' => 'post.user'
]);

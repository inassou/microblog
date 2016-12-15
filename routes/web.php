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
    return view('welcome');
});

Route::get('home', 'HomeController@index');

Route::resource('sign_up', 'UserController');

//Route::get('sign_up', 'UserController@create');
//Route::post('sign_up', 'UserController@store');

//Route::controller('sign_up', 'UserController@index');

/*
Route::controllers([
    'auth' => 'Auth\AuthController',

    'password' => 'Auth\PasswordController',
]); */

Auth::routes();

/*
//Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::controllers([
    'password' => 'Auth\PasswordController',
]);
 */


//Route::get('/home', 'HomeController@index');

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

//Route::get('user','UserController@user_posts');
Route::resource('user','UserController');


Route::resource('news', 'PostsController');

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();






// add comment
//Route::post('comment/add','CommentsController@store');

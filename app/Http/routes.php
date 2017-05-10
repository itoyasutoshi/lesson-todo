<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('todo', 'TodoController');

Route::get('/', 'TodoController@index');



Route::auth();

Route::get('home', 'TodoController@index');

 // Route::group(['middleware' => ['auth']], function () {
 //        // この中はログインされている場合のみルーティングされる
 //        Route::get('/todo', function () {
 //            return view('todo.index');
 //    });
 //  });

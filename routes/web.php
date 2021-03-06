<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');


//Articles Routes

Route::get('/index', 'ArticleController@index')->name('home');;

Route::get('/create', 'ArticleController@create');

Route::post('/articles', 'ArticleController@store');

Route::get('/index/{id}', 'ArticleController@show');


//save clinets data

Route::post('/storeitems', 'ItemController@store');

Route::get('/update/{user}', 'ItemController@edit');

Route::post('/update/{user}', 'ItemController@update');

Route::get('/send-sms/{id}', 'ItemController@send');


//Comments Routes


Route::post('/index/{article}', 'CommentController@store');

Route::Delete('/index/{comment}', 'CommentController@destroy');


/*Route::get('/update/{comment}', 'CommentController@edit');


Route::post('/update/{comment}', 'CommentController@update');*/



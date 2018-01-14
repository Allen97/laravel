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

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('article')->group(function (){
    Route::get('index','ArticleController@index');
    Route::get('create','ArticleController@create');
    Route::get('store','ArticleController@store');
    Route::get('edit/{id}/{name}','ArticleController@edit');
});

Route::any('/user', 'UserController@show');
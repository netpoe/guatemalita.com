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

Route::group(['namespace' => 'Front'], function(){
    Route::get('/notas/{post}', 'PostsController@index')->name('front.posts.index');
    Route::get('/eventos', 'EventsController@index')->name('front.events.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
    Route::get('/', 'HomeController@index')->name('front.home.index');
    Route::get('/notas/{post?}', 'PostsController@index')->name('front.posts.index');
});

/**
 * FRONT:Newsletter
 */
Route::group(['namespace' => 'Front'], function(){
    Route::post('/mailchimp/subscribe', 'MailchimpController@subscribe')->name('front.mailchimp.subscribe');
    Route::get('/newsletter/confirmacion', 'MailchimpController@confirmation')->name('front.mailchimp.confirmation');
    Route::get('/newsletter/send-events-newsletter', 'MailchimpController@sendEventsNewsletter')->name('front.events.send-events-newsletter');
});

/**
 * FRONT:EVENTS
 */
Route::group(['namespace' => 'Front'], function(){
    Route::get('/eventos', 'EventsController@index')->name('front.events.index');
    Route::get('/eventos/rss-feed', 'EventsController@rssFeed')->name('front.events.rss-feed');
});

Auth::routes();

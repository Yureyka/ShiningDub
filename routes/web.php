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

Route::get('/series', 'VideoController@index')->name('series');

Route::get('/', 'HomeController@index')->name('main');

Route::get('/news', 'NewsController@index')->name('news');

Route::get('/video/{id}', 'VideoController@show')->name('video');

Route::get('/news/{id}', 'NewsController@show')->name('newsdetails');

Route::post('/comment', 'CommentController@store')->name('comment');

Route::post('/add-video', 'VideoController@store')->name('add-video')->middleware('auth');

Route::post('/update-video/{id}', 'VideoController@update')->name('update-video')->middleware('auth');

Route::get('/edit-video/{id}', 'VideoController@edit')->name('edit-video')->middleware('auth');

Route::delete('/delete-video/{id}', 'VideoController@destroy')->name('delete-video')->middleware('auth');

Route::delete('/delete-comment/{id}', 'CommentController@destroy')->name('delete-comment')->middleware('auth');

Route::post('/add-news', 'NewsController@store')->name('add-news')->middleware('auth');

Route::post('/update-news/{id}', 'NewsController@update')->name('update-news')->middleware('auth');

Route::get('/edit-news/{id}', 'NewsController@edit')->name('edit-news')->middleware('auth');

Route::delete('/delete-news/{id}', 'NewsController@destroy')->name('delete-news')->middleware('auth');

Route::post('/search', 'VideoController@search')->name('search');

Route::get('/addvideo', function(){
    return view("addvideo");
}) ->name('addvideo')->middleware('auth');

Route::get('/addnews', function(){
    return view("addnews");
}) ->name('addnews')->middleware('auth');

Route::get('/contacts', function(){
    return view("contacts");
}) ->name('contacts'); 

Auth::Routes();


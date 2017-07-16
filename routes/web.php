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

// Chat Homepage
Route::get('/chat', 'Chat\ChatController@index')->name('chat');

//get messages api
Route::get('/chat/messages', 'Chat\ChatMessageController@index');
Route::post('/chat/messages', 'Chat\ChatMessageController@store');

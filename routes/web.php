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

Route::get('/', 'HomeController@index')->name('home');
Route::delete('/', 'HomeController@delete')->name('home');
Route::group(['prefix' => 'admin'], function() {
    Route::get('add-content', 'AddMessageController@index')->name('add-content');
    Route::post('add-content', 'AddMessageController@getData')->name('add-content');
    Route::get('edit/message/{id}','EditMessageController@index')->name('edit-content');
    Route::post('edit/message/{id}','EditMessageController@updateData')->name('edit-content');
});


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

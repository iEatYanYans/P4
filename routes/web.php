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

#directs to homepage
Route::get('/', 'EntryController@index')->name('entry.index');

Route::get('/welcome', 'HomeController@index')->name('home.index');

#creates new sleep entry
Route::get('/create', 'EntryController@create') -> name('entry.create')->middleware('auth');

#process form to add sleep data
Route::post('/store', 'EntryController@store') -> name('entry.store');

#show user sleep history
Route::get('/history', 'EntryController@show') -> name('entry.show')->middleware('auth');

#shows user graphs
Route::get('/graph', 'EntryController@graph') -> name('entry.graph')->middleware('auth');

#form to edit user sleep entry
Route::get('/edit/{id}', 'EntryController@edit') -> name('entry.edit');

#process form to update user sleep entry
Route::post('/edit/{id}', 'EntryController@update') -> name('entry.update');

#Deletes all entries
Route::get('/delete/all', 'EntryController@deleteAll') ->name('entry.deleteAll')->middleware('auth');

#form to delete user sleep data entry
Route::get('/delete/{id}', 'EntryController@delete') -> name('entry.delete')->middleware('auth');


Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/home', 'HomeController@index');

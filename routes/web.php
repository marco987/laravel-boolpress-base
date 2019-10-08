<?php

Route::get('/', 'ControllerCategory@index')->name('home-page');

Route::get('/category/{id}', 'ControllerPost@show')->name('show.category');
Route::get('/post/{id}', 'ControllerPost@showSinglePost')->name('show.post');

Route::get('/admin/post/create', 'ControllerPost@create')->name('create.post');
Route::post('/store', 'ControllerPost@store')->name('store.post');

Route::get('/admin/post/{id}/edit/', 'ControllerPost@edit')->name('edit.post');
Route::post('/{id}/update', 'ControllerPost@update')->name('update.post');

Route::get('/{id}/destroy', 'ControllerPost@destroy')->name('destroy.post');

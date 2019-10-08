<?php

Route::get('/', 'ControllerCategory@index')->name('home-page');

Route::get('/category/{id}', 'ControllerPost@show')->name('show.category');
Route::get('/post/{id}', 'ControllerPost@showSinglePost')->name('show.post');

Route::get('/{id}/destroy', 'ControllerPost@destroy')->name('destroy.post');

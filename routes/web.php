<?php

Route::get('/', 'ControllerCategory@index')->name('home-page');

Route::get('/category/{id}', 'ControllerPost@show')->name('show.category');

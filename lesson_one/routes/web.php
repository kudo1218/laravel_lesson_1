<?php

Route::get('/user', 'MainController@index');

Route::get('/user/register', 'MainController@create');

Route::post('/user', 'MainController@store');

<?php

Route::get('/', 'LoginController@index');

Route::get('/user', 'LoginController@index');

Route::get('/register', 'RegisterController@index');

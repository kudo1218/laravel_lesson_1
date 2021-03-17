<?php

Route::get('/user', 'MainController@index');

Route::get('/register', 'MainController@create');

Route::get('/home', 'MainController@home');

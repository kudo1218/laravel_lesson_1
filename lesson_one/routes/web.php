<?php

Route::resource('/shops','resource_Controller');

Route::get('/', 'MainController@index');

Route::get('/login', 'MainController@index');

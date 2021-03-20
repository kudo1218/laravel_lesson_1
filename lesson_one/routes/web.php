<?php

//ログイン画面
Route::get('/user', 'MainController@index');

//新規登録画面
Route::get('/user/create', 'MainController@create');

//新規登録後に遷移する画面
Route::post('/user', 'MainController@store');

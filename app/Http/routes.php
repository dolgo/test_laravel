<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/db/messages', 'MessageController@getListFromDB');
Route::get('/nodb/messages', 'MessageController@getList');
Route::post('/db/messages', 'MessageController@addToDB');
Route::post('/nodb/messages', 'MessageController@add');

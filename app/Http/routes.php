<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', 'PostController@getPosts');
Route::post('/posts', 'PostController@addPost');

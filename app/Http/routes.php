<?php

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/posts', 'PostController@showProfile');

Route::get('/posts', 'PostController@getPosts');

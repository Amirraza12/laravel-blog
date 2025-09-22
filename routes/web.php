<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route to show hello
Route::get('/hello',function(){
    return 'Hello this is my blog project';
});

// This is Home Page
Route::get('/home',function(){
    return 'This is my Home Page';
});

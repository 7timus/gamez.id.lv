<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('gaujmaliete/main-real');
});
Route::get('/vesture', function () {
    return view('gaujmaliete/vesture');
});
Route::get('/uznemsana', function () {
    return view('gaujmaliete/uznemsana');
});
Route::get('/galerija', function () {
    return view('gaujmaliete/galerija');
});






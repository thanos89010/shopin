<?php

use Illuminate\Support\Facades\Route;
Auth::routes();
//  home 
Route::get('/', function () {
    return view('home');
});
//  home 

//  Admin panel 
Route::get('/admin', function () {
    return view('layouts.admin');
});
//  Admin panel 


Route::get("/users","UserController@index")->name("user.index");
Route::get("/create","UserController@create")->name("user.create");

// Route::group(['middleware' => ['']], function () {
//     //  Admin panel 

// });



Route::get('/home', 'HomeController@index')->name('home');

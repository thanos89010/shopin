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
Route::get("/user/create","UserController@create")->name("user.create");
Route::post("/user/create","UserController@store")->name("user.store");
Route::get("/user/{id}","UserController@show")->name("user.show");
Route::get("/user/{id}/edit","UserController@edit")->name("user.edit");
Route::PATCH("/user/{id}/update","UserController@update")->name("user.update");
Route::get("/user/{id}/delete","UserController@destroy")->name("user.destroy");

Route::get("/roles","RoleController@create")->name("roles.create");
Route::post("/roles","RoleController@store")->name("roles.store");




// Route::group(['middleware' => ['']], function () {
//     //  Admin panel 

// });



Route::get('/home', 'HomeController@index')->name('home');

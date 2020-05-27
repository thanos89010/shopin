<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Auth::routes();
//  home 

//  home 

//  Admin panel 
Route::get('/admin', function () {
    return view('layouts.admin');
});
//  Admin panel 
Route::get("/cart/checkout","CheckoutController@index")->name("checkout.index");
Route::get("/cart/checkout/done","CheckoutController@done")->name("checkout.done");
Route::post("/cart/checkout","CheckoutController@store")->name("checkout.store");


Route::get("/users","UserController@index")->name("user.index");
Route::get("/user/create","UserController@create")->name("user.create");
Route::post("/user/create","UserController@store")->name("user.store");
Route::get("/user/{id}","UserController@show")->name("user.show");
Route::get("/user/{id}/edit","UserController@edit")->name("user.edit");
Route::PATCH("/user/{id}/update","UserController@update")->name("user.update");
Route::get("/user/{id}/delete","UserController@destroy")->name("user.destroy");

Route::get("/roles","RoleController@create")->name("roles.create");
Route::post("/roles","RoleController@store")->name("roles.store");
Route::get("/roles/{id}/edit","RoleController@edit")->name("roles.edit");
Route::PATCH("/roles/{id}/update","RoleController@update")->name("roles.update");
Route::get("/roles/{id}","RoleController@destroy")->name("roles.destroy");

route::get("/products","ProductController@index")->name("product.index");
route::get("/product/create","ProductController@create")->name("product.create");
route::post("/product/create","ProductController@store")->name("product.store");
Route::get("/product/{id}","ProductController@show")->name("product.show");
Route::get("/product/{id}/edit","ProductController@edit")->name("product.edit");
Route::PATCH("/product/{id}/update","ProductController@update")->name("product.update");
Route::get("/product/{id}/delete","ProductController@destroy")->name("product.destroy");


Route::get("/category","CategoryController@create")->name("category.create");
Route::post("/category","CategoryController@store")->name("category.store");
Route::get("/category/{id}/edit","CategoryController@edit")->name("category.edit");
Route::PATCH("/category/{id}/update","CategoryController@update")->name("category.update");
Route::get("/category/{id}","CategoryController@destroy")->name("category.destroy");

Route::get("/products/filter/value/{id?}","FilterValueController@create")->name("filterValue.create");
Route::post("/products/filter/value","FilterValueController@store")->name("filterValue.store");
Route::get("/products/filter/value/{id}/edit","FilterValueController@edit")->name("filterValue.edit");
Route::PATCH("/products/filter/value/{id}/update","FilterValueController@update")->name("filterValue.update");
Route::get("/products/filter/value/{id}","FilterValueController@destroy")->name("filterValue.destroy");



Route::get("/products/filter","FilterController@create")->name("filter.create");
Route::post("/products/filter","FilterController@store")->name("filter.store");
Route::get("/products/filter/{id}/edit","FilterController@edit")->name("filter.edit");
Route::PATCH("/products/filter/{id}/update","FilterController@update")->name("filter.update");
Route::get("/products/filter/{id}","FilterController@destroy")->name("filter.destroy");





Route::get("/cart","CartController@index")->name("cart.index");
Route::post("/cart","CartController@store")->name("cart.store");
Route::post('/update', 'CartController@update')->name('cart.update');
Route::post('/delete/{id}', 'CartController@destroy')->name('cart.destroy');
Route::post('/clear', 'CartController@clear')->name('cart.clear');



// Route::group(['middleware' => ['']], function () {
//     //  Admin panel 

// });





Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories/filter/{id?}', 'HomeController@filterPrice')->name('home.filter');
Route::get('/categories/filterRam', 'HomeController@filterRam')->name('home.filterRam');
Route::get('/categories/{id?}', 'HomeController@categories')->name('home.categories');
Route::get('/products/{id}', 'HomeController@show')->name('home.show');

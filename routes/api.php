<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// categories
Route::get("/allcatedata","API\CategoryController@index");
Route::get("/showonecate/{id}","API\CategoryController@show");

Route::post("/deletecate","API\CategoryController@delete");

Route::post("/storecate","API\CategoryController@store");

Route::post("/updatecate","API\CategoryController@update");

// products
Route::get("/allprodata","API\ProductController@index");
Route::get("/showonepro/{id}","API\ProductController@show");

Route::post("/deletepro","API\ProductController@delete");

Route::post("/storepro","API\ProductController@store");

Route::post("/updatepro","API\ProductController@update");

// posts
Route::get("/allpostdata","API\PostController@index");
Route::get("/showonepost/{id}","API\PostController@show");

Route::post("/deletepost","API\PostController@delete");

Route::post("/storepost","API\PostController@store");

Route::post("/updatepost","API\PostController@update");

// comments
Route::get("/allcomdata","API\CommentController@index");
Route::get("/showonecom/{id}","API\CommentController@show");

Route::post("/deletecom","API\CommentController@delete");

Route::post("/storecom","API\CommentController@store");

Route::post("/updatecom","API\CommentController@update");

// users
Route::get("/alluserdata","API\UserController@index");

Route::get("/showoneuser/{id}","API\UserController@show");

Route::post("/deleteuser","API\UserController@delete");

Route::post("/storeuser","API\UserController@store");

Route::post("/updateuser","API\UserController@update");

// books
Route::get("/allbookdata","API\BookController@index");

Route::get("/showonebook/{id}","API\BookController@show");

Route::post("/deletebook","API\BookController@delete");

Route::post("/storebook","API\BookController@store");

Route::post("/updatebook","API\BookController@update");
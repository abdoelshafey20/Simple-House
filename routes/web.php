<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', function () {
            return view('welcome');
        })->name("welcomepage");

        Route::get('/about', function () {
            return view('about');
        })->name("about");

        Route::get('/contact', function () {
            return view('contact');
        })->name("contact");

        Route::get('/dashboard', function () {
            return view('home');
        })->name("dashboard");

        Auth::routes();

        Route::group(["middleware" => "CheckAdmin"], function () {


            Route::get('/cate', "CategoryController@index")->name('cate');
            Route::get('/home', 'HomeController@index')->name('home');
            Route::get('/products', 'ProductController@index')->name('products');
            Route::get('/comments', 'CommentController@index')->name('comments');
            Route::get('/posts', 'PostController@index')->name('posts');
            Route::get('/users', 'UserController@index')->name('users');
            Route::get('/books', 'BookController@index')->name('books');

            //crud operation in categories table
            Route::get('/categories/show/{id}', 'CategoryController@show')->name('categories.show');
            Route::get('/categories/delete/{id}', 'CategoryController@delete')->name('categories.delete');
            Route::get('/categories/create', 'CategoryController@create')->name('categories.create');
            Route::post('/categories/savenew', 'CategoryController@store')->name('categories.savenew');
            Route::get('/categories/edit/{id}', 'CategoryController@edit')->name('categories.edit')->middleware('auth');
            Route::post('/categories/saveedit', 'CategoryController@update')->name('categories.saveedit');

            //crud operation in products table
            Route::get('/products/show/{id}', 'ProductController@show')->name('products.show');
            Route::get('/products/delete/{id}', 'ProductController@delete')->name('products.delete');
            Route::get('/products/create', 'ProductController@create')->name('products.create');
            Route::post('/products/savenew', 'ProductController@store')->name('products.savenew');
            Route::get('/products/edit/{id}', 'ProductController@edit')->name('products.edit')->middleware('auth');
            Route::post('/products/saveedit', 'ProductController@update')->name('products.saveedit');

            //crud operation in posts table
            Route::get('/posts/show/{id}', 'PostController@show')->name('posts.show');
            Route::get('/posts/delete/{id}', 'PostController@delete')->name('posts.delete');
            Route::get('/posts/create', 'PostController@create')->name('posts.create');
            Route::post('/posts/savenew', 'PostController@store')->name('posts.savenew');
            Route::get('/posts/edit/{id}', 'PostController@edit')->name('posts.edit')->middleware('auth');
            Route::post('/posts/saveedit', 'PostController@update')->name('posts.saveedit');

            //crud operation in comments table
            Route::get('/comments/show/{id}', 'CommentController@show')->name('comments.show');
            Route::get('/comments/delete/{id}', 'CommentController@delete')->name('comments.delete');
            Route::get('/comments/create', 'CommentController@create')->name('comments.create');
            Route::post('/comments/savenew', 'CommentController@store')->name('comments.savenew');
            Route::get('/comments/edit/{id}', 'CommentController@edit')->name('comments.edit')->middleware('auth');
            Route::post('/comments/saveedit', 'CommentController@update')->name('comments.saveedit');
       
           //crud operation in users table
           Route::get('/users/show/{id}', 'UserController@show')->name('users.show');
           Route::get('/users/delete/{id}', 'UserController@delete')->name('users.delete');
           Route::get('/users/create', 'UserController@create')->name('users.create');
           Route::post('/users/savenew', 'UserController@store')->name('users.savenew');
           Route::get('/users/edit/{id}', 'UserController@edit')->name('users.edit')->middleware('auth');
           Route::post('/users/saveedit', 'UserController@update')->name('users.saveedit');
      
       
       
       
           //crud operation in books table
           Route::get('/books/show/{id}', 'BookController@show')->name('books.show');
           Route::get('/books/delete/{id}', 'BookController@delete')->name('books.delete');
           Route::get('/books/create', 'BookController@create')->name('books.create');
           Route::post('/books/savenew', 'BookController@store')->name('books.savenew');
           Route::get('/books/edit/{id}', 'BookController@edit')->name('books.edit')->middleware('auth');
           Route::post('/books/saveedit', 'BookController@update')->name('books.saveedit');
      
       
       
     
       
       
        });
    }
);

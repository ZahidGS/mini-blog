<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
    Route::group(["prefix" => "blogs"], function () {
        Route::get("/", "BlogController@index")->name("blogs.index");
        Route::get("/create", "BlogController@create")->name("blogs.create");
        Route::post("/", "BlogController@store")->name("blogs.store");
        Route::get("/{id}", "BlogController@show")->name("blogs.show");
        Route::delete("/{id}", "BlogController@destroy")->name("blogs.destroy");
    });

    Route::group(["middleware" => ["auth"]], function () {


    // http://127.0.0.1:8000/posts/{blogId}/create
    Route::group(["prefix" => "posts/{blogId}"], function () {
        Route::get("/", "PostController@index")->name("posts.index");
        Route::get("/create", "PostController@create")->name("posts.create");
        Route::post("/", "PostController@store")->name("posts.store");
        Route::get("/{id}", "PostController@show")->name("posts.show");
    });
});

<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//route resource
Route::resource('/post',PostController::class);

Route::get('/',[PostController::class,'index']); 

Route::get('/posts/create', 'App\Http\Controllers\PostController@create')->name('posts.create');
Route::delete('/posts/{id}', 'App\Http\Controllers\PostController@destroy')->name('posts.destroy');
Route::get('/posts/{id}', 'App\Http\Controllers\PostController@show')->name('posts.show');
Route::get('/posts/{id}/edit', 'App\Http\Controllers\PostController@edit')->name('posts.edit');
Route::put('/posts/{id}', 'App\Http\Controllers\PostController@update')->name('posts.update');
Route::post('/posts', 'App\Http\Controllers\PostController@store')->name('posts.store');


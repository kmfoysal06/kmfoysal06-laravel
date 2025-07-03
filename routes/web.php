<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', PostController::class . '@index')->name('posts.index');
Route::get('/create', PostController::class . '@create')->name('posts.create');
Route::post('/posts', PostController::class. '@store')->name('posts.store');
Route::get('/posts/{post}', PostController::class . '@show')->name('posts.show');
Route::put('/post/{id}', PostController::class . '@update')->name('posts.update');
Route::get('/post/{id}/edit', PostController::class . '@edit')->name('posts.edit');

Route::delete('/post/{id}', PostController::class . '@destroy')->name('posts.destroy');

// Route::get('/post/{id}', PostController::class, '@show')->name('posts.show');
// Route::put('/post/{id}', PostController::class . '@update')->name('posts.update');
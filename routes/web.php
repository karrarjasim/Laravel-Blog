<?php

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
Route::get('/posts','Pagescontroller@posts');
Route::get('/post/{post}','Pagescontroller@post');
Route::post('/post/store','Pagescontroller@store');
Route::post('/post/{post}/store','CommentsController@store');
Route::get('/category/{name}','Pagescontroller@category');

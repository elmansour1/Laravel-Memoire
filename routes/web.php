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

Route::get('/','PagesControllers@home');
Route::get('/about','PagesControllers@about');
Route::get('/contact','PagesControllers@contact');
Route::resource('/author','AuthorController');
Route::resource('/memoire','MemoireController');
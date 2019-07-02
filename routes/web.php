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


Route::get('/','PagesControllers@authentication');
Route::resource('/about','AbouteController');
Route::resource('/contact','ContactController');
Route::resource('/author','AuthorController');
Route::resource('/memoire','MemoireController');
Route::resource('/enseignant','EnseignantController');
Route::resource('departement','DepartementController');
Route::resource('/diplome','DiplomeController');
Route::resource('/parcour','ParcourController');
Route::resource('/specialisation','SpecialisationController');
Auth::routes();

Route::get('/accueil', 'HomeController@index');

//Route::get('fichier','ConvertToPdf@index');
 Route::get('fichier/pdf','CovertPDFController@pdf');
 Route::get('/toto',function(){
 	return view('toto');
 });

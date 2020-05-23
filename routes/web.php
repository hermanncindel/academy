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


Route::get('/','HomeController@index')->name ('home');
Route::get('/cours','CoursController@cours')->name ('cours');
Route::get('/equipe','EquipeController@equipe')->name ('equipe');
Route::get('/annoces','AnnocesController@annoces')->name ('annoces');
Route::get('/laboratoire','LaboratoireController@laboratoire')->name ('laboratoire');
Route::get('/soutien','SoutienController@soutien') ->name('soutien');
Route::get('/volontariat','VolontariatController@volontariat') ->name('volontariat');
Route::get('/partenaires','PartenairesController@partenaires') ->name('partenaires');
Route::get('/videos','VideosController@videos') ->name('videos');
Route::get('/contact','ContactController@contact') ->name('contact');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::get('admin','HomeController@adminIndex')->name ('admin.index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

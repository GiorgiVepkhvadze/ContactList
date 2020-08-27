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


Route::get('/', 'MainController@index')->name('Home_page');

Route::get('/drop/{id}', 'MainController@drop_contact')->name('drop_contact');

Route::get('/edit/{id}', 'MainController@edit_contact')->name('edit_contact');

Route::post('/contact_update', 'MainController@contact_update')->name('contact_update');



Route::get('/add_new', 'MainController@add_new')->name('add_new');

Route::post('/contact_insert', 'MainController@contact_insert')->name('contact_insert');

Route::get('/search', 'MainController@search')->name('search');

Route::post('/findbynumber', 'MainController@findbynumber')->name('findbynumber');
Route::post('/findbyname', 'MainController@findbyname')->name('findbyname');







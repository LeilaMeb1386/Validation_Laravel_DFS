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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/animalIndex', 'HomeController@animalIndex');
//show all animals
Route::get('/animals', 'AnimalController@index')->name('animals');
//insert aniaml
Route::get('/animals/create', 'AnimalController@create')->name('create');
Route::post('/animals/store', 'AnimalController@store')->name('store');
//Update animal
Route::get('/animals/edit/{id}', 'AnimalController@edit')->name('edit');
Route::post('/animals/update', 'AnimalController@update')->name('update');
//delete animal
Route::post('/animals/delete', 'AnimalController@delete')->name('delete');

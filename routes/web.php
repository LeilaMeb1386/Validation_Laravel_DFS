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

//Race
//show races
Route::get('/races', 'RaceController@index')->name('races');

//inserct race
Route::get('/races/create', 'RaceController@create')->name('race.create');
Route::post('/races/store', 'RaceController@store')->name('race.store');
//update races
Route::get('/races/edit/{id}', 'RaceController@edit')->name('race.edit');
Route::post('/races/update', 'RaceController@update')->name('race.update');
//delete race
Route::post('/races/destroy', 'RaceController@destroy')->name('destroy');

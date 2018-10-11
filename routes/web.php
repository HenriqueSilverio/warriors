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
    return redirect()->route('web.warriors.index');
});

Route::prefix('types')->name('web.types.')->group(function () {
    Route::get('/', 'TypeController@index')
        ->name('index');

    Route::get('/create', 'TypeController@create')
        ->name('create');

    Route::get('/{type}/edit', 'TypeController@edit')
        ->name('edit');
});

Route::prefix('specialities')->name('web.specialities.')->group(function () {
    Route::get('/', 'SpecialityController@index')
        ->name('index');

    Route::get('/create', 'SpecialityController@create')
        ->name('create');

    Route::get('/{type}/edit', 'SpecialityController@edit')
        ->name('edit');
});

Route::prefix('warriors')->name('web.warriors.')->group(function () {
    Route::get('/', 'WarriorController@index')
        ->name('index');

    Route::get('/create', 'WarriorController@create')
        ->name('create');

    Route::get('/{type}/edit', 'WarriorController@edit')
        ->name('edit');
});

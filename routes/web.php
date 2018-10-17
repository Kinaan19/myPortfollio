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

Route::get('/', 'MyPageController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/delete/sectionItem/{id}', 'ServiceController@deleteSectionItem');

Route::post('/edit/sectionTitle', 'ServiceController@editSectionTitle');
Route::post('/edit/item/{id}', 'ServiceController@editSectionItem');

Route::post('/update/sectionTitle', 'ServiceController@updateSectionTitle');
Route::post('/update/sectionItem/{id}', 'ServiceController@updateSectionItem');

Route::post('/create/sectionItem', 'ServiceController@createSectionItem');
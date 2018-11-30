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

// Home Section
Route::post('/edit/navTitle', 'HomePageController@editNavTitle');
Route::post('/edit/navItem/{id}', 'HomePageController@editNavItem');

Route::post('/update/navTitle', 'HomePageController@updateNavTitle');
Route::post('/update/navItem/{id}', 'HomePageController@updateNavItem');

Route::post('/create/navItem', 'HomePageController@createNavItem');

Route::post('/delete/navItem/{id}', 'HomePageController@deleteNavItem');

// About Section
Route::get('/edit/about', 'AboutController@edit');

Route::post('/update/about', 'AboutController@update');

// Service Section
Route::post('/edit/sectionTitle', 'ServiceController@editSectionTitle');
Route::post('/edit/item/{id}', 'ServiceController@editSectionItem');

Route::post('/update/sectionTitle', 'ServiceController@updateSectionTitle');
Route::post('/update/sectionItem/{id}', 'ServiceController@updateSectionItem');

Route::post('/create/sectionItem', 'ServiceController@createSectionItem');

Route::get('/delete/sectionItem/{id}', 'ServiceController@deleteSectionItem');

Route::post('/contact','ContactController@index');
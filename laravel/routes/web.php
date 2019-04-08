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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/join-course', 'HomeController@joinCourse')->name('joinCourse');
Route::get('/create-course', 'HomeController@createCourse')->name('createCourse');
Route::get('/about', 'HomeController@about')->name('about');

Route::get('/course/{id}', 'HomeController@viewCourse')->name('viewCourse');

// actions
Route::post('/action/create-course', 'HomeController@actionCreateCourse')->name('actionCreateCourse');

// logout link
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

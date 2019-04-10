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

// public
Route::get('/', 'HomeController@index')->name('index');
Route::get('/about', 'HomeController@about')->name('about');

// must be authenticated
Route::middleware(['auth'])->group(function () {
    // pages
    Route::get('/join-course', 'HomeController@joinCourse')->name('joinCourse');
    Route::get('/create-course', 'HomeController@createCourse')->name('createCourse');
    Route::get('/course/{id}', 'HomeController@viewCourse')->name('viewCourse');

    // actions
    Route::post('/action/create-course', 'HomeController@actionCreateCourse')->name('actionCreateCourse');
    Route::post('/action/join-course', 'HomeController@actionJoinCourse')->name('actionJoinCourse');
    Route::post('/action/send-message', 'HomeController@actionSendMessage')->name('actionSendMessage');

    // logout
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

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


Route::get('/', 'CourseController@index')->name('main_index');

Route::get('/course/{id}', 'CourseController@show')->name('show_course');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin / create , store , update, delete
// User  / index , show 


// prefix /admin/create .. /admin/strore .. /admin/update ....

Route::group(['prefix'=>'admin','middleware'=>'auth'],function () {
    Route::get('/', 'HomeController@index')->name('admin_index');

    Route::get('profile','ProfileController@index')->name('profile');
    Route::put('profile-update','ProfileController@updateProfile')->name('profile.update');

    Route::get('/create', 'CourseController@create')->name('course_create');
    Route::post('/store', 'CourseController@store')->name('course_create');
    Route::get('/edit/{id}', 'CourseController@edit')->name('course_edit');
    Route::put('/update/{id}', 'CourseController@update')->name('course_create');
    Route::put('/delete', 'CourseController@destroy')->name('course_create');
    
});

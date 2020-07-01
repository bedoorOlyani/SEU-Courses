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


//course search
Route::get('/find', 'SearchController@index');
Route::post('/find','SearchController@search')->name('search');

// Admin / create , store , update, delete
// User  / index , show 

Route::get('/homepage', 'Seuprojectcontroller@userindex');
Route::get('/productdetail/{id}', 'Courselistcontroller@productdetail');
// prefix /admin/create .. /admin/strore .. /admin/update ....

Route::group(['prefix'=>'admin','middleware'=>'auth'],function () {

    Route::get('/', 'HomeController@index')->name('admin_index');

    Route::get('/profile','ProfileController@index')->name('profile');
    Route::put('/profile-update','ProfileController@updateProfile')->name('profile.update');
    Route::post('/profile-update','ProfileController@update_avatar')->name('profile.update');


    Route::get('/create', 'CourseController@create')->name('course_create');
    Route::post('/store', 'CourseController@store')->name('course_store');
    Route::get('/edit/{id}', 'CourseController@edit')->name('course_edit');
    Route::put('/update/{id}', 'CourseController@update')->name('course_update');
    Route::get('/destroy/{id}', 'CourseController@destroy')->name('course_destroy');
   Route::resource('/ticket','TicketsController');


  
   Route::get('user/register', 'Registercontroller@register');
   Route::post('user/registered', 'Registercontroller@registered');
   Route::get('user/productdetail/{id}', 'Courselistcontroller@productdetail');
   Route::get('user/register/student', 'Registercontroller@showRegister');
   Route::get('/user/certificate/{id}','Registercontroller@certificate');


});
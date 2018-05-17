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

Route::get('/userIndex', 'UserController@index')->name('user');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/school','SchoolController@index')->name('school');


Route::get('/register_new_class', 'CourseController@create')->name('createClass');
Route::post('/register_new_class', 'CourseController@store')->name('createClass');
Route::get('/view_class/{id}', 'CourseController@show')->name('viewClass');
Route::get('/edit_class/{id}', 'CourseController@edit')->name('editClass');
Route::post('/edit_class/{id}', 'CourseController@update')->name('editClass');
Route::get('/addStudent', 'CourseController@addStudent')->name('addStudent');


Route::post('/completeDrive', 'DriveController@complete')->name('completeDrive');

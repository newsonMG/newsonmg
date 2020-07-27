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

Route::get('/', function(){
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('profiles/{user}', 'ProfilesController@show')->name('profiles.show');
Route::get('profiles/{user}/edit', 'ProfilesController@edit')->name('profiles.edit');
Route::patch('profiles/{user}', 'ProfilesController@update')->name('profiles.update');

Route::get('courses', 'CoursesController@index')->name('courses.index');
Route::get('courses/create', 'CoursesController@create')->name('courses.create');
Route::post('courses', 'CoursesController@store')->name('courses.store');
Route::get('courses/{course}', 'CoursesController@show')->name('courses.show');

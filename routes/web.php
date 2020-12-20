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

Route::get('/','SiteController@index');

Route::get('/users', 'UserController@index');
Route::post('/users', 'UserController@store');
Route::get('/users/create', 'UserController@create');
Route::get('/users/edit/{id}', 'UserController@edit');
Route::patch('/users/{id}', 'UserController@update');
Route::delete('/users/{id}', 'UserController@destroy');

Route::get('/instructors', 'InstructorController@index');
Route::post('/instructors', 'InstructorController@store');
Route::get('/instructors/create', 'InstructorController@create');
Route::get('/instructors/edit/{instructor}', 'InstructorController@edit');
Route::patch('/instructors/{instructor}', 'InstructorController@update');
Route::delete('/instructors/{instructor}', 'InstructorController@destroy');

Route::get('/learners', 'LearnerController@index');
Route::post('/learners', 'LearnerController@store');
Route::get('/learners/create', 'LearnerController@create');
Route::get('/learners/edit/{learner}', 'LearnerController@edit');
Route::patch('/learners/{learner}', 'LearnerController@update');
Route::delete('/learners/{learner}', 'LearnerController@destroy');

Route::get('/courses', 'CourseController@index');
Route::post('/courses', 'CourseController@store');
Route::get('/courses/create', 'CourseController@create');
Route::get('/courses/edit/{course}', 'CourseController@edit');
Route::patch('/courses/{course}', 'CourseController@update');
Route::delete('/courses/{course}', 'CourseController@destroy');

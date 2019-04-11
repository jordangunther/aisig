<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'LandingController@index');
Route::get('/about', 'LandingController@show');
Route::get('/sample', 'LandingController@sample');
Route::get('/contact', 'LandingController@contact');
Route::get('/contact/send', 'LandingController@store');


Auth::routes();


//files
Route::post('/file-upload', 'FilesController@store');
Route::get('/file-upload', 'FilesController@index');
Route::get('/file-upload/download/{file}', 'FilesController@download');
Route::post('/files', 'LessonsController@storeFiles');

//courses
Route::get('/courses', 'CoursesController@index');
Route::post('/courses', 'CoursesController@store');
Route::get('/courses/approve/{courses}', 'CoursesController@approve');
Route::get('/courses/reject/{courses}', 'CoursesController@reject');
Route::get('/courses/{courses}', 'CoursesController@show');
Route::post('/courses/update/{courses}', 'CoursesController@updateUser');
Route::post('/courses/updates/{courses}', 'CoursesController@updateAdmin');
Route::get('/courses/delete/{courses}', 'CoursesController@destroy');

//lessons
Route::get('/lessons', 'LessonsController@index');
Route::post('/lessons', 'LessonsController@store');
Route::get('/lessons/approve/{lessons}', 'LessonsController@approve');
Route::get('/lessons/reject/{lessons}', 'LessonsController@reject');
Route::get('/lessons/{lessons}', 'LessonsController@show');
Route::post('/lessons/update/{lessons}', 'LessonsController@updateUser');
Route::post('/lessons/updates/{lessons}', 'LessonsController@updateAdmin');
Route::get('/lessons/delete/{lessons}', 'LessonsController@destroy');
Route::get('/lessons/download/{id}', 'LessonsController@getDownload');

Route::get('/file/download/{id}', 'LessonsController@download');

//category
Route::get('/category', 'CategoryController@index');
Route::post('/category', 'CategoryController@store');
Route::get('/category/{category}', 'CategoryController@show');
Route::get('/category/files/{category}', 'CategoryController@showFiles');
Route::get('/category/update/{category}', 'CategoryController@update');
Route::get('/category/delete/{category}', 'CategoryController@destroy');

Route::post('/users', 'UsersController@store');
Route::get('/users/approveAdvance/{users}', 'UsersController@approveAdvance');
Route::get('/users/approveAdmin/{users}', 'UsersController@approveAdmin');
Route::get('/users/reject/{users}', 'UsersController@reject');
Route::post('/users/update/{users}', 'UsersController@updateUser');
Route::post('/users/updates/{users}', 'UsersController@updateAdmin');
Route::get('/users/delete/{users}', 'UsersController@destroy');

Route::get('/manage/courses', 'ManageController@courses');
Route::get('/manage/courses/search', 'ManageController@searchCourses');
Route::get('/manage/lessons', 'ManageController@lessons');
Route::get('/manage/lessons/search', 'ManageController@searchLessons');
Route::get('/manage/courses/pending', 'ManageController@pendingCourses');
Route::get('/manage/lessons/pending', 'ManageController@pendingLessons');
Route::get('/manage/users', 'ManageController@users');
Route::get('/manage/users/search', 'ManageController@searchUsers');
Route::get('/manage/advance/pending', 'ManageController@pendingAdvance');
Route::get('/manage/admin/pending', 'ManageController@pendingAdmin');
Route::get('/manage/accountSettings/{users}', 'ManageController@show');

//authors
Route::get('/authors', 'CoursesController@authors');
Route::get('/author/{user_id}', 'CoursesController@author');

//mycourses
Route::get('/mycourses', 'CoursesController@showMine');
Route::get('/search', 'CoursesController@search');

Route::get('/email', function () {
    return view('emails.example');
});
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

Route::get('/test1', function () {
    return "hello world";
});

Route::get('/memberinfo','Membercontroller@info');

Route::get('/insertstudent','Studentcontroller@insertstudent');

# orm method
Route::get('/getormstudent','Studentcontroller@getstudentallorm');
Route::get('/insertormstudent','Studentcontroller@insertstudentallorm');
Route::get('/insertormstudent2','Studentcontroller@insertstudentallormcrteate');


# for angular part
Route::get('/getallstudentforangular','Studentcontrollerforangular@getallstudent');



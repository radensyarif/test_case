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

Route::get('/dashboard','MasterController@index');

Route::get('/login','AuthController@login');

Route::post('/postlogin', 'AuthController@postlogin');

Route::get('/logout', 'AuthController@logout');

Route::get('/admin/doctor','AdminController@doctor');
Route::get('/admin/patient', 'AdminController@patient');
Route::get('/admin/form_patient','AdminController@form_patient');
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

Auth::routes();


Route::resource('/', 'SubjectsController');
Route::resource('/home', 'SubjectsController'); 
Route::resource('/requests', 'RequestsController')->middleware('auth');


Route::group(['middleware' => ['auth','check.permission']], function () {
   // TODAS SUAS ROTAS QUE VÃO SER VALIDADAS POR ESSE MIDDLEWARE
	Route::resource('/admin', 'AdminController');
});

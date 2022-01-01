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






Route::get('success/{id}','StudentController@hallTicket');
Route::get('student-register','StudentController@create');
Route::post('student-register','StudentController@store')->name('student-register');

Route::get('student/hall-ticket/{id}','StudentController@hallTicketDownload');


Auth::routes();

Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});


Route::group(['middleware' => ['web','auth']], function () {   	
    Route::resource('admin/students', 'StudentController');
    Route::get('/admin', function () {
        return view('welcome');
    });
    Route::get('/', function () {
        return view('welcome');
    });
});

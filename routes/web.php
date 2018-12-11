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

Route::get('/', 'WelcomeController@index')->name('welcome.index');

// Group A
Route::get('/packages', function(){
    return view('packages');
});

Route::get('/login', function(){
    return view('login_register/login');
});

Route::get('/packages', function(){
    return view('packages');
});

Route::get('/login', function(){
    return view('login_register/login');
});



Route::get('packages', 'PackagesController@index')->name('packages.index');

// End

// End //////////////////////////////////////

// End



// Group B
Route::get('description', 'Jobs\JobController@jobDescrip')->name('jobs.jobDescrip');
Route::get('postjob', 'Jobs\JobController@postJob')->name('jobs.postJob');
Route::get('jobs','Jobs\JobController@index')->name('jobs.index');
// Ends

// Group C
Route::get('employers', 'EmployerController@index')->name('companies.index');
Route::get('employers/show', 'EmployerController@show')->name('companies.show');
// End

// Group D

Route::get('/profile', function(){
    return view('welcome/candidateprofile');
})->name('candidateprofile');



// End

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

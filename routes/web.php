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
Route::get('/','pagesController@index'); 
Route::get('/about', 'pagesController@about'); 
Route::get('/users/{id}', 'pagesController@users'); 
Route::get('employee', 'EmployeeController@index'); 
Route::get('/add-employee', 'EmployeeController@create'); 
Route::post('/store-employee', 'EmployeeController@store'); 
Route::get('/edit-employee/{id}', 'EmployeeController@edit'); 
Route::put('/update-employee/{id}', 'EmployeeController@update'); 
Route::get('/delete-employee/{id}', 'EmployeeController@delete'); 


//Route::get('/demo', function () {
   // return view('welcome');
//});

//Route::get('/users/{id}', function ($id) {
    //return 'User is :'.$id;
//});

//Route::get('/users/{id}/{company}', function ($id, $comp) {
   // return 'User is :'.$id.' Company Name:'.$comp;
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function (){

Route::resource('posts', 'postcontroller');

});
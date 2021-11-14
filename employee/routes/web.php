<?php

use Illuminate\Support\Facades\Route;

use App\http\Controllers\HomeController;
use App\http\Controllers\DesignationController;
use App\http\Controllers\EmployeeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'login']);
Route::post('/',[HomeController::class,'submit_login']);
Route::get('/dashboard',[HomeController::class,'dashboard']);

Route::get('designation/{id}/delete',[DesignationController::class,'destroy']);
Route::resource('designation','DesignationController');

Route::get('employee/{id}/delete',[EmployeeController::class,'destroy']);
Route::resource('employee','EmployeeController');


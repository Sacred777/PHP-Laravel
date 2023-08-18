<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/get-employee-data', [EmployeeController::class, 'index'])->name('getEmployeeData');
Route::post('/store-form', [EmployeeController::class, 'store'])->name('storeForm');
Route::put('/user/{id}', [EmployeeController::class, 'update'])->name('updateEmployeeData');



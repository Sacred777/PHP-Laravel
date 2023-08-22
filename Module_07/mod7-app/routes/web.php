<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PdfGeneratorController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index'])->name('showUsers');
Route::get('/user/{id}', [UserController::class, 'get'])->name('getUser');
Route::post('/store-user', [UserController::class, 'store'])->name('storeUser');
Route::get('/resume', [PdfGeneratorController::class, 'index'])->name('createResume');


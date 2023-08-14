<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormProcessor;
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

Route::get('/userform', [FormProcessor::class, 'index'])->name('userForm');
Route::post('/store_form', [FormProcessor::class, 'store'])->name('storeForm');

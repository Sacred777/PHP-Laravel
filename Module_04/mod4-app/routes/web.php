<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home', ['name' => 'Ivan', 'age' => 3, 'position' => 'admin', 'address' => 'Moscow city',]);
});

Route::get('/contacts', function () {
    $data = ['address' => 'Tula', 'post_code' => 300001, 'email' => 'info@tyla.ru', 'phone' => '+79999999999',];
    return view('contacts', ['data' => $data]);
});


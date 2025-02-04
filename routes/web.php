<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodolistController;

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

Route::get('/',[TodolistController::class,'index']);

Route::post('/saveItem',[TodolistController::class,'saveItem'])->name('saveItem');

Route::post('/markComplete/{id}',[TodolistController::class,'markComplete'])->name('markComplete');

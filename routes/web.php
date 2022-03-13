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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\TodoController::class, 'index']);

//index pages item view url
Route::get('view/{id}', [App\Http\Controllers\TodoController::class,'view']);
 

Route::get('create', [App\Http\Controllers\TodoController::class, 'create']);
Route::post('store', [App\Http\Controllers\TodoController::class, 'store']);


Route::get('/edit/{id}', [App\Http\Controllers\TodoController::class, 'edit']);

Route::post('/update/{id}', [App\Http\Controllers\TodoController::class,'update']);
 
 
Route::get('/delete/{id}', [App\Http\Controllers\TodoController::class, 'delete']);


Route::get('/compleated/{id}', [App\Http\Controllers\TodoController::class,'compleated']);

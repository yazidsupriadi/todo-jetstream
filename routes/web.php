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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/todo', 'App\Http\Controllers\TodoController@index')->middleware('auth:sanctum');
Route::get('/todo/add', 'App\Http\Controllers\TodoController@add')->middleware('auth:sanctum');
Route::post('/todo/store', 'App\Http\Controllers\TodoController@store')->middleware('auth:sanctum');
Route::delete('/todo/delete/{id}', 'App\Http\Controllers\TodoController@delete')->middleware('auth:sanctum');

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

Auth::routes();

Route::get('/index', [App\Http\Controllers\MediaController::class, 'index'])->name('index');

Route::get('/m/create', [App\Http\Controllers\MediaController::class, 'create']);
Route::post('/m', [App\Http\Controllers\MediaController::class, 'store']);
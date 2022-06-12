<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Data;
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
Route::view('/', 'create')->name('home');

Route::get('/', [Data::class, 'index']);

Route::post('/', [Data::class, 'store'])->name('store');
Route::post('/', [Data::class, 'storeClienti'])->name('storeClienti');

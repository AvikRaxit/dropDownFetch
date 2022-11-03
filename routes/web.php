<?php

use App\Http\Controllers\DropdownController;
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

Route::get('/', [DropdownController::class, 'index'])->name('index');
Route::get('/country', [DropdownController::class, 'gCountry'])->name('getCountry');
Route::post('/store-country', [DropdownController::class, 'sCountry'])->name('storeCountry');

Route::get('/state', [DropdownController::class, 'gState'])->name('getState');
Route::post('/store-state', [DropdownController::class, 'sState'])->name('storeState');

Route::get('/city', [DropdownController::class, 'gCity'])->name('getCity');
Route::post('/store-city', [DropdownController::class, 'sCity'])->name('storeCity');

Route::post('/fetch-state', [DropdownController::class, 'fetchState']);
Route::post('/fetch-city', [DropdownController::class, 'fetchCity']);

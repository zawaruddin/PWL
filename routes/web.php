<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::prefix('user')->group(function(){
    Route::get('/name/{user}', [HomeController::class, 'userByUsername']);
    Route::get('/id/{id}', [HomeController::class, 'userByUserID']);
});

Route::prefix('product')->group(function(){
    Route::get('/smartphone', [HomeController::class, 'getSmartphone']);
    Route::get('/laptop', [HomeController::class, 'getLaptop']);
});

Route::get('/artikel', [ArtikelController::class, 'index']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\navigationController;
use App\Http\Controllers\TransactionController;

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

Route::get('/', [navigationController::class, 'main']);
Route::get('/income',[navigationController::class, 'income']);
Route::get('/expense',[navigationController::class, 'expense']);
Route::post('/post', [TransactionController::class, 'store']);
<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WalletController;
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

Route::get('/users/', [UserController::class, 'getAll']);
Route::get('/users/{user}', [UserController::class, 'show']);
Route::post('/users', [UserController::class, 'createUser']);
Route::put('/users/{user}', [UserController::class, 'update']);
Route::delete('/users/{user}', [UserController::class, 'destroy']);

Route::post('/transactions/', [TransactionController::class, 'storeTransfer']);
Route::get('/transactions/', [TransactionController::class, 'getAll']);
Route::get('/transactions/{transactions}', [TransactionController::class, 'show']);

Route::post('/wallet/', [WalletController::class, 'storeWallet']);
Route::get('/wallet/', [WalletController::class, 'getAll']);
Route::get('/wallet/{wallet}', [WalletController::class, 'show']);



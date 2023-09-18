<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('dashboard');
});

//Route ke Dashboard
Route::get('dashboard', [AuthController::class, 'dashboard']);

//Users
Route::get('users', [UserController::class, 'index']);
Route::get('users/create', [UserController::class, 'create']);
Route::post('users/create', [UserController::class, 'store']);
Route::get('users/edit/{id}', [UserController::class, 'edit']);
Route::post('users/update/{id}', [UserController::class, 'update']);
Route::get('users/delete/{id}', [UserController::class, 'delete']);
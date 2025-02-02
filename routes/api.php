<?php

use App\Http\Controllers\Api\ModulController;
use App\Http\Controllers\Api\PemateriController;
use App\Http\Controllers\Api\PesertaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');

Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');

Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');

Route::post('/modul', [ModulController::class, 'store']);
Route::get('/modul', [ModulController::class, 'index']);
Route::delete('/modul/{id}', [ModulController::class, 'destroy']);

Route::post('/peserta', [PesertaController::class, 'store']);
Route::get('/peserta', [PesertaController::class, 'index']);
Route::delete('/peserta/{id}', [PesertaController::class, 'destroy']);

Route::post('/pemateri', [PemateriController::class, 'store']);
Route::get('/pemateri', [PemateriController::class, 'index']);
Route::delete('/pemateri/{id}', [PemateriController::class, 'destroy']);

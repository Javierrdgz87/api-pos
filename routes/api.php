<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Catalogs\DepartmentController;
use App\Http\Controllers\Products\CategoryProductController;
use App\Http\Controllers\Products\ProductController;
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

Route::post('register', [AuthController::class, 'register'])->name('user.register');
Route::post('login', [AuthController::class, 'login'])->name('user.login');


Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('catalogos')->group(function () {
        Route::resource('productos', ProductController::class);
        Route::resource('categorias', CategoryProductController::class);
        Route::resource('departamentos', DepartmentController::class);
    });
});
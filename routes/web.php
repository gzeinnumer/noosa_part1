<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['guest']], function () {
    Route::get('/register', [RegisterController::class, 'show']);
    Route::post('/register/perform', [RegisterController::class, 'register']);

    Route::get('/login', [LoginController::class, 'show'])->name('login.show');
    Route::post('/login/perform', [LoginController::class, 'login']);
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/soon', [HomeController::class, 'index'])->name('soon');

    Route::get('/', [HomeController::class, 'index']);

    Route::get('/logout', [LogoutController::class, 'perform']);

    Route::prefix('home')->group(function () {
    });

    Route::prefix('book')->group(function () {
        Route::get('/', [BookController::class, 'index']);
        Route::get('/detail', [BookController::class, 'detail']);

        Route::get('/create', [BookController::class, 'create']);
        Route::post('/createperform', [BookController::class, 'createperform']);

        Route::get('/update', [BookController::class, 'update']);
        Route::post('/updateperform', [BookController::class, 'updateperform']);

        Route::get('/delete', [BookController::class, 'delete']);
        Route::post('/deleteperform', [BookController::class, 'deleteperform']);
    });
});

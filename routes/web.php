<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesterController;
use App\Http\Controllers\Api\TesterApiController;

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
    return view('welcome');
});

Route::resource('testers', TesterController::class);

Route::prefix('api/testers')->name('api.testers.')->group(function () use ($router) {
    Route::get('/', [TesterApiController::class, 'index'])->name('index');
    Route::get('create', [TesterApiController::class, 'create'])->name('create');
    Route::post('/', [TesterApiController::class, 'store'])->name('store');
    Route::get('/{tester}/edit', [TesterApiController::class, 'edit'])->name('edit');
    Route::put('/{tester}', [TesterApiController::class, 'update'])->name('update');
    Route::delete('/{tester}', [TesterApiController::class, 'delete'])->name('delete');

    //Postman チェック用に
    // Route::get('/', [TesterApiController::class, 'index'])->withoutMiddleware(['verifyCsrfToken'])->name('index');
    // Route::get('/create', [TesterApiController::class, 'create'])->withoutMiddleware(['verifyCsrfToken'])->name('create');
    // Route::post('/', [TesterApiController::class, 'store'])->withoutMiddleware(['verifyCsrfToken'])->name('store');
    // Route::get('/{tester}/edit', [TesterApiController::class, 'edit'])->withoutMiddleware(['verifyCsrfToken'])->name('edit');
    // Route::put('/{tester}', [TesterApiController::class, 'update'])->withoutMiddleware(['verifyCsrfToken'])->name('update');
    // Route::delete('/{tester}', [TesterApiController::class, 'destroy'])->withoutMiddleware(['verifyCsrfToken'])->name('delete');
});

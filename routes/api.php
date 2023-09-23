<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TesterApiController;
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



// Route::prefix('testers')->group(function () {
//     Route::get('/', [TesterApiController::class, 'index'])->name('index');
//     Route::get('/create', [TesterApiController::class, 'create'])->name('create');
//     Route::post('/', [TesterApiController::class, 'store'])->name('store');
//     Route::get('/{tester}/edit', [TesterApiController::class, 'edit'])->name('edit');
//     Route::put('/{tester}', [TesterApiController::class, 'update'])->name('update');
//     Route::delete('/{tester}', [TesterApiController::class, 'destroy'])->name('delete');
// });

// Route::prefix('testers')->group(function () use ($router) {
//     Route::get('/', [TesterApiController::class, 'index']);
//     Route::post('/', [TesterApiController::class, 'store']);
//     Route::get('/{id}', [TesterApiController::class, 'show']);
//     Route::put('/{id}', [TesterApiController::class, 'update']);
//     Route::delete('/{id}', [TesterApiController::class, 'destroy']);
// });

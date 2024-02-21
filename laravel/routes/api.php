<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AutorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\RackController;
use App\Http\Controllers\RowController;
use App\Http\Controllers\StockController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->group(function() {
    if (config('trainer.autor.auth', false))
        Route::get('/autores', [AutorController::class, 'index']);
});

if (!config('trainer.autor.auth', false))
    Route::get('/autores', [AutorController::class, 'index']);
Route::get('/autores/{id}', [AutorController::class, 'show']);
Route::post('/autores', [AutorController::class, 'store']);
Route::put('/autores/{id}', [AutorController::class, 'update']);
Route::delete('/autores/{id}', [AutorController::class, 'destroy']);

Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);
Route::post('/books', [BookController::class, 'store']);
Route::put('/books/{id}', [BookController::class, 'update']);
Route::delete('/books/{id}', [BookController::class, 'destroy']);

Route::get('/borrows', [BorrowController::class, 'index']);
Route::get('/borrows/{id}', [BorrowController::class, 'show']);
Route::post('/borrows', [BorrowController::class, 'store']);
Route::put('/borrows/{id}', [BorrowController::class, 'update']);
Route::delete('/borrows/{id}', [BorrowController::class, 'destroy']);

Route::get('/racks', [RackController::class, 'index']);
Route::get('/racks/{id}', [RackController::class, 'show']);
Route::post('/racks', [RackController::class, 'store']);
Route::put('/racks/{id}', [RackController::class, 'update']);
Route::delete('/racks/{id}', [RackController::class, 'destroy']);

Route::get('/rows', [RowController::class, 'index']);
Route::get('/rows/{id}', [RowController::class, 'show']);
Route::post('/rows', [RowController::class, 'store']);
Route::put('/rows/{id}', [RowController::class, 'update']);
Route::delete('/rows/{id}', [RowController::class, 'destroy']);

Route::get('/stocks', [StockController::class, 'index']);
Route::get('/stocks/{id}', [StockController::class, 'show']);
Route::post('/stocks', [StockController::class, 'store']);
Route::put('/stocks/{id}', [StockController::class, 'update']);
Route::delete('/stocks/{id}', [StockController::class, 'destroy']);
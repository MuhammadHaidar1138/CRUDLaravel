<?php

use App\Http\Controllers\JokiController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('/product')->name('product.')->group(function () {
    Route::get('/products', [JokiController::class, 'index'])->name('index');
    Route::get('/create', [JokiController::class, 'create'])->name('create');
    Route::post('/', [JokiController::class, 'store'])->name('store');
    Route::get('/{id}', [JokiController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [JokiController::class, 'update'])->name('update');
    Route::delete('/{id}', [JokiController::class, 'destroy'])->name('destroy');
});

Route::prefix('/event')->name('event.')->group(function () {
    Route::get('/events', [EventController::class, 'index'])->name('index');
    Route::get('/create', [EventController::class, 'create'])->name('create');
    Route::post('/', [EventController::class, 'store'])->name('store');
    Route::get('/{id}', [EventController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [EventController::class, 'update'])->name('update');
    Route::delete('/{id}', [EventController::class, 'destroy'])->name('destroy');
});

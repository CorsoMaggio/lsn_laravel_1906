<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {
Route::get('/', [BookController::class, 'index'])->name('index');
Route::get('/welcome', [BookController::class, 'welcome'])->name('welcome');
Route::get('/crea', [BookController::class, 'create'])->name('create');
Route::post('/salva', [BookController::class, 'store'])->name('store');

Route::get('/mostra/{book}', [BookController::class, 'show'])->name('show');
Route::get('/mostra/{book}/modifica', [BookController::class, 'edit'])->name('edit');
Route::put('/mostra/{book}', [BookController::class, 'update'])->name('update');
Route::delete('/mostra/{book}', [BookController::class, 'destroy'])->name('destroy');

});
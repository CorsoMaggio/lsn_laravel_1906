<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'welcome'])->name('welcome');
Route::get('/dettaglio-prodotto{book}', [BookController::class, 'detail'])->name('detail');

Route::middleware(['auth'])->group(function () {
    Route::get('/libri', [BookController::class, 'index'])->name('index');

    Route::get('/crea', [BookController::class, 'create'])->name('create');
    Route::post('/salva', [BookController::class, 'store'])->name('store');

    Route::get('/mostra/{book}', [BookController::class, 'show'])->name('show');
    Route::get('/mostra/{book}/modifica', [BookController::class, 'edit'])->name('edit');
    Route::put('/mostra/{book}', [BookController::class, 'update'])->name('update');
    Route::delete('/mostra/{book}', [BookController::class, 'destroy'])->name('destroy');
});

Route::resource('/authors', AuthorController::class);

Route::middleware(['auth'])->group(function () {
    Route::get('/autori', [AuthorController::class, 'indexauthor'])->name('indexauthor');

    Route::get('/aggiungi_autore', [AuthorController::class, 'createauthor'])->name('createauthor');
    Route::post('/salva_autore', [AuthorController::class, 'storeauthor'])->name('storeauthor');

    Route::get('/mostra/{autore}', [AuthorController::class, 'showauthor'])->name('showauthor');
    Route::get('/mostra/{autore}/modifica', [AuthorController::class, 'editauthor'])->name('editauthor');
    Route::put('/mostra/{author}', [AuthorController::class, 'updateauthor'])->name('updateauthor');
    Route::delete('/mostra/{author}', [AuthorController::class, 'destroyauthor'])->name('destroyauthor');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/{isbn}', [BookController::class, 'show'])->name('books.show');
Route::get('/penulis/{authorId}/books', [BookController::class, 'booksByAuthor'])->name('penulis.books');

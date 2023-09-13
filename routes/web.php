<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index'] );
Route::resource('books', BookController::class);
Route::get('books/{book}/remove', [BookController::class, 'remove'])->name('books.remove');


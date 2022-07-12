<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LibraryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', [LibraryController::class , 'index'])->name('book');

Route::get('/book/create', [LibraryController::class , 'create'])->name('book.create');
Route::post('/book', [LibraryController::class , 'store'])->name('book.store');
Route::get('/book/{library}', [LibraryController::class , 'show'])->name('book.show');

Route::get('/book/{library}/edit', [LibraryController::class , 'edit'])->name('book.edit');
Route::put('/book/{library}', [LibraryController::class , 'update'])->name('book.update');

Route::DELETE('/book/{library}', [LibraryController::class , 'destroy'])->name('book.destroy');


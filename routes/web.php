<?php

use App\Http\Controllers\BookController;
use App\Models\Buku;
use GuzzleHttp\Promise\Create;
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

Route::get('/buku',[BookController::class, 'index']);
Route::get('/buku/create',[BookController::class, 'created'])->name('buku.create');
Route::post('/buku',[BookController::class, 'store'])->name('buku.store');
Route::delete('/buku/{id}',[BookController::class, 'destroy'])->name('buku.destroy');
Route::get('/buku/update/{id}',[BookController::class,'edit'])->name('buku.edit');
Route::put('/buku/{id}', [BookController::class,'update'])->name('buku.update');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\AlatMusikController;

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
    return view('index');
});

Route::get('/galeri', function () {
    return view('galeri');
});

Route::get('/about', function () {
    return view('about');
});

Route::resource('produk', AlatMusikController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/pesan/{id}', [PesanController::class, 'index']);
Route::post('/pesan/{id}', [PesanController::class, 'pesan']);

Route::get('check-out', [PesanController::class, 'check_out']);
Route::delete('check-out/{id}', [PesanController::class, 'delete']);

Route::get('konfirmasi-check-out', [PesanController::class, 'konfirmasi']);

Route::get('history', [HistoryController::class, 'index']);
Route::get('history/{id}', [HistoryController::class, 'detail']);

Route::get('history/history_pdf/{id}', [HistoryController::class, 'cetak_pdf']);

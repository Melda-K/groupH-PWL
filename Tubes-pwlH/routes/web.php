<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\ManajerController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\TransaksiController;
use App\Models\Transaksi;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/manajer', [ManajerController::class, 'index'])->name('manajer');
    Route::get('/gudang', [GudangController::class, 'index'])->name('gudang');
    Route::get('/kasir', [KasirController::class, 'index'])->name('kasir');
    Route::get('/owner', [OwnerController::class, 'index'])->name('owner');
    Route::get('/stok', [StokController::class, 'index'])->name('stok');
    Route::get('/supervisor', [SupervisorController::class, 'index'])->name('supervisor');
});

Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/stok', [StokController::class, 'index'])->name('stok.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
});


require __DIR__.'/auth.php';
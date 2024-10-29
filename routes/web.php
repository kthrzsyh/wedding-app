<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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


// admin
Route::prefix('admin')->middleware('auth')->group(function () {
    // Halaman utama dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    // Routes untuk Guests
    Route::get('/guests', [GuestController::class, 'index'])->name('guests.index');
    // Menampilkan form tambah tamu
    Route::get('/guests/create', [GuestController::class, 'create'])->name('guests.create');
    // Menyimpan tamu baru
    Route::post('/guests/store', [GuestController::class, 'store'])->name('guests.store');
    // Menampilkan detail tamu
    Route::get('/guests/{guest}', [GuestController::class, 'show'])->name('guests.show');
    // Menampilkan form edit tamu
    Route::get('/guests/{guest}/edit', [GuestController::class, 'edit'])->name('guests.edit');
    // Memperbarui data tamu
    Route::put('/guests/{guest}', [GuestController::class, 'update'])->name('guests.update');
    // Hapus data tamu
    Route::delete('/guests/{guest}', [GuestController::class, 'destroy'])->name('guests.destroy');

    // Routes untuk rsvp
    Route::get('/rsvp', [CommentController::class, 'index'])->name('rsvp.index');
});
// Login 
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Register
// Route::get('/register', [RegisterController::class, 'index'])->middleware('guest')->name('register.index');
// Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Halaman Undangan ke Tamu
Route::get('/{invitation_code}', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Route::post('/submit_comment', [WelcomeController::class, 'store'])->name('comment.store');

<?php

use App\Http\Controllers\ProfileController;
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
    return view('app.dashboard');
})->name('dashboard');

Route::get('/contact', function () {
    return view('app.contact');
})->name('contact');

Route::get('/pesan', function () {
    return view('app.pesan');
})->name('pesan');

Route::get('/penyewaan', function () {
    return view('app.penyewaan');
})->name('penyewaan');

Route::get('/daftar', function () {
    return view('app.daftar');
})->name('daftar');

//admin
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/user', function () {
    return view('admin.user');
})->name('user');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

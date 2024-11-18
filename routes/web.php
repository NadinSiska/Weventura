<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BarangController;
use App\Http\Controllers\Admin\PenyewaanController;
use App\Http\Controllers\KeranjangController;

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
})->name('beranda');

Route::get('/contact', function () {
    return view('app.contact');
})->name('contact');

Route::get('/sewa', function () {
    return view('app.sewa');
})->name('sewa');

Route::get('/pesan', function () {
    return view('app.pesan');
})->name('pesan');

// ============== ADMIN ================ //
Route::middleware('auth')->group(function () {

    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('admin/item', [BarangController::class, 'index'])->name('admin.item.index');

    // ================ BOOOKING ==================== //
    Route::get('admin/booking/waitinglist', [PenyewaanController::class, 'index'])->name('admin.waitinglist');
    Route::get('admin/booking/booked', [PenyewaanController::class, 'booked'])->name('admin.booked');
    Route::post('admin/booking/{id}/approve', [PenyewaanController::class, 'setStatusApproved'])->name('admin.booking.approve');
    Route::post('admin/booking/{id}/reject', [PenyewaanController::class, 'setStatusRejected'])->name('admin.booking.reject');
    Route::post('admin/booking/{id}/start-rental', [PenyewaanController::class, 'setStatusRented'])->name('admin.booking.start');
    Route::post('admin/booking/{id}/mark-returned', [PenyewaanController::class, 'setStatusReturned'])->name('admin.booking.return');
    Route::post('admin/booking/{id}/delete', [PenyewaanController::class, 'destroy'])->name('admin.booking.delete');
});

Route::get('admin/user', function () {
    return view('admin.user');
})->name('user');

Route::get('admin/log', function () {
    return view('admin.log');
})->name('log');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

//Keranjang
Route::prefix('keranjang')->group(function () {
    Route::get('/', [KeranjangController::class, 'index'])->name('cart.index');
Route::get('/{index}', [KeranjangController::class, 'show'])->name('show');
Route::post('/', [KeranjangController::class, 'store'])->name('store');
Route::put('/{index}', [KeranjangController::class, 'update'])->name('update');
Route::delete('/{index}', [KeranjangController::class, 'destroy'])->name('destroy');
Route::delete('/clear', [KeranjangController::class, 'clear'])->name('clear');
});

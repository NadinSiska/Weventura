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

/*
//coba middleware dari cara fajar
Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::middleware('only_guest')->group(function() {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::get('login', [AuthController::class, 'authenticating']);
    Route::get('register', [AuthController::class, 'register']);
    Route::get('register', [AuthController::class, 'registerProcess']);
});

Route::middleware('auth')->group(function(){
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('dasboard', [DashboardController::class, 'index'])->middleware('only_admin');
    Route::get('profile', [UserController::class, 'profile'])->middleware('only_client');
    Route::get('books', [BookController::class,'index']);
});

//end
*/

Route::get('/', function () {
    return view('app.dashboard');
})->name('dashboard');

Route::get('/contact', function () {
    return view('app.contact');
})->name('contact');

Route::get('/sewa', function () {
    return view('app.sewa');
})->name('sewa');

Route::get('/pesan', function () {
    return view('app.pesan');
})->name('pesan');

//admin
Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

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

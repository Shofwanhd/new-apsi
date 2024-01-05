<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DashboarduserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WisataController;
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
    return view('LandingPage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('checkRole:user')->group(function () {
    // Route::get('/dashboard', [DashboarduserController::class, 'index'])->name('index');
});

Route::resource('wisata', WisataController::class);
Route::resource('berita', BeritaController::class);

// ->middleware(['checkRole:owner,admin,user,member']);


require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\landingpage;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BtiketController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\BmemberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\OpenggunaController;
use App\Http\Controllers\OtransaksiController;
use App\Http\Controllers\DashboarduserController;

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

Route::get('/', [landingpage::class, 'index'])->name('index');
Route::get('/wisata', [landingpage::class, 'wisata'])->name('wisata');
Route::get('/membership', [landingpage::class, 'membership'])->name('membership');
Route::get('/berita', [landingpage::class, 'berita'])->name('berita');
Route::get('/data-transaksi', [OtransaksiController::class, 'index'])->name('index')->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware('checkRole:user')->group(function () {
    Route::resource('btiket', BtiketController::class);
    Route::resource('bmember', BmemberController::class);
});
Route::middleware('checkRole:admin')->group(function () {
    Route::resource('wisata', WisataController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('owner', OwnerController::class);
});
Route::middleware('checkRole:owner')->group(function () {
    Route::get('/data-pengguna', [OpenggunaController::class, 'index'])->name('index');
});
Route::middleware('checkRole:member')->group(function () {
    Route::resource('wisata', WisataController::class);
    Route::resource('berita', BeritaController::class);
    Route::resource('owner', OwnerController::class);
});




// ->middleware(['checkRole:owner,admin,user,member']);







require __DIR__ . '/auth.php';

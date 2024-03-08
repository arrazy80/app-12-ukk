<?php

use App\Models\Buku;
use App\Models\Kategori;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PustakaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\BukuPetugasController;
use App\Http\Controllers\BerandaAdminController;
use App\Http\Controllers\datapeminjamController;
use App\Http\Controllers\BerandaPetugasController;
use App\Http\Controllers\BerandaPeminjamController;
use App\Http\Controllers\PeminjamanadminController;

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

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('admin/buku/{id}', [BukuController::class, 'show'])->name('buku.show');
});

Route::prefix('admin')->middleware(['auth', 'auth.admin'])->group(function () {
    Route::get('beranda', [BerandaAdminController::class, 'index'])->name('admin.beranda');
    Route::get('/peminjaman-admin', [PeminjamanadminController::class, 'dataPeminjamanadmin'])->name('peminjaman.data.admin');
    Route::post('/peminjaman-admin/{id}/kembalikan', [PeminjamanadminController::class, 'kembalikan'])->name('buku.kembalikan');
    Route::resource('user',UserController::class);
    Route::resource('kategori',KategoriController::class);
    Route::resource('buku', BukuController::class);

});


Route::prefix('petugas')->middleware(['auth', 'auth.petugas'])->group(function () {
    Route::get('beranda', [BerandaPetugasController::class, 'index'])->name('petugas.beranda');
    Route::get('/peminjaman', [PeminjamanController::class, 'dataPeminjamanPetugas'])->name('peminjaman.data.petugas');
    Route::post('/peminjaman/{id}/kembalikan', [PeminjamanController::class, 'kembalikan'])->name('buku.kembalikan');
    Route::resource('bukus', BukuPetugasController::class);
    Route::resource('user-ofc', datapeminjamController::class);
});
Route::prefix('peminjam')->middleware(['auth', 'auth.peminjam'])->group(function () {
    Route::get('beranda', [BerandaPeminjamController::class, 'index'])->name('peminjam.beranda');
    Route::get('/buku/{id}/pinjem', [PeminjamanController::class, 'pinjem'])->name('buku.pinjam.create');
    Route::post('/pustaka/{id}/pinjam', [PeminjamanController::class, 'pinjam'])->name('pustaka.pinjam');
    Route::get('pustaka', [PustakaController::class, 'index'])->name('pustaka.index');
    Route::get('/peminjaman', [PeminjamanController::class, 'dataPeminjaman'])->name('peminjaman.data');


});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('logout', function () {
    Auth::logout();
    return redirect()->route('login');
});


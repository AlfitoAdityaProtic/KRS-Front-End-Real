<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

// Route::get('/', function () {
//     return view('main');
// });

// ROUTES LOGIN START
Route::get('/', [LoginController::class, 'index']);
// ROUTES LOGIN END

// ROUTES DASHBOARD START
Route::get('dashboard', [DashboardController::class, 'index']);
// ROUTES DASHBOARD END

// ROUTES PRODI START
Route::get('prodi', [ProdiController::class, 'index'])->name('prodi.index');
Route::get('prodi/create', [ProdiController::class, 'create']);
Route::post('prodi/store', [ProdiController::class, 'store']);
Route::get('prodi/edit/{id}', [ProdiController::class, 'edit'])->name('prodi.edit');
Route::put('prodi/update/{id}', [ProdiController::class, 'update'])->name('prodi.update');
Route::delete('/prodi/delete/{id}', [ProdiController::class, 'destroy'])->name('prodi.destroy');

// ROUTES PRODI START



// ROUTES MAHASISWA START
Route::get('mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('mahasiswa/store', [MahasiswaController::class, 'store']);
Route::get('mahasiswa/edit{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
Route::put('mahasiswa/update{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
Route::delete('mahasiswa/delete{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
// ROUTES MAHASISWA END


// ROUTES MATA KULIAH START
Route::get('matkul', [MatkulController::class, 'index'])->name('matkul.index');
Route::get('matkul/create', [MatkulController::class, 'create']);
Route::post('matkul/store', [MatkulController::class, 'store']);
Route::get('matkul/edit/{id}', [MatkulController::class, 'edit'])->name('matkul.edit');
Route::put('matkul/update/{id}', [MatkulController::class, 'update'])->name('matkul.update');
Route::delete('matkul/delete/{id}', [MatkulController::class, 'destroy'])->name('matkul.destroy');
// ROUTES MATA KULIAH END


// ROUTES KRS START
Route::get('krs', [KrsController::class, 'index']);
Route::get('krs/create', [KrsController::class, 'create']);
// ROUTES KRS END

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
Route::get('login',[LoginController::class, 'index']);
// ROUTES LOGIN END

// ROUTES DASHBOARD START
Route::get('/', [DashboardController::class, 'index']);
// ROUTES DASHBOARD END

// ROUTES PRODI START
Route::get('prodi', [ProdiController::class, 'index']);
Route::get('prodi/create', [ProdiController::class, 'create']);
Route::get('prodi/edit', [ProdiController::class, 'edit']);
// ROUTES PRODI START



// ROUTES MAHASISWA START
Route::get('mahasiswa',[MahasiswaController::class, 'index']);
Route::get('mahasiswa/create',[MahasiswaController::class, 'create']);
Route::get('mahasiswa/edit',[MahasiswaController::class, 'edit']);
// ROUTES MAHASISWA END


// ROUTES MATA KULIAH START
Route::get('matkul',[MatkulController::class, 'index']);
Route::get('matkul/create',[MatkulController::class, 'create']);
// ROUTES MATA KULIAH END


// ROUTES KRS START
Route::get('krs',[KrsController::class, 'index']);
Route::get('krs/create',[KrsController::class, 'create']);
// ROUTES KRS END

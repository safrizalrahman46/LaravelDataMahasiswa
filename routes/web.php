<?php

use App\Http\Controllers\DinamisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaiController;

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
//     return view('welcome');
// });

//websaya


//login
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/postlogin', [AuthController::class, 'postlogin']);


//register
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/postregister', [AuthController::class, 'postregister']);


// security basic
Route::group(['middleware' => ['auth']], function () {
    Route::get('home', [PortoController::class, 'index']);

    //routing halaman
    Route::get('web/beranda', [DinamisController::class, 'beranda']);
    Route::get('web/profil', [DinamisController::class, 'profil']);
    Route::get('web/kontak', [DinamisController::class, 'kontak']);

    Route::get('/logout', [AuthController::class, 'logout']);

    //dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('/siswa', [SiswaController::class, 'index']);
    Route::get('/siswa/create', [SiswaController::class, 'create']);
    Route::post('/siswa/store', [SiswaController::class, 'store']);
    Route::get('/siswa/{id}/edit', [SiswaController::class, 'edit']);
    Route::post('/siswa/{id}/update', [SiswaController::class, 'update']);
    Route::get('/siswa/{id}/delete', [SiswaController::class, 'destroy']);
    Route::get('/siswa/search', [SiswaController::class, 'search']);

    Route::get('/guru', [GuruController::class, 'guru']);
    Route::get('/guru/create', [GuruController::class, 'create']);
    Route::post('/guru/store', [GuruController::class, 'store']);
    Route::get('/guru/{id}/edit', [GuruController::class, 'edit']);
    Route::post('/guru/{id}/update', [GuruController::class, 'update']);
    Route::get('/guru/{id}/delete', [GuruController::class, 'destroy']);
    Route::get('/guru/search', [GuruController::class, 'search']);

    Route::get('/mapel', [MapelController::class, 'index']);
    Route::get('/mapel/create', [MapelController::class, 'create']);
    Route::post('/mapel/store', [MapelController::class, 'store']);
    Route::get('/mapel/{id}/edit', [MapelController::class, 'edit']);
    Route::post('/mapel/{id}/update', [MapelController::class, 'update']);
    Route::get('/mapel/{id}/delete', [MapelController::class, 'destroy']);
    Route::get('/mapel/search', [MapelController::class, 'search']);

    Route::get('/nilai', [NilaiController::class, 'index']);
    Route::get('/nilai/create', [NilaiController::class, 'create']);
    Route::post('/nilai/store', [NilaiController::class, 'store']);
    Route::get('/nilai/{id}/edit', [NilaiController::class, 'edit']);
    Route::post('/nilai/{id}/update', [NilaiController::class, 'update']);
    Route::get('/nilai/{id}/delete', [NilaiController::class, 'destroy']);

    Route::get('/nilai/search', [NilaiController::class, 'search']);



    //Download PDF
    Route::get('/downloadpdf', [SiswaController::class, 'downloadpdf']);
    Route::get('/downloadpdf2', [NilaiController::class, 'downloadpdf2']);
    Route::get('/downloadpdf3', [MapelController::class, 'downloadpdf3']);
    Route::get('/downloadpdf4', [GuruController::class, 'downloadpdf4']);

});

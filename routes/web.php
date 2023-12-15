<?php

use App\Http\Controllers\ApiReferenceController;
use App\Http\Controllers\CustomizationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReferensiController;
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
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'user'])->name('dashboard');

Route::get('/dashboardAdmin', function () {
    return view('dashboardAdmin');
})->middleware(['auth', 'admin'])->name('dashboardAdmin');
// Route::get('/admin', function () {
//     return view('admin');
// })->middleware(['auth', 'admin']);

Route::get('/user/{user}', [ProfileController::class, 'show'])->middleware(['auth', 'verified'])->name('userView');
Route::put('/userUpdate', [ProfileController::class, 'update1'])->name('userUpdate');
// daftar user
Route::get('/daftarUser', [ProfileController::class, 'index'])->middleware(['auth', 'admin'])->name('daftarUser');
// daftar kustomisasi
Route::get('/daftarKustomisasi', [CustomizationController::class, 'index'])->middleware(['auth', 'admin'])->name('daftarKustomisasi');
Route::get('/delete/{id}', [ProfileController::class, 'destroy'])->name('delete');


Route::get('/referensi', function () {
    return view('template');
})->middleware(['auth', 'user'])->name('referensi');


Route::get('/hubungi', function () {
    return view('hubungi');
});

Route::get('kustomisasi', [CustomizationController::class, 'create'])->middleware(['auth', 'user'])
    ->name('kustomisasi');
Route::post('kustomisasi', [CustomizationController::class, 'store'])->middleware(['auth', 'user']);

// get all customization
Route::get('/getAllCustomisations', [CustomizationController::class, 'getAllCustomisations'])->middleware(['auth', 'admin'])->name('getAllCustomisations');

route::get('/kustomisasiStatus/{detailKustomisasiId}', [CustomizationController::class, 'detailKustomisasi'])->middleware(['auth', 'admin'])->name('detailKustomisasi');
Route::post('/updateStatus', [CustomizationController::class, 'updateKustomisasi'])->middleware(['auth', 'admin'])->name('updateKustomisasi');

Route::get('/daftarReferensi', [ReferensiController::class, 'index'])->middleware(['auth', 'admin'])->name('daftarReferensi');
Route::post('referensi', [ReferensiController::class, 'store'])->middleware(['auth', 'admin']);


Route::middleware('auth', 'user')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
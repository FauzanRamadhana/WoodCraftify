<?php

use App\Http\Controllers\CustomizationController;
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
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/admin', function () {
//     return view('admin');
// })->middleware(['auth', 'admin']);

Route::get('/user/{user}', [ProfileController::class, 'show'])->middleware(['auth', 'verified'])->name('userView');
Route::put('/userUpdate', [ProfileController::class, 'update1'])->name('userUpdate');
Route::get('/admin', [ProfileController::class, 'index'])->middleware(['auth', 'admin'])->name('user');
Route::get('/delete/{id}', [ProfileController::class, 'destroy'])->name('delete');
Route::get('/template', function () {
    return view('template');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/hubungi', function () {
    return view('hubungi');
});

Route::get('kustomisasi', [CustomizationController::class, 'create'])
    ->name('kustomisasi');
Route::post('kustomisasi', [CustomizationController::class, 'store']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
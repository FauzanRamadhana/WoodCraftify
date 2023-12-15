<?php

use App\Http\Controllers\ApiReferenceController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->prefix('api')->group(function () {
    Route::get('/getReference', [ApiReferenceController::class, 'index']);
    Route::get('/getReference/{id}', [ApiReferenceController::class, 'show']);
    Route::post('/storeReference', [ApiReferenceController::class, 'store']);
    Route::post('/updateReference/{id}', [ApiReferenceController::class, 'update']);
    Route::delete('/deleteReference/{id}', [ApiReferenceController::class, 'destroy']);
});

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
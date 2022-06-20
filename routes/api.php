<?php

use App\Http\Controllers\API\PengajianController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('pengajian', \App\Http\Controllers\API\PengajianController::class);

// Route::get('pengajian',[PengajianController::class, 'index']);
// Route::post('pengajian/store',[PengajianController::class, 'store']);
// Route::get('pengajian/show/{id}',[PengajianController::class, 'show']);
// Route::post('pengajian/update/{id}',[PengajianController::class, 'update']);
// Route::get('pengajian/destroy/{id}',[PengajianController::class, 'destroy']);
<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KehadiranController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PertemuanController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SiswaController;
use App\Http\Resources\UserResource;
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
    return new UserResource($request->user());
});

Route::middleware('auth:sanctum')->group(function () {

    Route::resources([
        'siswa' => SiswaController::class,
        'guru' => GuruController::class,
        'jadwal' => JadwalController::class,
        'mata-pelajaran' => MataPelajaranController::class,
        'kelas' => KelasController::class,
        'kehadiran' => KehadiranController::class,
        'pertemuan' => PertemuanController::class,
        'nilai' => NilaiController::class,
        'messages' => MessageController::class,
        'rooms' => RoomController::class,
    ]);

    Route::get('logout', [AuthController::class, 'logout']);
});

Route::post('login', [AuthController::class, 'login']);

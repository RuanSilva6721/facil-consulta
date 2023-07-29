<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DoctorPatientController;
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
Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::get('/cidades', [CityController::class, 'getCities'])->name('getCities');
Route::get('/medicos', [DoctorController::class, 'getDoctors'])->name('getDoctors');
Route::get('/cidades/{id}/medicos', [DoctorController::class, 'getDoctorsOfCity'])->name('getDoctorsOfCity');

Route::post('/medicos/{id}/pacientes', [DoctorPatientController::class, 'linkPatientToDoctor'])->name('linkPatientToDoctor');

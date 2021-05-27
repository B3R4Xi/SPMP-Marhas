<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarMapelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DaftarGuruController;
use App\Http\Controllers\TambahDataMapelController;
use App\Http\Controllers\LabController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[HomeController::class,'index']);
Route::get('/daftarmapel',[DaftarMapelController::class,'index']);
Route::get('/profile',[ProfileController::class,'index']);
Route::get('/daftarguru',[DaftarGuruController::class,'index']);
Route::get('/tambahDataMapel',[TambahDataMapelController::class,'index']);
Route::get('/lab',[LabController::class,'index']);

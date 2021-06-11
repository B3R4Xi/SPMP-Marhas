<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarMapelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DaftarGuruController;
use App\Http\Controllers\LabController;
use App\Models\DaftarMapelModel;
use Illuminate\Support\Facades\URL;

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

// insert data mapel
Route::get('/daftarmapel/add',[DaftarMapelController::class,'add']);
Route::post('/daftarmapel/insert',[DaftarMapelController::class,'insert']);

//delete data mapel
// Route::post('/daftarmapel/delete/{id}',[DaftarMapelController::class,'delete'])->name('admin.delete');

//update data mapel
// Route::match(['get', 'post'],'/daftarmapel/edit/{id_mapel}',[DaftarMapelController::class,'edit']);

// Route by tsungtsung
Route::get('/daftarmapel/delete/{id_mapel}',[DaftarMapelModel::class,'delete'])->name('admin.delete');
// Route::post('/daftarmapel/update'.[DaftarMapelModel::class,'update'])->name('admin.update');
Route::get('/daftarmapel/{$id_mapel}',[DaftarMapelController::class,'getMapelData']);



Route::get('/lab',[LabController::class,'index']);
Route::get('/profile',[ProfileController::class,'index']);
Route::get('/daftarguru',[DaftarGuruController::class,'index']);
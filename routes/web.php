<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarMapelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LabController;
use App\Models\DaftarMapelModel;
use Illuminate\Support\Facades\URL;



Route::get('/',[HomeController::class,'index']);
Route::get('/daftarmapel',[DaftarMapelController::class,'index']);

// INSERT DATA MAPEL
Route::get('/daftarmapel/add',[DaftarMapelController::class,'add']);
Route::post('/daftarmapel/insert',[DaftarMapelController::class,'insert']);


//EDIT & UPDATE DATA MAPEL
Route::get('/daftarmapel/edit/{id_mapel}', [DaftarMapelController::class,'edit'])->name('admin.edit');
Route::post('/daftarmapel/update/{id_mapel}', [DaftarMapelController::class,'update']);

//DELETE DATA MAPEL
Route::delete('/daftarmapel/{id_mapel}',[DaftarMapelController::class,'delete'])->name('admin.delete');

Route::get('/lab',[LabController::class,'index']);
Route::get('/profile',[ProfileController::class,'index']);
Route::get('/daftarguru',[GuruController::class,'index']);

Route::resource('daftarguru', GuruController::class);
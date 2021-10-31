<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarMapelController;
use App\Http\Controllers\GenetikController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\WaktuController;
use App\Http\Controllers\HariController;
use App\Http\Controllers\TimedaysController;
use App\Http\Controllers\TeachController;
use App\Http\Controllers\Timenotavailble;
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


Route::get('/profile',[ProfileController::class,'index']);

//submit genetik
Route::get('genetika/submit', [GenetikController::class,'submit'])->name('admin.genetic.submit');
Route::get('genetika/result/{id}', [GenetikController::class,'result'])->name('admin.genetic.result');

//Resource Route

//-------------------------------------------------------------//
Route::resource('lab',LabController::class);
Route::resource('daftarguru',GuruController::class);
Route::resource('kelas',KelasController::class);
Route::resource('waktu',WaktuController::class);
Route::resource('hari', HariController::class);
Route::resource('timedays', TimedaysController::class);
Route::resource('teach', TeachController::class);
Route::resource('timenotavailable', Timenotavailble::class);
Route::resource('genetika', GenetikController::class);
// Route::get('/teach/create/getKelas/{id}','TeachController@getKelas');
Route::get('/teach/create/getKelas/{id}',[TeachController::class, 'getKelas']);
Route::get('/teach/create/getMapel/{id}',[TeachController::class, 'getMapel']);
Route::get('/teach/id/edit/getMapel/{id}',[TeachController::class, 'getMapel']);
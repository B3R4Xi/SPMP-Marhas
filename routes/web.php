<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\DaftarMapelController;
use App\Http\Controllers\Admin\GenetikController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\LabController;
use App\Http\Controllers\Admin\KelasController;
use App\Http\Controllers\Admin\WaktuController;
use App\Http\Controllers\Admin\HariController;
use App\Http\Controllers\Admin\TimedaysController;
use App\Http\Controllers\Admin\TeachController;
use App\Http\Controllers\Admin\Timenotavailble;
use App\Http\Controllers\Admin\ManagementController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Support\Facades\Auth;

// Route Auth
Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class, 'auth']);

//Route Manage user
Route::resource('management', ManagementController::class);


// Route::get('/',[HomeController::class,'index']);
Route::get('/',[HomeController::class,'index'])->middleware('auth');
Route::get('/daftarmapel',[DaftarMapelController::class,'index'])->middleware('auth');

// INSERT DATA MAPEL
Route::get('/daftarmapel/add',[DaftarMapelController::class,'add'])->middleware('auth');
Route::post('/daftarmapel/insert',[DaftarMapelController::class,'insert'])->middleware('auth');


//EDIT & UPDATE DATA MAPEL
Route::get('/daftarmapel/edit/{id_mapel}', [DaftarMapelController::class,'edit'])->name('admin.edit')->middleware('auth');
Route::post('/daftarmapel/update/{id_mapel}', [DaftarMapelController::class,'update'])->middleware('auth');

//DELETE DATA MAPEL
Route::delete('/daftarmapel/{id_mapel}',[DaftarMapelController::class,'delete'])->name('admin.delete')->middleware('auth');


Route::get('/profile',[ProfileController::class,'index'])->middleware('auth');

//submit genetik
Route::get('genetika/submit', [GenetikController::class,'submit'])->name('admin.genetic.submit')->middleware('auth');
Route::get('genetika/result/{id}', [GenetikController::class,'result'])->name('admin.genetic.result')->middleware('auth');

//excel jadwal
Route::get('genetika/export/{id}', [GenetikController::class,'export'])->name('admin.genetic.export')->middleware('auth');
Route::get('genetika/exportPDF/{id}', [GenetikController::class,'exportPDF'])->name('admin.genetic.exportPDF')->middleware('auth');
//excel all jadwal
Route::get('genetika/export', [GenetikController::class,'exportAll'])->name('admin.genetic.exportAll')->middleware('auth');
Route::get('genetika/exportPDF', [GenetikController::class,'exportAllPDF'])->name('admin.genetic.exportAllPDF')->middleware('auth');
//Resource Route

//-------------------------------------------------------------//
Route::resource('lab',LabController::class)->middleware('auth');
Route::resource('daftarguru',GuruController::class)->middleware('auth');
Route::resource('kelas',KelasController::class)->middleware('auth');
Route::resource('waktu',WaktuController::class)->middleware('auth');
Route::resource('hari', HariController::class)->middleware('auth');
Route::resource('timedays', TimedaysController::class)->middleware('auth');
Route::resource('teach', TeachController::class);
Route::resource('timenotavailable', Timenotavailble::class)->middleware('auth');
Route::resource('genetika', GenetikController::class)->middleware('auth');

//ROUTE FOR AJAX
Route::get('/teach/create/getKelas/{id}',[TeachController::class, 'getKelas'])->middleware('auth');
Route::get('/teach/create/getMapel/{id}',[TeachController::class, 'getMapel'])->middleware('auth');
Route::get('/teach/id/edit/getMapel/{id}',[TeachController::class, 'getMapel'])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

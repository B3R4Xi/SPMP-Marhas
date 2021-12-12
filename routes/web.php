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
use Illuminate\Support\Facades\Auth;

// use Illuminate\Support\Facades\Auth;

// Route Auth
// Route::get('/login',[LoginController::class, 'index'])->name('login')->middleware('guest');
// Route::post('/login',[LoginController::class, 'auth']);
Auth::routes();
//
Route::middleware(['admin'])->group(function()
{
   
    //Route Manage user
    Route::resource('management', ManagementController::class);
    Route::get('/daftarmapel',[DaftarMapelController::class,'index']);

    // INSERT DATA MAPEL
    Route::get('/daftarmapel/add',[DaftarMapelController::class,'add']);
    Route::post('/daftarmapel/insert',[DaftarMapelController::class,'insert']);

    //EDIT & UPDATE DATA MAPEL
    Route::get('/daftarmapel/edit/{id_mapel}', [DaftarMapelController::class,'edit'])->name('admin.edit');
    Route::post('/daftarmapel/update/{id_mapel}', [DaftarMapelController::class,'update']);

    //DELETE DATA MAPEL
    Route::delete('/daftarmapel/{id_mapel}',[DaftarMapelController::class,'delete'])->name('admin.delete');

    //submit genetik
    Route::get('genetika/submit', [GenetikController::class,'submit'])->name('admin.genetic.submit');
    
    //ROUTE FOR AJAX
    Route::get('/management/create/getGuru/{id}',[ManagementController::class, 'getGuru']);
    Route::get('/management/create/getGuruAlamat/{id}',[ManagementController::class, 'getGuruAlamat']);
    Route::get('/management/create/getGuruNohp/{id}',[ManagementController::class, 'getGuruNohp']);
    
    //Resource Route
    //-------------------------------------------------------------//
    Route::resource('lab',LabController::class);
    Route::resource('kelas',KelasController::class);
    Route::resource('waktu',WaktuController::class);
    Route::resource('hari', HariController::class);
    Route::resource('timedays', TimedaysController::class);
    Route::resource('genetika', GenetikController::class);


});

Route::get('/',[HomeController::class,'index']);
Route::resource('daftarguru',GuruController::class);
// Route::resource('teach', TeachController::class);
Route::resource('timenotavailable', Timenotavailble::class);

Route::get('/teach',[TeachController::class,'index'])->name('teach.index');

    // INSERT DATA TEACH
Route::get('/teach/create',[TeachController::class,'create'])->name('teach.create');
Route::post('/teach/store',[TeachController::class,'store'])->name('teach.store');

    //EDIT & UPDATE DATA TEACH
Route::get('/teach/edit/{id}', [TeachController::class,'edit'])->name('teach.edit');
Route::post('/teach/update/{id}', [TeachController::class,'update'])->name('teach.update');

    //DELETE DATA TEACH
Route::delete('/teach/{id}',[TeachController::class,'destroy'])->name('teach.destroy');


Route::get('/profile',[ProfileController::class,'index']);
Route::get('/teach/create/getKelas/{id}',[TeachController::class, 'getKelas']);
Route::get('/teach/create/getMapel/{id}',[TeachController::class, 'getMapel']);
Route::get('/teach/id/edit/getMapel/{id}',[TeachController::class, 'getMapel']);

//excel jadwal
Route::get('genetika/export/{id}', [GenetikController::class,'export'])->name('admin.genetic.export');
Route::get('genetika/exportPDF/{id}', [GenetikController::class,'exportPDF'])->name('admin.genetic.exportPDF');
//excel all jadwal
Route::get('genetika/export', [GenetikController::class,'exportAll'])->name('admin.genetic.exportAll');
Route::get('genetika/exportPDF', [GenetikController::class,'exportAllPDF'])->name('admin.genetic.exportAllPDF');
Route::get('genetika/result/{id}', [GenetikController::class,'result'])->name('admin.genetic.result');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

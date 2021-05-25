<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/daftarmapel', function () {
    return view('daftar-mapel');
});

Route::get('/daftarguru', function () {
    return view('daftar-guru');
});

Route::get('/lab', function () {
    return view('ruangan-lab');
});

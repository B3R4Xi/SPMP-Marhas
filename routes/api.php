<?php

use App\Http\Controllers\Admin\GenetikController;
use App\Http\Controllers\APIcontroller;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/showClassApi/{id}', [APIcontroller::class, 'showClassesApi']);
Route::get('/getApiHari', [APIcontroller::class, 'getApiHari']);
Route::get('/getApiWaktu', [APIcontroller::class, 'getApiWaktu']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\logbookController;
use App\Http\Controllers\DataPribadiController;
use App\Http\Controllers\datapendidikanController;
use App\Http\Controllers\databpjsController;
use App\Http\Controllers\masakerjakaryawanController;
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
    return view('welcome');
});

Route::get('/logbook',[logbookController::class,'index']);
Route::get('/logbook/create',[logbookController::class,'create']);
Route::post('/logbook/datakaryawan',[logbookController::class,'datakaryawan']);

Route::get('/DataPribadi',[DataPribadiController::class,'DataPribadi']);
Route::get('/DataPribadi/pribadicreate',[DataPribadiController::class,'pribadicreate']);

Route::get('/datapendidikan',[datapendidikanController::class,'datapend']);
Route::get('/datapendidikan/pendcreate',[datapendidikanController::class,'pendcreate']);

Route::get('/databpjs',[databpjsController::class,'dtbpjs']);
Route::get('/databpjs/bpjscreate',[databpjsController::class,'bpjscreate']);

Route::get('/masakerjakaryawan',[masakerjakaryawanController::class,'msKK']);
Route::get('/masakerjakaryawan/mskkcreate',[masakerjakaryawanController::class,'mskkcreate']);

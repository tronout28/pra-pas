<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PorschesController;
use App\Http\Controllers\BmwsController;
use App\Http\Controllers\ToyotasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/bmw/all', [BmwsController::class, 'index']);
Route::get('/bmw/detail/{tb_bmw}', [BmwsController::class, 'detailbmw']);

Route::get('/porsche/all', [PorschesController::class, 'index']);
Route::get('/porsche/detail/{tb_porsche}', [PorschesController::class, 'detailporsche']);

Route::get('/toyota/all', [ToyotasController::class, 'index']);
Route::get('/toyota/detail/{tb_toyota}', [ToyotasController::class, 'detailtoyota']);


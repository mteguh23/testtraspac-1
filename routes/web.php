<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UnitController;

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
    return redirect('/pegawai');
});
Route::get('/pegawai', function () {
    return redirect('/pegawai/index');
});
Route::get('/unit', function () {
    return redirect('/unit/index');
});

Route::get('/pegawai/index', [PegawaiController::class, 'index'])->middleware(['auth']);
Route::get('/pegawai/new', [PegawaiController::class, 'create'])->middleware(['auth']);
Route::get('/pegawai/detail/{id}', [PegawaiController::class, 'detail'])->middleware(['auth']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->middleware(['auth']);
Route::post('/pegawai/store', [PegawaiController::class, 'store'])->middleware(['auth']);
Route::post('/pegawai/update/{id}', [PegawaiController::class, 'update'])->middleware(['auth']);
Route::get('/pegawai/delete/{id}', [PegawaiController::class, 'delete'])->middleware(['auth']);

Route::get('/unit/index', [UnitController::class, 'index'])->middleware(['auth']);
Route::get('/unit/detail/{id}', [UnitController::class, 'detail'])->middleware(['auth']);

require __DIR__.'/auth.php';

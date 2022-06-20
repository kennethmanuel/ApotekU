<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicineController;

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

// public

// admin
Route::get('/admin/medicine/', [MedicineController::class, 'index'])->name('admin.medicine.index');
Route::get('/admin/medicine/create', [MedicineController::class, 'create'])->name('admin.medicine.create');
Route::post('/admin/medicine/create', [MedicineController::class, 'store'])->name('admin.medicine.store');
Route::get('/admin/medicine/{id}', [MedicineController::class, 'edit'])->name('admin.medicine.edit');
Route::put('/admin/medicine/{id}', [MedicineController::class, 'update'])->name('admin.medicine.update');
Route::delete('/admin/medicine/{id}', [MedicineController::class, 'destroy'])->name('admin.medicine.destroy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

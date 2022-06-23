<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MedicineController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\UserController;


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

Route::get('/welcome', function () {
    return view('welcome');
});

// public

// admin
// Route::get('/admin/medicine/', [MedicineController::class, 'index'])->name('admin.medicine.index');
// Route::get('/admin/medicine/create', [MedicineController::class, 'create'])->name('admin.medicine.create');
// Route::post('/admin/medicine/create', [MedicineController::class, 'store'])->name('admin.medicine.store');
// Route::get('/admin/medicine/{id}', [MedicineController::class, 'edit'])->name('admin.medicine.edit');
// Route::put('/admin/medicine/{id}', [MedicineController::class, 'update'])->name('admin.medicine.update');
// Route::delete('/admin/medicine/{id}', [MedicineController::class, 'destroy'])->name('admin.medicine.destroy');

Route::get('/', [FrontendController::class, 'index']);
Route::get('/medicine/{slug}', [FrontendController::class, 'productdetail']);

Auth::routes();

Route::post('/add-to-cart', [CartController::class, 'addToCart']);
Route::post('/delete-cart-item', [CartController::class, 'deleteItem']);
Route::post('/update-cart', [CartController::class, 'updateCart']);

Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'cart']);
    Route::get('/checkout', [CheckoutController::class, 'index']);
    Route::post('/place-order', [CheckoutController::class, 'placeorder']);
    Route::get('/my-orders', [UserController::class, 'index']);
    Route::get('/view-order/{id}', [UserController::class, 'vieworder']);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/category', [FrontendController::class, 'category']);

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/users', [DashboardController::class, 'users']);
    Route::get('/users/{id}', [DashboardController::class, 'view']);
    Route::post('/users/{id}', [DashboardController::class, 'update_user']);
    Route::delete('/users/{id}', [DashboardController::class, 'delete_user']);
    Route::get('admin/orders', [OrderController::class, 'index']);
    Route::get('admin/orders/{id}', [OrderController::class, 'view']);
    Route::resource('/categories', CategoryController::class);
    Route::resource('/medicines', MedicineController::class);
    Route::get('/report2', [UserController::class, 'report2']);
    Route::get('/report1', [MedicineController::class, 'report1']);
});

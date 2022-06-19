<?php

use App\Http\Controllers\APIAuthController;
use App\Http\Controllers\APICategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIMedicineController;

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

// Route::apiResource('medicines', MedicineController::class);
// Route::apiResource('categories', CategoryController::class);

// Public routes
Route::post('/register', [APIAuthController::class, 'register']);
Route::post('/login', [APIAuthController::class, 'login']);

Route::get('/medicines', [APIMedicineController::class, 'index']);
Route::get('/medicines/{id}', [APIMedicineController::class, 'show']);
Route::get('/medicines/search/{generic_name}', [APIMedicineController::class, 'search']);

Route::get('/category', [APICategoryController::class, 'index']);
Route::get('/category/{id}', [APICategoryController::class, 'show']);
Route::get('/categories/search/{name}', [APICategoryController::class, 'search']);

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/medicines', [APIMedicineController::class, 'store']);
    Route::put('/medicines/{id}', [APIMedicineController::class, 'update']);
    Route::delete('/medicines/{id}', [APIMedicineController::class, 'destory']);

    Route::post('/category', [APICategoryController::class, 'store']);
    Route::put('/category/{id}', [APICategoryController::class, 'update']);
    Route::delete('/category/{id}', [APICategoryController::class, 'destory']);

    Route::post('/logout', [APIAuthController::class, 'logout']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

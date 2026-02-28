<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SupplierController;

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'registerPost']);

Route::get('/dashboard/login', [AuthController::class, 'login'])
    ->name('login');

Route::post('/dashboard/login', [AuthController::class, 'loginPost']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [AuthController::class, 'dashboard']);

Route::middleware('auth')->group(function () {

    // ITEM
    Route::get('/item', [ItemController::class, 'index'])
        ->name('item.index');

    Route::get('/item/create', [ItemController::class, 'create'])
        ->name('item.create');

    Route::post('/item/store', [ItemController::class, 'store'])
        ->name('item.store');

    // SUPPLIER 
    Route::get('/supplier', [SupplierController::class, 'index'])
        ->name('supplier.index');

    Route::get('/supplier/tambah', [SupplierController::class, 'tambah'])
        ->name('supplier.create');

    Route::post('/supplier/store', [SupplierController::class, 'store'])
        ->name('supplier.store');
});

Route::get('/', function () {
    return view('welcome');
});
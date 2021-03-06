<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmpleyeeController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PartyController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\SalaryController;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::resource('salary', [SalaryController::class]);
    Route::resource('employee', [EmpleyeeController::class]);
    Route::resource('provider', [ProviderController::class]);
    Route::resource('product', [ProductController::class]);
    Route::resource('customer', [CustomerController::class]);
    Route::resource('packege', [PackageController::class]);
    Route::resource('party', [PartyController::class]);
});
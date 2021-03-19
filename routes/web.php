<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

//Groaup admin
Route::prefix('/')->group(function () {
    //Index
    //Route::get('/', [DashboardController::class, 'index']);
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Resource controller
    Route::resource('salary', SalaryController::class);
    Route::resource('employee', EmployeeController::class);
    Route::resource('provider', ProviderController::class);
    Route::resource('product', ProductController::class);
    Route::resource('customer', CustomerController::class);
    Route::resource('package', PackageController::class);
    Route::resource('party', PartyController::class);
});
<?php

use App\Http\Controllers\DashboardController;
//use App\Http\Controllers\PartyController;
use Illuminate\Support\Facades\Route;

//Groaup admin
Route::prefix('/')->group(function () {
    //Index
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Resource controller
    Route::resource('salary', SalaryController::class);
    Route::resource('employee', EmployeeController::class);
    Route::resource('provider', ProviderController::class);
    Route::resource('product', ProductController::class);
    Route::post('product/status', 'ProductController@status')->name('product.status');
    Route::resource('customer', CustomerController::class);
    Route::resource('package', PackageController::class);
    Route::resource('party', PartyController::class);
    Route::post('party/status', 'PartyController@status')->name('party.status');
    Route::get('parties/all', 'PartyController@all')->name('parties.all');
});
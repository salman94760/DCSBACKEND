<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\SignatureController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::post('/login', [AuthController::class, 'login']);


/*
|--------------------------------------------------------------------------
| Protected Routes
|--------------------------------------------------------------------------
|
| Token required for all routes below.
|
*/

Route::middleware('auth:sanctum')->group(function () {

    // Admin
    Route::post('/admin/users/add', [AuthController::class, 'addUser']);
    Route::get('/admin/users', [AuthController::class, 'users']);

    // Company
    Route::get('/admin/company', [CompanyController::class, 'company']);
    Route::get('/admin/company/{id}', [CompanyController::class, 'companyDetail']);
    Route::post('/admin/company/add', [CompanyController::class, 'addCompany']);
    Route::put('/admin/company/edit/{id}', [CompanyController::class, 'updateCompany']);
    Route::delete('/admin/company/delete/{id}', [CompanyController::class, 'deleteCompany']);

    // Signature
    Route::post('/signature/save', [SignatureController::class, 'save']);

    // Drivers
    Route::get('/company/drivers/{id}', [DriverController::class, 'drivers']);
    Route::get('/company/driver/{id}', [DriverController::class, 'driverDetail']);
    Route::get('/company/driver/{companyId}/{driverId}', [DriverController::class, 'companyDriverDetail']);
    Route::post('/company/driver/add', [DriverController::class, 'addDriver']);
    Route::put('/company/driver/edit/{id}', [DriverController::class, 'updateDriver']);
    Route::delete('/company/driver/delete/{id}', [DriverController::class, 'deleteDriver']);

    // Driver Employment / History / Documents
	Route::post('/company/driver/employment/add', [DriverController::class, 'addDriverEmployment']);
	Route::get('/company/driver-employment/{driverId}',[DriverController::class, 'DriverEmploymentHistory']);
    Route::post('/company/driver/history/add', [DriverController::class, 'addDriverHistory']);
    Route::post('/company/driver/document/add', [DriverController::class, 'addDriverDocument']);
});
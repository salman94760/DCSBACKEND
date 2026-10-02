<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\DriverDocumentController;
use App\Http\Controllers\DriverExperienceController;
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

    // Signature
    Route::post('/signature/save', [SignatureController::class, 'save']);

    // Admin
    Route::controller(AuthController::class)->group(function () {
        Route::post('/admin/users/add', 'addUser');
        Route::get('/admin/users', 'users');
    });

    // Company
    Route::controller(CompanyController::class)->group(function () {
        Route::get('/admin/company', 'company');
        Route::get('/admin/company/{id}', 'companyDetail');
        Route::post('/admin/company/add', 'addCompany');
        Route::put('/admin/company/edit/{id}', 'updateCompany');
        Route::delete('/admin/company/delete/{id}', 'deleteCompany');
    });

   

    // Drivers
    Route::controller(DriverController::class)->group(function () {
        Route::get('/company/drivers/{id}','drivers');
        Route::get('/company/driverDetail/{id}', 'driverDetail');
        Route::get('/company/driver/{companyId}/{driverId}', 'companyDriverDetail');
        Route::post('/company/driver/add', 'addDriver');
        Route::put('/company/driver/edit/{id}', 'updateDriver');
        Route::delete('/company/driver/delete/{id}', 'deleteDriver');
    });

    // Drivers document
    Route::controller(DriverDocumentController::class)->group(function () {
        Route::get('/company/documentInformation/{slug}/{id}', 'documentInformation');
        Route::post('/company/driver/employment/add', 'addDriverEmployment');
        Route::get('/company/driver-employment/{driverId}', 'DriverEmploymentHistory');
        Route::post('/company/driver/history/add', 'addDriverHistory');
        Route::post('/company/driver/document/add', 'addDriverDocument');
        Route::get('/company/driver-document/{id}', 'DriverDocument');
    });

    // Drivers experience
    Route::controller(DriverExperienceController::class)->group(function () {
        Route::post('company/driver-experience/{id}', 'addDriverExperience');
        Route::get('company/driver-experience/{id}', 'DriverExperience');
    });
});
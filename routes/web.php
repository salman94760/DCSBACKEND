<?php

use App\Http\Controllers\DriverController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    return view('welcome');
});


Route::get('driver-application',function (){
    return view('drivers.driver-application');
});

Route::get('/driver-request',function (){
    return view('emails.driver-esign-request');
});

Route::get('/driver-response',function (){
    return view('emails.driver-esign-response');
});

Route::get('genPdf',[DriverController::class,'genPdf']);
Route::get('generatePdf',[DriverController::class,'generatePdf']);




Route::get('/storage/{path}', function ($path) {

    $path = str_replace('..', '', $path);

    $disk = Storage::disk('public');

    if (!$disk->exists($path)) {
        abort(404);
    }

    return response()->file(
        $disk->path($path)
    );

})->where('path', '.*');

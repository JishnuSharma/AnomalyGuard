<?php

use App\Http\Controllers\DeviceManagementController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {

    // User dashboard
    Route::get('/dashboard', [DeviceManagementController::class,'dispayDevices'])->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dbscanalgorithm',[DeviceManagementController::class,'displayAlgorithmDetails'])->name('about-algorithm');
    
    // Submitting device forms
    Route::post('/createdevice',[DeviceManagementController::class,'createDevice']);
    Route::get('/devicedata',[DeviceManagementController::class,'getDevice']);
    Route::post('/updatedevice',[DeviceManagementController::class,'updateDevice']);

    // Device listings for files
    Route::get('/devicefiles/{id}',[DeviceManagementController::class,'displayDeviceFiles'])->name('filelisting');
    Route::post('/savefiles',[DeviceManagementController::class,'saveFiles'])->name('savefiles');
    Route::get('/delete-file/{fileId}',[DeviceManagementController::class,'deleteFile'])->name('deletefile');

    // Data processing routes
    Route::post('/datanalysis',[DeviceManagementController::class,'displayAnalysisPanel'])->name('analyzefile');
    Route::post('/processdata',[DeviceManagementController::class,'processData'])->name('processdata');
    Route::get('/getprocessfile/{id}',[DeviceManagementController::class,'getRequestFile'])->name('requestfile');

});

require __DIR__.'/auth.php';

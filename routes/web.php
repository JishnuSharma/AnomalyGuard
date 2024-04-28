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
    Route::get('/devicefiles',[DeviceManagementController::class,'displayDeviceFiles']);
    Route::get('/datanalysis',[DeviceManagementController::class,'displayAnalysisPanel']);

    // Submitting device forms
    Route::post('/createdevice',[DeviceManagementController::class,'createDevice']);
    Route::get('/devicedata',[DeviceManagementController::class,'getDevice']);
    Route::post('/updatedevice',[DeviceManagementController::class,'updateDevice']);

});

require __DIR__.'/auth.php';

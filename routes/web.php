<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StorageLocationController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('welcome');
});
Route::get('/StorageLocations', [StorageLocationController::class, 'index'])->name('storage-locations.index');
Route::get('/StorageLocations/Create', [StorageLocationController::class, 'create'])->name('storage-locations.create');
Route::post('/StorageLocations/Store', [StorageLocationController::class, 'store'])->name('storage-locations.store');
Route::get('/StorageLocations/{id}', [StorageLocationController::class, 'show'])->name('storage-locations.show');
Route::get('/StorageLocations/{id}/Edit', [StorageLocationController::class, 'edit'])->name('storage-locations.edit');
Route::post('/StorageLocations/{id}/Update', [StorageLocationController::class, 'update'])->name('storage-locations.update');


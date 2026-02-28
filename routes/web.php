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


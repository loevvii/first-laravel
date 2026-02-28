<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StorageLocationController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('welcome');
});
Route::get('/StorageLocations', [StorageLocationController::class, 'index']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OutletController;

Route::get('/', [HomeController::class, 'index']);
//outlet
Route::resource('/outlet', OutletController::class);
Route::delete('{id}/outlet/delete',  [OutletController::class, 'destroy']);

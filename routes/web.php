<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;

Route::get('/', [HomeController::class, 'index']);
//outlet
Route::resource('/outlet', OutletController::class);
Route::delete('{id}/outlet/delete',  [OutletController::class, 'destroy']);
//paket
Route::resource('/paket', PaketController::class);
Route::delete('{id}/paket/delete',  [PaketController::class, 'destroy']);

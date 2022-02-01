<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', [HomeController::class, 'index']);
//outlet
Route::resource('/outlet', OutletController::class);
Route::delete('{id}/outlet/delete',  [OutletController::class, 'destroy']);
//paket
Route::resource('/paket', PaketController::class);
Route::delete('{id}/paket/delete',  [PaketController::class, 'destroy']);
//member
Route::resource('/member', MemberController::class);
Route::delete('{id}/member/delete',  [MemberController::class, 'destroy']);
//login
Route::get('/login', [loginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
// Route::post('/register', [RegisterController::class, 'store']);

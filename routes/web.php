<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;


Route::get('/dashboard', [HomeController::class, 'index4']);
Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('role');
Route::get('/homeOwner', [HomeController::class, 'index3'])->name('homeOwner');
Route::get('/homeKasir', [HomeController::class, 'index2'])->name('homeKasir');

//outlet
Route::resource('/outlet', OutletController::class)->middleware('role');
Route::delete('{id}/outlet/delete',  [OutletController::class, 'destroy']);
//paket
Route::resource('/paket', PaketController::class)->middleware('role');
Route::delete('{id}/paket/delete',  [PaketController::class, 'destroy']);
//member
Route::resource('/member', MemberController::class)->middleware('role');
Route::delete('{id}/member/delete',  [MemberController::class, 'destroy']);
//login
Route::get('/login', [loginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);
//register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
//user
Route::resource('/user', UserController::class)->middleware('role');
Route::delete('{id}/user/delete',  [UserController::class, 'destroy']);

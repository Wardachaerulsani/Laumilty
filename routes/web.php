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
use App\Http\Controllers\BarangInventarisController;



Route::get('/dashboard', [HomeController::class, 'index4']);
Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');

//outlet
Route::resource('/outlet', OutletController::class)->middleware('role:admin');
Route::delete('{id}/outlet/delete',  [OutletController::class, 'destroy']);
//paket
Route::resource('/paket', PaketController::class)->middleware('role:admin');
Route::delete('{id}/paket/delete',  [PaketController::class, 'destroy']);
//paket
Route::resource('/barang_inventaris', BarangInventarisController::class)->middleware('role:admin');
Route::delete('{id}/barang_inventaris/delete',  [BarangInventarisController::class, 'destroy']);
//member
Route::resource('/member', MemberController::class)->middleware('role:admin,kasir');
Route::delete('{id}/member/delete',  [MemberController::class, 'destroy']);
//login
Route::get('/login', [loginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);
//register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
//user
Route::resource('/user', UserController::class)->middleware('role:admin');
Route::delete('{id}/user/delete',  [UserController::class, 'destroy']);
// Route::resource('kasir/member2', MemberController::class)->middleware('role');
// Route::delete('{id}kasir/member2/delete',  [MemberController::class, 'destroy']);
// Route::get('/transaksi', [TransaksiController::class, 'index']);
Route::resource('/transaksi', TransaksiController::class)->middleware('role:admin,kasir');
//route export
Route::get('export/paket', [PaketController::class, 'export'])->name('export_paket');
Route::get('export/outlet', [OutletController::class, 'export'])->name('export_outlet');
Route::get('export/member', [MemberController::class, 'export'])->name('export_member');
Route::get('paket/export/xls', 'PaketController@exportToExcel');
//route import
Route::post('paket/import', [PaketController::class, 'importData'])->name('import-paket');
Route::post('member/import', [MemberController::class, 'importData'])->name('import-member');

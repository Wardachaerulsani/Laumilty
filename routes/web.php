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
use App\Http\Controllers\SimulasiController;
use App\Http\Controllers\DetailTransaksiController;
use App\Http\Controllers\PenjemputanController;
use App\Http\Controllers\BarangController;

Route::get('/dashboard', [HomeController::class, 'index4']);
Route::get('/', [HomeController::class, 'index'])->name('home')->middleware('auth');
//barang
Route::resource('/barang', BarangController::class)->middleware('role:admin');
Route::delete('{id}/barang/delete',  [BarangController::class, 'destroy']);
Route::post('/status/barang', [BarangController::class ,'status'])->name('status_barang');

//outlet
Route::resource('/outlet', OutletController::class)->middleware('role:admin');
Route::delete('{id}/outlet/delete',  [OutletController::class, 'destroy']);
//paket
Route::resource('/paket', PaketController::class)->middleware('role:admin');
Route::delete('{id}/paket/delete',  [PaketController::class, 'destroy']);
//paket
// Route::resource('/barang_inventaris', BarangInventarisController::class)->middleware('role:admin');
// Route::delete('{id}/barang_inventaris/delete',  [BarangInventarisController::class, 'destroy']);
//paket
Route::resource('/penjemputan', PenjemputanController::class)->middleware('role:admin');
Route::delete('{id}/penjemputan/delete',  [PenjemputanController::class, 'destroy']);
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
//laporan
Route::resource('/laporan', DetailTransaksiController::class)->middleware('auth');
Route::get('{id}/print', [DetailTransaksiController::class, 'faktur'])->middleware('auth');
//route export
Route::get('export/paket', [PaketController::class, 'export'])->name('export_paket');
Route::get('export/outlet', [OutletController::class, 'export'])->name('export_outlet');
Route::get('export/member', [MemberController::class, 'export'])->name('export_member');
Route::get('export/penjemputan', [PenjemputanController::class, 'export'])->name('export_penjemputan');
Route::get('export/barang', [BarangController::class, 'export'])->name('export_barang');
Route::get('paket/export/xls', 'PaketController@exportToExcel');
//route import
Route::post('paket/import', [PaketController::class, 'importData'])->name('import-paket'); 
Route::post('member/import', [MemberController::class, 'importData'])->name('import-member');
Route::post('outlet/import', [OutletController::class, 'importData'])->name('import-outlet');
Route::post('barang/import', [BarangController::class, 'importData'])->name('import-barang');
Route::post('penjemputan/import', [PenjemputanController::class, 'importData'])->name('import-penjemputan');
Route::get('data_karyawan',[SimulasiController::class, 'index']);
Route::post('status', [PenjemputanController::class ,'status'])->name('status');
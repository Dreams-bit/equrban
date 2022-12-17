<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BizappayController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\KariahController;
use App\Http\Controllers\KariahKorbanController;
use App\Http\Controllers\KariahPengedarController;
use App\Http\Controllers\MaklumatKorban;
use App\Http\Controllers\MaklumatKorbanController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\ToyyibpayController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::view("kariah_daftar_pengedar", 'kariah_daftar_pengedar')->name('kariah_daftar_pengedar');
Route::view("/kariah_daftar_korban", 'kariah_daftar_korban')->name('kariah_daftar_korban');
Route::view("/kariah_sijil", 'kariah_sijil')->name('kariah_sijil');
Route::view("kariah_maklumat_asass", 'kariah_maklumat_asas')->name('kariah_maklumat_asas');
Route::view("kariah_maklumat_update", "kariah_maklumat_update")->name('kariah_maklumat_update');
Route::view("admin_login", "admin_login")->name('admin_login');
Route::view("admin_dashboard", "admin_dashboard")->name("admin_dashboard");
Route::view("manage_kariah", "manage_kariah")->name("manage_kariah");
Route::view("manage_kariah_edit", "manage_kariah_edit")->name("manage_kariah_edit");
Route::view("manage_pengedar", "manage_pengedar")->name("manage_pengedar");
Route::view("kariah_daftar_payment", "kariah_daftar_payment")->name("kariah_daftar_payment");
Route::view("kariah_daftar_payment_bank", "kariah_daftar_payment_bank")->name("kariah_daftar_payment_bank");
Route::view("admin_tempahan_korban", "admin_tempahan_korban")->name("admin_tempahan_korban");
Route::view("manage_maklumat_korban", "admin_maklumat_korban")->name("manage_maklumat_korban");
Route::view("manage_maklumat_korban", "admin_maklumat_korban")->name("manage_maklumat_korban");
Route::view("kariah_login", "kariah_login")->name("kariah_login");
Route::view("kariah_register", 'kariah_register')->name('kariah_register');

Route::post('kariahRegister', [KariahController::class, 'store'])->name('kariahRegister');
Route::post('kariahLogin', [KariahController::class, 'checkLogin'])->name('kariahLogin');
Route::get('kariah_dashboard', [KariahController::class, 'kariahDashboard'])->name('kariah_dashboard')->middleware('isLoggedIn');
Route::get('kariahLogout', [KariahController::class, 'kariahLogout'])->name('kariahLogout');
Route::get('kariah_maklumat_update/{id}', [KariahController::class, 'kariah_maklumat_edit']);
//submit button update kariah_maklumat
Route::post('/kariah_update/{id}', [KariahController::class, 'kariah_update']);
//apply pengedar
Route::get('kariah_pengedar/{id}', [KariahPengedarController::class, 'kariah_daftar_pengedar']);
Route::post('kariahDaftarPengedar', [KariahPengedarController::class, 'store']);
Route::get('kariah_pengedar_edit/{id}', [KariahPengedarController::class, 'kariah_daftar_pengedar_edit']);
//submit button update kariah_pengedar_edit
Route::post('/kariah_pengedar_update/{id}', [KariahPengedarController::class, 'kariah_pengedar_update']);
//delete button kariah pengedar
Route::get('kariah_pengedar_delete/{id}', [KariahPengedarController::class, 'kariah_pengedar_delete']);
//update kariah booking korban peserta_name
Route::get('update_peserta_name/{id}', [KariahController::class, 'update_peserta_name']);

//Admin
Route::get('admin_dashboard', [AdminController::class, 'adminDashboard'])->name('admin_dashboard');
Route::post('adminRegister', [AdminController::class, 'adminNew'])->name('adminRegister');
Route::post('adminLogin', [AdminController::class, 'adminLogin'])->name('adminLogin');
Route::get('adminLogout', [AdminController::class, 'adminLogout'])->name('adminLogout');

//Manage Kariah
Route::get('manage_kariah', [AdminController::class, 'manageKariah'])->name('manage_kariah');
Route::get('manage_kariah_edit/{id}', [AdminController::class, 'manageKariah_edit']);
Route::get('manage_kariah_delete/{id}', [AdminController::class, 'manageKariah_delete']);
Route::post('registerKariah', [AdminController::class, 'addKariah'])->name('registerKariah');

//submit button update kariahAkaun
Route::post('/manage_kariah_update/{id}', [AdminController::class, 'manageKariah_update']);

//kariah daftar korban
Route::get('kariah_daftar_korban/{id}', [KariahKorbanController::class, 'kariah_daftar_korban']);
Route::post('kariah_daftar_korban', [KariahKorbanController::class, 'store']);
Route::get('/kariah_daftar_korban_delete/{id}', [KariahKorbanController::class, 'kariah_daftar_korban_delete']);
Route::get('/kariah_booking_details/{id}', [KariahKorbanController::class, 'kariah_booking_details']);
Route::get('/kariah_daftar_akad/{id}', [KariahKorbanController::class, 'kariah_daftar_akad']);
Route::get('/kariah_daftar_payment/{id}', [KariahKorbanController::class, 'kariah_daftar_payment']);
Route::get('/kariah_daftar_payment_bank/{id}', [KariahKorbanController::class, 'kariah_daftar_payment_bank']);
//Route::post('/fileUpload', [FileUploadController::class, 'fileUpload']);
Route::post('/fileUpload', [KariahKorbanController::class, 'fileUpload']);


//admin manage tempahan korban
Route::get('manage_tempahan_korban', [AdminController::class, 'manage_tempahan_korban'])->name('manage_tempahan_korban');
Route::get('downloadFile/{receipt_name}', [FileUploadController::class, 'fileDownload']);
Route::get('viewFile/{receipt_name}', [FileUploadController::class, 'fileView']);
Route::post('status_pembayaran/{id}', [AdminController::class, 'store_status_pembayaran']);

//admin manage tempahan korban jadual
Route::post('waktu_sembelihan/{id}', [AdminController::class, 'store_waktu_sembelihan']);

//admin manage tempahan korban
Route::get('manage_tempahan_korban_jadual', [AdminController::class, 'manage_tempahan_korban_jadual'])->name('manage_tempahan_korban_jadual');



//Manage Pengedar
Route::get('manage_pengedar', [AdminController::class, 'manage_pengedar'])->name('manage_pengedar');

//Maklumat Korban
Route::get('manage_maklumat_korban', [MaklumatKorbanController::class, 'show'])->name('manage_maklumat_korban');
Route::post('kuantiti_lembu', [MaklumatKorbanController::class, 'store_kuantiti_lembu']);
Route::post('bahagian_lembu', [MaklumatKorbanController::class, 'store_bahagian_lembu']);
Route::post('seekor_lembu', [MaklumatKorbanController::class, 'store_seekor_lembu']);

//ToyyibPay Payment
Route::get('/toyyibpay/{id}', [ToyyibpayController::class, 'create']);
Route::get('toyyibpay_status', [ToyyibpayController::class, 'status'])->name('toyyibpay_status');
Route::post('toyyibpay_callback', [ToyyibpayController::class, 'callBack'])->name('toyyibpay_callback');



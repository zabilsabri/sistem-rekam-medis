<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\forgetPasswordController;
use App\Http\Controllers\Pasien\pasienController;
use App\Http\Controllers\Dokter\dokterController;
use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Poli\poliController;
use App\Http\Controllers\Obat\obatController;
use App\Http\Controllers\ICD10\icd10Controller;


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
    return view('Auth.login');
})->name('login');

Route::post('loginProcess', [loginController::class , 'login']);
Route::get('/logout', [loginController::class , 'logout']);

// Forget Password
Route::get('/forget-password', [forgetPasswordController::class , 'index'])->name('forget-password');
Route::post('request-process', [forgetPasswordController::class , 'forgetPasswordRequest'])->name('forgetPassword.request.post');
Route::get('/change-password/{token}', [forgetPasswordController::class , 'indexResetPasswordForm'])->name('forgetPassword.link.get');
Route::post('change-process', [forgetPasswordController::class , 'resetPasswordForm'])->name('forgetPassword.link.post');


Route::group(['middleware' => ['auth', 'hakAkses:admin']], function(){
    
    // Data Obat
    Route::get('dataObat', [obatController::class , 'show']);
    Route::post('editDataObat/{id}', [obatController::class, 'edit']);
    Route::post('tambahDataObat', [obatController::class , 'create']);
    Route::get('deleteDataObat/{id}', [obatController::class, 'delete']);

    // Data ICD10
    Route::get('dataICD10', [icd10Controller::class , 'show']);
    Route::post('tambahDataICD10', [icd10Controller::class , 'create']);
    Route::post('editDataICD10/{id}', [icd10Controller::class, 'edit']);
    Route::get('deleteDataICD10/{id}', [icd10Controller::class, 'delete']);
    

    // Data Poli
    Route::get('dataPoli', [poliController::class , 'show']);
    Route::post('tambahPoli', [poliController::class , 'create']);
    Route::post('editDataPoli/{id}', [poliController::class, 'edit']);
    Route::get('deleteDataPoli/{id}', [poliController::class, 'delete']);


    // Data Dokter
    Route::get('dataDokter', [dokterController::class , 'show']);
    Route::post('tambahDataDokter', [dokterController::class , 'create']);
    Route::post('editDataDokter/{id}', [dokterController::class , 'edit']);
    Route::get('profilDokter/{id}', [dokterController::class, 'detail']);
    Route::get('hapusDataDokter/{id}', [dokterController::class , 'hapus']);
    Route::get('ubahPassword/{id}', [dokterController::class , 'ubahPassword']);

    // Data Pasien
    Route::get('kunjunganPasien', [pasienController::class , 'show']);
    Route::get('rmPasien/{id}', [pasienController::class, 'detail']);
    Route::post('tambahPasien', [pasienController::class , 'create']);
    Route::post('editDataPasien/{id}', [pasienController::class, 'edit']);
    Route::get('hapusDataPasien/{id}', [pasienController::class , 'hapus']);

    // Data Riwayat Medis
    Route::get('riwayatMedis', [pasienController::class , 'rm']);
    Route::get('tambahRM/{id}', [pasienController::class , 'tambahRM']);
    Route::get('editRM/{id}/{pId}', [pasienController::class , 'editRM']);
    Route::get('hapusRM/{id}', [pasienController::class , 'hapusRM']);

    // Profil Admin
    Route::get('/profil-admin', [adminController::class , 'showProfileAdmin'])->name('profil.admin');
    Route::post('/editDataAdmin/{id}', [adminController::class , 'edit'])->name('edit.profil.admin');
    Route::get('/ubahPasswordAdmin/{id}', [adminController::class , 'ubahPassword']);


});

Route::group(['middleware' => ['auth', 'hakAkses:dokter']], function(){

    // Data Pasien
    Route::get('riwayatMedisDokter', [pasienController::class , 'rmDokter']);
    Route::get('rmPasienDokter/{id}', [pasienController::class, 'detailDokter']);
    Route::get('editRMDokter/{id}/{pId}', [pasienController::class , 'editRMDokter']);
    Route::get('editObatDokter/{id}/{pId}', [pasienController::class , 'editObatDokter']);

    // Profil
    Route::get('/profil-dokter', [dokterController::class , 'showProfileDokter'])->name('profil.dokter');
    Route::post('/editDataDokterD/{id}', [dokterController::class , 'editD'])->name('edit.profil.dokter');
    Route::get('/ubahPasswordD/{id}', [dokterController::class , 'ubahPasswordD']);


});


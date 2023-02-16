<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Pasien\pasienController;
use App\Http\Controllers\Dokter\dokterController;
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


});

Route::group(['middleware' => ['auth', 'hakAkses:dokter']], function(){
    

});


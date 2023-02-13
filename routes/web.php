<?php

use Illuminate\Support\Facades\Route;

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
});

Route::get('/dataDokter', function () {
    return view('admin.menu.dataDokter');
});

Route::get('/dataObat', function () {
    return view('admin.menu.dataObat');
});

Route::get('/dataICD10', function () {
    return view('admin.menu.dataICD10');
});

Route::get('/dataPoli', function () {
    return view('admin.menu.dataPoli');
});

Route::get('/kunjunganPasien', function () {
    return view('admin.menu.dataPasien');
});

Route::get('/riwayatMedis', function () {
    return view('admin.menu.riwayatMedis');
});

Route::get('/rmPasien', function () {
    return view('admin.menu.inner-menu.rmPasien');
});


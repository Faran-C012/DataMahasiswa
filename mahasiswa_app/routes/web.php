<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\MahasiswaController;

Route::resource('mahasiswa', MahasiswaController::class);

use App\Exports\MahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/mahasiswa/export-excel', function () {
    return Excel::download(new MahasiswaExport, 'mahasiswa.xlsx');
});

Route::get('/mahasiswa/export-pdf', [App\Http\Controllers\MahasiswaController::class, 'exportPdf']);

Route::get('/mahasiswa/cetak/{id}', [App\Http\Controllers\MahasiswaController::class, 'cetakStruk']);

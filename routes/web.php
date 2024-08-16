<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Dashboard

Route::get('/dashboard', function () {
    return view('Pages.dashboard.dashboard');
});

Route::get('/MasterData/DataSiswa', function () {
    return view('Pages.dashboard.MasterData.DataSiswa');
});

Route::get('/MasterData/DataSiswa/Tambah', function () {
    return view('Pages.dashboard.MasterData.tambahSiswa');
});

Route::get('/MasterData/DataBuku', function () {
    return view('Pages.dashboard.MasterData.DataBUku');
});

Route::get('/MasterData/DataBuku/Tambah', function () {
    return view('Pages.dashboard.MasterData.tambahBuku');
});

Route::get('/Transksi/peminjaman', function () {
    return view('Pages.dashboard.Transaksi.Peminjaman');
});

Route::get('/Transksi/pengembalian', function () {
    return view('Pages.dashboard.Transaksi.Pengembalian');
});

Route::get('/Laporan/BukuBelumKembali', function () {
    return view('Pages.dashboard.Laporan.BukuBelumKemabli');
});

Route::get('/Laporan/BukuTerfavorite', function () {
    return view('Pages.dashboard.Laporan.BukuTerfavorite');
});

Route::get('/Laporan/PeminjamanPerhari', function () {
    return view('Pages.dashboard.Laporan.PeminjamanPerhari');
});

// End Dashboard

Route::get('/', function () {
    return view('Pages.HalmanUtama.index');
});
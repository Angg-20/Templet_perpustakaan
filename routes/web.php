<?php

use App\Http\Controllers\DataBuku;
use App\Http\Controllers\DataSiswa;
use Illuminate\Support\Facades\Route;
// Dashboard
Route::get('/dashboard', function () {
    return view('Pages.dashboard.dashboard');
});

Route::get("/MasterData/DataSiswa", [DataSiswa::class, "Tampilkan"]);

Route::get('/MasterData/DataSiswa/Tambah', function () {
    return view('Pages.dashboard.MasterData.tambahSiswa');
});

Route::get("/MasterData/DataBuku", [DataBuku::class, "Tampilkan"]);

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

// Halaman Utama

Route::get('/', function () {
    return view('Pages.HalmanUtama.index');
});

Route::get('Kategori/Bukutefavorite', function () {
    return view('Pages.HalmanUtama.HalamanKategori');
});

Route::get('HalamanPeminjaman', function () {
    return view('Pages.HalmanUtama.HalamanPeminjaman');
});
// End Halaman Utama

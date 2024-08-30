@extends('Pages.dashboard.Layout')

@section('Css')
    <link rel="stylesheet" href="/assets/Bootstrap-css/style.css">
@endsection

@section('Konten')
    <h1>Buku Belum Kembali</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Laporan</li>
            <li class="breadcrumb-item active">Buku Belum Kembali</li>
        </ol>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Buku Belum Kembali</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Judul Buku</th>
                                    <th>Peminjam</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Batas Pengembalian</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>100 Dongeng Nusantara</td>
                                    <td>John Doe</td>
                                    <td>01-06-2023</td>
                                    <td>08-06-2023</td>
                                    <td><span class="badge bg-warning">Terlambat</span></td>
                                </tr>
                                <tr>
                                    <td>Laskar Pelangi</td>
                                    <td>Jane Smith</td>
                                    <td>05-06-2023</td>
                                    <td>12-06-2023</td>
                                    <td><span class="badge bg-info">Masih Dipinjam</span></td>
                                </tr>
                                <!-- Tambahkan baris lain sesuai kebutuhan -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('Pages.dashboard.Layout')

@section('Css')
    <link rel="stylesheet" href="/assets/Bootstrap-css/style.css">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }
        .dashboard-container {
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }
        .card-custom {
            transition: all 0.3s ease;
            border: none;
            border-radius: 15px;
            overflow: hidden;
        }
        .card-custom:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .card-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
        .bg-pastel-blue { background-color: #A7C7E7; color: #2c3e50; }
        .bg-pastel-green { background-color: #C1E1C1; color: #27ae60; }
        .bg-pastel-yellow { background-color: #FFEFD5; color: #f39c12; }
        .bg-pastel-pink { background-color: #FFB6C1; color: #e74c3c; }
        .bg-pastel-purple { background-color: #E6E6FA; color: #8e44ad; }
        .bg-pastel-orange { background-color: #FFE5B4; color: #d35400; }
        .bg-blue-top { background-color: #007bff; color: white; }
    </style>
@endsection

@section('Konten')
    <div class="container-fluid dashboard-container">
        <div class="bg-blue-top p-3 mb-2 rounded">
            <h1 class="mb-4 text-gray-800">Dashboard Perpustakaan</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item active text-gray-400 fs-2" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>

        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="card card-custom bg-pastel-blue h-100">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h1 class="card-title-custom display-4 mb-0">150</h1>
                        <h6 class="card-subtitle-custom mt-2">Total Buku</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-custom bg-pastel-green h-100">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h1 class="card-title-custom display-4 mb-0">10</h1>
                        <h6 class="card-subtitle-custom mt-2">Kategori Buku</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-custom bg-pastel-yellow h-100">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h1 class="card-title-custom display-4 mb-0">5</h1>
                        <h6 class="card-subtitle-custom mt-2">Buku Terbaru</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-custom bg-pastel-pink h-100">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h1 class="card-title-custom display-4 mb-0">43</h1>
                        <h6 class="card-subtitle-custom mt-2">Anggota Aktif</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-custom bg-pastel-purple h-100">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h1 class="card-title-custom display-4 mb-0">12</h1>
                        <h6 class="card-subtitle-custom mt-2">Buku Dipinjam</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card card-custom bg-pastel-orange h-100">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <h1 class="card-title-custom display-4 mb-0">4.5</h1>
                        <h6 class="card-subtitle-custom mt-2">Rating Rata-rata</h6>
                    </div>
                </div>
            </div>
        </div>
    <div class="row mt-4">
        <div class="col-lg-6">
            <div class="card bg-light mb-4">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Buku Terfavorit #1</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-4">
                            <img src="assets/img/1.jpeg" alt="Buku Terfavorit 1" class="img-fluid" style="max-height: 200px; width: auto;">
                        </div>
                        <div class="flex-grow-1">
                            <h3 class="text-dark mb-2">Laskar Pelangi</h3>
                            <p class="text-muted mb-2 fs-5">Andrea Hirata</p>
                            <p class="text-dark mb-3 fs-5"><strong>Jumlah Peminjaman:</strong> 150</p>
                            <a href="#" class="btn btn-success btn-sm">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-light">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">Buku Terfavorit #2</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="me-4">
                            <img src="assets/img/2.jpeg" alt="Buku Terfavorit 2" class="img-fluid" style="max-height: 200px; width: auto;">
                        </div>
                        <div class="flex-grow-1">
                            <h3 class="text-dark mb-2">Bumi Manusia</h3>
                            <p class="text-muted mb-2 fs-5">Pramoedya Ananta Toer</p>
                            <p class="text-dark mb-3 fs-5"><strong>Jumlah Peminjaman:</strong> 120</p>
                            <a href="#" class="btn btn-success btn-sm">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card h-100">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">10 Buku Terfavorit</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Judul Buku</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Laskar Pelangi</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Bumi Manusia</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Pulang</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Negeri 5 Menara</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Ayat-Ayat Cinta</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Sang Pemimpi</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Perahu Kertas</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>5 cm</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Ronggeng Dukuh Paruk</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Cinta di Dalam Gelas</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection

@extends('Pages.dashboard.Layout')

@section('Css')
    <link rel="stylesheet" href="/assets/Bootstrap-css/style.css">
@endsection

@section('Konten')
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-lg-4 mb-3">
            <div class="card card-custom bg-blue text-center">
                <div class="card-body">
                    <h1 class="card-title-custom">43</h1>
                    <h6 class="card-subtitle-custom">Anggota</h6>
                </div>
                <div class="card-footer card-footer-custom footer-blue"></div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card card-custom bg-dark-blue text-center">
                <div class="card-body">
                    <h1 class="card-title-custom">10</h1>
                    <h6 class="card-subtitle-custom">Jenis Buku</h6>
                </div>
                <div class="card-footer card-footer-custom footer-dark-blue"></div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card card-custom bg-orange text-center">
                <div class="card-body">
                    <h1 class="card-title-custom">7</h1>
                    <h6 class="card-subtitle-custom">Kategori</h6>
                </div>
                <div class="card-footer card-footer-custom footer-orange"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 mb-3">
            <div class="card card-custom bg-green text-center">
                <div class="card-body">
                    <h1 class="card-title-custom">2</h1>
                    <h6 class="card-subtitle-custom">Dipinjamkan</h6>
                </div>
                <div class="card-footer card-footer-custom footer-green"></div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card card-custom bg-purple text-center">
                <div class="card-body">
                    <h1 class="card-title-custom">10</h1>
                    <h6 class="card-subtitle-custom">Dikembalikan</h6>
                </div>
                <div class="card-footer card-footer-custom footer-purple"></div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card card-custom bg-red text-center">
                <div class="card-body">
                    <h1 class="card-title-custom">1</h1>
                    <h6 class="card-subtitle-custom">Denda</h6>
                </div>
                <div class="card-footer card-footer-custom footer-red"></div>
            </div>
        </div>
    </div>
@endsection

@extends('Pages.dashboard.Layout')

@section('Css')
    <link rel="stylesheet" href="/assets/Bootstrap-css/style.css">
@endsection

@section('Konten')
    <div class="pagetitle">
        <h1>Data Buku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Master Data</li>
                <li class="breadcrumb-item">Data Buku</li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="kode_buku" class="form-label">Kode Buku</label>
                    <input type="text" class="form-control" id="kode_buku" name="kode_buku">
                </div>
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit">
                </div>
                <div class="mb-3">
                    <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                    <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit">
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary" style="width: 150px">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@extends('Pages.dashboard.Layout')

@section('Css')
    <link rel="stylesheet" href="/assets/Bootstrap-css/style.css">
@endsection

@section('Konten')
    <div class="pagetitle">
        <h1>Data Siswa</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Master Data</li>
                <li class="breadcrumb-item">Data Siswa</li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label for="nisn" class="form-label">NISN</label>
                    <input type="text" class="form-control" id="nisn" name="nisn">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">No. Telepon</label>
                    <input type="tel" class="form-control" id="no_telp" name="no_telp">
                </div>
                <div class="mb-3">
                    <label for="kode_kelas" class="form-label">Kode Kelas</label>
                    <input type="text" class="form-control" id="kode_kelas" name="kode_kelas">
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary" style="width: 150px">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

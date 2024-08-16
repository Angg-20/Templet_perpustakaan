@extends('Pages.dashboard.Layout')

@section('Css')
    <link rel="stylesheet" href="/assets/Bootstrap-css/style.css">
@endsection

@section('Konten')
    <div class="pagetitle">
        <h1>DataSiswa</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">MasterData</li>
                <li class="breadcrumb-item">DataSiswa</li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="m-3">
            <form>
                <div class="mb-3">
                    <label for="nisn" class="form-label">NISN</label>
                    <input type="text" class="form-control" id="nisn" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">alamat</label>
                    <textarea type="text" class="form-control" id="alamat"></textarea>
                </div>
                <div class="mb-3">
                    <label for="No_telp" class="form-label">No Telpon</label>
                    <input type="text" class="form-control" id="No_telp">
                </div>
                <div class="mb-3">
                    <label for="kode_kelas" class="form-label">Kode Kelas</label>
                    <input type="text" class="form-control" id="kode_kelas">
                </div>
                <button type="submit" class="btn btn-primary mt-4" style="width: 150px">Submit</button>
            </form>
        </div>
    </div>
    <script src="/assets/Bootstrap-js/main.js"></script>
@endsection

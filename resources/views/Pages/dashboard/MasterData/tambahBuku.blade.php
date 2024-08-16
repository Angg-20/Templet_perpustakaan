@extends('Pages.dashboard.Layout')

@section('Css')
    <link rel="stylesheet" href="/assets/Bootstrap-css/style.css">
@endsection

@section('Konten')
    <div class="pagetitle">
        <h1>DataBuku</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">MasterData</li>
                <li class="breadcrumb-item">DataBuku</li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
        </nav>
    </div>

    <div class="card">
        <div class="m-3">
            <form>
                <div class="mb-3">
                    <label for="kode_buku" class="form-label">kode buku</label>
                    <input type="text" class="form-control" id="kode_buku" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="judul" class="form-label">judul</label>
                    <input type="text" class="form-control" id="judul">
                </div>
                <div class="mb-3">
                    <label for="penerbit" class="form-label">penerbit</label>
                    <textarea type="text" class="form-control" id="penerbit"></textarea>
                </div>
                <div class="mb-3">
                    <label for="tahun terbit" class="form-label">Tahun Terbit</label>
                    <input type="text" class="form-control" id="tahun terbit">
                </div>
                <button type="submit" class="btn btn-primary mt-4" style="width: 150px">Submit</button>
            </form>
        </div>
    </div>
    <script src="/assets/Bootstrap-js/main.js"></script>
@endsection

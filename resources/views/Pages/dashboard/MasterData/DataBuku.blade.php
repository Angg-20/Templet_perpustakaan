@extends('Pages.dashboard.Layout')

@section('Css')
    <link rel="stylesheet" href="/assets/Bootstrap-css/style.css">
@endsection

@section('Konten')
    <div class="row mb-4">
        <div class="col-lg-10">
            <div class="pagetitle">
                <h1>Data Buku</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Master Data</li>
                        <li class="breadcrumb-item active">Data Buku</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-lg-2 text-end">
            <a href="/MasterData/DataBuku/Tambah" class="btn btn-success" style="width: 150px">
                Tambah
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Penerbit</th>
                            <th scope="col">Tahun Terbit</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($DataBuku as $buku)
                        <tr>
                            <td>{{ $buku->kode_buku }}</td>
                            <td>{{ $buku->judul }}</td>
                            <td>{{ $buku->penerbit }}</td>
                            <td>{{ $buku->tahunterbit }}</td>
                            <td class="text-center">
                                <a href="#" class="btn btn-sm btn-success me-2">Edit</a>
                                <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <nav aria-label="Page navigation" class="mt-4">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <script src="/assets/Bootstrap-js/main.js"></script>
@endsection

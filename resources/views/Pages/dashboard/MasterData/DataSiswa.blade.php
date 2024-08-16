@extends('Pages.dashboard.Layout')

@section('Css')
    <link rel="stylesheet" href="/assets/Bootstrap-css/style.css">
@endsection

@section('Konten')
    <div class="row">
        <div class="col-lg-10">
            <div class="pagetitle">
                <h1>DataSiswa</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">MasterData</li>
                        <li class="breadcrumb-item active">DataSiswa</li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="col-lg-2 text-end">
            <a href="/MasterData/DataSiswa/Tambah" class="btn btn-success" style="width: 150px">
                Tambah
            </a>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">nisn</th>
                        <th scope="col">nama</th>
                        <th scope="col">alamat</th>
                        <th scope="col">no telepon</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <th scope="row">01</th>
                        <td>Brandon</td>
                        <td>Munjul</td>
                        <td>081234001</td>
                        <td>RPL</td>
                        <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">02</th>
                        <td>Jacob</td>
                        <td>Munjul</td>
                        <td>081234002</td>
                        <td>RPL</td>
                        <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">03</th>
                        <td>Susan</td>
                        <td>Bandung</td>
                        <td>081234003</td>
                        <td>TKJ</td>
                        <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">04</th>
                        <td>Tom</td>
                        <td>Cirebon</td>
                        <td>081234004</td>
                        <td>TKJ</td>
                        <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">05</th>
                        <td>Ali</td>
                        <td>Jakarta</td>
                        <td>081234005</td>
                        <td>MM</td>
                        <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">06</th>
                        <td>Dina</td>
                        <td>Semarang</td>
                        <td>081234006</td>
                        <td>MM</td>
                        <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">07</th>
                        <td>Michael</td>
                        <td>Surabaya</td>
                        <td>081234007</td>
                        <td>AKL</td>
                        <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">08</th>
                        <td>Linda</td>
                        <td>Bogor</td>
                        <td>081234008</td>
                        <td>AKL</td>
                        <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">09</th>
                        <td>Farah</td>
                        <td>Depok</td>
                        <td>081234009</td>
                        <td>OTKP</td>
                        <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>Steve</td>
                        <td>Bali</td>
                        <td>081234010</td>
                        <td>OTKP</td>
                        <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
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

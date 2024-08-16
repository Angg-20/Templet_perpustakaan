@extends('Pages.dashboard.Layout')

@section('Css')
    <link rel="stylesheet" href="/assets/Bootstrap-css/style.css">
@endsection

@section('Konten')
    <div class="row">
        <div class="col-lg-10">
            <div class="pagetitle">
                <h1>DataBuku</h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">MasterData</li>
                        <li class="breadcrumb-item active">DataBuku</li>
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
            <table class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Tahun Terbit</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <th scope="row">01</th>
                        <td>JavaScript for Beginners</td>
                        <td>TechPress</td>
                        <td>2018</td>
                        <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">02</th>
                        <td>HTML & CSS: Design and Build Websites</td>
                        <td>Wiley</td>
                        <td>2016</td>
                        <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">03</th>
                        <td>Clean Code</td>
                        <td>Prentice Hall</td>
                        <td>2008</td>
                        <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">04</th>
                        <td>Eloquent JavaScript</td>
                        <td>No Starch Press</td>
                        <td>2019</td>
                        <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">05</th>
                        <td>You Don’t Know JS</td>
                        <td>O’Reilly Media</td>
                        <td>2015</td>
                        <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">06</th>
                        <td>The Pragmatic Programmer</td>
                        <td>Addison-Wesley</td>
                        <td>1999</td>
                        <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">07</th>
                        <td>Python Crash Course</td>
                        <td>No Starch Press</td>
                        <td>2015</td>
                        <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">08</th>
                        <td>Introduction to Algorithms</td>
                        <td>MIT Press</td>
                        <td>2009</td>
                        <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">09</th>
                        <td>Design Patterns</td>
                        <td>Addison-Wesley</td>
                        <td>1994</td>
                        <td>
                            <a href="#" class="btn btn-success">Edit</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td>The Mythical Man-Month</td>
                        <td>Addison-Wesley</td>
                        <td>1975</td>
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

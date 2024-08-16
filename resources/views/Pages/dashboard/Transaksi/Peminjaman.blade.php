@extends('Pages.dashboard.Layout')

@section('Css')
    <link rel="stylesheet" href="/assets/Bootstrap-css/style.css">
@endsection

@section('Konten')
    <div class="pagetitle">
        <h1>Peminjaman</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Transaksi</li>
                <li class="breadcrumb-item active">Peminjaman</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-6">

        </div>
        <div class="col-lg-6">

        </div>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nis</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col" class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>222307003</td>
                <td>Braga Dwi Anggara</td>
                <td>Campaka</td>
                <td class="text-center">
                    <a href="" class="btn btn-success" style="width: 100px">Edit</a>
                    <a href="" class="btn btn-danger" style="width: 100px">Hapus</a>
                </td>
            </tr>
        </tbody>
    </table>


    <script src="/assets/Bootstrap-js/main.js"></script>
@endsection

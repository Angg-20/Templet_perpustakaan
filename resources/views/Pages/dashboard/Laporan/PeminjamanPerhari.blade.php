@extends('Pages.dashboard.Layout')

@section('Css')
    <link rel="stylesheet" href="/assets/Bootstrap-css/style.css">
@endsection

@section('Konten')
    <div class="container-fluid dashboard-container">
        <div class="bg-blue-top p-3 mb-4 rounded">
            <h1 class="mb-3 text-gray-800">Peminjaman Buku Perhari</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item">Laporan</li>
                    <li class="breadcrumb-item active text-gray-400" aria-current="page">Peminjaman Buku Perhari</li>
                </ol>
            </nav>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-lg-4">
                <div class="card card-custom bg-pastel-blue text-center">
                    <div class="card-body">
                        <h2 class="card-title-custom">43</h2>
                        <h6 class="card-subtitle-custom">Fiksi</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-custom bg-pastel-green text-center">
                    <div class="card-body">
                        <h2 class="card-title-custom">10</h2>
                        <h6 class="card-subtitle-custom">Non-Fiksi</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-custom bg-pastel-yellow text-center">
                    <div class="card-body">
                        <h2 class="card-title-custom">7</h2>
                        <h6 class="card-subtitle-custom">Ensiklopedia</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 mb-4">
            <div class="col-lg-4">
                <div class="card card-custom bg-pastel-pink text-center">
                    <div class="card-body">
                        <h2 class="card-title-custom">2</h2>
                        <h6 class="card-subtitle-custom">Biografi</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-custom bg-pastel-purple text-center">
                    <div class="card-body">
                        <h2 class="card-title-custom">10</h2>
                        <h6 class="card-subtitle-custom">Komik</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-custom bg-pastel-orange text-center">
                    <div class="card-body">
                        <h2 class="card-title-custom">1</h2>
                        <h6 class="card-subtitle-custom">Majalah</h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Diagram Peminjaman Buku <span>/ Hari Ini</span></h5>

                        <div id="peminjamanChart"></div>

                        <script>
                            document.addEventListener("DOMContentLoaded", () => {
                                new ApexCharts(document.querySelector("#peminjamanChart"), {
                                    series: [{
                                        name: 'Jumlah Peminjaman',
                                        data: [43, 10, 7, 2, 10, 1]
                                    }],
                                    chart: {
                                        type: 'pie',
                                        height: 350
                                    },
                                    labels: ['Fiksi', 'Non-Fiksi', 'Ensiklopedia', 'Biografi', 'Komik', 'Majalah'],
                                    colors: ['#A7C7E7', '#C1E1C1', '#FFEFD5', '#FFB6C1', '#E6E6FA', '#FFE5B4'],
                                    fill: {
                                        type: 'gradient',
                                        gradient: {
                                            shade: 'light',
                                            type: "vertical",
                                            shadeIntensity: 0.5,
                                            gradientToColors: ['#4682B4', '#228B22', '#FFA500', '#FF69B4', '#9370DB', '#FFA07A'],
                                            inverseColors: true,
                                            opacityFrom: 1,
                                            opacityTo: 1,
                                            stops: [0, 100]
                                        }
                                    },
                                    title: {
                                        text: 'Peminjaman Buku per Kategori',
                                        align: 'center',
                                        style: {
                                            fontSize: '18px'
                                        }
                                    },
                                    responsive: [{
                                        breakpoint: 480,
                                        options: {
                                            chart: {
                                                width: 200
                                            },
                                            legend: {
                                                position: 'bottom'
                                            }
                                        }
                                    }],
                                    plotOptions: {
                                        pie: {
                                            dataLabels: {
                                                offset: -5
                                            }
                                        }
                                    },
                                    dataLabels: {
                                        formatter(val, opts) {
                                            const name = opts.w.globals.labels[opts.seriesIndex]
                                            return [name, val.toFixed(1) + '%']
                                        }
                                    },
                                    legend: {
                                        show: false
                                    }
                                }).render();
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('Css')
@endsection

@extends('Pages.dashboard.Layout')

@section('Css')
    <link rel="stylesheet" href="/assets/Bootstrap-css/style.css">
@endsection

@section('Konten')
    <h1>Peminjaman Buku Perhari</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Laporan</li>
            <li class="breadcrumb-item active">Peminjaman Buku Perhari</li>
        </ol>
    </nav>
    </div>

    <div class="row">
        <div class="col-lg-4 mb-3">
            <div class="card card-custom bg-blue text-center">
                <div class="card-body">
                    <h1 class="card-title-custom">43</h1>
                    <h6 class="card-subtitle-custom">Fiksi</h6>
                </div>
                <div class="card-footer card-footer-custom footer-blue"></div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card card-custom bg-dark-blue text-center">
                <div class="card-body">
                    <h1 class="card-title-custom">10</h1>
                    <h6 class="card-subtitle-custom">Non-Fiksi</h6>
                </div>
                <div class="card-footer card-footer-custom footer-dark-blue"></div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card card-custom bg-orange text-center">
                <div class="card-body">
                    <h1 class="card-title-custom">7</h1>
                    <h6 class="card-subtitle-custom">Ensiklopedia</h6>
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
                    <h6 class="card-subtitle-custom">Biografi</h6>
                </div>
                <div class="card-footer card-footer-custom footer-green"></div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card card-custom bg-purple text-center">
                <div class="card-body">
                    <h1 class="card-title-custom">10</h1>
                    <h6 class="card-subtitle-custom">Komik</h6>
                </div>
                <div class="card-footer card-footer-custom footer-purple"></div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card card-custom bg-red text-center">
                <div class="card-body">
                    <h1 class="card-title-custom">1</h1>
                    <h6 class="card-subtitle-custom">Majalah</h6>
                </div>
                <div class="card-footer card-footer-custom footer-red"></div>
            </div>
        </div>
    </div>

    <div class="col-12 mt-4">
        <div class="card">

            <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
            </div>

            <div class="card-body">
                <h5 class="card-title">Reports <span>/Today</span></h5>

                <!-- Line Chart -->
                <div id="reportsChart"></div>

                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#reportsChart"), {
                            series: [{
                                name: 'Sales',
                                data: [31, 40, 28, 51, 42, 82, 56],
                            }, {
                                name: 'Revenue',
                                data: [11, 32, 45, 32, 34, 52, 41]
                            }, {
                                name: 'Customers',
                                data: [15, 11, 32, 18, 9, 24, 11]
                            }],
                            chart: {
                                height: 350,
                                type: 'area',
                                toolbar: {
                                    show: false
                                },
                            },
                            markers: {
                                size: 4
                            },
                            colors: ['#4154f1', '#2eca6a', '#ff771d'],
                            fill: {
                                type: "gradient",
                                gradient: {
                                    shadeIntensity: 1,
                                    opacityFrom: 0.3,
                                    opacityTo: 0.4,
                                    stops: [0, 90, 100]
                                }
                            },
                            dataLabels: {
                                enabled: false
                            },
                            stroke: {
                                curve: 'smooth',
                                width: 2
                            },
                            xaxis: {
                                type: 'datetime',
                                categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z",
                                    "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z",
                                    "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z",
                                    "2018-09-19T06:30:00.000Z"
                                ]
                            },
                            tooltip: {
                                x: {
                                    format: 'dd/MM/yy HH:mm'
                                },
                            }
                        }).render();
                    });
                </script>
                <!-- End Line Chart -->

            </div>
        </div>
    </div>
@endsection

@section('Css')
@endsection

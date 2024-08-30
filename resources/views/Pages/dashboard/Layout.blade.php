<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PerpusDigital</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.35.3/dist/apexcharts.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <style>
        html,
        body {
            height: 100%;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex: 1;
        }

        #sidebar {
            height: calc(100vh - 60px);
            position: fixed;
            top: 60px;
            left: 0;
            overflow-y: auto;
            transition: all 0.3s;
            width: 20%;
        }

        #main-content {
            margin-left: 20%;
            margin-top: 60px;
            transition: all 0.3s;
            width: 80%;
        }

        #sidebar.collapsed {
            margin-left: -20%;
        }

        #main-content.expanded {
            margin-left: 0;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-dark bg-dark fixed-top" style="height: 60px;">
                <div class="container-fluid">
                    <div>
                        <button id="sidebar-toggle" class="btn btn-light me-3">&#9776;</button>
                        <a class="navbar-brand">PerpusDigital</a>
                    </div>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-success" type="submit">Cari</button>
                    </form>
                </div>
            </nav>
        </header>

        <div class="container-fluid">
            <div class="row">
                <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
                    <div class="position-sticky">
                        <ul class="nav flex-column">
                            <li class="nav-item mb-3 mt-3">
                                <a class="nav-link text-white {{ Request::is('dashboard') ? 'bg-primary' : '' }}" href="/dashboard" onmouseover="this.classList.add('bg-primary')" onmouseout="this.classList.remove('bg-primary')">
                                    <i class="bi bi-house-door me-2"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="nav-link text-white d-flex justify-content-between align-items-center {{ Request::is('MasterData/*') ? 'bg-primary' : '' }}" data-bs-toggle="collapse" href="#masterDataCollapse" onmouseover="this.classList.add('bg-primary')" onmouseout="this.classList.remove('bg-primary')">
                                    <span>
                                        <i class="bi bi-book me-2"></i>
                                        Master Data
                                    </span>
                                    <i class="bi bi-chevron-right dropdown-icon"></i>
                                </a>
                                <div class="collapse {{ Request::is('MasterData/*') ? 'show' : '' }}" id="masterDataCollapse">
                                    <ul class="nav flex-column ms-4 mt-2">
                                        <li class="nav-item"><a class="nav-link text-white {{ Request::is('MasterData/DataSiswa') ? 'bg-secondary' : '' }}" href="/MasterData/DataSiswa" onmouseover="this.classList.add('bg-info')" onmouseout="this.classList.remove('bg-info')">
                                            <i class="bi bi-circle-fill me-2" style="font-size: 0.5rem;"></i>Data Siswa</a></li>
                                        <li class="nav-item"><a class="nav-link text-white {{ Request::is('MasterData/DataBuku') ? 'bg-secondary' : '' }}" href="/MasterData/DataBuku" onmouseover="this.classList.add('bg-info')" onmouseout="this.classList.remove('bg-info')">
                                            <i class="bi bi-circle-fill me-2" style="font-size: 0.5rem;"></i>Data Buku</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="nav-link text-white d-flex justify-content-between align-items-center {{ Request::is('Transksi/*') ? 'bg-primary' : '' }}" data-bs-toggle="collapse" href="#transaksiCollapse" onmouseover="this.classList.add('bg-primary')" onmouseout="this.classList.remove('bg-primary')">
                                    <span>
                                        <i class="bi bi-cart me-2"></i>
                                        Transaksi
                                    </span>
                                    <i class="bi bi-chevron-right dropdown-icon"></i>
                                </a>
                                <div class="collapse {{ Request::is('Transksi/*') ? 'show' : '' }}" id="transaksiCollapse">
                                    <ul class="nav flex-column ms-4 mt-2">
                                        <li class="nav-item"><a class="nav-link text-white {{ Request::is('Transksi/peminjaman') ? 'bg-secondary' : '' }}" href="/Transksi/peminjaman" onmouseover="this.classList.add('bg-info')" onmouseout="this.classList.remove('bg-info')">
                                            <i class="bi bi-circle-fill me-2" style="font-size: 0.5rem;"></i>Peminjaman</a></li>
                                        <li class="nav-item"><a class="nav-link text-white {{ Request::is('Transksi/pengembalian') ? 'bg-secondary' : '' }}" href="/Transksi/pengembalian" onmouseover="this.classList.add('bg-info')" onmouseout="this.classList.remove('bg-info')">
                                            <i class="bi bi-circle-fill me-2" style="font-size: 0.5rem;"></i>Pengembalian</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item mb-3">
                                <a class="nav-link text-white d-flex justify-content-between align-items-center {{ Request::is('Laporan/*') ? 'bg-primary' : '' }}" data-bs-toggle="collapse" href="#laporanCollapse" onmouseover="this.classList.add('bg-primary')" onmouseout="this.classList.remove('bg-primary')">
                                    <span>
                                        <i class="bi bi-file-earmark-text me-2"></i>
                                        Laporan
                                    </span>
                                    <i class="bi bi-chevron-right dropdown-icon"></i>
                                </a>
                                <div class="collapse {{ Request::is('Laporan/*') ? 'show' : '' }}" id="laporanCollapse">
                                    <ul class="nav flex-column ms-4 mt-2">
                                        <li class="nav-item"><a class="nav-link text-white {{ Request::is('Laporan/PeminjamanPerhari') ? 'bg-secondary' : '' }}" href="/Laporan/PeminjamanPerhari" onmouseover="this.classList.add('bg-info')" onmouseout="this.classList.remove('bg-info')">
                                            <i class="bi bi-circle-fill me-2" style="font-size: 0.5rem;"></i>Data Peminjaman Per Hari</a></li>
                                        <li class="nav-item"><a class="nav-link text-white {{ Request::is('Laporan/BukuBelumKembali') ? 'bg-secondary' : '' }}" href="/Laporan/BukuBelumKembali" onmouseover="this.classList.add('bg-info')" onmouseout="this.classList.remove('bg-info')">
                                            <i class="bi bi-circle-fill me-2" style="font-size: 0.5rem;"></i>Buku belum Kembali</a></li>
                                        <li class="nav-item"><a class="nav-link text-white {{ Request::is('Laporan/BukuTerfavorite') ? 'bg-secondary' : '' }}" href="/Laporan/BukuTerfavorite" onmouseover="this.classList.add('bg-info')" onmouseout="this.classList.remove('bg-info')">
                                            <i class="bi bi-circle-fill me-2" style="font-size: 0.5rem;"></i>Buku Terfavorite</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                <main id="main-content" class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                    <div class="pt-3 pb-2 mb-3 border-bottom">
                        @yield('Konten')
                    </div>
                </main>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.35.3/dist/apexcharts.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');
            const sidebarToggle = document.getElementById('sidebar-toggle');
            const dropdownToggles = document.querySelectorAll('[data-bs-toggle="collapse"]');

            sidebarToggle.addEventListener('click', function() {
                sidebar.classList.toggle('collapsed');
                mainContent.classList.toggle('expanded');
                
                if (sidebar.classList.contains('collapsed')) {
                    mainContent.style.marginLeft = '0';
                    mainContent.style.width = '100%';
                } else {
                    mainContent.style.marginLeft = '20%';
                    mainContent.style.width = '80%';
                }
            });

            dropdownToggles.forEach(function(toggle) {
                toggle.addEventListener('click', function() {
                    const icon = this.querySelector('.dropdown-icon');
                    icon.classList.toggle('bi-chevron-down');
                    icon.classList.toggle('bi-chevron-right');
                });
            });
        });
    </script>
</body>

</html>

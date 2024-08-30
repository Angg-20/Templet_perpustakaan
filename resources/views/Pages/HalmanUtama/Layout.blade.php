<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PerpusDigital</title>
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
            height: 100%;
            position: fixed;
            top: 56px;
            left: 0;
            overflow-y: auto;
            transition: all 0.3s;
            width: 250px;
            z-index: 1000;
            margin-left: -250px;
        }

        #main-content {
            margin-left: 0;
            transition: all 0.3s;
            width: 100%;
            padding-top: 56px;
        }

        #sidebar.expanded {
            margin-left: 0;
        }

        #main-content.collapsed {
            margin-left: 250px;
            width: calc(100% - 250px);
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
        }

        @media (max-width: 768px) {
            #sidebar {
                margin-left: -250px;
            }

            #sidebar.expanded {
                margin-left: 0;
            }

            #main-content.collapsed {
                margin-left: 0;
                width: 100%;
            }

            .navbar-brand {
                font-size: 1.2rem;
            }

            .form-control {
                width: 120px;
            }
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <header>
            <nav class="navbar navbar-dark bg-dark">
                <div class="container-fluid">
                    <div class="d-flex align-items-center">
                        <button id="sidebar-toggle" class="btn btn-light me-2">&#9776;</button>
                        <a class="navbar-brand">PerpusDigital</a>
                    </div>
                    <div class="d-flex">
                        <a href="/login" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </nav>
        </header>

        <nav id="sidebar" class="bg-dark">
            <div class="position-sticky">
                <ul class="nav flex-column pt-3">
                    <li class="nav-item mb-3">
                        <a class="nav-link text-white {{ Request::is('home') ? 'bg-primary' : '' }}" href="/">
                            <i class="bi bi-house-door me-2"></i>
                            Home
                        </a>
                    </li>
                    <li class="nav-item mb-3">
                        <a class="nav-link text-white d-flex justify-content-between align-items-center {{ Request::is('KategoriBuku/*') ? 'bg-primary' : '' }}"
                            data-bs-toggle="collapse" href="#kategoriBukuCollapse">
                            <span>
                                <i class="bi bi-book me-2"></i>
                                Kategori Buku
                            </span>
                            <i class="bi bi-chevron-right dropdown-icon"></i>
                        </a>
                        <div class="collapse {{ Request::is('KategoriBuku/*') ? 'show' : '' }}"
                            id="kategoriBukuCollapse">
                            <ul class="nav flex-column ms-4 mt-2">
                                <li class="nav-item"><a
                                        class="nav-link text-white {{ Request::is('KategoriBuku/Fiksi') ? 'bg-secondary' : '' }}"
                                        href="/KategoriBuku/Fiksi">
                                        <i class="bi bi-circle-fill me-2" style="font-size: 0.5rem;"></i>Fiksi</a></li>
                                <li class="nav-item"><a
                                        class="nav-link text-white {{ Request::is('KategoriBuku/NonFiksi') ? 'bg-secondary' : '' }}"
                                        href="/KategoriBuku/NonFiksi">
                                        <i class="bi bi-circle-fill me-2" style="font-size: 0.5rem;"></i>Non-Fiksi</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="main-content">
            <main>
                @yield('PageContent')
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sidebar = document.getElementById('sidebar');
            const mainContent = document.getElementById('main-content');
            const sidebarToggle = document.getElementById('sidebar-toggle');
            const navLinks = document.querySelectorAll('.nav-link');
            const dropdownToggles = document.querySelectorAll('[data-bs-toggle="collapse"]');

            sidebarToggle.addEventListener('click', function() {
                sidebar.classList.toggle('expanded');
                mainContent.classList.toggle('collapsed');
            });

            navLinks.forEach(function(link) {
                link.addEventListener('mouseover', function() {
                    if (!this.classList.contains('active')) {
                        this.classList.add('bg-primary');
                    }
                });
                link.addEventListener('mouseout', function() {
                    if (!this.classList.contains('active')) {
                        this.classList.remove('bg-primary');
                    }
                });
            });

            dropdownToggles.forEach(function(toggle) {
                toggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    const icon = this.querySelector('.dropdown-icon');
                    icon.classList.toggle('bi-chevron-down');
                    icon.classList.toggle('bi-chevron-right');
                    const collapseTarget = document.querySelector(this.getAttribute('href'));
                    bootstrap.Collapse.getOrCreateInstance(collapseTarget).toggle();
                });
            });

            const currentPath = window.location.pathname;
            navLinks.forEach(function(link) {
                if (link.getAttribute('href') === currentPath) {
                    link.classList.add('active', 'bg-primary');
                }
            });

            function handleResize() {
                if (window.innerWidth <= 768) {
                    sidebar.classList.remove('expanded');
                    mainContent.classList.remove('collapsed');
                }
            }

            window.addEventListener('resize', handleResize);
            handleResize();
        });
    </script>
</body>

</html>

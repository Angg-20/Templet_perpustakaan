@extends('Pages.HalmanUtama.Layout')

@section('PageContent')
    <div class="container-fluid bg-secondary py-5" style="height: 700px;">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center text-white">
                <h1 class="display-3">Selamat Datang di PerpusDigital</h1>
                <p class="lead fs-3">Temukan ribuan buku digital untuk dibaca dan dipelajari.</p>
                <form action="" method="GET">
                    <div class="input-group" style="max-width: 500px; margin: 0 auto;">
                        <input type="text" name="query" class="form-control form-control-lg" placeholder="Cari buku..."
                            aria-label="Cari buku" aria-describedby="button-addon2">
                        <button class="btn btn-outline-light btn-lg" type="submit" id="button-addon2">Cari</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Koleksi Terbaru</h5>
                        <p class="card-text">Temukan buku-buku terbaru yang baru saja ditambahkan ke perpustakaan digital kami. Kami selalu memperbarui koleksi dengan judul-judul terkini dari berbagai genre dan penulis terkenal.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Buku Populer</h5>
                        <p class="card-text">Jelajahi buku-buku yang paling banyak dibaca dan disukai oleh pengguna kami. Temukan mengapa judul-judul ini menjadi favorit pembaca dan bergabunglah dalam diskusi tentang buku-buku yang sedang tren.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Kategori Khusus</h5>
                        <p class="card-text">Temukan koleksi buku berdasarkan kategori khusus yang mungkin menarik bagi Anda. Dari sastra klasik hingga sains fiksi futuristik, kami memiliki kategori yang cocok untuk setiap minat dan kebutuhan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-md-4 p-3">
                                <img src="assets/img/14.jpeg" class="img-fluid" alt="Sampul Buku"
                                    style="object-fit: contain; width: 100%; height: 100%;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body d-flex flex-column p-4">
                                    <h2 class="card-title">Judul Buku: Petualangan di Negeri Ajaib</h2>
                                    <h4 class="card-subtitle mb-2 text-muted">Penulis: Andi Wijaya</h4>
                                    <p class="card-text">
                                        Penerbit: Pustaka Cemerlang<br>
                                        Tahun Terbit: 2023<br>
                                        ISBN: 978-602-1234-56-7<br>
                                        Jumlah Halaman: 350<br>
                                        Bahasa: Indonesia<br>
                                        Kategori: Fiksi, Petualangan, Fantasi<br>
                                        Dimensi Buku: 14 x 21 cm<br>
                                        Berat: 300 gram<br>
                                        Edisi: Cetakan Pertama
                                    </p>
                                    <p class="card-text">
                                        <strong>Sinopsis:</strong><br>
                                        "Petualangan di Negeri Ajaib" mengisahkan perjalanan seorang gadis bernama Lina yang
                                        secara tidak sengaja menemukan portal ajaib di loteng rumah neneknya. Portal
                                        tersebut membawanya ke sebuah dunia fantasi yang penuh dengan makhluk-makhluk mitos,
                                        sihir, dan tantangan yang belum pernah ia bayangkan sebelumnya. Di negeri ajaib ini,
                                        Lina harus belajar mengendalikan kekuatan barunya, berteman dengan para peri dan
                                        makhluk ajaib lainnya, serta menghadapi ancaman dari Sang Penyihir Kegelapan yang
                                        ingin menguasai kedua dunia. Buku ini penuh dengan deskripsi yang kaya akan detail,
                                        karakter yang mendalam, dan plot yang penuh kejutan, menjadikannya bacaan yang
                                        memikat untuk segala usia.
                                    </p>
                                    <p class="card-text">
                                        <strong>Tentang Penulis:</strong><br>
                                        Andi Wijaya adalah penulis muda berbakat yang telah menerbitkan lima novel
                                        bestseller. Ia dikenal dengan gaya penulisannya yang imajinatif dan kemampuannya
                                        dalam menciptakan dunia fantasi yang menakjubkan.
                                    </p>
                                    <div class="mt-auto">
                                        <a href="{{ url('HalamanPeminjaman') }}" class="btn btn-primary">Baca Sekarang</a>
                                        <a href="{{ url('HalamanPeminjaman') }}" class="btn btn-secondary">Tambahkan ke Wishlist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h2 class="section-title">Buku Umum</h2>
                <div class="book-scroll-container">
                    <div class="book-container d-flex overflow-auto">
                        @for ($i = 1; $i <= 8; $i++)
                            <div class="card me-3" style="min-width: 250px;">
                                <div class="book-image-container">
                                    <img src="/assets/img/14.jpeg" class="card-img-top book-image"
                                        alt="Buku {{ $i }}">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Judul Buku {{ $i }}</h5>
                                    <p class="card-text">Penerbit: Gramedia</p>
                                    <a href="{{ url('HalamanPeminjaman') }}" class="btn btn-primary">Lihat Detail</a>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <h2 class="section-title">Buku Non-Fiksi</h2>
                <div class="d-flex justify-content-between">
                    <div class="card" style="width: 48%;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/assets/img/2.jpeg" class="img-fluid rounded-start" alt="Buku Non-Fiksi 1">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Sejarah Indonesia Modern</h5>
                                    <p class="card-text">Penulis: Prof. Dr. Sartono Kartodirdjo</p>
                                    <p class="card-text">Penerbit: Gramedia Pustaka Utama</p>
                                    <p class="card-text">Tahun Terbit: 2022</p>
                                    <p class="card-text">Deskripsi: Buku ini membahas sejarah Indonesia dari masa kolonial
                                        hingga era reformasi.</p>
                                    <a href="{{ url('HalamanPeminjaman') }}" class="btn btn-primary">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="width: 48%;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/assets/img/2.jpeg" class="img-fluid rounded-start" alt="Buku Non-Fiksi 2">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Filsafat Ilmu Pengetahuan</h5>
                                    <p class="card-text">Penulis: Dr. Jujun S. Suriasumantri</p>
                                    <p class="card-text">Penerbit: Pustaka Sinar Harapan</p>
                                    <p class="card-text">Tahun Terbit: 2021</p>
                                    <p class="card-text">Deskripsi: Buku ini mengulas dasar-dasar filsafat ilmu pengetahuan
                                        dan metodologi penelitian.</p>
                                    <a href="{{ url('HalamanPeminjaman') }}" class="btn btn-primary">Lihat Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <h2 class="section-title">Buku Favorit</h2>
                <div class="book-scroll-container">
                    <div class="book-container d-flex overflow-auto">
                        @for ($i = 9; $i <= 16; $i++)
                            <div class="card me-3" style="min-width: 250px;">
                                <div class="book-image-container">
                                    <img src="/assets/img/15.jpeg" class="card-img-top book-image"
                                        alt="Buku {{ $i }}">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Judul Buku Favorit {{ $i - 8 }}</h5>
                                    <p class="card-text">Penerbit: Erlangga</p>
                                    <a href="{{ url('HalamanPeminjaman') }}" class="btn btn-primary">Lihat Detail</a>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <h2 class="section-title">Buku Terbaru</h2>
                <div class="book-scroll-container">
                    <div class="book-container d-flex overflow-auto">
                        @for ($i = 17; $i <= 24; $i++)
                            <div class="card me-3" style="min-width: 250px;">
                                <div class="book-image-container">
                                    <img src="/assets/img/16.jpeg" class="card-img-top book-image"
                                        alt="Buku {{ $i }}">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Judul Buku Terbaru {{ $i - 16 }}</h5>
                                    <p class="card-text">Penerbit: Mizan</p>
                                    <a href="{{ url('HalamanPeminjaman') }}" class="btn btn-primary">Lihat Detail</a>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('Css')
    <style>
        .book-container::-webkit-scrollbar {
            width: 6px;
            height: 6px;
            display: none;
        }

        .book-container::-webkit-scrollbar-track {
            background: transparent;
        }

        .book-container::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 3px;
        }

        .book-container {
            scrollbar-width: thin;
            scrollbar-color: rgba(0, 0, 0, 0.3) transparent;
        }

        .book-image-container {
            width: 250px;
            height: 375px;
            overflow: hidden;
        }

        .book-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
@endsection

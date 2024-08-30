@extends('Pages.HalmanUtama.Layout')

@section('PageContent')
    <div class="container mt-4">
        <div class="card p-4">
            <div class="row g-0">
                <div class="col-lg-6">
                    <div class="card-img-top d-flex align-items-center justify-content-center" style="height: 100%;">
                        <img src="assets/img/7.jpeg" alt="100 Dongeng Nusantara" class="img-fluid" style="max-height: 100%; object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card-body d-flex flex-column h-100 p-4">
                        <h2 class="card-title">100 Dongeng Nusantara</h2>
                        <h6 class="card-subtitle mb-2 text-muted">18-08-2024</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et cupiditate
                            rerum repellat quia praesentium vero aliquam delectus porro excepturi? Natus iste sequi explicabo, et voluptate vel!
                            A, pariatur? Similique nihil officia est harum accusamus veritatis itaque qui omnis obcaecati
                            quo consectetur consequatur, consequuntur, velit, vel vero quam in illo. Voluptatum ipsum labore
                            officia nam voluptatem dignissimos libero quia qui eaque.</p>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum illo cum
                            tempora odit dolorum ratione repellendus nobis praesentium ipsum facere quia debitis nam vitae libero repudiandae
                            ducimus, deserunt, vero, explicabo dicta porro delectus aliquid voluptatem officiis provident?
                            Totam ab debitis, veniam soluta perspiciatis modi officia nisi aspernatur, numquam et tempore
                            sequi saepe illum facilis perferendis ipsa eaque nemo vitae dolores.</p>
                        <div class="mt-auto text-end">
                            <a href="/" class="btn btn-success me-2" style="border-radius: 8px; width: 150px">Kembali</a>
                            <a href="" class="btn btn-success" style="border-radius: 8px; width: 150px">Pinjam</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Peminjaman -->
    <div class="modal fade" id="modalPeminjaman" tabindex="-1" aria-labelledby="modalPeminjamanLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body" style="max-height: 70vh; overflow-y: auto;">
                    <h2 class="text-center mb-4">Form Peminjaman Buku</h2>
                    <form id="formPeminjaman">
                        <div class="mb-3">
                            <label for="namaPeminjam" class="form-label">Nama Peminjam</label>
                            <input type="text" class="form-control" id="namaPeminjam" required>
                        </div>
                        <div class="mb-3">
                            <label for="nomorIdentitas" class="form-label">Nomor Identitas</label>
                            <input type="text" class="form-control" id="nomorIdentitas" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggalPeminjaman" class="form-label">Tanggal Peminjaman</label>
                            <input type="date" class="form-control" id="tanggalPeminjaman" required onchange="setTanggalPengembalian()">
                        </div>
                        <div class="mb-3">
                            <label for="tanggalPengembalian" class="form-label">Tanggal Pengembalian</label>
                            <input type="date" class="form-control" id="tanggalPengembalian" readonly>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" class="btn btn-primary" onclick="submitPeminjaman()">Pinjam</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('a[href=""].btn-success').setAttribute('data-bs-toggle', 'modal');
        document.querySelector('a[href=""].btn-success').setAttribute('data-bs-target', '#modalPeminjaman');

        function setTanggalPengembalian() {
            var tanggalPeminjaman = new Date(document.getElementById('tanggalPeminjaman').value);
            var tanggalPengembalian = new Date(tanggalPeminjaman);
            tanggalPengembalian.setDate(tanggalPengembalian.getDate() + 7);
            document.getElementById('tanggalPengembalian').valueAsDate = tanggalPengembalian;
        }

        function submitPeminjaman() {
            alert('Peminjaman berhasil!');
            $('#modalPeminjaman').modal('hide');
        }
    </script>
@endsection

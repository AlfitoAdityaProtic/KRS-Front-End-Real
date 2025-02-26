@extends('main')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Mata Kuliah</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Posisi Input Pencarian di Pojok Kanan Atas Card -->
                <div class="card-header position-relative">
                    <div class="input-group" style="width: 250px; position: absolute; top: 10px; right: 10px;">
                        <input type="text" id="searchInput" class="form-control form-control-sm"
                            placeholder="Cari produk..." aria-label="Cari produk">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary btn-sm" type="button" id="searchButton">
                                <i class="fas fa-search"></i> <!-- Icon pencarian -->
                            </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Tabel Produk -->
                    <table class="table table-bordered" id="produkTable">
                        <button class="btn btn-primary">Tambah</button>

                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Id Mata Kuliah</th>
                                <th>Semester</th>
                                <th>Nama Mata Kuliah</th>
                                <th>Banyak SKS</th>
                                <th>Banyak Jam Matkul</th>
                                <th>Keterangan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($produks as $item) --}}
                            <tr>
                                <td>1</td>
                                <td>123234</td>
                                <td>3</td>
                                <td>matematika</td>
                                <td>8</td>
                                <td>8 jam</td>
                                <td>   </td>
                                <td>
                                    <button class="btn btn-success btn-sm">Update</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Script untuk Pencarian -->
    <script>
        document.getElementById('searchButton').addEventListener('click', function() {
            const searchText = document.getElementById('searchInput').value.toLowerCase();
            const rows = document.querySelectorAll('#produkTable tbody tr');

            rows.forEach(row => {
                const namaProduk = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                if (namaProduk.includes(searchText)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
@endsection

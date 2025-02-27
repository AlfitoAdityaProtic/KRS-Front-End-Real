@extends('main')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="fw-bold">Mata Kuliah</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid"> <!-- Menggunakan container-fluid agar lebih luas -->
        <div class="row">
            <div class="col-lg-12 mx-auto"> <!-- Memperlebar kolom -->
                <div class="card shadow">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5 class="m-0">Daftar Mata Kuliah</h5>
                        <div class="input-group" style="width: 300px;">
                            <input type="text" id="searchInput" class="form-control form-control-sm"
                                placeholder="Cari program studi...">
                            <button class="btn btn-outline-secondary btn-sm" type="button" id="searchButton">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <a href="matkul/create" class="btn btn-primary mb-3 shadow"><i class="fas fa-plus"></i> Tambah Mata
                            Kuliah</a>
                        <a href="#" class="btn btn-warning mb-3 float-right shadow"><i class="fas fa-download"></i>
                            PDF</a>
                        <a href="#" class="btn btn-secondary mb-3 float-right mr-2 shadow"><i
                                class="fas fa-file-download"></i> Excel</a>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped text-center w-100" id="produkTable">
                                <thead class="table-dark">
                                    <tr>
                                        <th class="text-nowrap">No</th>
                                        <th class="text-nowrap">Id Mata Kuliah</th>
                                        <th class="text-nowrap">Semester</th>
                                        <th class="text-nowrap">Nama Mata Kuliah</th>
                                        <th class="text-nowrap">Banyak SKS</th>
                                        <th class="text-nowrap">Banyak Jam Matkul</th>
                                        <th class="text-nowrap">Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>123234</td>
                                        <td>3</td>
                                        <td>Matematika</td>
                                        <td>8</td>
                                        <td>8 jam</td>
                                        <td> - </td>
                                        <td>
                                            <a href="matkul/edit" class="btn btn-success btn-sm text-nowrap"><i class="fas fa-edit"></i>
                                                Edit</a>
                                            <a href="#" class="btn btn-danger btn-sm text-nowrap"><i class="fas fa-trash"></i>
                                                Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- End Table Responsive -->
                    </div> <!-- End Card Body -->
                </div> <!-- End Card -->
            </div> <!-- End Col -->
        </div> <!-- End Row -->
    </div> <!-- End Container Fluid -->


    <!-- Script untuk Pencarian -->
    <script>
        document.getElementById('searchButton').addEventListener('click', function() {
            const searchText = document.getElementById('searchInput').value.toLowerCase();
            const rows = document.querySelectorAll('#produkTable tbody tr');

            rows.forEach(row => {
                const namaProduk = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                row.style.display = namaProduk.includes(searchText) ? '' : 'none';
            });
        });
    </script>
@endsection

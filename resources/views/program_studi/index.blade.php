@extends('main')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="fw-bold">Program Studi</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="m-0">Daftar Program Studi</h5>
                    <!-- Input Pencarian -->
                    <div class="input-group" style="width: 250px;">
                        <input type="text" id="searchInput" class="form-control form-control-sm"
                            placeholder="Cari program studi...">
                        <button class="btn btn-outline-secondary btn-sm" type="button" id="searchButton">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <a href="prodi/create" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Tambah Prodi</a>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped text-center" id="produkTable">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>ID Prodi</th>
                                    <th>Nama Prodi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($produks as $item) --}}
                                <tr>
                                    <td>1</td>
                                    <td>1898900</td>
                                    <td>Teknik Informatika</td>
                                    <td>
                                        <a href="prodi/edit" class="btn btn-success btn-sm"><i
                                                class="fas fa-edit"></i>Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>
                                            Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>123</td>
                                    <td>Teknik Elektro</td>
                                    <td>
                                        <a href="prodi/edit" class="btn btn-success btn-sm"><i
                                                class="fas fa-edit"></i>Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>
                                            Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>77777</td>
                                    <td>Teknik Mesin</td>
                                    <td>
                                        <a href="prodi/edit" class="btn btn-success btn-sm"><i
                                                class="fas fa-edit"></i>Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>
                                            Delete</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>6666</td>
                                    <td>Teknik rpl</td>
                                    <td>
                                        <a href="prodi/edit" class="btn btn-success btn-sm"><i
                                                class="fas fa-edit"></i>Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i>
                                            Delete</a>
                                    </td>
                                </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
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
                row.style.display = namaProduk.includes(searchText) ? '' : 'none';
            });
        });
    </script>
@endsection

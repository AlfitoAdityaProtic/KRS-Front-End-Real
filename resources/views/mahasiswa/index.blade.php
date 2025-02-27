@extends('main')

@section('header')
    <div class="row mb-3">
        <div class="col-sm-6">
            <h1 class="fw-bold" style="color: #333;">Mahasiswa</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div class="card shadow" style="border-radius: 10px; overflow: hidden;">
                    <div class="card-header d-flex justify-content-between align-items-center"
                        style="border-radius: 10px 10px 0 0;">
                        <h5 class="m-0">Daftar Mahasiswa</h5>
                        <div class="input-group" style="width: 300px;">
                            <input type="text" id="searchInput" class="form-control form-control-sm"
                                placeholder="Cari program studi..." style="border-radius: 5px;">
                            <button class="btn btn-light btn-sm" type="button" id="searchButton">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body mt-10" style="background: #f8f9fa; padding: 20px;">
                        <a href="mahasiswa/create" class="btn btn-primary mb-3 shadow"><i class="fas fa-plus"></i> Tambah
                            Mahasiswa
                        </a>
                        <a href="#" class="btn btn-warning mb-3 float-right mr-3 shadow"><i
                                class="fas fa-download"></i>PDF</a>
                        <a href="#" class="btn btn-secondary mb-3 float-right mr-3 shadow"><i
                                class="fas fa-file-download"></i>Excel</a>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped text-center" id="produkTable"
                                style="border-radius: 10px; overflow: hidden;">
                                <thead style="background: #343a40; color: white;">
                                    <tr>
                                        <th class="text-nowrap">No</th>
                                        <th class="text-nowrap">NPM</th>
                                        <th class="text-nowrap">Nama Mahasiswa</th>
                                        <th class="text-nowrap">Alamat Mahasiswa</th>
                                        <th class="text-nowrap">Nama Program Studi</th>
                                        <th class="text-nowrap">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>230202002</td>
                                        <td>Alfito</td>
                                        <td>Jalan Jalan</td>
                                        <td>Teknik Informatika</td>
                                        <td>
                                            <a href="mahasiswa/edit" class="btn btn-success btn-sm text-nowrap"
                                                style="border-radius: 5px; padding: 5px 10px;">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm text-nowrap"
                                                style="border-radius: 5px; padding: 5px 10px;">
                                                <i class="fas fa-trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>230202003</td>
                                        <td>Alis</td>
                                        <td>Jalan Manunggal</td>
                                        <td>Teknik Informatika</td>
                                        <td>
                                            <a href="mahasiswa/edit" class="btn btn-success btn-sm text-nowrap"
                                                style="border-radius: 5px; padding: 5px 10px;">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm text-nowrap"
                                                style="border-radius: 5px; padding: 5px 10px;">
                                                <i class="fas fa-trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>230202004</td>
                                        <td>Azka</td>
                                        <td>Jalan Bogowonto</td>
                                        <td>Teknik Informatika</td>
                                        <td>
                                            <a href="mahasiswa/edit" class="btn btn-success btn-sm text-nowrap"
                                                style="border-radius: 5px; padding: 5px 10px;">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm text-nowrap"
                                                style="border-radius: 5px; padding: 5px 10px;">
                                                <i class="fas fa-trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>230202005</td>
                                        <td>Bikra</td>
                                        <td>Jalan Kalimas</td>
                                        <td>Teknik Informatika</td>
                                        <td>
                                            <a href="mahasiswa/edit" class="btn btn-success btn-sm text-nowrap"
                                                style="border-radius: 5px; padding: 5px 10px;">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm text-nowrap"
                                                style="border-radius: 5px; padding: 5px 10px;">
                                                <i class="fas fa-trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>230202006</td>
                                        <td>aaaaaaaaaaaa</td>
                                        <td>Jalan Kasda</td>
                                        <td>Teknik multimedia</td>
                                        <td>
                                            <a href="mahasiswa/edit" class="btn btn-success btn-sm text-nowrap"
                                                style="border-radius: 5px; padding: 5px 10px;">
                                                <i class="fas fa-edit"></i> Edit
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm text-nowrap"
                                                style="border-radius: 5px; padding: 5px 10px;">
                                                <i class="fas fa-trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        document.getElementById('searchButton').addEventListener('click', function() {
            const searchText = document.getElementById('searchInput').value.toLowerCase();
            const rows = document.querySelectorAll('tbody tr');

            rows.forEach(row => {
                const namaMahasiswa = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                row.style.display = namaMahasiswa.includes(searchText) ? '' : 'none';
            });
        });
    </script>
@endsection

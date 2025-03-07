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
                                placeholder="Cari Mata Kuliah...">
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

                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert"
                                style="background: rgba(40, 167, 69, 0.2); border: 1px solid rgba(40, 167, 69, 0.5); color: #155724;">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert"
                                style="background: rgba(220, 53, 69, 0.2); border: 1px solid rgba(220, 53, 69, 0.5); color: #721c24;">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped text-center w-100" id="produkTable"
                                style="border-radius: 10px; overflow: hidden;">
                                <thead style="background: #343a40; color: white;">
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
                                        @if (count($datas) > 0)
                                            @foreach ($datas['data_matkul'] as $data)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data['id_matkul'] }}</td>
                                        <td>{{ $data['semester'] }}</td>
                                        <td>{{ $data['nama_matkul'] }}</td>
                                        <td>{{ $data['banyak_sks'] }}</td>
                                        <td>{{ $data['banyak_jam_matkul'] }}</td>
                                        <td>{{ $data['keterangan'] }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center gap-1">
                                                <a href="{{ route('matkul.edit', $data['id_matkul']) }}"
                                                    class="btn btn-success btn-sm">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>

                                                <form action="{{ route('matkul.destroy', $data['id_matkul']) }}"
                                                    method="POST" class="ml-2">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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
        setTimeout(function() {
            let alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                alert.classList.remove('show');
                alert.classList.add('fade');
                setTimeout(() => alert.remove(), 500); // Hapus elemen setelah fade out
            });
        }, 2000); // 2 detik
    </script>
@endsection

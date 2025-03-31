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
                                class="fas fa-download mr-2"></i>PDF</a>
                        <a href="#" class="btn btn-secondary mb-3 float-right mr-3 shadow"><i
                                class="fas fa-file-download mr-2"></i>Excel</a>

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
                                    @if (count($datas) > 0)
                                        @foreach ($datas['data_mahasiswa'] as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data['NPM'] }}</td>
                                                <td>{{ $data['nama_mahasiswa'] }}</td>
                                                <td>{{ $data['alamat_mahasiswa'] }}</td>
                                                <td>{{ $data['id_prodi'] }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-center gap-1">
                                                        <a href="{{ route('mahasiswa.edit', $data['NPM']) }}"
                                                            class="btn btn-success btn-sm">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a>

                                                        <form action="{{ route('mahasiswa.destroy', $data['NPM']) }}"
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
        setTimeout(function() {
            let alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                alert.classList.remove('show');
                alert.classList.add('fade');
                setTimeout(() => alert.remove(), 500);
            });
        }, 2000);
    </script>
@endsection

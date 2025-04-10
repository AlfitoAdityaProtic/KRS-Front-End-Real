@extends('main')

@section('header')
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="fw-bold">Program Studi</h1>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-header d-flex justify-content-between align-items-center bg-white border-bottom">
                        <h5 class="m-0">Daftar Program Studi</h5>
                        <!-- Input Pencarian -->
                        <div class="input-group" style="width: 250px;">
                            <input type="text" id="searchInput" class="form-control form-control-sm"
                                placeholder="Cari program studi..." style="border-radius: 5px;">
                            <button class="btn btn-light btn-sm" type="button" id="searchButton">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#TambahProdi"><i
                                class="fas fa-plus"></i>
                            Tambah Prodi
                        </button>

                        {{-- <a href="prodi/create" class="btn btn-outline-primary mb-3 shadow"><i class="fas fa-plus"></i>
                            Tambah
                            Prodi</a> --}}
                        <a href="{{ url('/export-prodi-pdf') }}"
                            class="btn btn-outline-warning mb-3 float-right mr-4 shadow"><i
                                class="fas fa-download mr-2"></i>PDF</a>
                        <a href="{{ url('/export-prodi') }}"
                            class="btn btn-outline-secondary mb-3 float-right mr-4 shadow"><i
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
                            <table class="table table-hover align-middle text-center bg-white rounded-3 overflow-hidden"
                                id="produkTable">
                                <thead class="bg-light text-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>ID Prodi</th>
                                        <th>Nama Prodi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($datas['data_prodi'] == null)
                                        <tr>
                                            <td colspan="12" class="text-center fw-semibold text-muted py-4">
                                                Tidak ada data yang tersedia.
                                            </td>
                                        </tr>
                                    @endif
                                    @if (count($datas) > 0)
                                        @foreach ($datas['data_prodi'] as $data)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $data['id_prodi'] }}</td>
                                                <td>{{ $data['nama_prodi'] }}</td>
                                                <td>
                                                    <div class="d-flex justify-content-center gap-1">
                                                        {{-- <a href="{{ route('prodi.edit', $data['id_prodi']) }}"
                                                            class="btn btn-outline-success btn-sm shadow">
                                                            <i class="fas fa-edit"></i> Edit
                                                        </a> --}}

                                                        <button type="button" class="btn btn-outline-success btn-sm shadow"
                                                            data-toggle="modal"
                                                            data-target="#editProdi{{ $data['id_prodi'] }}"><i
                                                                class="fas fa-edit"></i>
                                                            Edit Prodi
                                                        </button>

                                                        <form action="{{ route('prodi.destroy', $data['id_prodi']) }}"
                                                            method="POST" class="ml-2">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="btn btn-outline-danger btn-sm shadow">
                                                                <i class="fas fa-trash"></i> Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- Modal Edit -->
                                            <div class="modal fade" id="editProdi{{ $data['id_prodi'] }}" tabindex="-1"
                                                aria-labelledby="editModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title">Edit Program Studi</h5>
                                                            <button type="button" class="close" data-dismiss="modal">
                                                                <span>&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            @include('program_studi.edit')
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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

    {{-- Modal tambah --}}
    <div class="modal fade" id="TambahProdi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahModalLabel">Tambah Program Studi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @include('program_studi.create')
                </div>
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn shadow"
                        style="border: 2px solid #28a745; color: #28a745; background-color: transparent;"
                        onmouseover="this.style.backgroundColor='#218838'; this.style.color='white';"
                        onmouseout="this.style.backgroundColor='transparent'; this.style.color='#218838';">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div> --}}
            </div>
        </div>
    </div>

    <!-- Script untuk Pencarian -->
    <script>
        // document.getElementById('searchInput').addEventListener('input', function() {
        //     const searchText = this.value.toLowerCase();
        //     const rows = document.querySelectorAll('#produkTable tbody tr');

        //     rows.forEach(row => {
        //         const namaProdi = row.querySelector('td:nth-child(3)');
        //         if (namaProdi) {
        //             const text = namaProdi.textContent.toLowerCase();
        //             row.style.display = text.includes(searchText) ? '' : 'none';
        //         }
        //     });
        // });
        document.getElementById('searchInput').addEventListener('input', function() {
            filterTable();
        });

        // Event listener untuk tombol Enter
        document.getElementById('searchInput').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault(); // Mencegah submit form jika ada
                filterTable();
            }
        });

        function filterTable() {
            const searchText = document.getElementById('searchInput').value.toLowerCase();
            const rows = document.querySelectorAll('#produkTable tbody tr');

            rows.forEach(row => {
                const namaProdi = row.querySelector('td:nth-child(3)');
                if (namaProdi) {
                    const text = namaProdi.textContent.toLowerCase();
                    row.style.display = text.includes(searchText) ? '' : 'none';
                }
            });
        }

        // Menghilangkan alert otomatis setelah 2 detik
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

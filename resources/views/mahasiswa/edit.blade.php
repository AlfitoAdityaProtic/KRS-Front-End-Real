<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('templates/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('templates/plugins/fontawesome-free/css/all.min.css') }}">

    <!-- AdminLTE -->
    <link rel="stylesheet" href="{{ asset('templates/dist/css/adminlte.min.css') }}">

</head>

<body
    style="background: white; font-family: 'Poppins', sans-serif; 
    min-height: 100vh; display: flex; align-items: center; justify-content: center;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 d-flex justify-content-center">
                <div class="card p-4"
                    style="border-radius: 15px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); background: rgb(254, 254, 254, 0.5); backdrop-filter: blur(10px); padding: 30px; width: 100%; max-width: 600px;">
                    <h3 class="text-center fw-bold mb-4" style="font-weight:600">Edit Mahasiswa</h3>

                    <form action="{{ route('mahasiswa.update', $mahasiswa['NPM']) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group bg-transparent">
                            <label for="NPM" class="form-label fw-semibold mb-1"
                                style=" font-size: 16px;">NPM</label>
                            <input type="text" class="form-control mb-3" id="NPM" name="NPM"
                                placeholder="Masukkan NPM Anda" value="{{ $mahasiswa['NPM'] }}" required
                                style="border-radius: 8px; padding: 12px; font-size: 16px; border: 1px solid #ddd; background: transparent;">

                            <label for="nama_mahasiswa" class="form-label fw-semibold mb-1"
                                style=" font-size: 16px;">Nama
                                Mahasiswa</label>
                            <input type="text" class="form-control mb-3" id="nama_mahasiswa" name="nama_mahasiswa"
                                placeholder="Masukkan Nama Anda" value="{{ $mahasiswa['nama_mahasiswa'] }}" required
                                style="border-radius: 8px; padding: 12px; font-size: 16px; border: 1px solid #ddd; background: transparent;">

                            <label for="alamat_mahasiswa" class="form-label fw-semibold mb-1"
                                style=" font-size: 16px;">Alamat Mahasiswa</label>
                            <input type="text" class="form-control mb-3" id="alamat_mahasiswa"
                                name="alamat_mahasiswa" placeholder="Masukkan Alamat Rumah Anda"
                                value="{{ $mahasiswa['alamat_mahasiswa'] }}" required
                                style="border-radius: 8px; padding: 12px; font-size: 16px; border: 1px solid #ddd; background: transparent;">

                            <label for="id_prodi" class="form-label fw-semibold mb-1" style="font-size: 16px;">Pilih
                                Program
                                Studi</label>
                            <select class="form-control mb-3" id="id_prodi" name="id_prodi" required
                                style="border-radius: 8px; padding: 12px; font-size: 16px; border: 1px solid #ddd; background: transparent; height:50px">
                                @foreach ($prodi as $data)
                                    <option
                                        value="{{ $data['id_prodi'] }}"{{ $mahasiswa['id_prodi'] == $data['id_prodi'] ? 'selected' : '' }}>
                                        {{ $data['nama_prodi'] }}
                                    </option>
                                @endforeach
                            </select>

                        </div>

                        <div class="d-flex justify-content-between mt-3">
                            <a href="/mahasiswa" class="btn shadow"
                                style="border: 2px solid #ff9800; color: #ff9800; border-radius: 8px; font-size: 16px; font-weight: 600; padding: 12px 20px; width: 48%; background-color: transparent;"
                                onmouseover="this.style.backgroundColor='#ff9800'; this.style.color='white';"
                                onmouseout="this.style.backgroundColor='transparent'; this.style.color='#ff9800';">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>

                            <button type="submit" class="btn shadow"
                                style="border: 2px solid #28a745; color: #28a745; border-radius: 8px; font-size: 16px; font-weight: 600; padding: 14px; width: 48%; background-color: transparent;"
                                onmouseover="this.style.backgroundColor='#218838'; this.style.color='white';"
                                onmouseout="this.style.backgroundColor='transparent'; this.style.color='#218838';">
                                <i class="fas fa-save"></i> Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('/templates/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap 4 -->
    <script src="{{ asset('/templates/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- AdminLTE -->
    <script src="{{ asset('/templates/dist/js/adminlte.min.js') }}"></script>

</body>

</html>

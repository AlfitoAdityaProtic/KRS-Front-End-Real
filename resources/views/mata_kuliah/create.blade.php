<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Kuliah</title>

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
                    <h3 class="text-center fw-bold mb-4" style="font-weight:600">Tambah Mata Kuliah</h3>

                    <form action='store' method="POST">
                        @csrf
                        <div class="form-group bg-transparent">
                            <label for="semester" class="form-label fw-semibold mb-1"
                                style=" font-size: 16px;">Semester</label>
                            <input type="text" class="form-control mb-3" id="semester" name="semester"
                                placeholder="Masukkan semester" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required
                                style="border-radius: 8px; padding: 12px; font-size: 16px; border: 1px solid #ddd; background: transparent;">

                            <label for="nama_matkul" class="form-label fw-semibold mb-1" style=" font-size: 16px;">Nama
                                Mata Kuliah</label>
                            <input type="text" class="form-control mb-3" id="nama_matkul" name="nama_matkul"
                                placeholder="Masukkan Nama Mata Kuliah" required
                                style="border-radius: 8px; padding: 12px; font-size: 16px; border: 1px solid #ddd; background: transparent;">

                            <label for="banyak_sks" class="form-label fw-semibold mb-1" style="font-size: 16px;">Banyak
                                SKS</label>
                            <input type="text" class="form-control mb-3" id="banyak_sks" name="banyak_sks"
                                placeholder="Masukkan Jumlah SKS" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required
                                style="border-radius: 8px; padding: 12px; font-size: 16px; border: 1px solid #ddd; background: transparent;">

                            <label for="banyak_jam_matkul" class="form-label fw-semibold mb-1" style="font-size: 16px;">Banyak
                                Jam Matkul</label>
                            <input type="text" class="form-control mb-3" id="banyak_jam_matkul" name="banyak_jam_matkul"
                                placeholder="Masukkan Jumlah Jam Mata Kuliah" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required
                                style="border-radius: 8px; padding: 12px; font-size: 16px; border: 1px solid #ddd; background: transparent;">

                            <label for="keterangan" class="form-label fw-semibold mb-1" style="font-size: 16px;">Keterangan</label>
                            <input type="text" class="form-control mb-3" id="keterangan" name="keterangan" placeholder="Masukan Keterangan"
                                style="border-radius: 8px; padding: 12px; font-size: 16px; border: 1px solid #ddd; background: transparent;">
                        </div>

                        <div class="d-flex justify-content-between mt-3">
                            <a href="/matkul" class="btn"
                                style="background-color: #ff9800; color: white; border-radius: 8px; font-size: 16px; font-weight: 600; padding: 14px; width: 48%;"
                                onmouseover="this.style.backgroundColor='#e68900'"
                                onmouseout="this.style.backgroundColor='#ff9800'">
                                <i class="fas fa-arrow-left shadow"></i> Kembali
                            </a>

                            <button type="submit" class="btn"
                                style="background-color: #28a745; color: white; border-radius: 8px; font-size: 16px; font-weight: 600; padding: 14px; width: 48%;"
                                onmouseover="this.style.backgroundColor='#218838'"
                                onmouseout="this.style.backgroundColor='#28a745'">
                                <i class="fas fa-save shadow"></i> Simpan
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

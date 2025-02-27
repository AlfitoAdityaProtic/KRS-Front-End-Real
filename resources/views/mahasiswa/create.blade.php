<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Daftar Mahasiswa</title>

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
                    <h3 class="text-center fw-bold mb-4" style="font-weight:600">Tambah Daftar Mahasiswa</h3>

                    <form>
                        <div class="form-group bg-transparent">
                            <label for="npm" class="form-label fw-semibold mb-1"
                                style=" font-size: 16px;">NPM</label>
                            <input type="text" class="form-control mb-3" id="npm"
                                placeholder="Masukkan NPM Anda" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                                required
                                style="border-radius: 8px; padding: 12px; font-size: 16px; border: 1px solid #ddd; background: transparent;">

                            <label for="nama_mahasiswa" class="form-label fw-semibold mb-1"
                                style=" font-size: 16px;">Nama
                                Mahasiswa</label>
                            <input type="text" class="form-control mb-3" id="nama_mahasiswa"
                                placeholder="Masukkan Nama Anda" required
                                style="border-radius: 8px; padding: 12px; font-size: 16px; border: 1px solid #ddd; background: transparent;">

                            <label for="alamat_mahasiswa" class="form-label fw-semibold mb-1"
                                style=" font-size: 16px;">Alamat Mahasiswa</label>
                            <input type="text" class="form-control mb-3" id="alamat_mahasiswa"
                                placeholder="Masukkan Alamat Rumah Anda" required
                                style="border-radius: 8px; padding: 12px; font-size: 16px; border: 1px solid #ddd; background: transparent;">

                            <label for="namaProdi" class="form-label fw-semibold mb-1" style="font-size: 16px;">Pilih
                                Program
                                Studi</label>
                            <select class="form-control mb-3" id="namaProdi" required
                                style="border-radius: 8px; padding: 12px; font-size: 16px; border: 1px solid #ddd; background: transparent; height:50px">
                                <option value="" disabled selected>Pilih Program Studi</option>
                                <option value="ti">Teknik Informatika</option>
                                <option value="tm">Teknik Mesin</option>
                                <option value="te">Teknik Elektro</option>
                                <option value="tl">Teknik Listrik</option>
                                <option value="rpl">Rekayasa Perangkat Lunak</option>
                            </select>

                        </div>

                        <div class="d-flex justify-content-between mt-3">
                            <a href="/mahasiswa" class="btn"
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

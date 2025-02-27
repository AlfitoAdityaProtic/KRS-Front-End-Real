<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Program Studi</title>

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
    style="font-family: 'Poppins', sans-serif; background: white; min-height: 100vh; display: flex; align-items: center; justify-content: center;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 d-flex justify-content-center">
                <div class="card p-4"
                    style="border-radius: 15px; box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2); background: rgb(254, 254, 254, 0.5); backdrop-filter: blur(10px); padding: 30px; width: 100%; max-width: 600px;">
                    <h3 class="text-center fw-bold mb-4">Edit Program Studi</h3>

                    <form action="{{route('prodi.update', $prodi['id_prodi']) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group bg-transparent">
                            <label for="nama_prodi" class="form-label fw-semibold"
                                style=" font-size: 16px;">Nama Program Studi</label>
                            <input type="text" class="form-control" id="nama_prodi" name="nama_prodi"
                                placeholder="Masukkan Nama Program Studi" value="{{ $prodi['nama_prodi'] }}" required
                                style="border-radius: 8px; padding: 12px; font-size: 16px; border: 1px solid #ddd; background: transparent;">
                        </div>

                        <div class="d-flex justify-content-between mt-3">
                            <a href="/prodi" class="btn"
                                style="background-color: #ff9800; color: white; border-radius: 8px; font-size: 16px; font-weight: 600; padding: 14px; width: 48%;"
                                onmouseover="this.style.backgroundColor='#e68900'"
                                onmouseout="this.style.backgroundColor='#ff9800'">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>

                            <button type="submit" class="btn"
                                style="background-color: #28a745; color: white; border-radius: 8px; font-size: 16px; font-weight: 600; padding: 14px; width: 48%;"
                                onmouseover="this.style.backgroundColor='#218838'"
                                onmouseout="this.style.backgroundColor='#28a745'">
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

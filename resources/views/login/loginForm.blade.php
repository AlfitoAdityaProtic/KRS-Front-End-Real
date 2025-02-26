<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('templates/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('templates/dist/css/adminlte.min.css') }}">
</head>

<body
    style="background: url('./templates/dist/img/icon1.JPG')no-repeat center center fixed; background-size: cover; font-family: 'Poppins', sans-serif;">
    <div class="d-flex vh-100 justify-content-center align-items-center">
        <div class="shadow-lg p-4"
            style="background: rgba(255, 255, 255, 0.2); backdrop-filter: blur(10px); padding: 30px; border-radius: 10px; max-width: 500px; width: 100%; 
        opacity: 0; transform: translateY(-20px); animation: fadeIn 0.8s ease-in-out forwards;">
            <h3 class="text-center mb-4 text-dark" style="font-weight: 600;">Login dulu kang</h3>

            <form class="absolute z-index-2">
                <div class="mb-3">
                    <label for="npm" class="form-label text-white" style="font-weight: 500;">NPM</label>
                    <input type="text" class="form-control" id="npm" placeholder="Masukkan NPM"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '')">
                </div>

                <div class="mb-3 position-relative">
                    <label for="password" class="form-label text-white" style="font-weight: 500;">Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" placeholder="Masukkan Password">
                        <button type="button" onclick="togglePassword()" class="btn btn-outline-secondary">
                            <i id="eyeIcon" class="fa fa-eye"></i>
                        </button>
                    </div>
                </div>
                <a href="/" type="submit" class="btn btn-primary w-100 mb-2" style="font-weight: 500;">Login</a>

                <!-- Garis pemisah dengan teks "atau" -->
                <div class="d-flex align-items-center my-3">
                    <div style="flex-grow: 1; height: 1px; background-color: black;"></div>
                    <span class="px-3 text-dark" style="font-weight: 500;">atau</span>
                    <div style="flex-grow: 1; height: 1px; background-color: black;"></div>
                </div>

                <a href="register.html" class="btn w-100 border border-dark"
                    style="font-weight: 500; background-color: white; color: black; transition: color 0.3s, background-color 0.3s;"
                    onmouseover="this.style.color='white'; this.style.backgroundColor='black';"
                    onmouseout="this.style.color='black'; this.style.backgroundColor='white';">
                    Register
                </a>
            </form>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> --}}
    <!-- Bootstrap 4 -->
    <script src="{{ asset('/templates/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('/templates/dist/js/adminlte.min.js') }}"></script>

    <script>
        function togglePassword() {
            let passwordInput = document.getElementById("password");
            let eyeIcon = document.getElementById("eyeIcon");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                eyeIcon.classList.remove("fa-eye");
                eyeIcon.classList.add("fa-eye-slash");
            } else {
                passwordInput.type = "password";
                eyeIcon.classList.remove("fa-eye-slash");
                eyeIcon.classList.add("fa-eye");
            }
        }
    </script>

    <style>
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

</body>

</html>

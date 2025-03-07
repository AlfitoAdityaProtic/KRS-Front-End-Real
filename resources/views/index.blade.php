@extends('main')

@section('header')
    {{-- <div class="row mb-4">
    <div class="col-md-6">
        <h1 class="font-weight-bold">Dashboard</h1>
    </div>
</div> --}}
@endsection

@section('content')

    <body>
        <div class="container d-flex flex-column align-items-center justify-content-center"
            style="min-height: 100vh; text-align: center;">
            <!-- Card Ucapan Selamat Datang -->
            <div class="col-md-8" data-aos="fade-down" data-aos-duration="1000">
                <div class="card text-center p-4"
                    style="background: rgba(85, 82, 84, 0.47); backdrop-filter: blur(10px); border-radius: 15px;">
                    <h2 class="font-weight-bold">Selamat Datang di KRS Mahasiswa PNC</h2>
                    <p>Kelola data mahasiswa dan program studi dengan mudah</p>
                </div>
            </div>

            <!-- Card Info -->
            <div class="row mt-4 justify-content-center">
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-6 mb-3" data-aos="fade-up" data-aos-duration="1000">
                            <div class="card text-white text-center p-4"
                                style="border-radius: 15px; font-weight: bold; font-size: 1.2rem; background: #007bff;">
                                <h5>Jumlah Mahasiswa</h5>
                                <p class="display-4 count" data-target="100">0</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3" data-aos="fade-up" data-aos-duration="1200">
                            <div class="card text-white text-center p-4"
                                style="border-radius: 15px; font-weight: bold; font-size: 1.2rem; background: #28a745;">
                                <h5>Jumlah Prodi</h5>
                                <p class="display-4 count" data-target="100">0</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            window.addEventListener('load', function() {
                const counters = document.querySelectorAll('.count');
                counters.forEach(counter => {
                    let target = +counter.getAttribute('data-target');
                    let count = 0;
                    let increment = target / 50; // Durasi animasi

                    function updateCounter() {
                        count += increment;
                        if (count < target) {
                            counter.textContent = Math.ceil(count);
                            requestAnimationFrame(updateCounter);
                        } else {
                            counter.textContent = target;
                        }
                    }
                    updateCounter();
                });
            });
        </script>


    </body>
@endsection

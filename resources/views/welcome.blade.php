@extends('Template.app')

@section('content-dinamis')
    <style>
        .background {
            background: linear-gradient(to top, #000, #3d3d36);
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
    </style>

    <div class="background">
        <div class="container mt-5"
            style="background-color: #313131; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <div id="carouselExampleIndicators" class="carousel slide mb-4"
                style="margin: auto; background-color: #313131; padding: 20px; border-radius: 10px;">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active img-fluid">
                        <img src="{{ asset('image/wonderland.jpeg') }}" class="d-block w-100"
                            style="height: 500px; border-radius: 10px;" alt="Wonderland Concert">
                    </div>
                    <div class="carousel-item img-fluid">
                        <img src="{{ asset('image/flowerful.jpeg') }}" class="d-block w-100"
                            style="height: 500px; border-radius: 10px;" alt="Flowerful Concert">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="container mt-5"
            style="background-color: #313131; padding: 20px; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <div class="text"
                style="padding: 20px;">
                <p class="fw-bold" style="color: white; font-size: 24px;">Description</p>
                <p class="fw-bolder" style="color: white; font-size: 18px;">
                    Selamat datang di JokiGen, solusi terbaik untuk penggemar JKT48 yang ingin mendapatkan tiket konser
                    dengan mudah dan cepat! Kami menyediakan platform joki tiket konser yang menghubungkan Anda dengan para
                    penjual tiket terpercaya untuk berbagai acara seperti Konser, Event 2S dan MnG, serta VideoCall yang
                    diadakan setiap bulannya.
                </p>
                <p class="fw-bolder" style="color: white; font-size: 18px;">
                    Dengan JokiGen, Anda tidak perlu khawatir kehilangan tiket konser impian Anda. Jadikan pengalaman konser
                    Anda lebih mudah dan menyenangkan bersama kami! Terima kasih telah memilih JokiGen. Mari kita bersiap
                    untuk merayakan semua Event bersama!
                </p>
            </div>
        </div>
    </div>
@endsection
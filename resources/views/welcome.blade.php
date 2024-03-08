<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Holtwood+One+SC&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .font-a {
            font-family: "Holtwood One SC", serif;
            font-weight: 400;
            font-style: normal;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary position-fixed w-100">
        <div class="container-fluid">
            <a class="navbar-brand px-4 font-a" href="{{ ('/dashboard') }}">SEE BOOK</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="">
                <form class="" role="search">
                    <a href="{{ route('login') }} " class="btn btn-info">Login</a>
                    <a href="{{ route('register') }} " class="btn btn-danger">Register</a>
                </form>
            </div>
        </div>
    </nav>
    <section class="home" id="home">
        <div class="container-fluid min-vh-100 text-light d-flex align-items-center" style="background-color: #713DA6">
            <div class="container justify-content-center align-items-center">
                <div class="row d-flex align-items-center">
                    <div class="col-5">
                        <div>
                            <h1 class="font-a" style="font-size: 100px">SEE
                                </BR>BOOK</h1>
                            <p class="">Selamat datang di aplikasi perpustakaan digital yang akan selalu melayani
                                anda kapan pun.
                            </p>
                        </div>
                        <div class="">
                            <a href="{{ url('login') }}" class="btn btn-outline-info"> ayo baca sekarang</a>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="col d-flex justify-content-end">
                            <img src="{{ asset('gambar/jaja.png') }}" style="width:650px " alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about" id="about">
        <div class="container-fluid min-vh-100 text-light d-flex align-items-center" style="background-color: #431B76">
            <div class="container justify-content-center align-items-center">
                <div class="row d-flex align-items-center">
                    <div class="col-5">
                        <div>
                            <h1 class="font-a" style="font-size: 100px">About us</h1>
                            <p class="">SEE BOOK adalah aplikasi perpustakaan digital persembahan perpustakaan
                                nasional
                                republik indonesia sebagai perpustakaan digital yang dilengkapi fitur-fitur media
                                sosial. Selain itu kalian dapat menggunakan ipusnas untuk terhubung dan berinteraksi
                                dengan sesama pengguna maupun komunitas lainnya. Kalian juga dapat memberikan
                                rekomendasi buku yang sedang kamu baca, dan menyampaikan ulasan buku.
                            </p>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="col d-flex justify-content-end">
                            <img src="{{ asset('gambar/gag.png') }}" style="width:500px " alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>

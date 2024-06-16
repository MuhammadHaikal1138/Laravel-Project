<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<style>
    .top {
        padding-top: 7%;
        padding-bottom: 12%;
    }

    .saya {
        width: 300px;
        height: 300px;
    }

    .container h3 {
        font-size: 50px;
    }

    .clearfix {
        box-shadow: 5px 5px 5px 5px gray;
        border-radius: 20px;
    }

    .ig {
        width: 60%;
    }
    .x {
        padding-top: 30px;
        padding-bottom: 20px;
        width: 70%;
    }
    .wa {
        width: 60%;
    }
</style>

<body>
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <a class="logo navbar-brand me-auto" href="#">HaikalPort</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">HaikalPort</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active mx-lg-2" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="/contact">Contact Me</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <main>
        <div class="container-fluid top">
            <div class="container pb-3">
                <h3 class="text-center">Tentang Saya</h3>
                <h4 class="text-center">Ini Adalah Biodata Saya!</h4>
            </div>
            <div class="clearfix pt-3 d-flex justify-content-center">
                <img src="/asset/image/Haikal.jpg" alt="" class="col-md-6 mb-3 crop-img mx-4 saya">
                <div class="teks">
                    <h3>Nama : Muhammad Haikal</h3>
                    <h3>Sekolah : SMK Wikrama Bogor</h3>
                    <h3>TTL : Bogor, 11 Maret 2008</h3>
                    <h3>Hobi : Membaca, Bermain Game</h3>
                    <h3>Motto : "Kebanyakan orang merasa sukses itu adalah jerih payah diri sendiri, tanpa campur tangan
                        Tuhan. Mengingat Tuhan adalah sebagai ibadah vertikal dan menolong sesama sebagai ibadah
                        horizontal."</h3>
                </div>
            </div>
            <div class="container text-center pt-5">
                <h3>My Social Media</h3>
                <h4>Want to know more about me? Check out my social media</h4>
                <div class="row pt-4 gx-4 g-4">
                    <div class="col-md-4 text-center medsos">
                        <img src="/asset/image/ig.png" class="ig">
                        <h4><a href="https://www.instagram.com/ekallya_/">My Instagram</a></h4>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="/asset/image/x.png" class="x">
                        <h4><a href="https://x.com/Kall1138/">My Twitter/X</a></h4>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="/asset/image/wa.png" class="wa">
                        <h4><a href="https://wa.me/6289604131974">My Whatsapp</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e8e0f7c9ac.js" crossorigin="anonymous"></script>
</body>

</html>
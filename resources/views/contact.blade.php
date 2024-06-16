<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<style>
    .top {
        padding-top: 12%;
        padding-bottom: 12%;
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
                                <a class="nav-link mx-lg-2" href="/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active mx-lg-2" href="/contact">Contact Me</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid top">
            <div class="container">
                <div class="pb-4">
                    <h1 class="text-center">Contact Me</h1>
                    <h3 class="text-center">Have a good suggestion for my website? Tell me about it</h3>
                </div>
                <div class="row pb-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control form-control-lg mb-3" placeholder="Name">
                        <input type="email" class="form-control form-control-lg mb-3" placeholder="Email">
                        <input type="text" class="form-control form-control-lg" placeholder="No. Phone">
                    </div>
                    <div class="col-md-6">
                        <textarea class="form-control form-control-lg" rows="5"></textarea>
                    </div>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-secondary" type="button">Send</button>
                </div>
            </div>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>
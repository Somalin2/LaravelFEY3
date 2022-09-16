<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Contact Us</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    {{ Html::style('css/home.css') }}
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Phone Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page"
                            href="{!! url('/') !!}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Location</a></li>
                </ul>

                {{-- <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="1000"></div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div> --}}
            </div>
    </nav>
    <!-- Header-->

    <header class="bg-dark py-3">
        <div class="carousel-item active" data-bs-interval="900"></div>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="900">
                    <img src="https://9to5mac.com/wp-content/uploads/sites/6/2022/01/iPhone-trade-in-values-dominated-2021.jpg?quality=82&strip=all"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="900">
                    <img src="https://www.flashfly.net/wp/wp-content/uploads/2022/01/FGLs1dEWUAIZNKW.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="900">
                    <img src="https://www.igeeksblog.com/wp-content/uploads/2022/09/Download-iPhone-14-wallpapers.png"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        </div>
    </header>
    {{-- <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach ($phones as $phone)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Phone image-->
                            <img class="card-img-top" src="img/{{ $phone->photo }}" alt="..." />
                            <!-- Phone details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Phone name-->
                                    <h5 class="fw-bolder">{!! $phone->name !!}</h5>
                                    <!-- Phone price-->
                                    {!! $phone->price !!}
                                </div>
                            </div>
                            <!-- Phone actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto"
                                        href="show/{{ $phone->id }}">View options</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
    <!-- Footer-->
    <body>
        <h1>

        </h1>

        <h1>Contact Us</h1>
        <h5>+85599607878</h5>
        <h1> </h1>
        <h2>Location</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d337.24654586119595!2d104.92311869728856!3d11.555709691902342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109513b3deb3581%3A0x714b176f42fe3368!2sPreah%20Trasak%20Paem%20St.%20(63)%2C%20Phnom%20Penh!5e0!3m2!1sen!2skh!4v1663327634234!5m2!1sen!2skh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </body>
    <footer class="py-5 bg-dark">
        {{-- <div class="container"> --}}
            <p class="m-0 text-center text-white">All right reserve &copysr; Lin website</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    {{ Html::script('js/home.js') }}
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>HomePage</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    {{ Html::style('css/home.css') }}


</head>
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
                    <li class="nav-item"><a class="nav-link" href="{!! url('/list') !!}">Location</a></li>


                </ul>

            </div>
        </div>
    </nav>

    {{-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-14-pro-model-unselect-gallery-2-202209_GEO_US?wid=2560&hei=1440&fmt=p-jpg&qlt=80&.v=1660753617560" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-14-pro-model-unselect-gallery-1-202209?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1660753619946" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone-14-model-unselect-gallery-1-202209?wid=5120&hei=2880&fmt=p-jpg&qlt=80&.v=1660689596976" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> --}}


    {{-- <!-- Header-->
    <header class="bg-transperent py-5">
        {{-- <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Phones</h1>

            </div> --}} <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"
                aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5"
                aria-label="Slide 6"></button>
        </div>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="https://9to5mac.com/wp-content/uploads/sites/6/2022/01/iPhone-trade-in-values-dominated-2021.jpg?quality=82&strip=all"
                    width=300 height=600 class="d-block w-100" alt="...">
            </div>
            <div class="carousel-caption d-none d-md-block">
                <h5>Welcome to LKW Phone Shop</h5>
                <p>The authentic international phone website.</p>
            </div>
            <div class="carousel-item">
                <img src="https://www.apple.com/newsroom/videos/iphone-14-pro-3up/posters/Apple-iPhone-14-Pro-iPhone-14-Pro-Max-Dynamic-Island-demo-3up.jpg.large_2x.jpg"
                    width=100 height=600 class="d-block w-100" alt="...">
            </div>

            <div class="carousel-item">
                <img src="https://img.championat.com/i/h/o/1662577681535803074.jpg"
                    width=300 height=600 class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.androidauthority.com/wp-content/uploads/2022/09/Apple-Event-2022-iphone-14-pro-2.jpg.webp"
                    width=300 height=600 class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://assets.bwbx.io/images/users/iqjWHBFdfxIU/iuExBZcKopw8/v1/-1x-1.jpg"
                    width=100 height=600 class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://memeburn.com/gearburn/wp-content/uploads/sites/3/2019/02/samsung-galaxy-s10-plus-marketing-1.jpg"
                    width=100 height=600 class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>

    </div>
    </header>
    <!-- Section-->
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
                                        href="show/{{ $phone->id }}">View</a></div>
                            </div>

                        </div>

                    </div>
                @endforeach

            </div>
        </div>

    </section>
  <!-- Footer-->
    <footer class="py-5 bg-dark">

        <div class="container">
            <p class="m-0 text-center text-white">All right reserve &copy; Lin website</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    {{ Html::script('js/home.js') }}
</body>

</html>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>RENTAL CAR</title>

    <!-- Bootstrap core CSS -->
    <link href="landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="landing/css/fontawesome.css">
    <link rel="stylesheet" href="landing/css/templatemo-scholar.css">
    <link rel="stylesheet" href="landing/css/owl.css">
    <link rel="stylesheet" href="landing/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
  </head>
<body>

    @include('_partials.landnav')
    @include('_partials.landpre')
    <div class="container-custom">
        @yield('content')
    </div>


    <script src="landing/vendor/jquery/jquery.min.js"></script>
    <script src="landingvendor/bootstrap/js/bootstrap.min.js"></script>
    <script defer src="landing/js/owl-carousel.js"></script>
    <script defer src="landing/js/custom.js"></script>
</body>
</html>

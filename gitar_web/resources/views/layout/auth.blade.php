<!DOCTYPE html>
<html lang="zxx">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <meta name="robots" content="index, follow" />
  <meta name="description"
    content="Pronia plant store bootstrap 5 template is an awesome website template for any home plant shop.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ url('/') }}/assets/images/favicon.ico" />

  <!-- CSS
    ============================================ -->

  <link rel="stylesheet" href="{{ url('/') }}/assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="{{ url('/') }}/assets/css/font-awesome.min.css" />
  <link rel="stylesheet" href="{{ url('/') }}/assets/css/Pe-icon-7-stroke.css" />
  <link rel="stylesheet" href="{{ url('/') }}/assets/css/animate.min.css">
  <link rel="stylesheet" href="{{ url('/') }}/assets/css/swiper-bundle.min.css">
  <link rel="stylesheet" href="{{ url('/') }}/assets/css/nice-select.css">
  <link rel="stylesheet" href="{{ url('/') }}/assets/css/magnific-popup.min.css" />
  <link rel="stylesheet" href="{{ url('/') }}/assets/css/ion.rangeSlider.min.css" />

  <!-- Style CSS -->
  <link rel="stylesheet" href="{{ url('/') }}/assets/css/style.css">

</head>

<body style="background: url('{{ url('/') }}/assets/images/banner/5-1-1980-1080.jpg'); background-size:cover">
  <div class="preloader-activate preloader-active open_tm_preloader">
    <div class="preloader-area-wrap">
      <div class="spinner d-flex justify-content-center align-items-center h-100">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
      </div>
    </div>
  </div>
  <div class="main-wrapper">

    @yield('container')

  </div>

  <!-- Global Vendor, plugins JS -->

  <!-- JS Files
    ============================================ -->

  <script src="{{ url('/') }}/assets/js/vendor/bootstrap.bundle.min.js"></script>
  <script src="{{ url('/') }}/assets/js/vendor/jquery-3.6.0.min.js"></script>
  <script src="{{ url('/') }}/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
  <script src="{{ url('/') }}/assets/js/vendor/jquery.waypoints.js"></script>
  <script src="{{ url('/') }}/assets/js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="{{ url('/') }}/assets/js/plugins/wow.min.js"></script>
  <script src="{{ url('/') }}/assets/js/plugins/swiper-bundle.min.js"></script>
  <script src="{{ url('/') }}/assets/js/plugins/jquery.nice-select.js"></script>
  <script src="{{ url('/') }}/assets/js/plugins/parallax.min.js"></script>
  <script src="{{ url('/') }}/assets/js/plugins/jquery.magnific-popup.min.js"></script>
  <script src="{{ url('/') }}/assets/js/plugins/tippy.min.js"></script>
  <script src="{{ url('/') }}/assets/js/plugins/ion.rangeSlider.min.js"></script>
  <script src="{{ url('/') }}/assets/js/plugins/mailchimp-ajax.js"></script>
  <script src="{{ url('/') }}/assets/js/plugins/jquery.counterup.js"></script>

  <!--Main JS (Common Activation Codes)-->
  <script src="{{ url('/') }}/assets/js/main.js"></script>

</body>

</html>
{{-- 
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
<a class="nav-link" href="{{ url('/about') }}">About</a>
<a class="nav-link" href="{{ url('/gitar') }}">Data Gitar</a>
</div>
</div>
</div>
</nav>

@yield('container')
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html> --}}
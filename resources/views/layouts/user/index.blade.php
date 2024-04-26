<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{$kontaks->nama}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/frontend/assets/img/favicon.png" rel="icon">
  <link href="/frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/frontend/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/frontend/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/frontend/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/frontend/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/frontend/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly - v3.1.0
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center bg-dark">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">
      <h1 class="logo me-auto me-lg-0"><a href="/dashboard"><img src="/image/{{$kontaks->image}}"  alt="">{{$kontaks->nama}}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="/frontend/assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="/dashboard">Home</a></li>
          <li><a class="nav-link scrollto" href="/about">About</a></li>
          <li><a class="nav-link scrollto" href="/resep">Resep</a></li>
          <li class="dropdown"><a href="#"><span>Ketegori</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/diabetes">Diabetes</a></li>
              <li><a href="/hipertensi">Hipertensi</a></li>
              <li><a href="/jantung">Jantung</a></li>
              <li><a href="/obesitas">Obesitas</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/contact">Contact</a></li>
          <li>   <a class="nav-link mt-3" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             <i class="nav-icon fas fa-sign-out-alt"></i><p>{{ __('Logout') }}</p>
         </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">{{ Auth::user()->name}}</a>
    </div>
  </header><!-- End Header -->
@yield('content')
   <!-- ======= Footer ======= -->
   <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>{{$kontaks->nama}}</h3>
              <p>
               {{$kontaks->alamat}}
                <strong>Phone:</strong>{{$kontaks->nomortelepon}}<br>
                <strong>Email:</strong>{{$kontaks->email}}<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/dashboard">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/resep">Resep</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/diabetes">Kategori</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/contact">Contact</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Resep Makanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Solusi Penyakit</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Rekomendasi Resep</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Diabetes</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Jantung</a></li>
            </ul>
          </div>


        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>{{$kontaks->nama}}</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/restaurantly-restaurant-template/ -->
        Designed by <a href="#">{{$kontaks->nama}}</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/frontend/assets/vendor/aos/aos.js"></script>
  <script src="/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/frontend/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/frontend/assets/vendor/php-email-form/validate.js"></script>
  <script src="/frontend/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="/frontend/assets/js/main.js"></script>

</body>

</html>

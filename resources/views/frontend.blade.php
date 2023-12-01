
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/frontend/assets/img/3.png')}}" rel="icon">
  <link href="{{asset('assets/frontend/assets/img/3.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/frontend/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/frontend/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/frontend/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/frontend/assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="#" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{asset('assets/frontend/assets/img/3.png')}}" alt="">
        <h1>BPC HIPMI PADANG<span></span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="">Beranda</a></li>
          <li class="nav-item"><a  href="/kegiatan" class="{{Request::is('kegiatan') ? 'active':''}}">Kegiatan dan Agenda</a></li>
          <li><a href="/anggota" class="{{Request::is('anggota') ? 'active':''}}">Usaha</a></li>
          <li class="nav-item"><a href="/ttg" class="{{Request::is('ttg') ? 'active':''}}">Kepengurusan</a></li>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    
    @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>Hipmi Padang</h3>
              <p>
                JL. Veteran, No.12-C, Padang, West Sumatera, Purus, Padang Barat, Padang City, West Sumatra 25115, Indonesia <br>
                <strong>Phone:</strong> 0811-88-6787<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/hipmipadang/" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                {{-- <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a> --}}
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-6 col-md-6">
            <h2>Mari Kolaborasikan Usahamu</h2>
            
                Bergabunglah menjadi bagian dari komunitas pengusaha muda yang berkembang pesat dan dapatkan manfaat dari bimbingan ahli, peluang jaringan, dan akses eksklusif ke sumber daya industri.
                <p><p><a href="https://api.whatsapp.com/send?phone=6283801785589"
                    class="btn btn-lg btn-warning">Daftar</a> </p> <p>
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Fadli Jahyadi</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="https://api.whatsapp.com/send?phone=6283801785589" class="scroll-top d-flex align-items-center justify-content-center"><i class="fa-brands fa-whatsapp"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/frontend/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/frontend/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/frontend/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/frontend/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/frontend/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/frontend/assets/js/main.js')}}"></script>

</body>

</html>
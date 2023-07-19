<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Scope and Topics</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('img/Logo_ICDMM2023.png') }}" rel="icon">
    <link href="{{ url('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ url('css/main.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1><sup>2nd</sup>ICDMM2023<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('regispage') }}">Registration</a></li>
            <li><a href="{{ route('projects') }}">Commitees</a></li>
            <li><a href="{{ route('scopeandtopics') }}" class="active">Scope And Topics</a></li>
          <li><a href="{{ route('login') }}">Account</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url({{ url('img/breadcrumbs-bg.jpg') }});">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Scope and Topics</h2>
        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>Scope and Topics</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->

  <section id="blog" class="blog">
    <div>
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 posts-list">

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100">

    <h3>Scope and Topics :</h3>
    <p>Papers that relate to these areas are welcome :</p>
    <p>1• Disaster monitoring and mitigation<br>2• Natural hazard management<br>3• Disaster analysis<br>4• Impact and response to disaster<br>5• Emergency preparedness<br>6• Community recovery and resilience<br>7• Public health risk, including covid 19<br>8• Multi-hazard risk assessment<br>9• Disaster risk reduction (DRR)<br>10• New technologies and tools for disaster evaluation<br>11• Disaster governance policies<br>12• Environmental issues<br>13• Recovery and restoration<br>14• Case studies in disaster management<br>15• Seismic hazard and tsunami disaster management and mitigation<br>16• Retrofit, rehabilitation and reconstruction<br>17• Local wisdom and cultural approach in disaster management<br>18•  Post disaster healing <br>19•  Culture disaster<br>20•  History of disaster<br>21•  Economic effect of disaster <br>22•  Disaster prediction <br>23•  Disaster broadcasing <br>24•  Disaster law and policy <br>25•  Development trigger disaster  </p>

          </div>
        </div>
        </div>
  </section>

</main>
   <!-- ======= Footer ======= -->
   <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3><sup>2nd</sup>ICDMM 2023</h3>
              <p>
                Organized by <br>
                Universitas Andalas<br>Co-Host<br>
                <strong>Universitas Pertahanan Indonesia</strong><br>
                <strong>Universitas Jendral Soedirman</strong> <br>
                <strong>Universitas  Dharma Andalas</strong> <br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/icdmm2023/"
                  class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="{{ route('home') }}">Home</a></li>
              <li><a href="{{ route('about') }}">About us</a></li>
              <li><a href="{{ route('regispage') }}">Registration</a></li>
              <li><a href="{{ route('contact') }}">Contact</a></li>
              <li><a href="{{ route('login') }}">Account</a></li>
            </ul>
          </div><!-- End footer links column-->
          </ul>
        </div><!-- End footer links column-->

      </div>
    </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>ICDMM 2023</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('js/main.js') }}"></script>

</body>

</html>

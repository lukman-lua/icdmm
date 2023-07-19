<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LoginPage</title>
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

  <style>
    .login-container {
      display: flex;
      justify-content: center;
      align-items: center;


    }

    .login-form {
      max-width: 400px;
      padding: 30px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .login-form h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .login-form label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    .login-form input[type="text"],
    .login-form input[type="password"] {
      width: 100%;
      padding: 10px;
      border-radius: 3px;
      border: 1px solid #ccc;
      margin-bottom: 20px;
    }

    .login-form input[type="submit"] {
      background-color: #1595b1;
      color: #fff;
      border: none;
      padding: 10px 20px;
      border-radius: 3px;
      cursor: pointer;
    }

    .login-form input[type="submit"]:hover {
      background-color: #45a049;
    }

    .login-form .links {
      margin-top: 10px;
      text-align: center;
    }

    .login-form .links a {
      color: #888;
      text-decoration: none;
      margin-right: 10px;
    }
  </style>

</head>

<body>

 <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center">

        <h1><sup>2nd</sup>ICDMM2023<span>.</span></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li><a href="{{ route('about') }}">About</a></li>
          <li><a href="{{ route('regis') }}">Registrasion</a></li>
            <li><a href="{{ route('projects') }}">Commitees</a></li>
            <li><a href="{{ route('scopeandtopics') }}">Scope and Topics</a></li>
          <li><a href="{{ route('login') }}" class="active">Account</a></li>
          <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Login</h2>
        <ol>
          <li><a href="{{ route('home') }}">Home</a></li>
          <li>Login</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="Login" class="login">
      <div class="login-container">
        <div class="login-form">
          <h2>Admin Page</h2>
          <form action="proses_login.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">
          </form>
          <div class="links">
            <a href="login_admin.html">Login Admin?</a>
            <a href="Registrasion.html">Registration</a>
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

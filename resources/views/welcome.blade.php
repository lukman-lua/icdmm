<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>The International Conference on Disaster Mitigation and Management 2023</title>
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
            <h1><sup>2nd</sup>ICDMM 2023<span>.</span></h1>
        </a>

        <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
        <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="{{ route('home') }}" class="active">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('regispage') }}">Registration</a></li>
                <li><a href="#keynote">Keynote Speaker</a></li>
                <li><a href="{{ route('scopeandtopics') }}">Scope and Topics</a></li>
                <li><a href="{{ route('login') }}">Account</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">

    <div class="info d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2 data-aos="fade-down">Welcome to <span>ICDMM 2023</span></h2>
                    <p data-aos="fade-up">The International Conference on Disaster Mitigation and Management (ICDMM 2023) is a
                        premier forum for the presentation of new advances and research results in the field of Disaster
                        Management. The conference will bring together leading researchers, engineers, architects, scientists, and
                        other professionals in various disciplines of social science and engineering around the world related to
                        disasters. The ICDMM 2023 conference aims to establish scientific links at international level for sharing
                        and disseminating valuable information of the latest research activities in Disaster management. Best
                        papers and presenters in each category will be selected and awarded. The language of ICDMM 2023 will be in
                        English..</p>
                    <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
                </div>
            </div>
        </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active" style="background-image: url({{ url('img/hero-carousel/hero-carousel-1.jpg') }})">
        </div>
        <div class="carousel-item" style="ackground-image: url({{ url('img/hero-carousel/hero-carousel-2.jpg') }})"></div>
        <div class="carousel-item" style="background-image: url({{ url('img/hero-carousel/hero-carousel-3.jpg') }})"></div>
        <div class="carousel-item" style="background-image: url({{ url('img/hero-carousel/hero-carousel-4.jpg') }})"></div>
        <div class="carousel-item" style="background-image: url({{ url('img/hero-carousel/hero-carousel-5.jpg') }})"></div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>

</section><!-- End Hero Section -->

<main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">
        <div class="container">

            <div class="row justify-content-between gy-4">

                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                    <div class="content">
                        <h3>Announcement</h3>
                        <p>The Payment of the conference can be paid after reciving LOA, please send the
                            proof bank transfer to 2nd.icdmm2023@gmail.com before September 1th 2023 </p>
                        <h3>Important Date</h3>
                        <ul>
                            <li> Paper Submission</li>
                            1 August 2023
                            <li>Camera Ready Submission</li>
                            15 August 2023
                            <li>Conference Day</li>
                            29 – 30 September 2023
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade">

                    <img src="{{ url('img/extended_juli.png') }}" alt width="590" height="950">
                </div><!-- End Quote Form -->

            </div>

        </div>
    </section><!-- End Get Started Section -->

    <!-- ======= Keynote Section ======= -->
    <section id="keynote" class="keynote">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Keynote Speaker</h2>
            </div>

            <div class="row gy-4">

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url('{{ url('img/speaker/prof-kiyono.jpg') }}');"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Prof. Junji Kiyono</h4>
                                    <p>Kyoto University, Japan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url('{{ url('img/speaker/prof-richard.jpg') }}');"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Prof. Richard Haigh</h4>
                                    <p>University of Huddersfield, UK</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url('{{ url('img/speaker/prof-Indrajit.jpg') }}');"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Assoc Prof. Indrajit Pal</h4>
                                    <p> Asian Institute of Technology, Thailand</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url('{{ url('img/speaker/prof-marlon.jpg') }}');"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Assoc. Prof. Marlon Era</h4>
                                    <p>De la Salle University, Philippines</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url('{{ url('img/speaker/prof-iman.jpg') }}');"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Prof. Imam Satyarno</h4>
                                    <p>Universitas Gadjah Mada, Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url('{{ url('img/speaker/dr-yulvi.jpg') }}');"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Dr.Eng. Yulvi Zaika</h4>
                                    <p>Universitas Brawijaya, Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url('{{ url('img/speaker/dr-andriani.jpg') }}');"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Dr. Andriani, S.T, M.T</h4>
                                    <p>Unversitas Andalas, Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url('{{ url('img/speaker/prof-fauzan.jpg') }}');"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Prof. Fauzan</h4>
                                    <p>Universitas Andalas, Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url('{{ url('img/speaker/dr-dody.jpg') }}');"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Dr. Dody Ruswandi,MSCE </h4>
                                    <p>Senior Officer BNPB, Indonesia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url('{{ url('img/speaker/prof-ahmad.jpg') }}');"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Prof. Ahmad Safuan</h4>
                                    <p>Universiti Teknologi Malaysia, Malaysia </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="card-item">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="card-bg" style="background-image: url('{{ url('img/speaker/prof-saravenan.jpg') }}');"></div>
                            </div>
                            <div class="col-xl-7 d-flex align-items-center">
                                <div class="card-body">
                                    <h4 class="card-title">Prof. Saravanan Subbarayan</h4>
                                    <p>National Institute of Technology, India</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- End Card Item -->

            </div>

        </div>
    </section><!-- End Constructions Section -->

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">





</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id=" footer" class="footer">

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
                            <strong>Universitas Dharma Andalas</strong> <br>
                        </p>
                        <div class="social-links d-flex mt-3">
                            <a href="#" class="d-flex align-items-center justify-content-center"><i
                                    class="bi bi-twitter"></i></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><i
                                    class="bi bi-facebook"></i></a>
                            <a href="https://www.instagram.com/icdmm2023/"
                               class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><i
                                    class="bi bi-linkedin"></i></a>
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

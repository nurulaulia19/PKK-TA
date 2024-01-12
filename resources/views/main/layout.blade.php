<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ url ('image/remove.png') }}" rel="icon" />
  <link href="{{ url ('image/remove.png') }}" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ url('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="{{ url('assets/css/variables.css')}}" rel="stylesheet">
  <!-- <link href="{{ url('assets/css/variables-blue.css')}}" rel="stylesheet"> -->
  <!-- <link href="{{ url('assets/css/variables-green.css')}}" rel="stylesheet"> -->
  <!-- <link href="{{ url('assets/css/variables-orange.css')}}" rel="stylesheet"> -->
  <!-- <link href="{{ url('assets/css/variables-purple.css')}}" rel="stylesheet"> -->
  <!-- <link href="{{ url('assets/css/variables-red.css')}}" rel="stylesheet"> -->
  <!-- <link href="{{ url('assets/css/variables-pink.css')}}" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="{{ url('assets/css/main.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz - v2.1.0
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="/" style="color: black"><img src="{{ url('../image/remove.png') }}" style="padding: 10px 10px 10px 10px;" width="50px" />
            PEMBERDAYAAN DAN KESEJAHTERAAN KELUARGA (PKK) KAB.INDRAMAYU
        </a>
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        {{-- <h1>HeroBiz<span>.</span></h1> --}}
      </a>

      <nav id="navbar" class="navbar">
        <ul>

            <li><a class="nav-link scrollto" href="/">Beranda</a></li>


          <li class="dropdown"><a href="#"><span>Profile</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="/sejarah">Sejarah PKK</a></li>
              <li><a href="/program">10 Program PKK</a></li>
              <li><a href="/arti">Arti dan Lambang PKK</a></li>
              <li><a href="/visi">Visi & Misi TP Kab. Indramayu</a></li>
              <li class="dropdown"><a href="#"><span>Bagan Mekanisme Gerakan PKK</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                    <li>
                      <a href="/baganmekpkk">Bagan Mekanisme Gerakkan PKK Di Indramayu</a>
                    </li>
                    <li>
                      <a href="baganmekel">Bagan Mekanisme Gerakkan PKK Di Desa/Kelurahan</a>
                    </li>
                  </ul>
              </li>
              <li class="dropdown">
                <a href="#"
                  ><span
                    >Bagan Struktur TP PKK Dan Kelompok-Kelompok PKK</span
                  >
                  <i class="bi bi-chevron-right"></i
                ></a>
                <ul>
                  <li>
                    <a href="/pkk"
                      >Bagan Struktur TP PKK Kabupaten
                    </a>
                  </li>
                  <li>
                    {{-- <a href="/baganmekel">Bagan Struktur PKK Kecamatan</a> --}}
                  </li>
                </ul>
              </li>
              <li>
                <a href="/profil_main">Profile Pembina dan Ketua TP PKK</a>
              </li>
            </ul>
          </li>

          <li class="dropdown">
            <a href="#services"
              ><span>POKJA</span>
              <i class="bi bi-chevron-down"></i
            ></a>
            <ul>
              <li class="dropdown">
                <a href="#"
                  ><span>Kelompok Kerja (POKJA) I</span>
                  <i class="bi bi-chevron-right"></i
                ></a>
                <ul>
                  <li><a href="/pokja1">Program POKJA I</a></li>
                  {{-- <li><a href="/papan1">Papan Data POKJA I</a></li> --}}
                </ul>
              </li>
              <li class="dropdown">
                <a href="#"
                  ><span>Kelompok Kerja (POKJA) II</span>
                  <i class="bi bi-chevron-right"></i
                ></a>
                <ul>
                  <li><a href="/pokja2">Program POKJA II</a></li>
                  {{-- <li><a href="/papan2">Papan Data POKJA II</a></li> --}}
                </ul>
              </li>
              <li class="dropdown">
                <a href="#"
                  ><span>Kelompok Kerja (POKJA) III</span>
                  <i class="bi bi-chevron-right"></i
                ></a>
                <ul>
                  <li><a href="/pokja3">Program POKJA III</a></li>
                  {{-- <li><a href="papan3">Papan Data POKJA III</a></li> --}}
                </ul>
              </li>
              <li class="dropdown">
                <a href="#"
                  ><span>Kelompok Kerja (POKJA) IV</span>
                  <i class="bi bi-chevron-right"></i
                ></a>
                <ul>
                  <li><a href="/pokja4">Program POKJA IV</a></li>
                  {{-- <li><a href="/papan4">Papan Data POKJA IV</a></li> --}}
                </ul>
              </li>

            </ul>
          </li>

          <li class="dropdown">
            <a href="#"
              ><span>Informasi</span> <i class="bi bi-chevron-down"></i
            ></a>
            <ul>
              <li><a href="/allberita">Berita PKK</a></li>
              <li><a href="/agenda">Agenda Kegiatan</a></li>
              <li><a href="/allgaleri">Galeri Kegiatan</a></li>
              {{-- <li><a href="/kontak">Kontak Kami</a></li> --}}
            </ul>
          </li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle d-none"></i>
      </nav><!-- .navbar -->

      <a class="btn-getstarted scrollto" href="/kader_dasawisma/login">Masuk</a>

    </div>
  </header><!-- End Header -->

  {{-- <section id="hero-animated" class="hero-animated d-flex align-items-center">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
      <img src="assets/img/hero-carousel/hero-carousel-3.svg" class="img-fluid animated">
      <h2>Welcome to <span>HeroBiz</span></h2>
      <p>Et voluptate esse accusantium accusamus natus reiciendis quidem voluptates similique aut.</p>
      <div class="d-flex">
        <a href="#about" class="btn-get-started scrollto">Get Started</a>
        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
      </div>
    </div>
  </section> --}}

 @yield('container')
 @yield('li')

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <img src="{{ url('../image/remove.png') }}" width="200px">
            </div>
          <div class="col-lg-3 col-md-4">
            <div class="footer-info">
              <h3>Kontak Kami</h3>
              <p>
                Jalan Wiralodra <br>
                No. 53, Indramayu<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> kabupatenindramayutppkk@gmail.com<br>
              </p>
            </div>
          </div>

          {{-- <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div> --}}

          {{-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> --}}

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>SEKRETARIAT TIM PENGGERAK PKK KABUPATEN INDRAMAYU</h4>
          </div>

        </div>
      </div>
    </div>

    <div class="footer-legal text-center">
      <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
          <div class="copyright">
            &copy; Copyright <strong><span>Tim Penggerak Pemberdayaan Kesejahteraan Keluarga (PKK) Kab. Indramayu</span></strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ -->
            Designed by Nisa Fadilah</a>
          </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
          <a href="https://www.facebook.com/profile.php?id=100075939237683" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="https://instagram.com/pkkkabupatenindramayu?utm_medium=copy_link" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>

      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ url('assets/js/main.js') }}"></script>
  <script src="http://maps.googleapis.com/maps/api/js"></script>
  @stack('script-addon')

</body>

</html>

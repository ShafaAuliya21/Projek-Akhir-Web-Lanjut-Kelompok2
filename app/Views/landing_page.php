<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Beranda</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="<?= base_url("assets/css/style.css")?>">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">SisPro</a></h1>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#services">Fitur</a></li> 
          <li><a class="getstarted scrollto" href="<?= base_url('sign_up')?>">Daftar</a></li>
          <li><a class="getstarted scrollto" href="<?= base_url('sign_in')?>">Masuk</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Solusi Lebih Baik untuk Daftar Seminar</h1>
          <h5><i>Pendaftaran seminar mudah dan cepat di sini! <br> Daftar seminar sesuai dengan kebutuhan Anda</h5></i>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="<?= base_url('sign_up')?>" class="btn-get-started scrollto">Mulai</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets/img/Landing.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tentang</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6">
            <p>
              Website pendaftaran seminar adalah platform online yang dirancang untuk memudahkan mahasiswa dalam 
              menemukan, mendaftar, dan mengikuti berbagai seminar. Website ini menyediakan akses yang mudah dan 
              efisien tentang seminar-seminar yang tersedia. Cara melalukan pendaftaran seminar pada website ini seperti :
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Melakukan pengisian berkas seminar secara lengkap</li>
              <li><i class="ri-check-double-line"></i> Pihak admin akan melakukan pengecekan berkas serta akan divalidasi jika berkas lengkap dan benar</li>
              <li><i class="ri-check-double-line"></i> Setelah mendapatkan validasi berkas, anda bisa langsung mendaftar seminar</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Dengan melakukan pendaftaran seminar secara online pada website ini, mahasiswa dapat menghemat 
              waktu dan upaya yang sebelumnya diperlukan untuk mengisi formulir pendaftaran secara manual atau 
              harus mengunjungi lokasi pendaftaran fisik. Selain itu, dapat mengakses informasi seminar, 
              termasuk jadwal, pembicara, dan materi seminar, dengan mudah melalui platform online ini, memberikan 
              akses terkini tanpa harus datang secara langsung. Website ini bertujuan untuk memberikan pengalaman 
              pendaftaran yang lebih efisien dan nyaman, sehingga mahasiswa dapat fokus pada pembelajaran dan pengembangan diri mereka
            </p>
            <a href="#" class="btn-learn-more">Pelajari Selengkapnya</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Pertanyaan terkait <strong>Website Pendaftran Seminar</strong></h3>
              <p>
                Berikut adalah pertanyaan-pertanyaan terkait website pendaftaran seminar
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Apa itu website pendaftaran seminar, dan apa tujuannya? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                    Website pendaftaran seminar adalah platform online yang dirancang khusus untuk memfasilitasi pendaftaran peserta seminar secara digital. Tujuannya adalah untuk memudahkan peserta dalam mencari, mendaftar, dan mengikuti berbagai seminar.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Bagaimana cara mencari seminar yang sesuai di website pendaftaran seminar? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    Untuk mencari seminar yang sesuai, pengguna dapat menggunakan fitur pencarian berdasarkan topik, tanggal, lokasi, atau kata kunci tertentu. Selain itu, juga dapat menjelajahi jadwal seminar yang akan datang untuk menemukan seminar yang menarik minat.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Bagaimana proses absensi seminar yang dilakukan melalui website ini? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                    Proses absensi seminar biasanya melibatkan peserta yang hadir dalam ruangan seminar untuk melakukan absensi melalui website ini. Fitur absensi terdapat setelah melakukan join seminar pada website ini.
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/Landingpage.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Fitur</h2>
          <p>
            Fitur-fitur yang terdapat pada website ini seperti
          </p>
        </div>

        <div class="row">
          <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-book-open"></i></div>
              <h4><a href="">Pengisian Berkas Seminar</a></h4>
              <p>Fitur ini memungkinkan mahasiswa seminar dapat mengunggah berkas-berkas yang diperlukan</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Pendaftaran Seminar</a></h4>
              <p>Fitur pendaftaran seminar memungkinkan mahasiswa untuk mendaftar secara online</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-time"></i></div>
              <h4><a href="">Melihat Jadwal Seminar</a></h4>
              <p>Fitur ini memungkinkan mahasiswa untuk menjelajahi jadwal seminar yang akan datang</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-pencil"></i></div>
              <h4><a href="">Absensi Seminar</a></h4>
              <p>Fitur absensi seminar digunakan oleh peserta seminar untuk melakukan absensi</p>
            </div>
          </div>

          <div class="section-title">
          <br><br><p>
            Dengan berbagai fitur dan informasi yang kami sediakan, web pendaftaran seminar bertujuan untuk memberikan 
            pengalaman pendaftaran yang lebih nyaman dan efektif bagi peserta seminar
          </p>
        </div>

      </div>
    </section><!-- End Services Section -->
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>2023</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
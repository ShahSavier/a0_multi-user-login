<?php include 'settings.php'; //include settings
// echo session_id();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FMS - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/fmsbar.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="home.php" class="logo d-flex align-items-center">
        <img src="assets/img/fmslogo.png" alt="">
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li class="dropdown"><a href="#"><span>Project</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="project-form.php">Project Form</a></li>
              <li><a href="project-list.php">Project List</a></li>
              <li><a href="project-approval.php">Project Approval</a></li>
            </ul>
          </li>
          <li><a href="supervisor.php">Supervisor</a></li>
          <li><a href="examiner.php">Examiner</a></li>
          <li><a href="helpdesk.php">Helpdesk</a></li>
          <li><a href="../../includes/logout.php">Log Out</a></li>
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
            <h2 data-aos="fade-down">Welcome to <span>FYP Management System</span></h2>
            <p data-aos="fade-up">This Final Year Project Management System of FMS is a website for students and lecturers in managing Final Year Project affairs.</p>
            <a data-aos="fade-up" data-aos-delay="200" href="#stats-counter" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(assets/img/header-bg.png)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/header-bg2.png)"></div>
      <div class="carousel-item" style="background-image: url(assets/img/header-bg3.png)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter section-bg">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1300" data-purecounter-duration="1" class="purecounter"></span>
                <p>Students</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-6 col-md-6">
            <div class="stats-item d-flex align-items-center w-100 h-100">
              <i class="bi bi-people color-pink flex-shrink-0"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="74" data-purecounter-duration="1" class="purecounter"></span>
                <p>Lecturers</p>
              </div>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>
    </section><!-- End Stats Counter Section -->

    <!-- ======= Recent News Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
      <div class="container" data-aos="fade-up">

        <div class=" section-header">
          <h2>News</h2>
        </div>

        <div class="row gy-5">

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/header-bg.png" class="img-fluid" alt="">
                <span class="post-date">October 11</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Supervisor finding for Students</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Dr Aznoora binti Osman</span>
                  </div>
                </div>

              </div>
            </div>
          </div><!-- End post item -->

          <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="post-item position-relative h-100">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/header-bg.png" class="img-fluid" alt="">
                <span class="post-date">October 18</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Students F3 Form</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Dr Aznoora binti Osman</span>
                  </div>
                </div>

                <hr>
                <a href="" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

              </div>
            </div>
          </div><!-- End post item -->

          <div class="col-xl-4 col-md-6">
            <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

              <div class="post-img position-relative overflow-hidden">
                <img src="assets/img/header-bg.png" class="img-fluid" alt="">
                <span class="post-date">October 25</span>
              </div>

              <div class="post-content d-flex flex-column">

                <h3 class="post-title">Student proposal submition</h3>

                <div class="meta d-flex align-items-center">
                  <div class="d-flex align-items-center">
                    <i class="bi bi-person"></i> <span class="ps-2">Dr Aznoora binti Osman</span>
                  </div>
                </div>

              </div>
            </div>
          </div><!-- End post item -->
        </div>
      </div>
    </section>
    <!-- End Recent Blog Posts Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="footer-info">
              <h3>FMS Management</h3>
              <p>
                Fakulti Sains Komputer dan Matematik <br>
                Universiti Teknologi MARA <br>
                Cawangan Perlis, Kampus Arau <br>
                Fakulti Sains Komputer dan Matematik <br>
                02600 Arau, Perlis <br><br>
                <strong>Phone:</strong> +604 988 2487/2502/2506<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="https://twitter.com/fskmperlis?lang=en" class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/fskm.uitm.perlis/" class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/fskm.uitm.perlis/?hl=en" class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-4 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="home.html">Home</a></li>
              <li><a href="helpdesk.html">Helpdesk</a></li>
              <li><a href="#">Terms of service</a></li>
              <li><a href="#">Privacy policy</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-3 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="#">Project</a></li>
              <li><a href="#">Supervisor</a></li>
              <li><a href="#">Examiner</a></li>
            </ul>
          </div><!-- End footer links column-->

        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>FYP Management</span></strong>. All Rights Reserved
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
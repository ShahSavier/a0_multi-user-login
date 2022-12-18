<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FMS - Examiner</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/fmsbar.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

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

<?php
include 'settings.php';
$usersid = $_SESSION["id"];
// $sql = "SELECT * FROM project_info INNER JOIN users ON project_info.user_id = users.id INNER JOIN lect_info ON lect_info.lect_id = project_info.lect_info_id";
$sql = "SELECT * FROM examiner INNER JOIN lect_info ON examiner.lect_info_id = lect_info.lect_id WHERE examiner.user_id = $usersid";
$result = mysqli_query($conn, $sql);
?>

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
          <li><a href="home.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>Project</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="project-form.php">Project Form</a></li>
              <li><a href="project-list.php">Project Detail</a></li>
            </ul>
          </li>
          <li><a href="supervisor.php">Supervisor</a></li>
          <li><a href="examiner.php" class="active">Examiner</a></li>
          <li><a href="helpdesk.php">Helpdesk</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/header-bg.png');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Examiner</h2>
        <ol>
          <li><a href="home.php">Home</a></li>
          <li>Examiner</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Examiner for Project Defense</h2>
        </div>

        <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-3">
                  <div class="card-bg" style="background-image: url(assets/img/header-bg.png);"></div>
                </div>
                <div class="col-xl-8 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">En Ros Syamsul bin Hamid</h4>
                    <ul style=“list-style-type:square”>
                      <li>Computer Technology & Networking</li>
                      <li>rossyamsul@uitm.edu.my</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
        </div><!-- End Card Item -->
      </div>
    </section><!-- End Constructions Section -->

    <?php  
                if(mysqli_num_rows($result) > 0)  
                    {  
                       while($row = mysqli_fetch_array($result))  
                          {  
                          ?>
                          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                          <div class="card-item">
                            <div class="row">
                              <div class="col-xl-3">
                                <div class="card-bg" style="background-image: url(<?php echo $row["lect_img"];?>);"></div>
                              </div>  
                          <tr>  
                               <td><img src="<?php echo $row["lect_img"];?>" alt="..." class="rounded-circle img-fluid"></td>  
                               <td><br><?php echo $row["lect_name"]; ?></td>
                               <td><br><?php echo $row["lect_email"]; ?></td>
                               <td><br><?php echo $row["lect_num"]; ?></td> 
                               <td><br><?php echo $row["lect_spec"]; ?></td>          
                          </tr>  
                          <?php  
                           }  
                      }  
                ?> 

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
                <a href="https://twitter.com/fskmperlis?lang=en"
                  class="d-flex align-items-center justify-content-center"><i class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/fskm.uitm.perlis/"
                  class="d-flex align-items-center justify-content-center"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/fskm.uitm.perlis/?hl=en"
                  class="d-flex align-items-center justify-content-center"><i class="bi bi-instagram"></i></a>
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

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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
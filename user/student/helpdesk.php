<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FMS - Helpdesk</title>
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

   <!-- Template sweetalert File -->
  <script src="assets/js/sweetalert.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<?php
 include 'settings.php';
   //session_start();

   $matrixnumber = $_SESSION["matrix_number"];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $complaint = $_POST['complaint'];
  $matrix_number = $_SESSION["matrix_number"];
  $complaint_status = $_POST['complaint_status'];

  $complaint = mysqli_real_escape_string($conn, $complaint);
  $matrix_number = mysqli_real_escape_string($conn, $matrix_number);
  $complaint_status = mysqli_real_escape_string($conn, $complaint_status);

				$sql = "INSERT INTO complaint(complaint, matrix_number, complaint_status)VALUES('$complaint', '$matrix_number', '$complaint_status')";

				if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript">
                        jQuery(function validation() {
                            swal({
                                title: "Successfully send complaint form",
                                icon: "success",
                                button: "Ok",
                            });
                        });
                    </script>';
  } else {
    echo '<script type="text/javascript">
    jQuery(function validation() {
        swal({
            title: "Please fill form that has been provided",
            text: "If this issue going, please sent email directly to our support helpdesk@fms.com",
            icon: "error",
            button: "Ok",
        });
    });
</script>';
  }

        // var_dump($sql);
	
}
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
          <li><a href="index.php">Home</a></li>
          <li class="dropdown"><a href="#"><span>Project</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="project-form.php">Project Form</a></li>
              <li><a href="project-list.php">Project List</a></li>
              <li><a href="project-approval.php">Project Approval</a></li>
            </ul>
          </li>
          <li><a href="supervisor.php">Supervisor</a></li>
          <li><a href="examiner.php">Examiner</a></li>
          <li><a href="helpdesk.php" class="active">Helpdesk</a></li>
          <li><a href="../../includes/logout.php">Log Out</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/header-bg.png');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Helpdesk</h2>
        <ol>
          <li><a href="home.php">Home</a></li>
          <li>Helpdesk</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">
            <div class="col" style="padding-bottom: 20px;">
              <div class="info-item d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>Head of Learning Centre</p>
                <p>kppfskmpls@uitm.edu.my</p>
              </div>
            </div><!-- End Info Item -->

            <div class="col">
              <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>Head of Learning Centre</p>
                <p>+6049882506</p>

              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="" method="post" enctype="multipart/form-data" class="php-email-form" autocomplete="off">
              <h5>Any Complaint or Inquiry?</h5><br>
              <div class="row gy-4">
                <div class="col-lg-6 form-group">
                  <label for="sel1">Student Name</label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="<?php $ufunc->UserName(); //Show name who is in session user?>" disabled>
                </div>
                <div class="col-lg-6 form-group">
                  <label for="sel1">Student Id</label>
                  <input type="text" name="matrix_number" class="form-control" value="<?php echo $matrixnumber ?>" disabled /><br>
                </div>
              </div>
              <div class="form-group">
                <label for="sel1">Complaint</label>
                <textarea class="form-control" name="complaint" id="complaint" rows="5" placeholder="Complaint description" value="<?php if (isset($_POST['complaint'])) ?>" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" value="Create">Submit</button></div>
              <input type="hidden" name="complaint_status" value="In Progress" />
            </form>
          </div><!-- End Contact Form -->
        </div>

      </div>
    </section><!-- End Contact Section -->
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
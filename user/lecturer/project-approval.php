<?php
include 'settings.php';
$lectid = $_SESSION["lect_id"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FMS - Project Details</title>
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

  <!-- DataTables Files-->

  <!-- tuto-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>


  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  <style>
    .wrapper {
      width: 1000px;
      margin: 0 auto;
    }

    table tr td:last-child {
      width: auto;
    }
  </style>
  <script>
    $(document).ready(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
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
              <li><a href="project-list.php">Project List</a></li>
              <li><a href="project-approval.php" class="active">Project Approval</a></li>
            </ul>
          </li>
          <li><a href="helpdesk.php">Helpdesk</a></li>
          <li><a href="../../includes/logout.php">Log Out</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/header-bg.png');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Project Approval</h2>
        <ol>
          <li><a href="home.php">Home</a></li>
          <li>Project Approval</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Project Details Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container my-4">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="mt-5 mb-3 clearfix">
                <h2 class="pull-left">Project Approval</h2>
                <p>List Student Name need to update for their status approval Final Project</p>
              </div>
              <?php
              // Include config file
              require_once "settings.php";

              // Attempt select query execution
              $sql = "SELECT * FROM project_info INNER JOIN users ON project_info.user_id = users.id INNER JOIN lect_info ON lect_info.lect_id = project_info.lect_info_id WHERE project_info.lect_info_id = $lectid";
              // $sql = "SELECT * FROM project_info INNER JOIN users ON project_info.user_id = users.id INNER JOIN lect_info ON lect_info.lect_id = project_info.lect_info_id WHERE project_info.lect_info_id =  ";
              if ($result = mysqli_query($conn, $sql)) {
                if (mysqli_num_rows($result) > 0) {
                  echo '<table class="table table-bordered table-striped">';
                  echo "<thead>";
                  echo "<tr>";
                  echo "<th>Student Name</th>";
                  echo "<th>Lecturer Name</th>";
                  echo "<th>Project Title</th>";
                  echo "<th>Approval</th>";
                  echo "<th>Properties</th>";
                  echo "</tr>";
                  echo "</thead>";
                  echo "<tbody>";
                  while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['lect_name'] . "</td>";
                    echo "<td>" . $row['project_title'] . "</td>";
                    echo "<td>" . $row['project_approval'] . "</td>";
                    echo "<td>";
                    echo '<a href="project-approval-details.php?info_id=' . $row['info_id'] . '" class="mr-3" title="View Record" data-toggle="tooltip"> <span class="fa fa-eye"></span> View</a>';
                    echo '<a href="project-approval-update.php?info_id=' . $row['info_id'] . '" class="mr-3" title="View Record" data-toggle="tooltip"> <span class="fa fa-pencil"></span> Update</a>';
                    echo "</td>";
                    echo "</tr>";
                  }
                  echo "</tbody>";
                  echo "</table>";
                  // Free result set
                  mysqli_free_result($result);
                } else {
                  echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                }
              } else {
                echo "Oops! Something went wrong. Please try again later.";
              }

              // Close connection
              mysqli_close($conn);
              ?>
            </div>
          </div>
        </div>
        </table>
      </div>
      </div>
      </div>
    </section><!-- End Supervisor Section -->

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
  <script src="assets/js/jquery-3.5.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    $(document).ready(function () {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

</body>

</html>
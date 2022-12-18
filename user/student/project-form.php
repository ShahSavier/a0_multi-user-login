<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FMS- Project Form</title>
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

$matrixnumber = $_SESSION["matrix_number"];
$usersid = $_SESSION["id"];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {


  $usersid = $_SESSION["id"];
  $lect_id = $_POST['select_box'];
  $project_title = $_POST['project_title'];
  $project_type = $_POST['project_type'];
  $project_approval = $_POST['project_approval'];

  $usersid = mysqli_real_escape_string($conn, $usersid);
  $lect_id = mysqli_real_escape_string($conn, $lect_id);
  $project_title = mysqli_real_escape_string($conn, $project_title);
  $project_type = mysqli_real_escape_string($conn, $project_type);
  $project_approval = mysqli_real_escape_string($conn, $project_approval);

  $sql = "INSERT INTO project_info(user_id, lect_info_id, project_title, project_type, project_approval)VALUES('$usersid', '$lect_id', '$project_title', '$project_type', '$project_approval')";

  if (mysqli_query($conn, $sql)) {
    echo '<script type="text/javascript">
                        jQuery(function validation() {
                            swal({
                                title: "Successfully receive registered form",
                                text: "Please wait for supervisor approval",
                                icon: "success",
                                button: "Ok",
                            });
                        });
                    </script>';
  } else {
    echo '<script type="text/javascript">
    jQuery(function validation() {
        swal({
            title: "Please Fill The Form",
            text: "If the issue keep going, please clear your browser cache or using incognito mode.",
            icon: "error",
            button: "Ok",
        });
    });
</script>';
  }

  var_dump($sql);

}

$sql = "SELECT * FROM lect_info ORDER BY lect_id ASC";
$result = $conn->query($sql);

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
          <li class="dropdown"><a href="#" class="active"><span>Project</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
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

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/header-bg.png');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Project Form</h2>
        <ol>
          <li><a href="home.php">Home</a></li>
          <li>Project Form</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3>Student Project Form</h3>
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade">
            <form action="" method="post" enctype="multipart/form-data" class="php-email-form" autocomplete="off">
              <div class="row gy-3">

                <div class="col-md-12">
                  <label for="sel1">Student Name</label>
                  <input type="text" name="name" class="form-control" placeholder="<?php $ufunc->UserName(); ?>" disabled>
                </div>

                <div class="col-md-12 ">
                  <label for="sel1">Student Id</label>
                  <input type="text" class="form-control" name="studId" placeholder="<?php echo $matrixnumber ?>"
                    disabled>
                </div>

                <div class="col-md-12">
                  <label for="sel1">Project Name</label>
                  <input type="text" class="form-control" name="project_title" placeholder="e.g Car Rental System"
                    required>
                </div>

                <div class="form-group">
                  <label for="type">Project Type</label>
                  <select class="form-control" id="type" name="project_type">
                    <option>Select here</option>
                    <option value="Web Application">Web Application</option>
                    <option value="Mobile Application">Mobile Application</option>
                    <option value="IoT">IoT</option>
                  </select>
                </div>

                <div class="form-group">
                <label for="type">Select Lecturer</label>
                  <select name="select_box" class="form-control" id="select_box">
                    <option value="">Select Lecturer</option>
                    <?php
                          foreach ($result as $row) {
                            echo '<option value="' . $row["lect_id"] . '">' . $row["lect_name"] . '</option>';
                          }
                          ?>
                  </select>
                </div>                

                <input type="hidden" name="user_id" value="<?php echo $usersid ?>" disabled />
                <input type="hidden" name="project_approval" value="In Progress" />
                <button type="submit">Submit</button>
              </div>
            </form>
        </div><!-- End Quote Form -->

      </div>

      </div>
    </section><!-- End Get Started Section -->

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

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/dselect.js"></script>

    <script>

      var select_box_element = document.querySelector('#select_box');

      dselect(select_box_element, {
        search: true
      });

    </script>

</body>

</html>
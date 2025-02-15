<?php
// Include config file
require_once "settings.php";

// Define variables and initialize with empty values
$name = $address = $salary = "";
$name_err = $address_err = $salary_err = "";

// Processing form data when form is submitted
if (isset($_POST["info_id"]) && !empty($_POST["info_id"])) {
  // Get hidden input value
  $infoid = $_POST["info_id"];

  // Validate project approval
  $input_approval = trim($_POST["project_approval"]);
  if (empty($input_approval)) {
    $approval_err = "Please enter an address.";
  } else {
    $project_approval = $input_approval;
  }

  // Validate Message
  $input_message = trim($_POST["project_message"]);
  if (empty($input_message)) {
    $message_err = "Please enter a message.";
  } else {
    $project_message = $input_message;
  }

  // Check input errors before inserting in database
  if (empty($approval_err) && empty($message_err)) {
    // Prepare an update statement
    $sql = "UPDATE project_info SET project_approval=? , project_message=? WHERE info_id=?";

    if ($stmt = mysqli_prepare($link, $sql)) {
      // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "sss", $param_project_approval, $param_project_message, $param_info_id);

      // Set parameters
      // $param_user_id = $user_id;
      // $param_lect_info_id = $lect_info_id;
      // $param_project_title = $project_title;
      // $param_project_type = $project_type;
      $param_project_approval = $project_approval;
      $param_project_message = $project_message;
      $param_info_id = $infoid;

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        // Records updated successfully. Redirect to landing page
        header("location: index.php");
        exit();
      } else {
        echo "Oops! Something went wrong. Please try again later.";
      }
    }

    // Close statement
    mysqli_stmt_close($stmt);
  }

  // Close connection
  mysqli_close($conn);
} else {
  // Check existence of id parameter before processing further
  if (isset($_GET["info_id"]) && !empty(trim($_GET["info_id"]))) {
    // Get URL parameter
    $infoid = trim($_GET["info_id"]);

    // Prepare a select statement
    //$sql = "SELECT * FROM employees WHERE id = ?";
    $sql = "SELECT * FROM project_info INNER JOIN users ON project_info.user_id = users.id INNER JOIN lect_info ON lect_info.lect_id = project_info.lect_info_id WHERE project_info.info_id = '$infoid' ";
    if ($stmt = mysqli_prepare($conn, $sql)) {
      // Bind variables to the prepared statement as parameters
      // mysqli_stmt_bind_param($stmt, "i", $param_id);

      // Set parameters
      $param_id = $infoid;

      // Attempt to execute the prepared statement
      if (mysqli_stmt_execute($stmt)) {
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 1) {
          /* Fetch result row as an associative array. Since the result set
          contains only one row, we don't need to use while loop */
          $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

          // Retrieve individual field value
          $name = $row["name"];
          $lect_name = $row["lect_name"];
          $project_title = $row["project_title"];
          $project_type = $row["project_type"];
          $project_approval = $row["project_approval"];
          $project_message = $row["project_message"];
        } else {
          // URL doesn't contain valid id. Redirect to error page
          header("location: error.php");
          exit();
        }

      } else {
        echo "Oops! Something went wrong. Please try again later.";
      }
    }

    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($conn);
  } else {
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>FMS - Lecturer Project Approval</title>
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
      width: 600px;
      margin: 0 auto;
    }
  </style>

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
          <li class="dropdown"><a href="#" class="active"><span>Project</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="project-form.php">Project Form</a></li>
              <li><a href="project-details.php">Project List</a></li>
              <li><a href="project-approval.php">Project Approval</a></li>
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

        <h2> Lecturer Project Approval</h2>
        <ol>
          <li><a href="home.php">Home</a></li>
          <li> Lecturer Project Approval </li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Project Details Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container my-8" style="width: 50%;">
        <div class="wrapper">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12">
                <h2 class="mt-5">Lecturer Project Approval</h2>
                <p>Please edit the input values and submit to update the employee record.</p>
                <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                  <div class="form-group">
                    <label>Student Name</label>
                    <input type="text" name="name" class="form-control " value="<?php echo $name; ?>" disabled>
                  </div>
                  <div class="form-group">
                    <label>Lecturer Name</label>
                    <input type="text" name="lect_name" class="form-control " value="<?php echo $lect_name; ?>"
                      disabled>
                  </div>
                  <div class="form-group">
                    <label>Project Title</label>
                    <input type="text" name="project_title" class="form-control " value="<?php echo $project_title; ?>"
                      disabled>
                  </div>
                  <div class="form-group">
                    <label>Project Type</label>
                    <input type="text" name="project_type" class="form-control " value="<?php echo $project_type; ?>"
                      disabled>
                  </div>
                  <div class="form-group">
                    <label>Status Approval</label>
                    <select class="form-control" aria-label="Default select example" name="project_approval">
                      <option selected disabled> Current project approval :
                        <?php echo $project_approval; ?>
                      </option>
                      <option disabled><-- Please choose option above --></option>
                      <option value="Approve">Approve</option>
                      <option value="Reject">Reject</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Comment</label>
                    <input type="text" name="project_message value=" <?php echo $project_message; ?>"
                    class="form-control">
                  </div>
                  <input type="hidden" name="info_id" class="form-control " value="<?php echo $infoid; ?>" />
                  <div class="float-right">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <a href="project-approval.php" class="btn btn-secondary ml-2">Cancel</a>
                  </div>
                </form>
              </div>
            </div>
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    $(document).ready(function () {
      $('$example').DataTable();
    });
  </script>

</body>

</html>
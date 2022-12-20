<?php include 'settings.php'; //include settings
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>FYP Management</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="aimuni_nadhrah">

  <!-- MATERIAL DESIGN ICONIC FONT -->
  <link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

  <!-- STYLE CSS -->
  <link rel="stylesheet" href="assets/style-login.css">
</head>

<body>
  <div class="wrapper">
    <form action="includes/email.php" id="wizard" method="POST">
      <h2></h2>
      <section>
        <div class="inner">
          <div class="image-holder">
            <img src="assets/img/login.png" class="height:800px;" alt="">
          </div>
          <div class="form-content">
            <div class="form-header">
              <h3>Login</h3>
            </div>

            <!-- Email Address Section -->

            <label style="font-size: 20px;">Email address</label>&nbsp;
            <div class="form-holder">
              <input name="email" type="email" id="inputEmail" placeholder="Please insert your email" class="form-control" required autofocus>
            </div>
            <div class="form-row"></div>

            <!-- Password Section -->

            <label style="font-size: 20px;">Password</label>

            <div class="form-holder">
              <input name="password" type="password" id="inputPassword" placeholder="Please insert your password" class="form-control" required autofocus>
            </div>
            <div class="form-row"></div>

            <!-- Submit Section Section -->

            <button class="btn btn-primary float-right" type="submit" name="submit">Login</button>
            <br><br>
            <div>
              <a href="register.php" class="float-right">Register new account</a>
            </div>

          </div>
        </div>
      </section>
    </form>
  </div>

  <!-- JQUERY -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>

  <!-- JQUERY STEP -->
  <script src="assets/js/jquery.steps.js"></script>
  <!-- Template created and distributed by Colorlib -->
</body>

</html>
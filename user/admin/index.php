<?php include 'settings.php'; //include settings ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ADMIN</title>
  </head>
  <body>
    <h1>This is Admin page</h1>
    <h2><?php echo $ufunc->AdminName(); //Show name who is in session user?></h2>
    <img src="assets/images/form-wizard-1.jpg" class="height:800px;" alt="">
    <a href="../admin/examiner-form.php">Examiner Allocation</a>
    <a href="../../includes/logout.php">Logout</a>
  </body>
</html>
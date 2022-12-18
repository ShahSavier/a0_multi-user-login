<?php
include '../../includes/functions.php'; //include functions
include '../../includes/connect.php'; //include connection
$ufunc = new UserFunctions;
$chss = new Email;
$chss->SessionCheckAdmin();
//Check user role is true
if (!isset($_SESSION['admin_email']) || $_SESSION['role'] != "2") {
  header("Location:../../includes/logout.php");
}
?>

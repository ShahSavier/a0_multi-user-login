<?php
include '../../includes/functions.php'; //include functions
include '../../includes/connect.php'; //include connection
$ufunc = new UserFunctions;
$chss = new Email;
$chss->SessionCheckLect();
//Check user role is true
if (!isset($_SESSION['lect_email']) || $_SESSION['role'] != "1") {
  header("Location:../../includes/logout.php");
}
?>

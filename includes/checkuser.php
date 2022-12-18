<?php
include_once 'functions.php'; //include functions
$check = new Email;
$check->SessionCheck();
$check->SessionCheckLect();
$check->SessionCheckAdmin();
$check->UserType();
?>

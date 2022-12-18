<?php
include_once 'connect.php'; // include connection
include 'functions.php'; //include functions
$email = new Email;
$email->EmailSystem();
$email->EmailLect();
$email->EmailAdmin();
$email->SessionCheck();
$email->SessionCheckLect();
$email->SessionCheckAdmin();
$email->UserType();
?>

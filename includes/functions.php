<?php
class Email
{
  public function EmailSystem()
  {
    session_start(); // Starting Session
    $error = ''; // Variable To Store Error Message
    if (!isset($_POST['submit'])) {
      if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
      }
    } else {
      include 'connect.php';
      // Define $username and $password
      $username = $_POST['email'];
      $password = md5($_POST['password']);
      // SQL query to fetch information of registerd users and finds user match.
      $query = "SELECT email, password FROM users WHERE email=? AND password=? LIMIT 1";
      // To protect MySQL injection for Security purpose
      $stmt = $conn->prepare($query);
      $stmt->bind_param("ss", $username, $password);
      $stmt->execute();
      $stmt->bind_result($username, $password);
      $stmt->store_result();
      if ($stmt->fetch()) { //fetching the contents of the row
        $_SESSION['email'] = $username; // Initializing Session
        $_SESSION['matrix_number'] = $matrixnumber;
        $_SESSION['id'] = $userid;
      }
      mysqli_close($conn); // Closing Connection
    }
  }

  public function EmailAdmin()
  {
    session_start(); // Starting Session
    $error = ''; // Variable To Store Error Message
    if (!isset($_POST['submit'])) {
      if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
      }
    } else {
      include 'connect.php';
      // Define $username and $password
      $username = $_POST['email'];
      $password = md5($_POST['password']);
      // SQL query to fetch information of registerd users and finds user match.
      $query = "SELECT admin_email, admin_password FROM admin WHERE admin_email=? AND admin_password=? LIMIT 1";
      // To protect MySQL injection for Security purpose
      $stmt = $conn->prepare($query);
      $stmt->bind_param("ss", $username, $password);
      $stmt->execute();
      $stmt->bind_result($username, $password);
      $stmt->store_result();
      if ($stmt->fetch()) { //fetching the contents of the row
        $_SESSION['admin_email'] = $username; // Initializing Session
        $_SESSION['admin_id'] = $adminid;
      }
      mysqli_close($conn); // Closing Connection
    }
  }

  public function EmailLect()
  {
    session_start(); // Starting Session
    $error = ''; // Variable To Store Error Message
    if (!isset($_POST['submit'])) {
      if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Lect Email or Password is invalid";
      }
    } else {
      include 'connect.php';
      // Define $username and $password
      $username = $_POST['email'];
      $password = md5($_POST['password']);
      // SQL query to fetch information of registerd users and finds user match.
      $query = "SELECT lect_email, pass FROM lect_info WHERE lect_email=? AND pass=? LIMIT 1";
      // To protect MySQL injection for Security purpose
      $stmt = $conn->prepare($query);
      $stmt->bind_param("ss", $username, $password);
      $stmt->execute();
      $stmt->bind_result($username, $password);
      $stmt->store_result();
      if ($stmt->fetch()) { //fetching the contents of the row
        $_SESSION['lect_email'] = $username; // Initializing Session
        $_SESSION['lect_num'] = $lectnum;
        $_SESSION['lect_id'] = $lectid;
      }
      mysqli_close($conn); // Closing Connection
    }
  }
  public function SessionVerify()
  {
    if (isset($_SESSION['email'])) {
      header("location: includes/checkuser.php"); // Check user session and role
    }

    if (isset($_SESSION['lect_email'])) {
      header("location: includes/checkuser.php"); // Check user session and role
    }

    if (isset($_SESSION['admin_email'])) {
      header("location: includes/checkuser.php"); // Check user session and role
    }

    // if (!isset($_SESSION['lect_email']) || $_SESSION['lect_role'] != "1")
  }
  public function SessionCheck()
  {
    global $conn;
    session_start(); // Starting Session
    // Storing Session
    $user_check = $_SESSION['email'];
    // SQL Query To Fetch Complete Information Of User
    $query = "SELECT * FROM users WHERE email = '$user_check'";
    $ses_sql = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($ses_sql);
    $_SESSION["id"] = $row["id"];
    $_SESSION["name"] = $row["name"];
    $_SESSION["role"] = $row["role"];
    $_SESSION["matrix_number"] = $row["matrix_number"];
  }

  public function SessionCheckLect()
  {
    global $conn;
    session_start(); // Starting Session
    // Storing Session
    $lect_check = $_SESSION['lect_email'];
    // SQL Query To Fetch Complete Information Of User
    $query = "SELECT * FROM lect_info WHERE lect_email = '$lect_check'";
    $ses_sql = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($ses_sql);
    $_SESSION["lect_id"] = $row["lect_id"];
    $_SESSION["lect_name"] = $row["lect_name"];
    $_SESSION["role"] = $row["role"];
    $_SESSION["lect_num"] = $row["lect_num"];
    $_SESSION["lect_matrixnum"] = $row["lect_matrixnum"];
  }

  public function SessionCheckAdmin()
  {
    global $conn;
    session_start(); // Starting Session
    // Storing Session
    $admin_check = $_SESSION['admin_email'];
    // SQL Query To Fetch Complete Information Of User
    $query = "SELECT * FROM admin WHERE admin_email = '$admin_check'";
    $ses_sql = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($ses_sql);
    $_SESSION["admin_id"] = $row["admin_id"];
    $_SESSION["admin_name"] = $row["admin_name"];
    $_SESSION["role"] = $row["role"];
  }
  public function UserType()
  {
    //if user role is 2, redirect to admin page
    if ($_SESSION["role"] == 2) {
      header("Location:../user/admin/");
    }
    //if user role is 1, redirect to lecturer page
    if ($_SESSION["role"] == 1) {
      header("Location:../user/lecturer/");
    }
    //if user role is 0, redirect to student page
    if ($_SESSION["role"] == 0) {
      header("Location:../user/student/");
    }
  }
}

//Global Variable Class for Session
class UserFunctions
{
  public function UserName()
  {
    $username = $_SESSION["name"];
    echo $username;
  }

  public function MatrixNumber()
  {
    $matrixnumber = $_SESSION["matrix_number"];
    echo $matrixnumber;
  }

  public function UsersId()
  {
    $usersid = $_SESSION["id"];
    echo $usersid;
  }

  public function LectId()
  {
    $lectid = $_SESSION["lect_id"];
    echo $lectid;
  }

  public function LectName()
  {
    $lectname = $_SESSION["lect_name"];
    echo $lectname;
  }

  public function LectMatrixNum()
  {
    $lect_matrixnum = $_SESSION["lect_matrixnum"];
    echo $lect_matrixnum;
  }

  public function AdminId()
  {
    $adminid = $_SESSION["admin_id"];
    echo $adminid;
  }

  public function AdminName()
  {
    $adminname = $_SESSION["admin_name"];
    echo $adminname;
  }
}

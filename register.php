<?php
include('conn.php');//DB Connection
if($_SERVER['REQUEST_METHOD'] == "POST")
{
 // Username and Password sent from Form
 $name = mysqli_real_escape_string($conn, $_POST['name']);
 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $password = mysqli_real_escape_string($conn, $_POST['password']);
 $password = md5($password); //Password Encrypted
 $role = mysqli_real_escape_string($conn, $_POST['role']);
 $matrix_number = mysqli_real_escape_string($conn, $_POST['matrix_number']);
 $sql = "INSERT INTO users(name,password,role,email,matrix_number) values('$name', '$password', '$role', '$email', '$matrix_number')";
 $result = mysqli_query($conn, $sql);
 echo "Created Successfully!";
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FYP Management</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="aimuni_nadhrah">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link href="https://getbootstrap.com/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="assets/style-login.css">
	</head>
	<body>
		<div class="wrapper">
            <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        		<!-- SECTION 1 -->
                <h2></h2>
                <section>
                    <div class="inner">
						<div class="image-holder">
							<img src="assets/img/register.png" alt="">
						</div>
						<div class="form-content" >
							<div class="form-header">
								<h3>Sign Up</h3>
							</div>

							<!-- Name Section -->
							<label style="font-size: 18px;">Name</label>&nbsp;
							<div class="form-holder">
								<input name="name" type="text" placeholder="Please insert your name" class="form-control" required autofocus>
							</div>

							<!-- Name Section -->
							<label style="font-size: 18px; padding-top: 10px;">Matrix Number</label>&nbsp;
							<div class="form-holder">
								<input name="matrix_number" type="text" placeholder="Please insert your matrix number" class="form-control" required autofocus>
							</div>
							<div class="form-row"></div>

							<!-- Email Address Section -->
							<label style="font-size: 18px;">Email address</label>&nbsp;
							<div class="form-holder">
								<input name="email" type="email" placeholder="Please insert your email" class="form-control" required autofocus>
							</div>
							<div class="form-row"></div>
							
							<!-- Password Section -->

							<label style="font-size: 18px;">Password</label>

							<div class="form-holder">
								<input name="password" type="password"  placeholder="Please insert your password" class="form-control" required autofocus>
								<input name="role" type="hidden" value="0">
							</div>
							<div class="form-row"></div>

							<!-- Submit Section Section -->

							<button class="btn btn-primary float-right" type="submit" name="submit" value="Create">Submit</button>
							<br><br>
							<div>
								<a href="index.php" class="float-right">Already have account !</a>	
							</div>						
						</div>
					</div>
                </section>
            </form>
		</div>

		<!-- JQUERY -->
		<script src="js/jquery-3.3.1.min.js"></script>

		<!-- JQUERY STEP -->
		<script src="js/jquery.steps.js"></script>
		<!-- Template created and distributed by Colorlib -->
</body>
</html>

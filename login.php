<?php
  	session_start();
	require 'dbconfig/config.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login Page</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"><link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css"><link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css"><link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css"><link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"><link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css"><link rel="stylesheet" type="text/css" href="css/util.css"><link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body >
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<span class="login100-form-title-1">
						Login
					</span>
				</div>

				<form class="login100-form validate-form" action="login.php" method="post">
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="loginid" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						
						<a href= "dsapra2.html"><input type="submit" name="logins" class="login100-form-btn" value="Login"></a>&nbsp;&nbsp;
						<a href="signup.php"><input type="button" class="login100-form-btn" value="Sign up"></a>
					</div>
				</form>
				<?php
		 if(isset($_POST['logins']))
		{
			$loginid=$_POST['loginid'];
			$password=$_POST['password'];
			
			$query="select * from login WHERE loginid='$loginid' AND password='$password'";
			
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				$row = mysqli_fetch_assoc($query_run);
				// valid
				$_SESSION['username']= $row['username'];
				
				header('location:dsapra2.html');
			}
			else
			{
				// invalid
				echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
			}
			
		}
		?>
			</div>
		</div>
	</div>
	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script><script src="vendor/animsition/js/animsition.min.js"></script><script src="vendor/bootstrap/js/popper.js"></script><script src="vendor/bootstrap/js/bootstrap.min.js"></script><script src="vendor/select2/select2.min.js"></script><script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>


</html>
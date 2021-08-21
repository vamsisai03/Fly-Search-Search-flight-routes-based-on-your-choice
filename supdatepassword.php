<?php
    session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color:#bdc3c7">
	
	<div id="main-wrapper">
		<center>
			<h2>Login Form</h2>
			
		</center>
	
		<form class="myform" action="supdatepassword.php" method="post">
		    <label><b>Password:</b></label><br>
			<div class="textbox" >
			<i class="fa fa-lock" aria-hidden="true"></i>
			<input name="password" type="password" class="inputvalue" placeholder="Your password" required />
			</div><br>
			<label><b>Confirm Password:</b></label><br>
			<div class="textbox" >
			<i class="fa fa-lock" aria-hidden="true"></i>
			<input name="cpassword" type="password" class="inputvalue" placeholder="Confirm password" required />
			</div><br>
			<a href ="slogin.php"><input name="plogin" type="submit" id="login_btn" value="Login"/></a><br>
		</form>
		<?php
		if(isset($_POST['plogin']))
		{
		   $password = $_POST['password'];
			$cpassword = $_POST['cpassword'];
		   $studentn = $_SESSION['login'];
		     if($password==$cpassword)
				{
					$query= "update flogin set password='$password'   WHERE loginid='$loginid'";
					$query_run = mysqli_query($con,$query);
					
					if($query_run)
					{
						// there is already a user with the same username
						echo '<script type="text/javascript"> alert("password is update") </script>';
						 header('Location:login.php');
					}
					else 
					{
						echo '<script type="text/javascript"> alert("error ") </script>';
					}
				}
		    else
			{
				echo '<script type="text/javascript"> alert("Password and confirm password does not match!") </script>';	
			}
		}				
				?>
		</div>
</body>
</html>		
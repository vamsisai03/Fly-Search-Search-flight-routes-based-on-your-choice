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
	
		<form class="myform" action="sforgotpassword.php" method="post">
			<label><b>Enter Login id:</b></label><br>
			<div class="textbox" >
			<i class="fa fa-user" aria-hidden="true"></i>
			<input name="loginid" type="text" class="inputvalue" placeholder="Type your username"  required />
			</div><br>
			<label><b>Emial:</b></label><br>
			<div class="textbox" >
			<i class="fa fa-envelope" aria-hidden="true"></i>
			<input name="email" type="email" placeholder="enter college email address" required />
			</div><br>
			<label><b>Full name:</b></label><br>
			<div class="textbox" >
			<i class="fa fa-user-circle" aria-hidden="true"></i>
			<input name="fullname" type="text" class="inputvalue" placeholder="Type your Fullname" required />
			</div><br>
			
			<a href ="supdatepassword.php"><input name="plogin" type="submit" id="login_btn" value="Login"/></a><br>
			<a href="slogin.php"><input type="button" id="back_btn" value="Back"/></a>
		</form>
		<?php
		 if(isset($_POST['plogin']))
		{
			$loginid=$_POST['loginid'];
			$email = $_POST['email'];
			
				
			
			
			$query = "select * from flogin WHERE username='$loginid' AND email='$email' AND fullname = '$fullname';";
			
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			{
				$row = mysqli_fetch_assoc($query_run);
				// valid
				$_SESSION['username']= $row['username'];
				header('location:supdatepassword.php');
			}
				
			
			else
			{
				// invalid
				echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
			}
			
		}
		?>
		
	</div>
</body>
</html>
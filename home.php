<?php
  	session_start();
	require 'dbconfig/config.php';

?>



<!DOCTYPE html>
<html>
<title>Welcome Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("flight.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="home.php" class="w3-bar-item w3-button w3-wide">Home</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="login.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Login</a>
      <a href="signup.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Signup</a>
      
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ??</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button">Login</a>
  <a href="signup.php" onclick="w3_close()" class="w3-bar-item w3-button">Signup</a>

  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">Flight Search System</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Flight Search System</span><br>
    <span class="w3-large">An Efficient Flight Searching Portal</span><br>
    <p><a href="#welcome" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Welcome</a></p>

  </div> 
 
</header>










<!-- Contact Section -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">Any complaint</h3>
  <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> India</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +91 9731961462</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: fssystem@gmail.com</p>
    <br>
    <form action="home.php"  method="post">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="name"></p>
      <p><input class="w3-input w3-border" type="email" placeholder="Email" required name="email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="message"></p>
      <p>
        <a href= "home.php"><button class="w3-button w3-black" type="submit" name="logins">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button></a>
      </p>
    </form>
	<?php
	if(isset($_POST['logins']))
		{
			$name=$_post['name'];
			$email=$_post['email'];
			$subject=$_POST['subject'];
			$message=$_POST['message'];
			
			
			$query="insert into complaint values('$name','$email','$subject','$message')";
					$query_run=mysqli_query($con,$query);
					if($query_run)
					{
						echo '<script type="text/javascript"> alert("Successfull send") </script>';
					}
					else
					{
						echo '<script type="text/javascript"> alert("Error!") </script>';
					}
		}	
			
	
	
	?>
	
   

  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>

</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>

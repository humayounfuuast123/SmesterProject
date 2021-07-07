
<?php
session_start();

if(!isset($_SESSION["id"])){
	header("Location: loginform.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>GLORIA EVENTS MANAGEMENT</title>
	<link rel="stylesheet" type="text/css" href="wpcss/index.css">
</head>
<body>
	<header>
		<div class="main">
			<div class="logo">
				<img src="logo3.png">

			</div>
			<ul>

<li class="active"><a href="#">Home</a></li>
<?php
	if(isset($_SESSION["id"])){
		echo '<li><a href="logout.php">Logout</a></li>';
	}else{
		echo '<li><a href="loginform.php">Login</a></li>';
	}
?>


<li><a href="about.php">About</a></li>
<li><a href="gallery.php">Events Gallery</a></li>
<li><a href="booking.php">Bookings</a></li>
			</ul>


		</div>
		<div class="title">
			<h1>Gloria Events Management</h1>
			<h4>Make your events memorable</h4>

		</div>

		<div class="button">
			
			<a href="https://youtu.be/Db0phFMaQBU" class="btn"><em><b>watch video</b></em></a>
			<a href="https://www.facebook.com/bdeventmanagment" class="btn"><em><b>Visit facebook profile</b></em></a>

		</div>
	</header>

</body>
</html>
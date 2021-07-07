<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="wpcss/signup.css">
</head>
<body>
	<header>
		<div class="main">
			
				<div class="title">
			<h1 style="
				text-decoration: none;
				border: 2px solid transparent;
				color: #fab76b;
				font-size: 50px; margin-left: 500px; margin-right: 500px; margin-bottom: 5px; text-align: center; " >Gloria Events Management</h1>
			

			</div>
			</div>

	</header>
	<?php
include "connection.php";

if(isset($_POST['signup_btn'])){

	$Uname = $_POST["Uname"];
	$Email = $_POST["Email"];
	$Password = $_POST["Password"];
	$cnic = $_POST["cnic"];

	$sql = "INSERT INTO `signuptable`(`cnic`, `Uname`, `Email`, `Password`) VALUES ('$cnic','$Uname','$Email','$Password')";
	if(mysqli_query($con,$sql)){
		echo "<script>
				alert('Signup Successfully');
		</script>";
	}else{
echo "<script>
				alert('Signup Failed');
		</script>";


	}

}


?>


	<div class="sign-up-Form">
		<h4>Sign Up Here</h4>
	<form method="POST" action="signup.php">

		<label for="cnic" style="margin-right: 30px;"><b> CNIC </b></label>
		<input type="text" name="cnic" class="input-box" placeholder="CNIC" >
		<br><br>
		
		<label for="Username" style="margin-right: 30px;"><b> Username: </b></label>
		<input type="text" name="Uname" class="input-box" placeholder="Username">
		<br><br>

		<label for="Email" style="margin-right: 30px;"><b> Email: </b></label>
		<input type="text" name="Email" class="input-box" placeholder="Email">
		<br><br>


		<label for="Password" style="margin-right: 30px;"><b> Password: </b></label>
		<input type="Password" name="Password" class="input-box" placeholder="Password">

		<br><br>

		<p><span><input type="checkbox" name="checkbox" ></span>I agree to the terms of services</p>

		<button type="submit" id="signup_btn" class="signup_btn" name="signup_btn" > Sign Up</button>




	</form>
</div>
</body>
</html>




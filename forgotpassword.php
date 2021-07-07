<!DOCTYPE html>
<html>
<head>
	<title>Forget Password</title>
	<link rel="stylesheet" type="text/css" href="wpcss/forget.css">
</head>
<body>

<div class="cont">

			<h1 style="font-family: sans-serif; color: #FE7D03; text-align: center; margin-top: 50px;"><p><strong>	Gloria Events Management	</strong></p></h1>


<?php

include 'connection.php';
if(isset($_POST["clickassword"])){
	$cnic  = $_POST["CNIC"];
	$email = $_POST["Email"];

	$sql = "SELECT * FROM `signuptable` WHERE `cnic` = '$cnic' AND `Email` = '$email'";
	$res = mysqli_query($con,$sql);
	$row = mysqli_fetch_assoc($res);
	echo "<script> alert('Your password is ". $row["Password"] ."'); </script>";
	}


?>




</div>

<form action="forgotpassword.php" method="post">
	<h4 style="color: #FE7D03; margin-top: 70px; font-family: sans-serif; ">Sign Up Here</h4>
  <div class="imgcontainer">
    <img src="avatar.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="CNIC"><b>CNIC</b></label><br>
    <input type="text" placeholder="Enter CNIC" name="CNIC" required>
<br>
    <label for="Email"><b>Email</b></label>
 <br>
    <input type="Email" placeholder="Enter Email" name="Email" required>
        
    <button type="submit" name="clickassword">Click here to get password</button>


</div></form>












	


</body>
</html>
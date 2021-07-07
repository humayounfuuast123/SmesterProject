<?php
  session_start();

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: sans-serif;
  background-image: url(dd.jpg);
    background-size: cover;
    background-position: center;
    
 }
form {border: 3px solid #000000;
width: 500px;
  padding: 20px;
    margin: 8% auto 0;
    text-align: center;
background-image: url(gif.gif);
border-radius: 50px;

}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 3px solid orange;
  box-sizing: border-box;
  border-radius: 20px;
}

button {
  background-color: blue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  border-radius: 30px;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
  margin-right:  250px;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 10%;
  border-radius: 15%;
}

.container label {
  padding: 16px;
color: yellow;


}
header h1{
text-align: center;
margin-top: 50px;

  
}
h3{
  text-align: center;
  margin-top: 50px;
}




span.psw {
  margin-right: 20px;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
  span.ab{
   margin-right: 20px;
  padding-top: 16px;
  }
}
</style>
</head>
<body>
  <header>
  
 <h1>Welcome to Gloria Events</h1>
    <h3>Login Here</h3>
   
  </header>

<?php

include"connection.php";
if(isset($_POST['Login_btn'])){

  $username = strtolower($_POST["uname"]);
  $password = $_POST["psw"];
  $sql = "SELECT * FROM `signuptable` WHERE LOWER(`Uname`) = '$username' AND `Password` = '$password' LIMIT 1";

  $row = mysqli_fetch_assoc(mysqli_query($con,$sql));
  if($row > 0){

    $_SESSION["id"] = $row["id"];
    $_SESSION["Uname"] = $row["Uname"];
    $_SESSION["Email"] = $row["Email"];

    header("Location: index.php");


  }else{
    document.write("Login failed");

  }



}



?>



<form action="loginform.php" method="post">
  <div class="imgcontainer">
    <img src="avtr.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="Login_btn">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color: #f1f1f1;  border-radius: 20px;">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="forgotpassword.php">password?</a></span>
   <span class="ab">for new account <a href="signup.php"><b>Signup Here</b></a></span> 
  </div>
</form>

</body>
</html>

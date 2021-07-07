<!DOCTYPE html>
<html>
<head>
	<title>Event Hall booking </title>
	<link rel="stylesheet" type="text/css" href="wpcss/booking.css">
</head>
<body >
  <header>
    <h1 style="text-align: center; margin-top: 70px; color: #FF7F05;"> Gloria Events Management</h1>
    <h3 style="text-align: center; margin-top: 70px; color: #FF7F05;">Reservation for the event</h3>
  </header>

<?php
include "connection.php";

if(isset($_POST['booking_btn'])){

  $cid = $_POST["id"];
  $cname = $_POST["Name"];
  $setup = $_POST["setup_id"];
  $nop = $_POST["num"];
  $dshes = $_POST["dishes"];
  $cph= $_POST["cost"];
  $sql = "INSERT INTO `bookings`(`cId`, `cName`, `setup`, `chairsnumber`, `dishes`, `phc`) VALUES ('$cid','$cname','$setup','$nop','$dshes','$cph')";
 
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


<form action="booking.php" method="post">

<div class="booking_page" style="background-image: url('vb.gif'); background-size: cover;">
  <div class="imgcontainer">
    <img src="y.png" alt="Avatar" class="avatar">
  </div>
<label style="color: #FF7F05; "><b>Customer id:</b></label> <input type="text" name="id" placeholder="customer id" style="width: 50%;"> <br> <br>
<label style="color: #FF7F05; "><b>Customer Name:</b></label> <input type="text" name=" Name" placeholder="Customer Name" style="width: 50%;"> <br><br>
<label style="color: #FF7F05; margin-left: 50px; " for="setup" ><b>Choose a setup:</b></label>

<select name="setup_id" id="setup_id" style="color: #FF7F05; ">
  <option value="Select">Select</option>
  <option value="0">Marquee</option>
  <option value="1">Banquet</option>
  <option value="2">Hall</option>
  <option value="3">tents</option>
  <option value="4">floral Setup</option>
  <option value="5">Gloria Special</option>
</select>
<br><br>

<label for="nmbrofpeople" style="color: #FF7F05; "><b>Number of people:</b></label> <input type="number" name="num" style="width: 50%;"> <br><br>
<label for="dishes" style="color: #FF7F05; "><b>Choose dishes:</b></label>
<select name="dishes" id="Dishes" style="color: #FF7F05; ">
  <option value="choose dishes" style="color: #FF7F05; ">Choose Dishes</option>
  <option value="1">1 dish</option>
  <option value="2">double dish</option></option><br>
</select><br>
<br>
<label for="Price" style="color: #FF7F05;"><b>Per head cost:</b></label><input type="number" name="cost" id="cost" style="width: 50%;"><br><br>

    <button type="submit" id="booking_btn" value="booking_btn" style="color: #FF7F05; " name="booking_btn"><b> Confirm Booking</b></button>



  




</div>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript">
  $("#Dishes").on("change",function(){
    var dish = $(this).val();
    var setup = $("#setup_id").val();

    if(setup == 0){
      if(dish == 1){
        $("#cost").val(1000);
      }else {
         $("#cost").val(1500);
      }
    }else if(setup == 1){
      if(dish == 1){
        $("#cost").val(1200);
      }else {
         $("#cost").val(1800);
      }
    }
      else if(setup == 2){
      if(dish == 1){
        $("#cost").val(900);
      }else {
         $("#cost").val(1300);
      }

    }
    else if(setup == 3){
      if(dish == 1){
        $("#cost").val(600);
      }else {
         $("#cost").val(800);
      }

    }
       else if(setup == 4){
      if(dish == 1){
        $("#cost").val(1500);
      }else {
         $("#cost").val(1700);
      }

    }
     else if(setup == 5){
      if(dish == 1){
        $("#cost").val(1600);
      }else {
         $("#cost").val(2000);
      }

    }
     


  });

</script>




</body>



</html>
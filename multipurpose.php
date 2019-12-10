<!DOCTYPE html>
<html>
<head>
   <title>EZcarRentals</title>
   <meta charset="utf-8">
   <link rel="stylesheet" href="style.css">
</head>
<body>

 <?php 
 	session_start();

	if (isset($_SESSION['valid_user'])){
 ?>
 			<div id="member">
			  <b>
	<img src="shoppingcart.png" alt="cart" width="30%">[<?php echo (count($_SESSION['cart'])) ?>] &nbsp; <?php echo $_SESSION['valid_user'] ?> &nbsp; | &nbsp; <a href="logout.php">Log out</a>
			  </b>
			</div>		

 <?php 
	}
	else{
 ?>
 			<div id="member">
			  <b>
				<a href="login.html">Log In</a>
				<a href="signup.html"> | Sign Up</a>
			  </b>
			</div>		
<?php
	}
 ?>


</body>
</html>


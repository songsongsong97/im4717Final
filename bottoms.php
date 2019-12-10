<?php //dress.php
session_start();
if (!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

if (!isset($_SESSION['cart'])){
    $_SESSION['size'] = array();
}

if (!isset($_SESSION['qtty'])){
    $_SESSION['qtty'] = array();
}

if (isset($_POST['buy'])) {
    if(isset($_POST['size'])){
		if (isset($_POST['qtty'])) {
			$_SESSION['cart'][] = $_POST['buy'];
			$_SESSION['size'][] = $_POST['size'];
			$_SESSION['qtty'][] = $_POST['qtty'];
		}
	}
    header('location: ' . $_SERVER['PHP_SELF']. '?' . SID);
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Les Petits Jours</title>
	<meta charset=“utf-8”>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Sacramento&display=swap" rel="stylesheet">	<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type = "text/javascript"  src = "addToCartFunction.js" >
	</script>
</head>
<body style="background-color:#FDF2F0">
<p style="text-align:right;margin:0;padding:0;">
	 <?php 
	if (isset($_SESSION['valid_user'])){
		echo 'Welcome, '.$_SESSION['valid_user'].'. ';
		echo '<a href="logout.php">Log out</a>';
	}
	/*else{
		echo 'Error.';
	}*/
	?>
</p>
<header class='header' style='margin-top:20px'>
	<a href="index.php" style="text-decoration:none; color:black"><h1>Les Petits Jours</h1></a>
	<a href="shopping-cart2.php"><i class="fa fa-shopping-cart" style="font-size:24px; float: right;padding-top:15px;margin-right:10px; color:black;padding-right:20px;"></i></a>
	<button onclick="document.getElementById('id01').style.display='block'">Sign Up</button>
	<p style='float:right; display:inline;'>&nbsp|&nbsp </p>
	<button onclick="document.getElementById('id02').style.display='block'">Login</button> 
</p>
</header>
<!--
<nav>
	<b>Home &nbsp; New Arrivals &nbsp; Sales &nbsp; Clothing</b>
</nav>
-->
<!-- Sign up modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="register.php" method=POST>
    <div class="modal-container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
      
      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>

<!-- Log in modal -->
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="authmain.php" method=POST>
    <div class="modal-container">
      <h1>Customer Login</h1>
      <hr>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username-login" required>
	  
	  <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email-login" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw-login" required>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Login</button>
      </div>
    </div>
  </form>
</div>

<div class="navbar" id="navbar">
  <a href="index.php">Home</a>
  <a href="new_arrivals.php">New Arrivals</a>
  <a href="sales.php">Sales</a>
  <div class="dropdown">
    <button class="dropbtn">Clothing 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="tops.php">Tops</a>
      <a href="bottoms.php">Bottoms</a>
      <a href="dress.php">Dress</a>
	  <a href="jumpsuit.php">Jumpsuit</a>
    </div>
  </div> 
</div>

<!-- bottoms  catalog-->
<div class="clothing-display">
	<div class="row-clothing">
	  <div class="column-clothing">
		<div class="content">
		<!-- form action -->
			<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
				  <img src="img/Bottoms/ASYMMETRICAL BUTTON UP SHORT SKIRT.jpg" alt="bottom1" style="width:100%;display:block;" id="firstpic1" onmouseover="display(1)" onmouseleave="hide()">
				  <img src="img/Bottoms/ASYMMETRICAL BUTTON UP SHORT SKIRT_3.jpg" alt="bottom1" style="width:100%;display:none;" id="secondpic1" onmouseover="display(1)" onmouseleave="hide()">
				  <p id="item1Name">ASYMMETRICAL BUTTON UP SHORT SKIRT</p>
				  <p id="item1Price"><b>S$20.99</b></p>
				  <table border="0" style="margin:auto">		  
				  <tr>
					<td><p style="display:inline-block">Size:</p></td>
					<td><input type="radio" name="size" value="0" onclick="choice('item1_S');"> S
					<input type="radio" name="size" value="1" onclick="choice('item1_M');"> M
					<input type="radio" name="size" value="2" onclick="choice('item1_L');"> L
					<input type="radio" name="size" value="3" onclick="choice('item1_XL');"> XL </td>
				  </tr>
				  <tr>
					<td><p style="display:inline-block">Quantity:</p></td>
					<td><input type="button" class="button2" value="-" onclick="qty(itemNo,size,'minus')">
					<input type="text" name="qtty" class="quantity" id="item1" value="0">
					<input type="button" class="button2" value="+" onclick="qty(itemNo,size,'plus')">
					<button type="submit" class="shopping-button" name="buy" value="<?php echo '27' ?>"><i class="fa fa-shopping-cart" style="font-size:24px; color:black;" onclick="addToCart(itemNo,size)"></i></button></td>
				  </tr>
				  </table>
			</form>
		<!-- end form-->
		</div>
	  </div>
	  <div class="column-clothing">
		<div class="content">
		<!-- form action -->
			<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
				  <img src="img/Bottoms/HIGH-RISE FISHTAIL MAXI SKIRT.jpg" alt="bottom2" style="width:100%;display:block;" id="firstpic2" onmouseover="display(2)" onmouseleave="hide()">
				  <img src="img/Bottoms/HIGH-RISE FISHTAIL MAXI SKIRT_3.jpg" alt="bottom2" style="width:100%;display:none;" id="secondpic2" onmouseover="display(2)" onmouseleave="hide()">
				  <p id="item2Name">HIGH-RISE FISHTAIL MAXI SKIRT</p>
				  <p id="item2Price"><b>S$30.99</b></p>
				  <table border="0" style="margin:auto">		  
				  <tr>
					<td><p style="display:inline-block">Size:</p></td>
					<td><input type="radio" name="size" value="0" onclick="choice('item2_S');"> S
					<input type="radio" name="size" value="1" onclick="choice('item2_M');"> M
					<input type="radio" name="size" value="2" onclick="choice('item2_L');"> L
					<input type="radio" name="size" value="3" onclick="choice('item2_XL');"> XL </td>
				  </tr>
				  <tr>
					<td><p style="display:inline-block">Quantity:</p></td>
					<td><input type="button" class="button2" value="-" onclick="qty(itemNo,size,'minus')">
					<input type="text" name="qtty" class="quantity" value="0" id="item2">
					<input type="button" class="button2" value="+" onclick="qty(itemNo,size,'plus')">
					<button type="submit" class="shopping-button" name="buy" value="<?php echo '28' ?>"><i class="fa fa-shopping-cart" style="font-size:24px; color:black;" onclick="addToCart(itemNo,size)"></i></button></td>
				  </tr>
				  </table>
			</form>
		<!-- end form -->
		</div>
	  </div>
	  <div class="column-clothing">
		<div class="content">
		<!-- form action -->
			<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
				  <img src="img/Bottoms/ONE PIECE TEXTURED SPLIT SKIRT (WITH BELT).jpg" alt="bottom3" style="width:100%;display:block;" id="firstpic3" onmouseover="display(3)" onmouseleave="hide()">
				  <img src="img/Bottoms/ONE PIECE TEXTURED SPLIT SKIRT (WITH BELT)_3.jpg" alt="bottom3" style="width:100%;display:none;" id="secondpic3" onmouseover="display(3)" onmouseleave="hide()">
				  <p id="item3Name">ONE PIECE TEXTURED SPLIT SKIRT (WITH BELT)</p>
				  <p id="item3Price"><b>S$28.99</b></p>
				  <table border="0" style="margin:auto">		  
				  <tr>
					<td><p style="display:inline-block">Size:</p></td>
					<td><input type="radio" name="size" value="0" onclick="choice('item3_S');"> S
					<input type="radio" name="size" value="1" onclick="choice('item3_M');"> M
					<input type="radio" name="size" value="2" onclick="choice('item3_L');"> L
					<input type="radio" name="size" value="3" onclick="choice('item3_XL');"> XL </td>
				  </tr>
				  <tr>
					<td><p style="display:inline-block">Quantity:</p></td>
					<td><input type="button" class="button2" value="-" onclick="qty(itemNo,size,'minus')">
					<input type="text" name="qtty" class="quantity" value="0" id="item3">
					<input type="button" class="button2" value="+" onclick="qty(itemNo,size,'plus')">
					<button type="submit" class="shopping-button" name="buy" value="<?php echo '29' ?>"><i class="fa fa-shopping-cart" style="font-size:24px; color:black;" onclick="addToCart(itemNo,size)"></i></button></td>
				  </tr>
				  </table>
			</form>
		<!-- end form -->
		</div>
	  </div>
	</div>

	<!-- row2 -->
	<div class="row-clothing">
	  <div class="column-clothing">
		<div class="content">
		<!-- form action -->
			<form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
				  <img src="img/Bottoms/RIPPED KNEE DENIM JEANS.jpg" alt="bottom4" style="width:100%;display:block;" id="firstpic4" onmouseover="display(4)" onmouseleave="hide()">
				  <img src="img/Bottoms/RIPPED KNEE DENIM JEANS_3.jpg" alt="bottom4" style="width:100%;display:none;" id="secondpic4" onmouseover="display(4)" onmouseleave="hide()">
				  <p id="item4Name">RIPPED KNEE DENIM JEANS</p>
				  <p id="item4Price"><b>S$35.99</b></p>
				  <table border="0" style="margin:auto">		  
				  <tr>
					<td><p style="display:inline-block">Size:</p></td>
					<td><input type="radio" name="size" value="0" onclick="choice('item4_S');"> S
					<input type="radio" name="size" value="1" onclick="choice('item4_M');"> M
					<input type="radio" name="size" value="2" onclick="choice('item4_L');"> L
					<input type="radio" name="size" value="3" onclick="choice('item4_XL');"> XL </td>
				  </tr>
				  <tr>
					<td><p style="display:inline-block">Quantity:</p></td>
					<td><input type="button" class="button2" value="-" onclick="qty(itemNo,size,'minus')">
					<input type="text" name="qtty" class="quantity" value="0" id="item4">
					<input type="button" class="button2" value="+" onclick="qty(itemNo,size,'plus')">
					<button type="submit" class="shopping-button" name="buy" value="<?php echo '30' ?>"><i class="fa fa-shopping-cart" style="font-size:24px; color:black;" onclick="addToCart(itemNo,size)"></i></button></td>
				  </tr>
				  </table>
			</form>
		<!-- end form -->
		</div>
	  </div>
	  <div class="column-clothing">
		<div class="content">
		<!-- form action -->
			 <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
				  <img src="img/Bottoms/ROMANTIC LACE FIT SKIRT.jpg" alt="bottom5" style="width:100%;display:block;" id="firstpic5" onmouseover="display(5)" onmouseleave="hide()">
				  <img src="img/Bottoms/ROMANTIC LACE FIT SKIRT_3.jpg" alt="bottom5" style="width:100%;display:none;" id="secondpic5" onmouseover="display(5)" onmouseleave="hide()">
				  <p id="item5Name">ROMANTIC LACE FIT SKIRT</p>
				  <p id="item5Price"><b>S$29.99</b></p>
				  <table border="0" style="margin:auto">		  
				  <tr>
					<td><p style="display:inline-block">Size:</p></td>
					<td><input type="radio" name="size" value="0" onclick="choice('item5_S');"> S
					<input type="radio" name="size" value="1" onclick="choice('item5_M');"> M
					<input type="radio" name="size" value="2" onclick="choice('item5_L');"> L
					<input type="radio" name="size" value="3" onclick="choice('item5_XL');"> XL </td>
				  </tr>
				  <tr>
					<td><p style="display:inline-block">Quantity:</p></td>
					<td><input type="button" class="button2" value="-" onclick="qty(itemNo,size,'minus')">
					<input type="text" name="qtty" class="quantity" value="0" id="item5">
					<input type="button" class="button2" value="+" onclick="qty(itemNo,size,'plus')">
					<button type="submit" class="shopping-button" name="buy" value="<?php echo '31' ?>"><i class="fa fa-shopping-cart" style="font-size:24px; color:black;" onclick="addToCart(itemNo,size)"></i></button></td>
				  </tr>
				  </table>
			</form>
		<!-- end form -->
		</div>
	  </div>
	  <div class="column-clothing">
		<div class="content">
		<!-- form action -->
			 <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
				  <img src="img/Bottoms/RUFFLED LAYERED MAXI SKIRT.jpg" alt="bottom6" style="width:100%;display:block;" id="firstpic6" onmouseover="display(6)" onmouseleave="hide()">
				  <img src="img/Bottoms/RUFFLED LAYERED MAXI SKIRT_3.jpg" alt="bottom6" style="width:100%;display:none;" id="secondpic6" onmouseover="display(6)" onmouseleave="hide()">
				<p id="item6Name">RUFFLED LAYERED MAXI SKIRT</p>
				<p id="item6Price"><b>S$24.99</b></p>
				  <table border="0" style="margin:auto">		  
				  <tr>
					<td><p style="display:inline-block">Size:</p></td>
					<td><input type="radio" name="size" value="0" onclick="choice('item6_S');"> S
					<input type="radio" name="size" value="1" onclick="choice('item6_M');"> M
					<input type="radio" name="size" value="2" onclick="choice('item6_L');"> L
					<input type="radio" name="size" value="3" onclick="choice('item6_XL');"> XL </td>
				  </tr>
				  <tr>
					<td><p style="display:inline-block">Quantity:</p></td>
					<td><input type="button" class="button2" value="-" onclick="qty(itemNo,size,'minus')">
					<input type="text" name="qtty" class="quantity" value="0" id="item6">
					<input type="button" class="button2" value="+" onclick="qty(itemNo,size,'plus')">
					<button type="submit" class="shopping-button"  name="buy" value="<?php echo '32' ?>"><i class="fa fa-shopping-cart" style="font-size:24px; color:black;" onclick="addToCart(itemNo,size)"></i></button></td>
				  </tr>
				  </table>
			</form>
		<!-- end form -->
		</div>
	  </div>

	</div>

	<!-- row3 -->
	<div class="row-clothing">
	  <div class="column-clothing">
		<div class="content">
		<!-- form action -->
			 <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
				  <img src="img/Bottoms/SIDE SLIT DENIM SKIRT.jpg" alt="bottom7" style="width:100%;display:block;" id="firstpic7" onmouseover="display(7)" onmouseleave="hide()">
				  <img src="img/Bottoms/SIDE SLIT DENIM SKIRT_3.jpg" alt="bottom7" style="width:100%;display:none;" id="secondpic7" onmouseover="display(7)" onmouseleave="hide()">
				<p id="item7Name">SIDE SLIT DENIM SKIRT</p>
				<p id="item7Price"><b>S$30.99</b></p>
				  <table border="0" style="margin:auto">		  
				  <tr>
					<td><p style="display:inline-block">Size:</p></td>
					<td><input type="radio" name="size" value="0" onclick="choice('item7_S');"> S
					<input type="radio" name="size" value="1" onclick="choice('item7_M');"> M
					<input type="radio" name="size" value="2" onclick="choice('item7_L');"> L
					<input type="radio" name="size" value="3" onclick="choice('item7_XL');"> XL </td>
				  </tr>
				  <tr>
					<td><p style="display:inline-block">Quantity:</p></td>
					<td><input type="button" class="button2" value="-" onclick="qty(itemNo,size,'minus')">
					<input type="text" name="qtty" class="quantity" value="0" id="item7">
					<input type="button" class="button2" value="+" onclick="qty(itemNo,size,'plus')">
					<button type="submit" class="shopping-button" name="buy" value="<?php echo '33' ?>"><i class="fa fa-shopping-cart" style="font-size:24px; color:black;" onclick="addToCart(itemNo,size)"></i></button></td>
				  </tr>
				  </table>
			</form>
		<!-- end form -->
		</div>
	  </div>
	  <div class="column-clothing">
		<div class="content">
		<!-- form action -->
			 <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
				  <img src="img/Bottoms/SKINNY LOOK MINIMALIST SHORTS.jpg" alt="bottom8" style="width:100%;display:block;" id="firstpic8" onmouseover="display(8)" onmouseleave="hide()">
				  <img src="img/Bottoms/SKINNY LOOK MINIMALIST SHORTS_3.jpg" alt="bottom8" style="width:100%;display:none;" id="secondpic8" onmouseover="display(8)" onmouseleave="hide()">
				<p id="item8Name">SKINNY LOOK MINIMALIST SHORTS</p>
				<p id="item8Price"><b>S$22.99</b></p>
				  <table border="0" style="margin:auto">		  
				  <tr>
					<td><p style="display:inline-block">Size:</p></td>
					<td><input type="radio" name="size" value="0" onclick="choice('item8_S');"> S
					<input type="radio" name="size" value="1" onclick="choice('item8_M');"> M
					<input type="radio" name="size" value="2" onclick="choice('item8_L');"> L
					<input type="radio" name="size" value="3" onclick="choice('item8_XL');"> XL </td>
				  </tr>
				  <tr>
					<td><p style="display:inline-block">Quantity:</p></td>
					<td><input type="button" class="button2" value="-" onclick="qty(itemNo,size,'minus')">
					<input type="text" name="qtty" class="quantity" value="0" id="item8">
					<input type="button" class="button2" value="+" onclick="qty(itemNo,size,'plus')">
					<button type="submit" class="shopping-button" name="buy" value="<?php echo '34' ?>"><i class="fa fa-shopping-cart" style="font-size:24px; color:black;" onclick="addToCart(itemNo,size)"></i></button></td>
				  </tr>
				  </table>
			</form>
		<!-- end form -->
		</div>
	  </div>
	  <div class="column-clothing">
		<div class="content">
		<!-- form action -->
			 <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
				  <img src="img/Bottoms/TEXTURED FRONT SLIT SKIRT WITH BELT.jpg" alt="bottom9" style="width:100%;display:block;" id="firstpic9" onmouseover="display(9)" onmouseleave="hide()">
				  <img src="img/Bottoms/TEXTURED FRONT SLIT SKIRT WITH BELT_3.jpg" alt="bottom9" style="width:100%;display:none;" id="secondpic9" onmouseover="display(9)" onmouseleave="hide()">
				<p id="item9Name">TEXTURED FRONT SLIT SKIRT WITH BELT</p>
				<p id="item9Price"><b>S$28.99</b></p>
				  <table border="0" style="margin:auto">		  
				  <tr>
					<td><p style="display:inline-block">Size:</p></td>
					<td><input type="radio" name="size" value="0" onclick="choice('item9_S');"> S
					<input type="radio" name="size" value="1" onclick="choice('item9_M');"> M
					<input type="radio" name="size" value="2" onclick="choice('item9_L');"> L
					<input type="radio" name="size" value="3" onclick="choice('item9_XL');"> XL </td>
				  </tr>
				  <tr>
					<td><p style="display:inline-block">Quantity:</p></td>
					<td><input type="button" class="button2" value="-" onclick="qty(itemNo,size,'minus')">
					<input type="text" name="qtty" class="quantity" value="0" id="item9">
					<input type="button" class="button2" value="+" onclick="qty(itemNo,size,'plus')">
					<button type="submit" class="shopping-button" name="buy" value="<?php echo '35' ?>"><i class="fa fa-shopping-cart" style="font-size:24px; color:black;" onclick="addToCart(itemNo,size)"></i></button></td>
				  </tr>
				  </table>
			</form>
		<!-- end form -->
		</div>
	  </div>
	<!-- END GRID -->
	<table style="display:none;">
		<tr>
			<td><input type="text" id="itemNameToPass" name="itemNameToPass"></td>
			<td><input type="text" id="categoryToPass" name="categoryToPass"></td>
			<td><input type="text" id="itemPriceToPass" name="itemPriceToPass"></td>
			<td><input type="text" id="itemQtyToPass" name="itemQtyToPass"></td>
			<td><input type="text" id="itemSizeToPass" name="itemSizeToPass"></td>
	    </tr>
	</table>
	<!-- </form> -->
	</div>
</div>
<script type="text/javascript">
//on-scroll fixed header
window.onscroll = function() {myFunction()};

var header = document.getElementById("navbar");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
function display(num) {
	for (i = 1; i < 10; i++) { 
		if (num == i){
			document.getElementById("firstpic" + i).style.display = "none";
			document.getElementById("secondpic" + i).style.display = "block";
		}
	}
 }
	  
function hide(){
	for (i = 1; i < 10; i++) { 
		document.getElementById("firstpic" + i).style.display = "block";
		document.getElementById("secondpic" + i).style.display = "none";
	}
}

</script>

<footer class='footer'>
	<small><i>&copy 2019 Les Petits Jours. All Right Reserved.</i></small>
</footer>	
</body>
</html>
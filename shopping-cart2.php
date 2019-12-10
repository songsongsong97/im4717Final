<?php  //cart.php
session_start();

if (isset($_POST['deladdr'])) {
	$deladdr = $_POST['deladdr'];
	unset($_SESSION['cart'][$deladdr]);
	unset($_SESSION['size'][$deladdr]);
	unset($_SESSION['qtty'][$deladdr]);
	
	for ($i=$deladdr; $i < count($_SESSION['cart']); $i++){
		$_SESSION['cart'][$i] = $_SESSION['cart'][$i+1];
		$_SESSION['size'][$i] = $_SESSION['size'][$i+1];
		$_SESSION['qtty'][$i] = $_SESSION['qtty'][$i+1];
	}
	header('location: ' . $_SERVER['PHP_SELF']);
	exit();
}


if (!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

if (!isset($_SESSION['cart'])){
    $_SESSION['size'] = array();
}

if (!isset($_SESSION['qtty'])){
    $_SESSION['qtty'] = array();
}


if (isset($_GET['empty'])) {
	unset($_SESSION['cart']);
	unset($_SESSION['size']);
	unset($_SESSION['qtty']);
	header('location: ' . $_SERVER['PHP_SELF']);
	exit();
}
if (isset($_POST['newaddr'])) {
	$addr = $_POST['newaddr'];
}
if (isset($_POST['newqty'])) {
	$_SESSION['qtty'][$addr]=$_POST['newqty'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Les Petits Jours</title>
	<meta charset=“utf-8”>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Sacramento&display=swap" rel="stylesheet">	
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

<?php
	$items = array ('Heart Neckline Chiffon Dress', 'Eyelash Lace Halter Dress', 'Thin Strap Lace Chiffon Dress', 'Thin Strap Lace Chiffon Maxi Slit Dress', 'Dotted Satin Drooping Strappy Dress','Lace Splice Halter Dress', 'Braided Back Double Straps Bodycon Dress', 'Thin Strap Bodycon Slit Dress', 'V Neck Ruffle Tie Up Dress', 'Double Strap V Neck Chiffon Camisole', 'Round Neck Halter Crop Top', 'Off Shoulder Droop Top', 'Double Layer Ruffle Halter Top', 'V-neck Lace Jacquard Short Sleeve Top', 'Thick Strap Loose Top', 'Thin strap knitted camisole', 'V-neck Lace Back Strap With Chiffon Top', 'Front knot crop top', 'BUTTON-UP RIBBON STRIPES CAMI JUMPSUIT', 'ELEGANT HALTER JUMPSUIT', 'PEN BACK EYELASH LACE CAMI JUMPSUIT','SLEEVELESS STRIPED TUXEDO PLAYSUIT', 'THIN STRAP FRONT TWIST JUMPSUIT', 'TROPICAL PRINT BUTTON UP PLAYSUIT', 'TROPICAL PRINT HALTER NECK KNOTTED JUMPSUIT', 'V-NECK FRONT KNOT JUMPSUIT', 'V-NECK BUTTON-UP SLEEVELESS JUMPSUIT', 'ASYMMETRICAL BUTTON UP SHORT SKIRT', 'HIGH-RISE FISHTAIL MAXI SKIRT', 'ONE PIECE TEXTURED SPLIT SKIRT (WITH BELT)', 'RIPPED KNEE DENIM JEANS', 'ROMANTIC LACE FIT SKIRT', 'RUFFLED LAYERED MAXI SKIRT', 'SIDE SLIT DENIM SKIRT', 'SKINNY LOOK MINIMALIST SHORTS', 'TEXTURED FRONT SLIT SKORT WITH BELT', 'MINIMALIST MULTICOLOR T-SHIRT', 'MINIMALIST RIBBED BODYCON DRESS', 'SEXY SLITTED FLARE PANTS', 'V-NECK LONG-SLEEVE BLOUSE', 'THIN KNIT V-NECK TANK TOP', '2WAY CROSS STRAP T-SHIRT', '2WAY LONG-SLEEVE SWEATER BELTED JUMPSUIT', 'COTTON TWO BUTTON WIDE LEG PANTS', 'GLOSS SHELL BUTTON LONG SLEEVE BLOUSE', 'PLAID SHIRRED SLIT CAMI SKIRT SET WEAR', 'PLAIN RIBBED V-NECK KNIT TOP', 'MINIMAL POCKETS SKIRT');
	
	$itemprice = array (35.99,35.99,38.99,38.99,35.99,33.99,35.99,28.99,29.99, 15.99, 15.99, 19.99, 23.99, 29.99, 25.99, 27.99, 19.99, 19.99, 40.99, 30.99, 52.99, 28.99, 29.99, 30.99, 34.99, 25.99, 32.99, 20.99, 30.99, 28.99, 35.99, 29.99, 24.99, 30.99, 22.99, 28.99, 12.99, 15.99, 20.99, 15.99, 12.99, 12.99, 38.99, 30.99, 25.99, 38.99, 23.99, 25.99);
	
	$itemsize = array ( 'S', 'M', 'L', 'XL');
?>

<div class="navbar">
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

<div class="titlename"> CHECKOUT </div>
	
<!-- order table-->
<div style="background-color:white; padding: 30px; margin-bottom:30px ">
	<p  style="font-size:130%; left:10%;"> <b> Your Order ID : #
	<?php
			$today = date("Ymd");
			$rand = strtoupper(substr(uniqid(sha1(time())),0,4));
			echo $unique = $today . $rand;
		?>
	</b></p> <br>
	<table id="cart" align="center">
		<tr>
			<td width="30%"><b>Item</b></td>
			<td width="15%"><b>Price/pc</b></td>
			<td width="10%"><b>Size</b></td>
			<td widht="20%"><b>Quantity</b></td>
			<td width="15%"><b>Subtotal</b></td>
			<td width="10%"><b> Edit/Delete </b></td>
		</tr>
		<?php
			for ($i=0; $i < count($_SESSION['cart']); $i++){
				if ($_SESSION['cart'][$i] == 0 ){
				}else{ 
					echo "<tr>";
					echo "<td>" .$items[$_SESSION['cart'][$i]]. "</td>";
					echo "<td> $";
					echo number_format($itemprice[$_SESSION['cart'][$i]], 2). "</td>";
					echo "<td>" .$itemsize[$_SESSION['size'][$i]]. "</td>";
					echo "<td id='itemqty".$i."'>" .number_format($_SESSION['qtty'][$i]);
					echo "</td>";
					echo "<td> $" . number_format($itemprice[$_SESSION['cart'][$i]], 2) * number_format($_SESSION['qtty'][$i]). "</td>";
					echo "<td> <font onclick='update(".$i.")'> Edit </font> / <form method='post'><button type='submit' name='deladdr' value='".$i."'> Confirm Delete </button> </form> </td>";
					echo "</tr>";
				}
			}
		?>
		
	</table>
		<button class="clearcart"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?empty=1">Clear cart</a></button>
</div>

<div class="titlename"> Mailing Information </div>
		<div id="form">
		<form name="myForm" action="checkout.php" onsubmit="return validateForm()" method="POST">
			<label for="name"><b>Name</b></label> <br>
			<input type="text" placeholder="Enter Name" name="name" id="custName" required>
			<br>
			<label for="psw"><b>Email</b></label> <br>
			<input type="text" placeholder="Enter Email" name="email" id="custEmail" required> <br>

			<label for="psw-repeat"><b>Address</b></label> <br>
			<input type="text" placeholder="Enter Address" name="address" required> <br>
			
			<label for="psw-repeat"><b>Contact Number</b></label> <br>
			<input type="text" placeholder="Enter Contact No." name="contactnum" id="custPhone" required> <br>
			<hr>
			
			<font> Terms &amp; Condition <br> </font>
			<font> 1. All the items are not able to be refunded upon purchase. <br> 2. We are not responsible for the spoiled items due to delivery services. </font>
			<hr>
				* Upon checkout, the buyers agree to our terms and conditions, total amount includes shipping fee and GST. * <br><br>
			
				<font id="totalamount"> TOTAL AMOUNT: </font>
				<input id="submitpayment" type="submit" value="Checkout" onclick="validateForm()">
				<input id="orderID" name="orderID" type="hidden" value="<?php echo $unique ?>">
			</form>
		</div>
		
		

<footer class='footer'>
	<small><i>&copy 2019 Les Petits Jours. All Right Reserved.</i></small>
</footer>	

</body>
<script type="text/javascript">
	function validateForm(){
			var name = document.forms["myForm"]["custName"].value; 
			var regnameone = /[A-Z]+/g;
			var regnametwo = /.\s/g;
			var email = document.forms["myForm"]["custEmail"].value;
			var regemailone = /^[\w.-]+@([\w]+.){2,4}$/g;
			var regemailtwo = /\.[\w.]{2,3}$/g;
			var phone = document.forms["myForm"]["custPhone"].value;
			var regphone = /^[89]\d{7}/;
			var reguser = /^[\w.-_]+/;
			
			if (name == "" || email == "" ) {
				alert("Name, email must be filled out");
				return false;
			} else if  (regnameone.test(name) == false || regnametwo.test(name) == false){
				alert("Name must have alpahabet & space");
				return false;
			} else if ( regemailone.test(email) == false || regemailtwo.test(email) == false){
				alert("Email : username must contain - & . , there must be 2 to 4 domain names, and the last domain name must be between 2 to 3 characters")
				return false;
			} else if ( regphone.test(phone) == false){
				alert("Phone number must contain 8 numbers start with 8 or 9.")
				return false;
			} else {
				return true;
			}
	}
</script>	

<script>
	
	function update(x) {
		
		var itemno = "itemqty" + x ;
		document.getElementById(itemno).innerHTML='<form method="post" action="<?php $_SERVER['PHP_SELF']?> ">  New quantity : <input type="text" name="newqty" maxlength="4" size="4"> <input type="hidden" name="newaddr" value="' + x + '"> <button type="submit" value="Submit"> Change </button> </form> ';
	}
		
</script>
</html>
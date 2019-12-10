<?php  //cart.php
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

if (isset($_GET['empty'])) {
	unset($_SESSION['cart']);
	unset($_SESSION['size']);
	unset($_SESSION['qtty']);
	header('location: ' . $_SERVER['PHP_SELF']);
	exit();
}

$servername = "localhost";
$username = "f34ee";
$password = "f34ee";
$dbname = "f34ee";
$orderID = $_POST['orderID'];
$discount = 0.0;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$items = array ('Heart Neckline Chiffon Dress', 'Eyelash Lace Halter Dress', 'Thin Strap Lace Chiffon Dress', 'Thin Strap Lace Chiffon Maxi Slit Dress', 'Dotted Satin Drooping Strappy Dress','Lace Splice Halter Dress', 'Braided Back Double Straps Bodycon Dress', 'Thin Strap Bodycon Slit Dress', 'V Neck Ruffle Tie Up Dress', 'Double Strap V Neck Chiffon Camisole', 'Round Neck Halter Crop Top', 'Off Shoulder Droop Top', 'Double Layer Ruffle Halter Top', 'V-neck Lace Jacquard Short Sleeve Top', 'Thick Strap Loose Top', 'Thin strap knitted camisole', 'V-neck Lace Back Strap With Chiffon Top', 'Front knot crop top', 'BUTTON-UP RIBBON STRIPES CAMI JUMPSUIT', 'ELEGANT HALTER JUMPSUIT', 'PEN BACK EYELASH LACE CAMI JUMPSUIT','SLEEVELESS STRIPED TUXEDO PLAYSUIT', 'THIN STRAP FRONT TWIST JUMPSUIT', 'TROPICAL PRINT BUTTON UP PLAYSUIT', 'TROPICAL PRINT HALTER NECK KNOTTED JUMPSUIT', 'V-NECK FRONT KNOT JUMPSUIT', 'V-NECK BUTTON-UP SLEEVELESS JUMPSUIT', 'ASYMMETRICAL BUTTON UP SHORT SKIRT', 'HIGH-RISE FISHTAIL MAXI SKIRT', 'ONE PIECE TEXTURED SPLIT SKIRT (WITH BELT)', 'RIPPED KNEE DENIM JEANS', 'ROMANTIC LACE FIT SKIRT', 'RUFFLED LAYERED MAXI SKIRT', 'SIDE SLIT DENIM SKIRT', 'SKINNY LOOK MINIMALIST SHORTS', 'TEXTURED FRONT SLIT SKORT WITH BELT', 'MINIMALIST MULTICOLOR T-SHIRT', 'MINIMALIST RIBBED BODYCON DRESS', 'SEXY SLITTED FLARE PANTS', 'V-NECK LONG-SLEEVE BLOUSE', 'THIN KNIT V-NECK TANK TOP', '2WAY CROSS STRAP T-SHIRT', '2WAY LONG-SLEEVE SWEATER BELTED JUMPSUIT', 'COTTON TWO BUTTON WIDE LEG PANTS', 'GLOSS SHELL BUTTON LONG SLEEVE BLOUSE', 'PLAID SHIRRED SLIT CAMI SKIRT SET WEAR', 'PLAIN RIBBED V-NECK KNIT TOP', 'MINIMAL POCKETS SKIRT');
	
$itemprice = array (35.99,35.99,38.99,38.99,35.99,33.99,35.99,28.99,29.99, 15.99, 15.99, 19.99, 23.99, 29.99, 25.99, 27.99, 19.99, 19.99, 40.99, 30.99, 52.99, 28.99, 29.99, 30.99, 34.99, 25.99, 32.99, 20.99, 30.99, 28.99, 35.99, 29.99, 24.99, 30.99, 22.99, 28.99, 12.99, 15.99, 20.99, 15.99, 12.99, 12.99, 38.99, 30.99, 25.99, 38.99, 23.99, 25.99);
	
$itemsize = array ( 'S', 'M', 'L', 'XL');

$name = $_POST['name'];
$cars = array("Volvo", "BMW", "Toyota");

$to = 'f34ee@localhost';
$subject = '[Order ID : #'.$orderID.'] Confirmation email from Les Petite Jours';
$message = 'Hello dear '.$name.' Thank you for your purchase. Your Order ID is: #'.$orderID;
$a = $message;

for ($i=0; $i < count($_SESSION['cart']); $i++){
		$a .= "         ";
		$a .= "Item purchased: ";
		$a .= $items[$_SESSION['cart'][$i]];
		$a .= " Item price : $" ;
		$a .= number_format($itemprice[$_SESSION['cart'][$i]], 2);
		$a .= " Item size :";
		$a .= $itemsize[$_SESSION['size'][$i]];
		$a .= " Item quantity: "; 
		$a .= number_format($_SESSION['qtty'][$i]);
}

$headers = 'From: f34ee@localhost'."\r\n".'Reply-To: f34ee@localhost'."\r\n". 'X-Mailer: PHP/'.phpversion(); 
mail($to, $subject, $a, $headers, '-ff34ee@localhost'); 

echo ("mail sent to: ".$to);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Les Petits Jours</title>
	<meta charset=“utf-8”>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Sacramento&display=swap" rel="stylesheet">	<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color:#FDF2F0">
<p style="text-align:right;margin:0;padding:0;">
	 <?php 
	if (isset($_SESSION['valid_user'])){
		echo 'Welcome, '.$_SESSION['valid_user'].'. ';
		echo '<a href="logout.php">Log out</a>';
		$discount = 0.1;
	}
	else{
		$discount = 0.0;
	}
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

<div class="purchased-items">
		<?php
			$total=0.00;
			if (count($_SESSION['cart']) == 0){
				echo "<h3>Your shopping cart is empty, please go back and continue shopping</h3>";
			}
			else {
				echo "<h2>Thank you for your purchase.</h2>";
				echo "<h3>Your Order ID: #".$orderID."</h3>";
				echo "<hr>";
				echo "<table id='checkout' align='center'>";
					echo "<tr>";
						echo "<td width='30%'><b>Item</b></td>";
						echo "<td width='20%'><b>Price/pc</b></td>";
						echo "<td width='15%'><b>Size</b></td>";
						echo "<td widht='15%'><b>Quantity</b></td>";
						echo "<td width='20%'><b>Subtotal</b></td>";
					echo "</tr>";

				for ($i=0; $i < count($_SESSION['cart']); $i++){
					if ($_SESSION['cart'][$i] != 0){
						$itemName = $items[$_SESSION['cart'][$i]];
						if (stripos($itemName, 'camisole') || stripos($itemName, 'top')|| stripos($itemName, 't-shirt')|| stripos($itemName, 'blouse')){
							$category = "Tops";
						}
						else if (stripos($itemName, 'dress')){
							$category = "Dress";
						}
						else if (stripos($itemName, 'skirt') || stripos($itemName, 'jeans') || stripos($itemName, 'shorts') || stripos($itemName, 'pants')){
							$category = "Bottoms";
						}
						else if (stripos($itemName, 'jumpsuit') || stripos($itemName, 'playsuit')){
							$category = "Jumpsuit";
						}
						/*echo $category;*/

						
						$size = $itemsize[$_SESSION['size'][$i]];
						//get original quantity from database
						$quantity = "SELECT Qty FROM ".$category." where ItemName = '".$itemName.
						"' and Size = '".$size."'";
						/*echo $quantity;*/
						$result = mysqli_query($conn, $quantity);

						if (mysqli_num_rows($result) > 0) {
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {
								$stockQTY = $row["Qty"];
							}
						} 
						//if purchased quantity bigger than stock quantity
						if (number_format($_SESSION['qtty'][$i]) > $stockQTY){
							echo "<p style='color:red'>Sorry, there are only ".$stockQTY." pieces left for item '".$itemName."'. Your purchase for this item is not successful.<br/></p>";
						}
						else{
							$quantityToUpdate = $stockQTY - number_format($_SESSION['qtty'][$i]);
							$sql = "UPDATE ".$category ." SET Qty=".$quantityToUpdate." WHERE ItemName = '".$itemName.
							"' and Size = '".$size."'";
							/*echo $sql."<br/>";*/
						
							if (!mysqli_query($conn, $sql)) {
								echo "Error updating record: " . mysqli_error($conn);
							}
							//print table
							echo "<tr>";
							//item
							echo "<td>" .$itemName. "</td>";
							//price/pc
							echo "<td> $";
							echo number_format($itemprice[$_SESSION['cart'][$i]], 2). "</td>";
							//size
							echo "<td>" .$size. "</td>";
							//quantity
							echo "<td>" .number_format($_SESSION['qtty'][$i]). "</td>";
							//subtotal
							$subtotal = number_format($itemprice[$_SESSION['cart'][$i]], 2) * number_format($_SESSION['qtty'][$i]);
							echo "<td> $" . $subtotal. "</td>";
							echo "</tr>";
							$total = $total + $subtotal;
						}
					}
				}
						echo "<tr>";
			echo "<th colspan='4' style='text-align:left;'>Subtotal</th>";
			echo "<th style='text-align:left;'>$".$total."</th>";
			echo "</tr><tr>";
			echo "<th colspan='4' style='text-align:left;'>Member Discount (10%)</th>";
			echo "<th style='text-align:left;'>-$".number_format(($total*$discount),2)."</th>";
			echo "</tr><tr>";
			echo "<th colspan='4' style='text-align:left;'>Total Amount Paid</th>";
			echo "<th style='text-align:left;'>$".number_format(($total-($total*$discount)),2)."</th>";
			echo "</tr>";
			echo "</table>";

			}
		?>	
		<h3>Payment Details</h3>
		<hr>
		<table id='checkout' style="margin:auto; text-align:left; font-size: 16px;">
			<tr>
				<td width="30%">Customer Name:</td>
				<td id="custName"><?php echo $_POST['name'] ?></td>
			</tr>
			<tr>
				<td width="30%">Customer Email:</td>
				<td id="custEmail"><?php echo $_POST['email'] ?></td>
			</tr>
			<tr>
				<td width="30%">Address:</td>
				<td><?php echo $_POST['address'] ?></td>
			</tr>
			<tr>
				<td width="30%">Contact Number:</td>
				<td id="custPhone"><?php echo $_POST['contactnum'] ?></td>
			</tr>
		</table>
</div>
<?php
	mysqli_close($conn);
?>

<footer class='footer'>
	<small><i>&copy 2019 Les Petits Jours. All Right Reserved.</i></small>
</footer>

</body>
</html>
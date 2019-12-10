<?php
$servername = "localhost";
$username = "f34ee";
$password = "f34ee";
$dbname = "f34ee";
$redirect = "";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$name=$_POST['itemNameToPass'];
	$category=$_POST['categoryToPass'];
	$price=$_POST['itemPriceToPass'];
	$size=$_POST['itemSizeToPass'];
	$quantity = $_POST['itemQtyToPass'];
	
	if($category == 'Tops'){
		$redirect = 'tops.html';
	}
	else if($category == 'Dress'){
		$redirect = 'dress.html';
	}
	else if($category == 'Bottoms'){
		$redirect = 'bottoms.html';
	}
	else if($category == 'Jumpsuit'){
		$redirect = 'jumpsuit.html';
	}
	
	
	$sql = "INSERT INTO shoppingcart (ItemName, Category, ItemPrice, Size, Qty)
	VALUES ('".$name."', '".$category."',".$price.",'".$size."',".$quantity.");";
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Les Petits Jours</title>
	<meta charset=“utf-8”>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Sacramento&display=swap" rel="stylesheet">	<link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta http-equiv="refresh" content="1;url=<?php echo $redirect ?>">
</head>

</html>
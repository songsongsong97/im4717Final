<?php
$servername = "localhost";
$username = "f34ee";
$password = "f34ee";
$dbname = "f34ee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// insert records 

//item1
$sql = "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('BUTTON-UP RIBBON STRIPES CAMI Jumpsuit', 40.99,'S',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('BUTTON-UP RIBBON STRIPES CAMI Jumpsuit', 40.99,'M',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('BUTTON-UP RIBBON STRIPES CAMI Jumpsuit', 40.99,'L',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('BUTTON-UP RIBBON STRIPES CAMI Jumpsuit', 40.99,'XL',100);";

//item2
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('ELEGANT HALTER Jumpsuit', 30.99,'S',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('ELEGANT HALTER Jumpsuit', 30.99,'M',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('ELEGANT HALTER Jumpsuit', 30.99,'L',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('ELEGANT HALTER Jumpsuit', 30.99,'XL',100);";

//item3
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('PEN BACK EYELASH LACE CAMI Jumpsuit', 52.99,'S',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('PEN BACK EYELASH LACE CAMI Jumpsuit', 52.99,'M',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('PEN BACK EYELASH LACE CAMI Jumpsuit', 52.99,'L',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('PEN BACK EYELASH LACE CAMI Jumpsuit', 52.99,'XL',100);";

//item4
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('SLEEVELESS STRIPED TUXEDO PLAYSUIT', 28.99,'S',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('SLEEVELESS STRIPED TUXEDO PLAYSUIT', 28.99,'M',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('SLEEVELESS STRIPED TUXEDO PLAYSUIT', 28.99,'L',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('SLEEVELESS STRIPED TUXEDO PLAYSUIT', 28.99,'XL',100);";

//item5
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('THIN STRAP FRONT TWIST Jumpsuit', 29.99,'S',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('THIN STRAP FRONT TWIST Jumpsuit', 29.99,'M',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('THIN STRAP FRONT TWIST Jumpsuit', 29.99,'L',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('THIN STRAP FRONT TWIST Jumpsuit', 29.99,'XL',100);";

//item6
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('TROPICAL PRINT BUTTON UP PLAYSUIT', 30.99,'S',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('TROPICAL PRINT BUTTON UP PLAYSUIT', 30.99,'M',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('TROPICAL PRINT BUTTON UP PLAYSUIT', 30.99,'L',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('TROPICAL PRINT BUTTON UP PLAYSUIT', 30.99,'XL',100);";

//item7
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('TROPICAL PRINT HALTER NECK KNOTTED Jumpsuit', 34.99,'S',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('TROPICAL PRINT HALTER NECK KNOTTED Jumpsuit', 34.99,'M',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('TROPICAL PRINT HALTER NECK KNOTTED Jumpsuit', 34.99,'L',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('TROPICAL PRINT HALTER NECK KNOTTED Jumpsuit', 34.99,'XL',100);";

//item8
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('V-NECK FRONT KNOT Jumpsuit', 25.99,'S',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('V-NECK FRONT KNOT Jumpsuit', 25.99,'M',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('V-NECK FRONT KNOT Jumpsuit', 25.99,'L',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('V-NECK FRONT KNOT Jumpsuit', 25.99,'XL',100);";

//item9
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('V-NECK BUTTON-UP SLEEVELESS Jumpsuit', 32.99,'S',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('V-NECK BUTTON-UP SLEEVELESS Jumpsuit', 32.99,'M',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('V-NECK BUTTON-UP SLEEVELESS Jumpsuit', 32.99,'L',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('V-NECK BUTTON-UP SLEEVELESS Jumpsuit', 32.99,'XL',100);";

//item10
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('2WAY LONG-SLEEVE SWEATER BELTED Jumpsuit', 38.99,'S',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('2WAY LONG-SLEEVE SWEATER BELTED Jumpsuit', 38.99,'M',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('2WAY LONG-SLEEVE SWEATER BELTED Jumpsuit', 38.99,'L',100);";
$sql .= "INSERT INTO Jumpsuit (ItemName, ItemPrice, Size, Qty)
VALUES ('2WAY LONG-SLEEVE SWEATER BELTED Jumpsuit', 38.99,'XL',100);";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

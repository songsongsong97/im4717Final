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
$sql = "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Heart Neckline Chiffon Dress', 35.99,'S',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Heart Neckline Chiffon Dress', 35.99,'M',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Heart Neckline Chiffon Dress', 35.99,'L',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Heart Neckline Chiffon Dress', 35.99,'XL',100);";

//item2
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Eyelash Lace Halter Dress', 35.99,'S',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Eyelash Lace Halter Dress', 35.99,'M',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Eyelash Lace Halter Dress', 35.99,'L',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Eyelash Lace Halter Dress', 35.99,'XL',100);";

//item3
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Thin Strap Lace Chiffon Dress', 38.99,'S',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Thin Strap Lace Chiffon Dress', 38.99,'M',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Thin Strap Lace Chiffon Dress', 38.99,'L',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Thin Strap Lace Chiffon Dress', 38.99,'XL',100);";

//item4
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Thin Strap Lace Chiffon Maxi Slit Dress', 38.99,'S',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Thin Strap Lace Chiffon Maxi Slit Dress', 38.99,'M',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Thin Strap Lace Chiffon Maxi Slit Dress', 38.99,'L',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Thin Strap Lace Chiffon Maxi Slit Dress', 38.99,'XL',100);";

//item5
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Dotted Satin Drooping Strappy Dress', 35.99,'S',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Dotted Satin Drooping Strappy Dress', 35.99,'M',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Dotted Satin Drooping Strappy Dress', 35.99,'L',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Dotted Satin Drooping Strappy Dress', 35.99,'XL',100);";

//item6
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Lace Splice Halter Dress', 33.99,'S',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Lace Splice Halter Dress', 33.99,'M',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Lace Splice Halter Dress', 33.99,'L',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Lace Splice Halter Dress', 33.99,'XL',100);";

//item7
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Braided Back Double Straps Bodycon Dress', 35.99,'S',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Braided Back Double Straps Bodycon Dress', 35.99,'M',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Braided Back Double Straps Bodycon Dress', 35.99,'L',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Braided Back Double Straps Bodycon Dress', 35.99,'XL',100);";

//item8
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Thin Strap Bodycon Slit Dress', 28.99,'S',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Thin Strap Bodycon Slit Dress', 28.99,'M',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Thin Strap Bodycon Slit Dress', 28.99,'L',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('Thin Strap Bodycon Slit Dress', 28.99,'XL',100);";

//item9
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('V Neck Ruffle Tie Up Dress', 29.99,'S',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('V Neck Ruffle Tie Up Dress', 29.99,'M',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('V Neck Ruffle Tie Up Dress', 29.99,'L',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('V Neck Ruffle Tie Up Dress', 29.99,'XL',100);";

//item10
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('MINIMALIST RIBBED BODYCON DRESS', 15.99,'S',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('MINIMALIST RIBBED BODYCON DRESS', 15.99,'M',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('MINIMALIST RIBBED BODYCON DRESS', 15.99,'L',100);";
$sql .= "INSERT INTO Dress (ItemName, ItemPrice, Size, Qty)
VALUES ('MINIMALIST RIBBED BODYCON DRESS', 15.99,'XL',100);";


if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


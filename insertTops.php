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
$sql = "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Double Strap V Neck Chiffon Camisole', 15.99,'S',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Double Strap V Neck Chiffon Camisole', 15.99,'M',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Double Strap V Neck Chiffon Camisole', 15.99,'L',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Double Strap V Neck Chiffon Camisole', 15.99,'XL',100);";

//item2
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Round Neck Halter Crop Top', 15.99,'S',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Round Neck Halter Crop Top', 15.99,'M',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Round Neck Halter Crop Top', 15.99,'L',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Round Neck Halter Crop Top', 15.99,'XL',100);";

//item3
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Off Shoulder Droop Top', 19.99,'S',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Off Shoulder Droop Top', 19.99,'M',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Off Shoulder Droop Top', 19.99,'L',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Off Shoulder Droop Top', 19.99,'XL',100);";

//item4
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Double Layer Ruffle Halter Top', 23.99,'S',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Double Layer Ruffle Halter Top', 23.99,'M',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Double Layer Ruffle Halter Top', 23.99,'L',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Double Layer Ruffle Halter Top', 23.99,'XL',100);";

//item5
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('V-NECK LACE JACQUARD SHORT SLEEVE TOP', 29.99,'S',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('V-NECK LACE JACQUARD SHORT SLEEVE TOP', 29.99,'M',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('V-NECK LACE JACQUARD SHORT SLEEVE TOP', 29.99,'L',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('V-NECK LACE JACQUARD SHORT SLEEVE TOP', 29.99,'XL',100);";

//item6
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Thick Strap Loose Top', 25.99,'S',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Thick Strap Loose Top', 25.99,'M',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Thick Strap Loose Top', 25.99,'L',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Thick Strap Loose Top', 25.99,'XL',100);";

//item7
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Thin strap knitted camisole', 27.99,'S',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Thin strap knitted camisole', 27.99,'M',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Thin strap knitted camisole', 27.99,'L',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('Thin strap knitted camisole', 27.99,'XL',100);";

//item8
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('V-NECK LACE BACK STRAP WITH CHIFFON TOP', 19.99,'S',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('V-NECK LACE BACK STRAP WITH CHIFFON TOP', 19.99,'M',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('V-NECK LACE BACK STRAP WITH CHIFFON TOP', 19.99,'L',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('V-NECK LACE BACK STRAP WITH CHIFFON TOP', 19.99,'XL',100);";

//item9
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('FRONT KNOT CROP TOP', 19.99,'S',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('FRONT KNOT CROP TOP', 19.99,'M',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('FRONT KNOT CROP TOP', 19.99,'L',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('FRONT KNOT CROP TOP', 19.99,'XL',100);";

//item10
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('GLOSS SHELL BUTTON LONG SLEEVE BLOUSE', 25.99,'S',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('GLOSS SHELL BUTTON LONG SLEEVE BLOUSE', 25.99,'M',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('GLOSS SHELL BUTTON LONG SLEEVE BLOUSE', 25.99,'L',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('GLOSS SHELL BUTTON LONG SLEEVE BLOUSE', 25.99,'XL',100);";

//item11
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('PLAIN RIBBED V-NECK KNIT TOP', 23.99,'S',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('PLAIN RIBBED V-NECK KNIT TOP', 23.99,'M',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('PLAIN RIBBED V-NECK KNIT TOP', 23.99,'L',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('PLAIN RIBBED V-NECK KNIT TOP', 23.99,'XL',100);";

//item12
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('MINIMALIST MULTICOLOR T-SHIRT', 12.99,'S',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('MINIMALIST MULTICOLOR T-SHIRT', 12.99,'M',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('MINIMALIST MULTICOLOR T-SHIRT', 12.99,'L',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('MINIMALIST MULTICOLOR T-SHIRT', 12.99,'XL',100);";

//item13
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('V-NECK LONG-SLEEVE BLOUSE', 15.99,'S',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('V-NECK LONG-SLEEVE BLOUSE', 15.99,'M',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('V-NECK LONG-SLEEVE BLOUSE', 15.99,'L',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('V-NECK LONG-SLEEVE BLOUSE', 15.99,'XL',100);";

//item14
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('THIN KNIT V-NECK TANK TOP', 12.99,'S',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('THIN KNIT V-NECK TANK TOP', 12.99,'M',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('THIN KNIT V-NECK TANK TOP', 12.99,'L',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('THIN KNIT V-NECK TANK TOP', 12.99,'XL',100);";

//item15
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('2WAY CROSS STRAP T-SHIRT', 12.99,'S',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('2WAY CROSS STRAP T-SHIRT', 12.99,'M',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('2WAY CROSS STRAP T-SHIRT', 12.99,'L',100);";
$sql .= "INSERT INTO Tops (ItemName, ItemPrice, Size, Qty)
VALUES ('2WAY CROSS STRAP T-SHIRT', 12.99,'XL',100);";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>


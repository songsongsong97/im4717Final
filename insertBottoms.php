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
$sql = "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('ASYMMETRICAL BUTTON UP SHORT SKIRT', 20.99,'S',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('ASYMMETRICAL BUTTON UP SHORT SKIRT', 20.99,'M',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('ASYMMETRICAL BUTTON UP SHORT SKIRT', 20.99,'L',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('ASYMMETRICAL BUTTON UP SHORT SKIRT', 20.99,'XL',100);";

//item2
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('HIGH-RISE FISHTAIL MAXI SKIRT', 30.99,'S',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('HIGH-RISE FISHTAIL MAXI SKIRT', 30.99,'M',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('HIGH-RISE FISHTAIL MAXI SKIRT', 30.99,'L',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('HIGH-RISE FISHTAIL MAXI SKIRT', 30.99,'XL',100);";

//item3
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('ONE PIECE TEXTURED SPLIT SKIRT (WITH BELT)', 28.99,'S',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('ONE PIECE TEXTURED SPLIT SKIRT (WITH BELT)', 28.99,'M',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('ONE PIECE TEXTURED SPLIT SKIRT (WITH BELT)', 28.99,'L',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('ONE PIECE TEXTURED SPLIT SKIRT (WITH BELT)', 28.99,'XL',100);";

//item4
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('RIPPED KNEE DENIM JEANS', 35.99,'S',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('RIPPED KNEE DENIM JEANS', 35.99,'M',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('RIPPED KNEE DENIM JEANS', 35.99,'L',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('RIPPED KNEE DENIM JEANS', 35.99,'XL',100);";

//item5
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('ROMANTIC LACE FIT SKIRT', 29.99,'S',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('ROMANTIC LACE FIT SKIRT', 29.99,'M',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('ROMANTIC LACE FIT SKIRT', 29.99,'L',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('ROMANTIC LACE FIT SKIRT', 29.99,'XL',100);";

//item6
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('RUFFLED LAYERED MAXI SKIRT', 24.99,'S',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('RUFFLED LAYERED MAXI SKIRT', 24.99,'M',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('RUFFLED LAYERED MAXI SKIRT', 24.99,'L',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('RUFFLED LAYERED MAXI SKIRT', 24.99,'XL',100);";

//item7
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('SIDE SLIT DENIM SKIRT', 30.99,'S',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('SIDE SLIT DENIM SKIRT', 30.99,'M',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('SIDE SLIT DENIM SKIRT', 30.99,'L',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('SIDE SLIT DENIM SKIRT', 30.99,'XL',100);";

//item8
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('SKINNY LOOK MINIMALIST SHORTS', 22.99,'S',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('SKINNY LOOK MINIMALIST SHORTS', 22.99,'M',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('SKINNY LOOK MINIMALIST SHORTS', 22.99,'L',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('SKINNY LOOK MINIMALIST SHORTS', 22.99,'XL',100);";

//item9
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('TEXTURED FRONT SLIT SKIRT WITH BELT', 28.99,'S',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('TEXTURED FRONT SLIT SKIRT WITH BELT', 28.99,'M',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('TEXTURED FRONT SLIT SKIRT WITH BELT', 28.99,'L',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('TEXTURED FRONT SLIT SKIRT WITH BELT', 28.99,'XL',100);";

//item10
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('COTTON TWO BUTTON WIDE LEG PANTS', 30.99,'S',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('COTTON TWO BUTTON WIDE LEG PANTS', 30.99,'M',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('COTTON TWO BUTTON WIDE LEG PANTS', 30.99,'L',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('COTTON TWO BUTTON WIDE LEG PANTS', 30.99,'XL',100);";

//item11
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('PLAID SHIRRED SLIT CAMI SKIRT SET WEAR', 38.99,'S',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('PLAID SHIRRED SLIT CAMI SKIRT SET WEAR', 38.99,'M',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('PLAID SHIRRED SLIT CAMI SKIRT SET WEAR', 38.99,'L',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('PLAID SHIRRED SLIT CAMI SKIRT SET WEAR', 38.99,'XL',100);";

//item12
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('MINIMAL POCKETS SKIRT', 25.99,'S',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('MINIMAL POCKETS SKIRT', 25.99,'M',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('MINIMAL POCKETS SKIRT', 25.99,'L',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('MINIMAL POCKETS SKIRT', 25.99,'XL',100);";

//item13
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('SEXY SLITTED FLARE PANTS', 20.99,'S',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('SEXY SLITTED FLARE PANTS', 20.99,'M',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('SEXY SLITTED FLARE PANTS', 20.99,'L',100);";
$sql .= "INSERT INTO Bottoms (ItemName, ItemPrice, Size, Qty)
VALUES ('SEXY SLITTED FLARE PANTS', 20.99,'XL',100);";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

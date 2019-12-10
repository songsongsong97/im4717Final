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

// sql to create table Tops
$sql = "CREATE TABLE Tops (
ItemName VARCHAR(60) NOT NULL,
ItemPrice FLOAT(30) NOT NULL,
Size VARCHAR(30) NOT NULL,
Qty INT(30) NOT NULL,
reg_date TIMESTAMP
)";

/* NOT NULL - Each row must contain a value for that column, null values are not allowed
DEFAULT value - Set a default value that is added when no other value is passed
UNSIGNED - Used for number types, limits the stored data to positive numbers and zero
AUTO INCREMENT - MySQL automatically increases the value of the field by 1 each time a new record is added
PRIMARY KEY - Used to uniquely identify the rows in a table. The column with PRIMARY KEY setting is often an ID number, and is often used with AUTO_INCREMENT
*/


if (mysqli_query($conn, $sql)) {
    echo "Table Tops created successfully <br/>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}


// sql to create table Dress
$sql = "CREATE TABLE Dress (
ItemName VARCHAR(60) NOT NULL,
ItemPrice FLOAT(30) NOT NULL,
Size VARCHAR(30) NOT NULL,
Qty INT(30) NOT NULL,
reg_date TIMESTAMP
)";

/* NOT NULL - Each row must contain a value for that column, null values are not allowed
DEFAULT value - Set a default value that is added when no other value is passed
UNSIGNED - Used for number types, limits the stored data to positive numbers and zero
AUTO INCREMENT - MySQL automatically increases the value of the field by 1 each time a new record is added
PRIMARY KEY - Used to uniquely identify the rows in a table. The column with PRIMARY KEY setting is often an ID number, and is often used with AUTO_INCREMENT
*/


if (mysqli_query($conn, $sql)) {
    echo "Table Dress created successfully <br/>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table Jumpsuit
$sql = "CREATE TABLE Jumpsuit (
ItemName VARCHAR(60) NOT NULL,
ItemPrice FLOAT(30) NOT NULL,
Size VARCHAR(30) NOT NULL,
Qty INT(30) NOT NULL,
reg_date TIMESTAMP
)";

/* NOT NULL - Each row must contain a value for that column, null values are not allowed
DEFAULT value - Set a default value that is added when no other value is passed
UNSIGNED - Used for number types, limits the stored data to positive numbers and zero
AUTO INCREMENT - MySQL automatically increases the value of the field by 1 each time a new record is added
PRIMARY KEY - Used to uniquely identify the rows in a table. The column with PRIMARY KEY setting is often an ID number, and is often used with AUTO_INCREMENT
*/


if (mysqli_query($conn, $sql)) {
    echo "Table Jumpsuit created successfully <br/>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// sql to create table Bottoms
$sql = "CREATE TABLE Bottoms (
ItemName VARCHAR(60) NOT NULL,
ItemPrice FLOAT(30) NOT NULL,
Size VARCHAR(30) NOT NULL,
Qty INT(30) NOT NULL,
reg_date TIMESTAMP
)";


if (mysqli_query($conn, $sql)) {
    echo "Table Bottoms created successfully <br/>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// sql to create table ShoppingCart
$sql = "CREATE TABLE ShoppingCart (
ItemName VARCHAR(60) NOT NULL,
Category VARCHAR(30) NOT NULL,
ItemPrice FLOAT(30) NOT NULL,
Size VARCHAR(30) NOT NULL,
Qty INT(30) NOT NULL,
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table ShoppingCart created successfully <br/>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

// sql to create table Orders
$sql = "CREATE TABLE Orders (
OrderID VARCHAR(30) NOT NULL,
CustomerName VARCHAR(30) NOT NULL,
OrderQTY INT(30) NOT NULL,
TotalPrice FLOAT(30) NOT NULL,
ContactNo INT(30) NOT NULL,
Address VARCHAR(60) NOT NULL,
isPaid BOOLEAN,
reg_date TIMESTAMP
)";


if (mysqli_query($conn, $sql)) {
    echo "Table Orders created successfully <br/>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

$sql = "CREATE TABLE users (
username VARCHAR(60) NOT NULL,
email VARCHAR(60) NOT NULL,
password VARCHAR(60) NOT NULL,
reg_date TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
    echo "Table users created successfully <br/>";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

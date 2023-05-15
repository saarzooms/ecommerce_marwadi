<?php
// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$productID = $_GET['product_id']; 

$sql = "SELECT quantity FROM product WHERE pro_id = $productID";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $quantity = $row['quantity'];
    echo "Available quantity: " . $quantity;
} else {
    echo "Product not found";
}

$conn->close();
?>

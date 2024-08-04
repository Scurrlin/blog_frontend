<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Default MAMP PRO username
$password = "root"; // Default MAMP PRO password
$dbname = "shop_db"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Close connection
$conn->close();
?>

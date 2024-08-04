<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Default MAMP PRO username
$password = "root"; // Default MAMP PRO password
$dbname = "shop_db"; // Your database name
$socket = "/Applications/MAMP/tmp/mysql/mysql.sock"; // Default MAMP PRO MySQL socket

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, null, $socket);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Close connection
$conn->close();
?>

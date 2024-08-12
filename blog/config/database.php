<?php
require 'config/constants.php';

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT, DB_SOCKET);

if ($connection->connect_errno) {
    die('Connection failed: (' . $connection->connect_errno . ') ' . $connection->connect_error);
}
?>
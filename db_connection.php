<?php

$host = 'localhost'; // Database server
$username = 'root'; // Database username
$password = ''; // Database password
$dbname = 'test'; // Database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

?>

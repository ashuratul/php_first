<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'ratul');
define('DB_PASS', '123456');
define('DB_NAME', 'trial');
define('DB_PORT', '3307');


// Create connection
// $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);


// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

// echo 'Connected successfully!';
?>
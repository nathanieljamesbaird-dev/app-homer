<?php

date_default_timezone_set('Australia/Adelaide');

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'homer';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// ... perform database operations ...

// Close the connection
$conn->close();
?>

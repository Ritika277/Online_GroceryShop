<?php
// Database credentials

$host = "localhost";
$login = "root";  
$password = "";
$database = "apni dukan";

// Create connection

$connection = new mysqli($host, $login, $password, $database);

//Check connection

if ($connection->connect_error) {
  die('Connection failed: ' . $connection->connect_error);
}

echo "<b>Connected successfully</b>";
?>
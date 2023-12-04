<?php
include_once 'conn.php';
// Retrieve form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = $_POST['password'];


// Prepare and execute SQL statement
$sql = "INSERT INTO users (name, phone, email, password) VALUES ('$name', '$phone', '$email', '$password')";

if ($connection->query($sql) === TRUE) {
  echo "You have created your account.";
} else {
  echo "Error: " . $sql . "<br>" . $connection->error;
}
<div style="background-color:black;opacity:0.5;width:50%;"> 
<h1 style="color:white;text-align:center;">Congrats!You have successfully created your account.</h1>
 echo ("Hey:" $_POST["name"]);
    echo ("Your email address is:" $_POST["email"]); 
</div>

// Close the connection

$connection->close();
?>


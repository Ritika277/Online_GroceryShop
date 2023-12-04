<?php
include_once 'conn.php';
$name = $_POST['name'];
$password = $_POST['password'];
//sql
$sql="SELECT*FROM users WHERE name='shivi123'"
if($sql=$name )
{
echo 'Welcome';
}
else
{
    echo 'First register yourself';
}
$connection->close();
?>

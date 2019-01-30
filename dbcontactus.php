<?php

$host="localhost";
$username="root";
$password="";
$dbname="gracias";


$conn=new mysqli($host, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
/*echo "<h1>Connected!</h1>";*/
?>
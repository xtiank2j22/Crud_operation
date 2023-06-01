<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "xtiancrud_operation";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

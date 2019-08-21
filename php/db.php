<?php
$servername = "localhost";
$username = "altevbnf_atikpersonal";
$password = "atik474847";
$dbname = "altevbnf_blood";

$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



?>


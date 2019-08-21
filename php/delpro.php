<?php

session_start();
include 'db.php';
$emails=$_SESSION['ename'];

$sql="DELETE from signup WHERE email='$emails'";

if ($conn->query($sql) === TRUE) {
	 echo "<script type='text/javascript'>

	 	alert('Profile Deleted');		
		window.location='../index.php';
				</script>";
       }



?>
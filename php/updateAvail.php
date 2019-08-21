<?php

session_start();
$email=$_SESSION['ename'];
include 'db.php';

if(isset($_POST['checked'])){
	$var=$_POST['checked'];
	if($var==1){

$avail='Yes';
$sql="UPDATE signup SET Available='$avail' WHERE email='$email'";
$result=mysqli_query($conn,$sql);

if($result){
	echo "Marked";
}
}

else{
$avail='No';
$sql="UPDATE signup SET Available='$avail' WHERE email='$email'";
$result=mysqli_query($conn,$sql);

if($result){
	echo "Not Marked";

}
}

}


?> 
<?php

session_start();
$email=$_SESSION['ename'];
include 'db.php';

 
$date = false;
if(isset($_POST['startdate'])){
    $date = $_POST['startdate'];
}



date_default_timezone_set("Asia/Dhaka");
$now = date('Y-m-d');
 $diff=strtotime($now)-strtotime($date);
$x=floor($diff/(60*60*24));


if($x < 90){

  $avail='No';

  $sql="UPDATE signup SET Date='$date',Available='$avail' WHERE email='$email' ";
 $res=mysqli_query($conn,$sql);
if($res){
	echo "Updated";
		}	
}
else{
 $avail='Yes';
 $sql="UPDATE signup SET Date='$date',Available='$avail' WHERE email='$email' ";
 $res=mysqli_query($conn,$sql);
if($res){
	echo "Updated";
}
}
?>
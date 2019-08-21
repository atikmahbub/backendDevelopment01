<?php


session_start();
include 'db.php';

date_default_timezone_set("Asia/Dhaka");

 $now = date('Y-m-d');


$name =$_POST['uname'];
$email =$_POST['ename'];
$pass = $_POST['psw'];
$blood = $_POST['bloodgroup'];
$weight=$_POST['weight'];
$ft=$_POST['feet'] ;
$inch=$_POST['inch'] ;
$ftinch= $ft.' '.'ft'.' '.$inch.' '.'inch';
$city=$_POST['City'] ;
$area=$_POST['area'] ;
$location=$city.",".$area;
$phone=$_POST['phone'] ;
$age=$_POST['age'] ;
$avail=$_POST['avail'] ;
$lastD=$_POST['bday'] ;




$diff=strtotime($now)-strtotime($lastD);
$x=floor($diff/(60*60*24));


if($x < 90){
  $avail='No';
}

$_SESSION['ename'] = $email;

if (isset($_POST['male'])) {

    $gender='Male';
}
else{
  $gender='Female';
}




 $sqls = "SELECT * FROM signup WHERE email='$email'" ;

       $result = mysqli_query($conn,$sqls ) ;

       if( mysqli_num_rows( $result ) > 0 )
       {
       
       echo "<script type='text/javascript'>alert('Email Already Exists.Try Again');
		window.location='../index.php';
				</script>";
       }


$sql = "INSERT INTO signup (name, email,gender,bloodGroup,weight,height,age,phoneNumber,Location,Available,Date,password)
VALUES ('$name','$email' ,'$gender', '$blood','$weight','$ftinch','$age','$phone','$location','$avail','$lastD','$pass')";

if ($conn->query($sql) === TRUE) {
    
   
	 echo "<script type='text/javascript'>
		  window.location='profile.php';
				</script>";
       }
    
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
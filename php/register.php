<?php
session_start();
include 'db.php';


		if(isset($_POST['reg'])){

		$name =$_POST['regname'];
		$email =$_POST['regmail'];
		$pass = $_POST['psw'];
		$number = $_POST['regnumber'];

		$_SESSION['ename'] = $email;

		if (isset($_POST['male'])) {

		    $gender='Male';
		}
		else{
		  $gender='Female';  
		}

		 $sqls = "SELECT * FROM register WHERE email='$email'" ;

       $result = mysqli_query($conn,$sqls ) ;

       if( mysqli_num_rows( $result ) > 0 )
       {
       
       echo "<script type='text/javascript'>alert('Email Already Exists.Try Again');
		window.location='../index.php';
				</script>";
       }



	$sql="INSERT INTO register(name,email,gender,contact,password) VALUES ('$name','$email','$gender','$number','$pass')";
	$results=mysqli_query($conn,$sql);
	if($results){
		echo "<script>
		alert('Registration Successful');
		window.location='../php/rcvprofile.php';
		</script>";
	}
	else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
}


?>
   
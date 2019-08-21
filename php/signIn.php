

<?php

session_start();

	include 'db.php';

	

	$email =$_POST['uname'];	
	$pass = $_POST['psw'];

	if (isset($_POST['donor'])) {

		$_SESSION['ename'] = $email;

		$sqls = "SELECT email,password FROM signup WHERE email='$email' AND password='$pass'" ;

       $result = mysqli_query($conn,$sqls ) ;

       if( mysqli_num_rows( $result ) > 0 )
       {
      
         echo "<script type='text/javascript'>
		window.location='profile.php';
				</script>";
       }
       else{
       		 echo "<script type='text/javascript'>
		window.location='../index.php';
		alert('Incorrect Password 0r Email');
				</script>";
       }
   }
   else{

   		$_SESSION['ename'] = $email;

		$sqls = "SELECT email,password FROM register WHERE email='$email' AND password='$pass'" ;

       $result = mysqli_query($conn,$sqls ) ;

       if( mysqli_num_rows( $result ) > 0 )
       {
      
         echo "<script type='text/javascript'>
		window.location='rcvprofile.php';
				</script>";
       }
       else{
       		 echo "<script type='text/javascript'>
		window.location='../index.php';
		alert('Incorrect Password 0r Email');
				</script>";
       }

   }
       
?>
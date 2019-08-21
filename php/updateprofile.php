<?php

	session_start();
	if(empty($_SESSION['ename'])){
		 echo "<script type='text/javascript'>

		  window.location='../index.php';
		 alert('You Need To Log In First');
		  
				</script>";
	}

	$emails=$_SESSION['ename'];	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>
	<link rel="shortcut icon" type="image/x-icon" href="../img/icon.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="../css/profilemedia.css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Cantora+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Carter+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
    <!-- Custom styles for this template -->
    <link href="../css/full-slider.css" rel="stylesheet">
    <link href="../css/updatepro.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/profilepage.css" rel="stylesheet">

     <script src="../vendor/jquery/jquery.min.js"></script>
     <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <script src="../js/scrolling-nav.js"></script>
      
      <script src="../js/wow.js"></script>   
       

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top ">
      <div class="container menu">
        <a class="navbar-brand" href="../index.php">Blood<span class=brandcolor>BD</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="../index.php#home">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php#Service">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php#available">Available Donor's</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="../php/forumpage.php?page=1">Forum</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

       <div class="heading wow fadeInLeftBig">
        <div class="icon">
        <i class="fa fa-align-right" style="font-size:56px"></i>
      </div>
      <div class="serviceTitle uppro">
      <h1 class="title text-center service" style="color: black">Update Profile</h1>
      </div>
    </div>
<div class="container">  
  <form id="contact" action="" method="post" onsubmit="return validateForm()">
   

    <fieldset style="float: left;">
    	<h4>Name <span class="nmsg hidden">Invalid Name</span></h4>
      <input placeholder="Your name" class="dname" name="name" type="text" tabindex="1" value="<?php 	include'db.php';

$sql = "SELECT name FROM signup WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["name"];
    }

			  ?>" required>
    </fieldset>
    <fieldset style="float: left;">
    	<h4>Email<span class="emsg hidden">Invalid Email</span></h4>
      <input placeholder="Your Email Address" class="dmail" name="email" type="email" tabindex="2" value="<?php echo $emails; ?>" required>
    </fieldset>
    
    <fieldset style="float: left;">
    	<h4>Gender</h4>
      <input placeholder="Your Phone Number (optional)" name="gender" type="tel" tabindex="3" value="<?php
$sql = "SELECT gender FROM signup WHERE email='$emails'";
$result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        echo $row["gender"];
    }
?>" required>
    </fieldset>
    <fieldset style="float: left;" >
    	 <h4>Blood Group</h4>
      <input placeholder="Blood-Group" name="blood" type="text" value="<?php
$sql = "SELECT bloodGroup FROM signup WHERE email='$emails'";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
        echo $row["bloodGroup"];
    }
?>" tabindex="" required>
    </fieldset>
    <fieldset style="float: left;" >
    	 <h4>Weight(kg)</h4>
      <input placeholder="Weight" type="tel" name="weight" value="<?php
$sql = "SELECT weight FROM signup WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["weight"];
    }
?>" required>
    </fieldset>
    <fieldset style="float: left;" >
    	 <h4>Height</h4>
      <input name="height" placeholder="Ft Inch"  type="tel" value="<?php
$sql = "SELECT height FROM signup WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["height"];
    }
?>" required >
    </fieldset>
      <fieldset style="float: left;" >
    	 <h4>Location</h4>
      <input placeholder="Area" name="location" type="text" value="<?php
            

$sql = "SELECT Location FROM signup WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Location"];
    }
?>" required >
        
    </fieldset>
       <fieldset style="float: left;" >
    	 <h4>Phone Number</h4>
      <input placeholder="Contact Number" name="number" type="text" value="<?php
				
$sql = "SELECT phoneNumber FROM signup WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["phoneNumber"];
    }
?>" required >
        
    </fieldset>
       <fieldset style="float: left;" >
    	 <h4>Age</h4>
      <input placeholder="Age" name="age" type="tel" value="<?php
$sql = "SELECT age FROM signup WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["age"];
    }
?>" required >
        
    </fieldset>

       <fieldset style="float: left;" >
    	 <h4>Password</h4>
      <input placeholder="Password" class="password" name="pass" type="Password" value="<?php
$sql = "SELECT password FROM signup WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["password"];
    }
?>" required >
        
    </fieldset>
       <fieldset >
    	 <h4>Confirm Password<span class="rmsg hidden">Password Doesn't Match</span></h4>
      <input placeholder="Re-Enter Password" class="Rpassword" type="Password" value="<?php
$sql = "SELECT password FROM signup WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["password"];
    }
?>" required >
        
    </fieldset>
    <br>
  
    <center><fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">UPDATE</button></center>
    </fieldset>

  </form>
</div>
<script type="text/javascript">


  var nameError=passError=emailError=1;


$(document).ready(function(){
    var $regexname=/^([a-zA-Z ]{0,30})$/;
    $('.dname').on('keypress keydown keyup',function(){
             if (!$(this).val().match($regexname)) {
               nameError=0;
              // there is a mismatch, hence show the error message
                 $('.nmsg').removeClass('hidden');
                 $('.nmsg').show();
                 
             }
           else{
                // else, do not display message
                 nameError=1;
                $('.nmsg').addClass('hidden');

               }
         });

     var $re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

     $('.dmail').on('keypress keydown keyup',function(){
             if (!$(this).val().match($re)) {
               emailError=0;
              // there is a mismatch, hence show the error message
                 $('.emsg').removeClass('hidden');
                 $('.emsg').show();
             }
           else{
             emailError=1;
                // else, do not display message
                $('.emsg').addClass('hidden');
               }
         });



    $('.Rpassword').keyup(function(){
             if ($('.password').val() != $('.Rpassword').val()) {
               passError=0;
                   $('.rmsg').removeClass('hidden');
                 $('.rmsg').show();
             }else{
               passError=1;
                $('.rmsg').addClass('hidden');
            }
      });


});

  function validateForm(){
    if(emailError==1 && nameError==1 && passError==1){
      return true;
    }
    else{
      return false
    }
  }

</script>


<?php
if(isset($_POST['submit'])){

	$name =$_POST['name'];
	$email =$_POST['email'];
	$pass = $_POST['pass'];
	$blood = $_POST['blood'];
	$weight=$_POST['weight'];
	$height=$_POST['height'] ;
	$location=$_POST['location'] ;
	$phone=$_POST['number'] ;
	$age=$_POST['age'] ;

	$sql="UPDATE signup SET name='$name',email='$email',bloodGroup='$blood',weight='$weight',height='$height',Location='$location',age='$age',phoneNumber='$phone',password='$pass' WHERE email='$emails'";

	$_SESSION['ename']=$_POST['email'];

	if ($conn->query($sql) === TRUE) {
	 echo "<script type='text/javascript'>

	 	alert('Profile Updated');		
		window.location='profile.php';
				</script>";
       }

		}

	?>
	 <footer class="py-5 bg-dark">
      <div class="container">
       <p style="color: #9c9fa3;text-align: center;">&copy Blood Donor's Network-developed by AM</p>
      </div>
      <!-- /.container -->
    </footer>
</body>
</html>
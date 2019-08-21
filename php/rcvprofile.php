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
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
     <link rel="shortcut icon" type="image/x-icon" href="../img/icon.ico" />
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Cantora+One" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Cantora+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Carter+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   
    <!-- Custom styles for this template -->
    <link href="../css/full-slider.css" rel="stylesheet">
    <link href="../css/rcvprofile.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
     <link href="../css/forum.css" rel="stylesheet">
     <link href="../css/profilemedia.css" rel="stylesheet">
   
   

     <script src="../vendor/jquery/jquery.min.js"></script>
     <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <script src="../js/scrolling-nav.js"></script>
      
      <script src="../js/wow.js"></script>   
       <script  src="../js/main.js"></script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link href="https://fonts.googleapis.com/css?family=Faster+One" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" >
	<header>
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
              <a class="nav-link" href="forumpage.php?page" >Forum</a>
            </li>


          </ul>
        </div>
      </div>
    </nav>
    </header>
 
    <br>
<style type="text/css">
  .navbar-nav li > a:hover{
  border-top: 0px solid red;
  border-radius: 0px;
   border-bottom: 0px solid red;
 transition: all 400ms ease;
   background: gray;
  border-radius: 4px;
  transition: all 900ms ease; 
   }
</style>

<main>
	<br>
	 	<div class="pro container-fluid" style="">
		<p style="font-size: 40px;font-family: 'Faster One', cursive;">PROFILE</p>

		<a href="../php/logout.php">
			<button type="button" name="out" class="pull-right" >SIGN OUT
		</button>

		</a>	
	</div>

	<br><br>
	<div class="container" style="margin-bottom: 50px;">
		<div class="userpro">
	<div class="userprofile" style="">

		
		<div class="rpname" >


				<?php
				
				include'db.php';

$sql = "SELECT name FROM register WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["name"];
        $_SESSION["var"]=$row["name"];
    }

				?>
</div>
		<div class="gender"><i class="fa fa-user-circle" style="font-size:24px;color: #1d823f"></i>

        <?php
            

$sql = "SELECT gender FROM register WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["gender"];
    }
      $result->free();
?>

		</div>
		<div class="email"><i class="fa fa-envelope" style="font-size:24px;color: #1d823f"></i>

<?php 

$sql = "SELECT email FROM register WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["email"];
    }

?>

	</div>
		<div class="phone"> <i class="fa fa-phone-square" style="font-size:24px;color: #1d823f"></i>

			<?php

$sql = "SELECT contact FROM register WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["contact"];
    }
     $conn->close();
			?>

		</div>
		<a href="deluser.php" title="Delete Profile" onclick="return confirm('Delete This Account?')"><i class="fa fa-times pull-right"  style="font-size:24px;color:red;margin-top: 30%;"></i></a>
		<div class="edit"><a href="updateuser.php" title="Update Profile"><i class="material-icons" style="font-size:26px;color: blue">settings</i></a></div>

	</div>
	<div class="rights">
		
		<center><div class="search">To Search Donor,Click</div></center>
		<br><br><br><br>
		<center><a href="../php/search.php" target="_BLANK"> <button type="button"  id="save"><i style="font-size:24px" class="fa">&#xf002;</i>Search</button></a></center>

		<center><div class="search">To Comment On Forum Page</div></center>
		<br><br><br><br>
		<center><a href="forumpage.php?page=1" target="_BLANK"> <button type="button"id="save"><i class="fa fa-comment-o" style="font-size:24px"></i>Comment</button></a></center>


	</div>
</div>
	</div>
</main>

    <footer class="py-5 bg-dark">
      <div class="container">
       <p style="color: #9c9fa3;text-align: center;">&copy Blood Donor's Network-developed by AM</p>
      </div>
      <!-- /.container -->
    </footer>
</body>

</html>
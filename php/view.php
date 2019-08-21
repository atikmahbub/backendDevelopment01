<?php
session_start();
$emails=$_GET['emails'];

?>
<!DOCTYPE html>
<html>
<head>
	 <title>Blood Donors Network</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
 <link rel="shortcut icon" type="image/x-icon" href="../img/icon.ico" />
   <link href="https://fonts.googleapis.com/css?family=Cantora+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Carter+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   
    <!-- Custom styles for this template -->
    <link href="../css/profilemedia.css" rel="stylesheet">
    <link href="../css/full-slider.css" rel="stylesheet">
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

    <style type="text/css">
 @import url('https://fonts.googleapis.com/css?family=Lato:700');
@import url('https://fonts.googleapis.com/css?family=Lilita+One');
@import url('https://fonts.googleapis.com/css?family=Judson:700');
@import url('https://fonts.googleapis.com/css?family=Eczar:600');
       .navbar-nav li > a:hover{
  border-top: 0px solid red;
  border-radius: 0px;
   border-bottom: 0px solid red;
 transition: all 400ms ease;
   background: gray;
  border-radius: 4px;
  transition: all 900ms ease; 
   }
.cardfelx{
  display: flex;
  flex-wrap: wrap;
  width: 80%;
  align-items: center;
  justify-content: space-around;
  background-color: white;
   box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);

  position: relative;
  height: 700px;
  top: -20px;

}
.pro{
  box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
  width: 100%;
  height: 100px;

  }
  .leftcard{
    margin-bottom: 100px;
  width: 40%;
  height: 500px;
  border-radius: 5px;
  background: rgb(204, 204, 204); /* Fallback for older browsers without RGBA-support */
  background: rgba(204, 204, 204, 0.5);
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}
.proname{
  margin-left: 5%;
  margin-top: -5%;
  font-family: 'Lilita One', cursive;
  font-size: 40px;
}
.pronum,.promail,.progender,.progroup,.proloc,.proheight{
  font-size: 17px;
  margin-left: 5%;
  margin-top: 2%;
  font-family: 'Cantora One', sans-serif;

}
.rightcard{
   margin-bottom: 100px;

  width: 40%;
  height: 400px;
  border-radius: 5px;
  background: rgb(204, 204, 204); /* Fallback for older browsers without RGBA-support */
  background: rgba(204, 204, 204, 0.5);
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);



}
i{
  margin-right: 4%;
}

.rightcard>div:hover {
 box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
.tag{
   font-size: 17px;
  margin-left: 7%;
position: relative;
bottom: 20px;
  font-family: 'Cantora One', sans-serif;

}

</style>

<br><br>
<div class="profile">
	<div class="pro container-fluid" style="">
		<p style="font-size: 40px;font-family: 'Faster One', cursive;">PROFILE</p>
	</div>
<!--	<div class="container-fluid" style="background-color: #183559"> 
	</div> -->
	<div class="cardfelx container">
		<div class="leftcard" >
			
			<br>
			<br>
			
			<p class="proname">

				<?php
				
				include'db.php';

$sql = "SELECT name FROM signup WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["name"];
    }

				?>
			</p>
      <p class="tag">DONOR</p>

            <p class="progender"  ><i class="fa fa-user-circle" style="font-size:24px;color: #1d823f"></i>
        <?php
            

$sql = "SELECT gender FROM signup WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["gender"];
    }
?>


      </p>
                <p class="progroup"  ><i class="fa fa-group" style="font-size:24px;color:#1d823f "></i>
        <?php
            

$sql = "SELECT bloodGroup FROM signup WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["bloodGroup"];
    }
?>


      </p>
                 <p class="proheight"  ><i class="fa fa-text-height" style="font-size:24px;color:#1d823f"></i>        <?php
            

$sql = "SELECT height FROM signup WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["height"];
    }
?>


      </p>
			
			<p class="pronum "  ><i class="fa fa-phone-square" style="font-size:24px;color: #1d823f"></i>
				<?php
						

$sql = "SELECT phoneNumber FROM signup WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "0".$row["phoneNumber"];
    }
?>


			</p>
            <p class="promail "  ><i class="fa fa-envelope" style="font-size:24px;color: #1d823f"></i>
        <?php
            

$sql = "SELECT email FROM signup WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<a href='mailto:".$row["email"]."'>"."Sent Mail"."</a>";
    }
?>


      </p>

                <p class="proloc "  ><i class="fa fa-location-arrow" style="font-size:24px;color: #1d823f"></i>
        <?php
            

$sql = "SELECT Location FROM signup WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Location"];
    }
?>


      </p>
		
		</div>
		<div class="rightcard">
			
		
			<div class="age">
				<h5>Age</h5>
				<hr>
				<h2>
					<?php
						

$sql = "SELECT age FROM signup WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["age"];
    }
?>

				</h2>
			</div>


			<div class="Weight">
				<h5>Weight</h5>
				<hr>
				<h2>
					<?php
						

$sql = "SELECT weight FROM signup WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["weight"];
    }
?>

				</h2>
			</div>


			<div class="Availablity">
				<h5>Availablity</h5>
				<hr>
				<h2>
					<?php
						

$sql = "SELECT Available FROM signup WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["Available"];
    }
?>

				</h2>
			</div>
			<div class="datedon">
				<h5>Last Donation</h5>
				<hr>
				<h2>
					<?php
						

$sql = "SELECT Date FROM signup WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["Date"];
    }

    $conn->close();
?>

				</h2>
			</div>

      <button class="btn btn-success btn-sm msg" data-toggle="collapse" href="#collapse1">Message Donor</button>


		
		</div>


	<style type="text/css">
   .msg{
    height: 50px;
   } 
   #collapse1{
    width: 35%;
    margin-left: 50%;
   position: relative;
   bottom: 17%;
   }
  </style>
	

  <div id="collapse1" class="panel-collapse collapse">
    <form method="POST" action="" >
    <div class="form-group">
      <textarea class="form-control" rows="3" name="com"  placeholder="Short Text(Max 200 Words)" required="required"></textarea>
    </div>
   <button type="submit" class="btn btn-danger pull-right" name="msg">Send</button>
  </form>
    </div>


    <?php

      if(isset($_POST["msg"])){

        include 'db.php';
        $message=$_POST['com'];
        
        $seen=1;

          $varname=$_SESSION["var"];
        date_default_timezone_set("Asia/Dhaka");

         $date = date('Y-m-d H:i:s');

$sql = "INSERT INTO notify (sid,rid,message,date,seen)
        VALUES ('$varname','$emails' ,'$message','$date','$seen')";

if ($conn->query($sql) === TRUE) {

         
          echo "<script>
          alert('Message Sent!');
           window.location='';
            </script>";

    
       }
$conn->close();
     
}

    ?>


</div>




 <footer class="py-5 bg-dark">
      <div class="container">
       <p style="color: #9c9fa3;text-align: center;">&copy Blood Donor's Network-developed by AM</p>
      </div>
      <!-- /.container -->
    </footer>
</body>
</html>





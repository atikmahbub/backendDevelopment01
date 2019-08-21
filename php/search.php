<?php
session_start();
if(!$_SESSION){
  echo "<script>
  alert('You Need To Log In to Search');
  window.location='../index.php';
</script>";
}
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
    <link href="../css/full-slider.css" rel="stylesheet">
    <link href="../css/searchmedia.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/search.css" rel="stylesheet">
   

     <script src="../vendor/jquery/jquery.min.js"></script>
     <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      <script src="../js/scrolling-nav.js"></script>
      
      <script src="../js/wow.js"></script>   
       <script  src="../js/main.js"></script>


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
              <a class="nav-link" href="forumpage.php?page=1">Forum</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  
    	<br><br><br>
  <p class="pull-right logged">
      <?php

if(isset($_SESSION["var"])){
  $varname=$_SESSION["var"];
  
  echo "Logged In As:"." "."$varname"."<br>";
 echo '<span><a href="logout.php">Sign Out</a></span>';

}




      ?>
      </p>
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
        .logged{
          color: black;
        }
      </style>

    <div class="container-fluid">
    

    	 <div class="heading1 wow fadeInLeftBig">
        <div class="icon">
        <i class="fa fa-search"  style="font-size:56px"></i>
      </div>
      <div class="serviceTitle">
      <h1 class="title text-center service" style="color: black">Search</h1>
      </div>
    </div>


<form method="post" action="search.php">
  <div class="form-group row">

      <div class="form-group  col-lg-4" >
        <select class="form-control input-lg" name="city" >
        <option>Select City Name</option>
        <option>Dhaka</option>
        <option>Bogra</option>       
      </select>
    </div>

    <div class="form-group col-lg-4">
      <select class="form-control input-lg" name="area" id="">
      	<option>Select Area Name</option>
        <option>Rampura</option>
        <option>Badda</option>
        <option>Dhanmondi</option>
        <option>Farmget</option>
        <option>Mirpur</option>
        <option>Banani</option>
        <option>Uttara</option>
        <option>Mouchak</option>
        <option>Puran Dhaka</option>     
      </select>
    </div> 

    <div class="form-group col-lg-4">
    
      <select class="form-control input-lg" name="blood"  >
      	<option>Select Blood Group</option>
        <option>A+</option>
        <option>A-</option>
        <option>AB+</option>
        <option>AB-</option>
        <option>B+</option>
        <option>B-</option>
        <option>O+</option>
        <option>O-</option>    
      </select>
    </div>  

    <button type="submit" name="submit" class="btn btn-danger">Search</button>
 
   </div>
  
   </form>
    
    </div>
    
<?php


include 'db.php';

if(isset($_POST['submit']))

{
		$blood = $_POST['blood'];
		$city= $_POST['city'];
		$area=$_POST['area'];
		$location=$city.",".$area;


		
 
$sql="SELECT * FROM signup WHERE bloodGroup = '$blood' AND Available='Yes'  OR location='$location' AND Available='Yes'";
$result = mysqli_query($conn,$sql);



echo "<table>
<tr>
<th>Name</th>
<th>Last Donation</th>
<th>Blood Group</th>
<th>Available?</th>
<th>Location</th>
<th>View Profile</th>
</tr>";


while($row = mysqli_fetch_array($result)) {

    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['Date'] . "</td>";
    echo "<td>" . $row['bloodGroup'] . "</td>";
    echo "<td>" . $row['Available'] . "</td>";
    echo "<td>" . $row['Location'] . "</td>";
    


    echo '<td><a href="view.php?emails=' . $row['email'] . '">View</a></td>';

    echo "</tr>";
}
echo "</table>";
}

?>
  
  <div class="empty"></div>
  <br><br><br><br><br><br><br>

      <footer class="py-5 bg-dark" >
      <div class="container">
       <p style="color: #9c9fa3;text-align: center;">&copy Blood Donor's Network-developed by AM</p>
      </div>
      <!-- /.container -->
    </footer> 


</body>
</html>
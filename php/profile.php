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
	 <title>Blood Donors Network</title>
 <link rel="shortcut icon" type="image/x-icon" href="../img/icon.ico" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

   
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
    <link href="../css/profilemedia.css" rel="stylesheet">
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

<br><br>

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
	button{

  height: 45px;
 position: relative;
 top: -80px;
  
  padding: 5px 5px;
  font-weight: 700;
  font-size: 15px;
  letter-spacing: 2px;
  color: #383736;
  border: 2px #383736 solid;
  border-radius: 4px;
  text-transform: uppercase;
  outline: 0;
  overflow:hidden;
  background: none;
 
  cursor: pointer;
  transition:         0.08s ease-in;
  -o-transition:      0.08s ease-in;
  -ms-transition:     0.08s ease-in;
  -moz-transition:    0.08s ease-in;
  -webkit-transition: 0.08s ease-in;
	}
	button:hover {
  color: whitesmoke;
}

button:before {
  content: "";
  position: absolute;
  background: #383736;
  bottom: 0;
  left: 0;
  right: 0;
  top: 100%;
  z-index: -1;
  -webkit-transition: top 0.09s ease-in;
}

button:hover:before {
  top: 0;
}
}
</style>


<div class="profile">

	<div class="pro container-fluid">
		<p style="font-size: 40px;font-family: 'Faster One', cursive;">PROFILE</p>

		<a href="../php/logout.php">
			<button type="button" name="out" class="pull-right" >SIGN OUT
		</button>

		</a>	
	</div>

<style type="text/css">
 @import url('https://fonts.googleapis.com/css?family=Lato:700');
@import url('https://fonts.googleapis.com/css?family=Lilita+One');
@import url('https://fonts.googleapis.com/css?family=Judson:700');
@import url('https://fonts.googleapis.com/css?family=Eczar:600');
.cardfelx{

  
  width: 80%;
  align-items: center;
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
  width: 45%;
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
.edit{
  margin-top: 19%;
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


   <div class="dropdown" style="margin-left: 20px">
    <button class="btn btn-info " type="button" data-toggle="dropdown"><i class="fa fa-envelope" style="font-size:26px;"></i> 
<?php
  include 'db.php';

  $q="SELECT message,sid,date from notify WHERE rid='$emails' AND seen=1 ";
  $r=mysqli_query($conn,$q);
  $count=mysqli_num_rows($r);

  if($count>0){
    echo "<span class='badge badge-light' style='background-color: red'>".$count."</span>";
  }

?>

   </button>
    <ul class="dropdown-menu scrollable-menu" role="menu">      
    <?php
    $qry="SELECT message,sid,date from notify  WHERE rid='$emails' order by id desc";
  $resq=mysqli_query($conn,$qry);
  $count=mysqli_num_rows($r);
      while($row = mysqli_fetch_array($resq)) {
    ?>

    <li><?php 
    echo "<div class='notify'>"."<span class='sid'>".$row['sid']."</span>"."<span class='sdate'>".$row['date']."</span>"."<hr>"."<span class='cont'>".nl2br($row['message'])."</span>"."</div>"; 
    ?></li>
   
    <?php
      }

      $update_query = "UPDATE notify SET seen=0 WHERE seen=1;";
    mysqli_query($conn,$update_query);
    ?>
 </ul>
  </div>
  <script type="text/javascript">
  $(document).ready(function() {
  $(".btn").click(function () {
     $('.badge').hide();
  });
});
</script>

  <style type="text/css">
  ::-webkit-scrollbar {
    width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px grey; 
    border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: red; 
    border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #b30000; 
}
  .notify{
 
    border: 2px solid #dedede;
    background-color: #f1f1f1;
  
}
.cont{
       font-family: 'Cantora One', sans-serif;
       width: 100%;
      position: relative;
      bottom: 25px;
      padding-left: 10px;
  }
  .sdate{
     font-family: 'Cantora One', sans-serif;
   
    margin-left: 35px;
    font-size: 12px;
  }
  .sid{

    font-family: 'Cantora One', sans-serif;
    font-size: 14px;
  }
    .scrollable-menu {
    height: auto;
    max-height: 200px;
    width: auto;
    max-width: 300px;
    overflow-x: hidden;
}
.hidden{
  visibility: hidden;
}
  </style>

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
        echo $row["phoneNumber"];
    }
?>


			</p>
            <p class="promail "  ><i class="fa fa-envelope" style="font-size:24px;color: #1d823f"></i>
        <?php
            

$sql = "SELECT email FROM signup WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["email"];
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
		

	 <a href="delpro.php" onclick="return confirm('Delete This Account?')" title="Delete Profile"><i class="fa fa-times pull-right"  style="font-size:24px;color:red;margin-top: 15%;"></i></a>
  <div class="edit"> <a href="updateprofile.php" title="Update Profile" ><i class="material-icons" style="font-size:26px;color: blue">settings</i></div></a>
		
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
						
$flag=0;
$sql = "SELECT Available FROM signup WHERE email='$emails'";
$result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  $row["Available"];

        if($row["Available"]=='No'){
          $flag=1;
        }
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
    while($row = $result->fetch_assoc()) {
        echo  $row["Date"];
    }
    $conn->close(); 
?>

				</h2>
			</div>	
		</div>
</div>

<div class="container bottom">
  <h2>Instant Updates</h2>
  <hr>
  <br>
  <form method="POST" id="upform">
  <p style="float: left">Last Donation Date:  <input  type="date" id="datepicker" placeholder="DD-MM-YYYY" required>
    <i class="fa fa-calendar date" style="font-size:24px"></i></p>
  
  <br><br><br>
  <button class="upbutton">Update</button>
  <p id="demo" ></p>
</form>

  <br><br><br>
  <div class="availableCheck">
 <div><p>Availablity</p></div>
 <div class="swc">
<label class="switch">
  <input type="checkbox" class="chk">
  <span class="slider round"></span>
</label>
</div>
</div>


<?php

  if($flag==1){
    echo "<script>
    $('.chk').prop('checked', false);

    </script>";
  }
  else{
     echo "<script>
    $('.chk').prop('checked', true);

    </script>";
  }

?>

<style>
.availableCheck{
  width: 20%;
  display: flex;
  justify-content: space-around;
  position: relative;
  bottom: 120px;
  right: 20px

}

.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;

}

.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
  

<script type="text/javascript">
  
  $('#upform > button').click(function(e) {
    e.preventDefault(); 
    var start_date = document.getElementById('datepicker').value;

    $.ajax({
            url:'updateDate.php',
            type:'POST',
            data:  {startdate: start_date},

          success: function(data){
               
            
               document.getElementById('demo').innerHTML="Updated Successfully";
            }
    });

});



  $(document).ready(function() {
        $("input.chk").click(function() {
            var checked = $(this).is(':checked');
            if (checked) {
              var pass=1;
            } else {
               var pass=0;
            }
                $.ajax({
            url:'updateAvail.php',
            type:'POST',
            data:  {checked: pass },

          success: function(data){
              $("body").load("profile.php");
            }
    });
        });
    });




</script>

</div>

<style type="text/css">

#demo{
 position: relative;
 bottom: 70px;
 color: green;
 font-size: 20px;
}
.date{
  position: relative;
  left: 305px;
  visibility: hidden;
  bottom: 30px
}
  .bottom{
  height: 300px;
  width: 80%;
}
.bottom h2{
  margin-top: 30px;
   font-family: 'Lilita One', cursive;
}
</style>
<!----
      <div class="notice">
        <p>
        <?php


       // if($flag==1){
        //  echo "You Can't Donate Blood Within 3 Months Of Your //Last Donation Date.User Can't Find You In Search List";
        //}
       // ?>
</p>
</div>
    -->
 <footer class="py-5 bg-dark">
      <div class="container">
       <p style="color: #9c9fa3;text-align: center;">&copy Blood Donor's Network-developed by AM</p>
      </div>
      <!-- /.container -->
    </footer>
</body>
</html>
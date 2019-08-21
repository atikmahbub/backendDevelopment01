<?php
session_start();
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
    <link href="../css/animate.css" rel="stylesheet">
     <link href="../css/forum.css" rel="stylesheet">
     <link href="../css/forummedia.css" rel="stylesheet">
   
   

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
	<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top " style="padding-right: 20px;">
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
              <a class="nav-link" href="#" >Forum</a>
            </li>


<li class="dropdown" id="drop">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>User Login</b> <span class="caret"></span></a>
      <ul id="login-dp" class="dropdown-menu">
        <li>
           <div class="row" style="">
              <div class="col-md-8">
                 <form class="form" role="form" method="post"  action="forumpage.php?page=1" accept-charset="UTF-8" id="login-nav">
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputEmail2">Email address</label>
                       <input type="email" name="minimail" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                    </div>
                    <div class="form-group">
                       <label class="sr-only" for="exampleInputPassword2">Password</label>
                       <input type="password" name="minipass" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                  
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block" name="mini">Sign in</button>
                    </div>
                    <div class="checkbox">

                    </div>
                 </form>
              </div>
             
           </div>
        </li>
      </ul>
        </li>

          </ul>
        </div>
      </div>
    </nav>
    </header>

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


    #login-dp input{
      width: 100%;
      background-color: white;
      height: 40px;
      color: black;

    }

      #login-dp{
    
    min-width: 550px;
    padding: 14px -140px 0;
  background: rgb(26,34,37);
  background: -moz-linear-gradient(top,  rgba(26,34,37,.96) 0%, rgba(75,87,94,0.96) 65%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(26,34,37,.96)), color-stop(65%,rgba(75,87,94,.96)));
  background: -webkit-linear-gradient(top,  rgba(26,34,37,.96) 0%,rgba(75,87,94,.96) 65%);
  background: -o-linear-gradient(top,  rgba(26,34,37,.96) 0%,rgba(75,87,94,.96) 65%);
  background: -ms-linear-gradient(top,  rgba(26,34,37,.96) 0%,rgba(75,87,94,.96) 65%);
  background: linear-gradient(to bottom,  rgba(26,34,37,.96) 0%,rgba(75,87,94,.96) 65%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1a2225', endColorstr='#4b575e',GradientType=0 );
}



#login-dp .form-group {
    margin-bottom: 10px;

}

@media(max-width:768px){
    #login-dp{
        background-color: inherit;
        color: #fff;
    }
    #login-dp .bottom{
        background-color: inherit;
        border-top:0 none;
    }
}
    </style>
	   <p class="pull-right logged" id="forumlogged">
      <?php

if(isset($_SESSION["var"])){
  $varname=$_SESSION["var"];

echo "Logged In As:"."<br>"." "."$varname"."<br>";
echo '<span><a  href="forumout.php">Sign Out</a></span>';

}

      ?>
     
      </p>
         <style type="text/css">
         .mini{
          margin-top: 70px;
          margin-right: -340px;
          float: right;
         }
        .logged{
          color: black;
          position: relative;
          bottom: 24px;
          font-size: 14px;

        }
      </style>
<main>
     <div class="heading wow fadeInLeftBig" id="headsing0">
        <div class="icon forum">
        <i class="fa fa-gg"  style="font-size:56px"></i>
      </div>
      <div class="serviceTitle forum" >
      <h1 class="title text-center service" style="color: black">Overview</h1>
      </div>
    </div>


	<div class="container red ">

      <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading thread">
        <h4 class="panel-title">
          <?php
          if(isset($_SESSION['ename'])){
            echo "
         <button class='btn btn-danger pull-left com' data-toggle='collapse' href='#collapse1'>Start New Thread</button>
          ";
}
?>


        </h4>
      </div>
      <br><br>
      <div id="collapse1" class="panel-collapse collapse forump">
          
  <form method="post" action="forumpage.php">
    <div class="form-group">
      <label for="email">Enter Contact Number:</label>
      <input type="tele" class="form-control"  placeholder="Enter Contact Number" name="cnum" required>
    </div>

    <div class="form-group">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="4" name="com"  placeholder="Max 500 Words"></textarea>
    </div>

    <button type="submit" class="btn btn-default" name="comm">Submit</button>
  </form>

      </div>
    </div>
  </div>
</div>
<?php
include'db.php';
?>

<?php



    if(isset($_POST['mini'])){

      $memail=$_POST['minimail'];
      $mpass=$_POST['minipass'];



    $sqls="SELECT email,password FROM register WHERE email='$memail' AND password='$mpass'";
    $res = mysqli_query($conn,$sqls);

    if( mysqli_num_rows( $res ) == 0 ){
      echo "<script>
      alert('Incorrect Password Or Mail');
      window.location='forumpage.php?page=1';
      </script>";
    }
    else{

    $_SESSION['ename']=$_POST['minimail'];
    $sql = "SELECT name FROM register WHERE email='$memail' AND password='$mpass'";
      $result = $conn->query($sql);


    // output data of each row
    while($row = $result->fetch_assoc()) {  

      $_SESSION["var"]=$row["name"];

    }
 echo '<meta http-equiv="refresh" content="0" />';
    }
   

    }
?>



<?php
date_default_timezone_set("Asia/Dhaka");
	


	if(isset($_POST['comm'])){
	

	$name= $_SESSION['var'] ;
	$num=$_POST['cnum'] ;
	$comment=$_POST['com'] ;
  $mailtemp=$_SESSION['ename'];

	 $date = date('Y-m-d H:i:s');
	$sql = "INSERT INTO comment (name,phone,com,dot,email)
VALUES ('$name','$num' ,'$comment','$date','$mailtemp')";

if ($conn->query($sql) === TRUE) {

   echo "<script type='text/javascript'>
		  window.location='../php/forumpage.php?page';
				</script>";
       }
}

?>

<div class="container comment" style="margin-top: 30px;">
	
	<h1>Comments</h1>
	<hr>
</div>

<style type="text/css">

@font-face {
  font-family: 'Domine';
  font-style: normal;
  font-weight: 400;
  src: local('Domine'), local('Domine-Regular'), url(https://fonts.gstatic.com/s/domine/v5/L0x8DFMnlVwD4h3hu_qn.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
	
.comment-box{
	
	width:60%;
	height: 230px;
	margin: 19px auto;
	border-radius: 3px;
	border: 1px solid #2ab23a;
	box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
	
}
h3{
	margin-left:80%;
font-size: 16px;
font-family: 'Lobster', cursive;
color: #214a8c;
}
h4{
	margin-left:80%;
	font-size: 15px;
	color:red;
}
p{
	font-family: 'Domine', serif;
	font-weight: bold;
	padding: 15px;
}
hr:nth-child(3){
    border:none;
    height: 10px;
 	width: 100%;
	height: 50px;
	margin-top: 0;
	
	box-shadow: 0 10px 10px -10px #333;
  	margin: -50px 0px 2px 0px; 

} 

</style>
<div id="comment">
   
   <?php

include 'db.php';

$page=$_GET['page'];
if($page==0 || $page==1){
	$page1=0;
}
else{
	$page1=($page*4) - 4;
}

$sqls="SELECT * FROM comment ORDER BY id desc LIMIT $page1,4 ";
$result = mysqli_query($conn,$sqls);


while($row = mysqli_fetch_array($result)) {


	echo "<div class='comment-box'>";

	echo "<h3>"."Commented By ".$row['name']."</h3>";
	echo "<h4>".$row['dot']."</h4>";
	echo "<hr class='one'>";

	echo "<p>".nl2br($row['com'])."<br>"."Contact Number:".$row['phone']."</p>";

      if(isset($_SESSION['var'])){

        if($_SESSION['var']===$row['name']){
      
   
   echo "<p class='delforum' id='del'><a onclick='return confirm('Are You Sure?')' title='Delete Comment' href='delcom.php?id=".$row['id']."'".">Delete</a></p>";
   }
  }

	echo "</div>";
}
  ?>

  </div>

  <style type="text/css">
    .delforum{
    float: right;
    }
  </style>

<div class="container" >
                
  <ul class="pagination pagination-lg" style="margin-left: 40%;">

  	<?php
  	$q="SELECT * FROM comment";
	$res = mysqli_query($conn,$q);
	$count=mysqli_num_rows( $res);


	$a= $count/4;

	$a=ceil($a);
	

  	?>

  	<?php
  		for($i=1;$i<=$a;$i++){
  	?>


    <li class="page-item"><a class="page-link" href="../php/forumpage.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
   
    <?php
  		}
  	?>


  </ul>
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
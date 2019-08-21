<?php

session_start();
?>


<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  
  
  
      <link rel="stylesheet" href="../css/admin.css">

  
</head>
<body>

<div >

  <div id='login' style="margin: auto;">
  <h1>ADMIN<span class='orangestop'>.</span></h1>

  <form action="../php/adlog.php" method="post"> 
  <span class='input'>
    <span class='icon username-icon fontawesome-user'></span>
    <input type='text' class='username' name="aname" placeholder='Username'>
  </span>
  <span class='input'>
    <span class='password-icon-style icon password-icon fontawesome-lock'></span>
    <input type='password' name="apass"  class='password' placeholder='Password'>
  </span>
 
  <div class='divider'></div>
  <button type="submit" name="admin">LOG IN</button>

  </form>

  <?php
        $admin="admin";
        $pass="*#*#";



        if(isset($_POST['admin'])){


        $ainput=$_POST['aname'];
        $apass=$_POST['apass'];


        $_SESSION['aname']=$ainput;
        $_SESSION['apass']=$apass;

          if($admin===$ainput && $apass===$pass){
            echo "<script>
            alert('Login Successful');
            window.location='../admin/pages/admin.php';
            </script>";
          }

          else{
             echo "<script>
            alert('Incorrect Password Or Name');
            window.location='../php/adlog.php';
            </script>";
          }

        }
          
  ?>

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="../js/admin.js"></script>



</div>
</body>

</html>

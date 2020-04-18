

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.ico" />

    <title>Blood Donors Network</title>

 
   <link href="https://fonts.googleapis.com/css?family=Cantora+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Carter+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ secure_asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
   
    <!-- Custom styles for this template -->
    <link media="all" href="css/full-slider.css" rel="stylesheet" />
  <link media="all" href="css/media.css" rel="stylesheet" />
  <link media="all" href="css/media2.css" rel="stylesheet" />
   <link media="all" href="css/tablet.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet">

     <script src="vendor/jquery/jquery.min.js"></script>
     <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

      <script src="js/scrolling-nav.js"></script>
      
      <script src="js/wow.js"></script>   
       <script src="js/main.js"></script> 
       

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="50" >

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top ">
      <div class="container menu">
        <a class="navbar-brand" href="#">Blood<span class=brandcolor>BD</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
              <a class="nav-link" href="#home">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Service">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#available">Available Donor's</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="php/forumpage.php?page=1">Forum</a>
            </li>

          <!--  <li class="nav-item">
              <a class="nav-link" href="../php/adlog.php">Admin</a>
            </li>
          -->
             
      
          </ul>
        </div>
      </div>
    </nav>
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

    <header id="home">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('img/bl1.jpeg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Save A Life,Give Blood</h3>
              <p>One in three of all the people you know – family, friends and workmates – will need a blood donation. Yours could be the one that saves their life.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/bl4.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Become A Hero,Donate Blood</h3>
              <p>Every time you give blood, you could save or improve the lives of up to three people. Join us in this noble cause and life-saving services</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('img/bl2.jpeg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Blood For Life</h3>
              <p>Drink an extra 16 oz. of water or nonalcoholic fluids before the donation.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
     <!--For Smooth Scrooling (Error)-->
    <div  id="Service" ></div>

    <!-- Page Content -->

    <section class=" register">
      <!--Heading Section Start-->
    <div class="heading wow fadeInLeftBig">
        <div class="icon">
        <i class="fa fa-ioxhost"  style="font-size:56px"></i>
      </div>
      <div class="serviceTitle">
      <h1 class="title text-center service" style="color: black">Services</h1>
      </div>
    </div>

    <!--Heading Section End-->

    <!--Form Section Start-->

      <div class="container reg">

        <div class="signUp wow bounceInLeft">

          <i class="fa fa-stack-exchange" style="font-size:48px;color:red"></i>

          <h4 class="title" >Want To Donate Blood?</h4>
           <button type="button" class="btn btn-danger btn-lg " onclick="document.getElementById('id00').style.display='block'" style="width:auto;">SIGN UP</button>

        </div>

        <!--Modal for signUP-->
                <div id="id00" class="modal" >

  <form class="modal-content animate" onsubmit="return validateForm()" style="background: url(img/sign.jpeg);background-size: cover; box-shadow: 0 59px 78px rgba(0,0,0,0.30), 0 45px 32px rgba(0,0,0,0.22);" method="post" action="php/signUp.php" >

    <fieldset>
     <span onclick="document.getElementById('id00').style.display='none'" class="close" title="Close Modal">&times;</span>
   
    <div class="container" id="signUpSection">
      <h1>SIGN UP<span class='orangestop'>.</span></h1>
      
<span class="input">
      <input type="text" class='name' placeholder="Enter Full Name" name="uname" required>
      <p style="float: right"><span class="nmsg hidden">Please Enter a Valid Name</span></p>
</span>

<style type="text/css">

.nmsg{
  color: #e5676c;
}
.spmsg{
  color: white;
}
  .pmsg{
     color: #e5676c;
  }
.emsg{
    color: #e5676c;
}
.hidden {
     visibility:hidden;
}

#signUpSection input[type=text],#signUpSection input[type=password] {
  width:70%;
  height:40px;
  margin-left: 50px;
  background:#242c32;
  border:0;
  border-radius:3px;
  border-bottom:1px solid #646c72;
  outline:0;
  padding-left:20px;
  font-family:'Ubuntu'; 
  color:#fff;
  
}

</style>

<script type="text/javascript">


  var nameError=passError=emailError=1;


$(document).ready(function(){

    var $regexname=/^([a-zA-Z ]{0,30})$/;
    $('.name').on('keypress keydown keyup',function(){
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

     $('.emailname').on('keypress keydown keyup',function(){
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
                   $('.pmsg').removeClass('hidden');
                 $('.pmsg').show();
             }else{
               passError=1;
                $('.pmsg').addClass('hidden');
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

<span class="input">
      <input type="text" class='emailname' placeholder="Enter Email" name="ename"  required>
       <p style="float: right"><span class="emsg hidden">Please Enter a Valid Email</span></p>
</span>




     
    
      <label id="gen" for="gendre">Gender*</label>
    <div class="checkbox">
   <label class="checkbox-inline "  >
      <input type="checkbox" value="Male" name="male" ><span class="genderup"> Male</span>
    </label>

    <label class="checkbox-inline genderdis">
      <input type="checkbox" value="Female"><span class="genderup"> Female</span>
    </label>
  </div>
  
    </span>

     <div class="form-group row col-sm-12" style="margin-bottom: -10px">
    
    <div class="form-group col-lg-3 col-sm-12">
      <label for="sel8">Blood Group*</label>
      <select class="form-control input-lg" name="bloodgroup" id="sel8" required>
        <option>A+</option>
        <option>A-</option>
        <option>B+</option>
        <option>B-</option>
        <option>AB+</option>
        <option>AB-</option>
        <option>O+</option>
        <option>O-</option>
        
      </select>
    </div> 
      <div class="form-group col-lg-3 col-sm-12"> 
      <label for="sel2">Weight*</label>     
      <input class="form-control" name="weight" type="tele" placeholder="KG" required>
    </div> 
      <div class="form-group col-lg-3 col-sm-12"> 
      <label for="sel7">Height*</label> 
      <select class="form-control" name="feet" id="sel7" required>
        <option>Feet</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
      </select>    
      
    </div> 
    <div class="form-group  col-lg-3 col-sm-12">
      <label for="sel6">Height*</label>
       <select class="form-control" name="inch" id="sel6">
        <option>Inch</option>
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
      </select> 

    
    </div>
   </div>
        <div class="form-group row" >
    <div class="form-group  col-lg-3 col-sm-12">
      <label for="sel4">City*</label>
        <select class="form-control input-lg" name="City" id="sel4">
        <option>Dhaka</option>
        <option>Bogra</option>       
      </select>
    </div>
    <div class="form-group col-lg-3 col-sm-12">
      <label for="sel5">Area*</label>
      <select class="form-control input-lg" name="area" id="sel5">
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
      <div class="form-group col-lg-3 col-sm-12"> 
      <label for="sel2">Phone Number*</label>     
      <input class="form-control" name="phone" type="tele" placeholder="Mobile Number" required>
    </div> 
      <div class="form-group col-lg-3 col-sm-12"> 
      <label for="sel2">Age</label>     
      <input class="form-control" name="age" type="tele" placeholder="Age" required>
    </div> 
     <div class="form-group col-lg-6" style="margin-bottom: -10px"> 
      <label for="sel2">Available?</label>     
      <select class="form-control input-lg" name="avail" id="sel4" required>
        <option>Yes</option>
        <option>No</option>       
      </select>    
    </div> 
       <div class="form-group col-lg-6" id="test" > 
      <label for="sel2">Last Donation Date</label>     
    <input class="form-control"  type="date" name="bday" required>
    </div> 
   </div>

   
     

<span class="input" >
      <input type="password" class='password' placeholder="Enter Password" name="psw" required>
    </span>
    <span class="input" >
      <input type="password" class='Rpassword' placeholder="Re Enter Password" name="psw" required>
      <p style="float: right"><span class="pmsg hidden">Password Didn't Match</span></p>
    </span>
     
      
      <button type="submit" onclick="return confirm('Are you sure?')" id="save" style="position: relative;bottom: 20px;">SIGN UP</button>
     

      
    </div>
    </fieldset>
 </form>

</div>
        <div class="signIn wow zoomIn">
          <i class="fa fa-stack-exchange" style="font-size:48px;color:red"></i>
          <h4 class="title">Already A Member?</h4>
           <button type="button" class="btn btn-danger btn-lg " onclick="document.getElementById('id01').style.display='block'" style="width:auto;">SIGN IN</button>

        </div>
        <!--MoDal DESIGN-->
<div id="id01" class="modal">
  
  <form class="modal-content animate" onsubmit="return validateSign()" style="background: url(img/sign.jpeg);background-size: cover; box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);" method="post" action="php/signIn.php">

   <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
   
    <div class="container" id="signInSection">
      <h1>SIGN IN<span class='orangestop'>.</span></h1>
      
<span class="input">
  <p ><span class="spmsg hidden">Please enter a Valid Email</span></p>
      <input type="text" class='username' placeholder="Enter Email ID" name="uname" required>
      
</span>
     <span class="input">
      <input type="password" class='password' placeholder="Enter Password" name="psw" required>
    </span>

      <label class="container1"><span class="doncheck">Donor</span>

  <input type="checkbox" name="donor" class="chk" id="one" >
  <span class="checkmark"></span>
</label>
<label class="container1">
  <input type="checkbox" class="chk" id="two" ><span class="usercheck">User</span> 
  <span class="checkmark"></span>
</label>
<p class="cmsg hidden" id="jsmsg">Select Your Account Type</p>

<script type="text/javascript">
  
  $('input.chk').on('change', function() {
    $('input.chk').not(this).prop('checked', false);  
});
  var err=1;
  $(document).ready(function() {
        $(".chk").click(function() {
            var checked = $(this).is(':checked');
            if (checked) {

                      err=1;
                  $('.cmsg').addClass('hidden');
            } else {
                  err=0;
                 $('.cmsg').removeClass('hidden');
                 $('.cmsg').show();
            }
        });
    });

</script>

<style type="text/css">
.cmsg{
  color: #2fce44;
}
.usercheck{
    color: white;
  position: relative;
  bottom: 5px;

}
.doncheck{
  color: white;
  position: relative;
  bottom: 5px;
  margin-right: 100px;
}
  .container1 {
  
  position: relative;
    padding-left: 25px;
   margin-top: 10px;
    cursor: pointer;
    font-size: 20px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.container1 input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container1 input:checked ~ .checkmark {
    background-color: #d81a26;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container1 input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.container1 .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
</style>
     <div class='divider'></div>
      <button type="submit" style="margin-bottom: 10px;">Login</button>
      <label>
      
      </label>

  
    </div>
 </form>
<script type="text/javascript">
  var sError=1;
  
$(document).ready(function(){

     var $rep = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

     $('.username').on('keypress keydown keyup',function(){
             if (!$(this).val().match($rep)) {
                  sError=0;
              // there is a mismatch, hence show the error message
                 $('.spmsg').removeClass('hidden');
                 $('.spmsg').show();
             }
           else{
                sError=1;
                // else, do not display message
                $('.spmsg').addClass('hidden');
               }
         });
});

function validateSign(){

    var a=document.getElementById("one");
      var b=document.getElementById("two");

  if(sError!=1){
    return false
  }
  else if(a.checked==false && b.checked==false){
      $('.cmsg').removeClass('hidden');
      $('.cmsg').show();
    return false
  }
  else{
    return true;
  }

}


</script>
</div>
<!--MoDal End-->

<div class="modal" >
</div>
        <div class="needBlood wow bounceInRight">
          <i class="fa fa-stack-exchange" style="font-size:48px;color:red"></i>
          <h4 class="title " >Need Blood?</h4>
          
           <button type="button" class="btn btn-danger btn-lg text-right" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">REGISTER</button>

        </div>
        <div id="id02" class="modal">
  
  <form class="modal-content animate" style="background: url(img/sign.jpeg);background-size: cover; box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);" onsubmit="return validReg()" method="post" action="php/register.php">
    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
   
    <div class="container" id="registerSection">
      <h1>Register<span class='orangestop'>.</span></h1>
      
<span class="input">
      <input type="text" class='nameReg' placeholder="Enter Name" name="regname" required>
     
</span>
<span class="input">
      <input type="text" id="regemail" placeholder="Enter Email Id" name="regmail" onblur="checkmail()"  required="required" aria-required="true" size="30">
      <p style="float: right;color: #e5676c" id="demo2"></p>
    </span>
    <br>
    <span class="input" style="margin-left: 40px;">
    <label class="checkbox-inline" style="color: white">
      <input type="checkbox" name="male" value=""><strong style="margin-left: 5px;">Male</strong> 
    </label>
    <label class="checkbox-inline" style="color: white;margin-left: 10px">
      <input type="checkbox" name="Female" value=""><strong style="margin-left: 5px;">Female</strong> 
    </label>
  
</span>
     <span class="input">
      <input type="tele" class='numberReg' placeholder="Enter Phone Number" name="regnumber" required>
    </span>
    <span class="input" >
      <input type="password" class='rpass' " placeholder="Enter Password" name="psw" required>
    </span>
    <span class="input" >
      <input type="password" class='reppass'  placeholder="Re Enter Password" name="rpsw" required>
      <p style="float: right;color: white;" class="demo hidden">Password Doesn't Match</p>
    </span>
        <div class='divider'></div>
      <button type="submit" name="reg" style="margin-left: 25%">Register</button>
      
    </div>
 </form>
<script type="text/javascript">
$(document).ready(function(){
  
    $('.reppass').keyup(function(){
             if ($('.rpass').val() != $('.reppass').val()) {
               passError=0;
                   $('.demo').removeClass('hidden');
                 $('.demo').show();
             }else{
               passError=1;
                $('.demo').addClass('hidden');
            }
      });
});

function checkmail(){
    var emerr=1
    var email = document.getElementById('regemail');
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if (!filter.test(email.value)) {
      emerr=0;
    document.getElementById('demo2').innerHTML="Invalid Email";
    
}
else{
  document.getElementById("demo2").style.color = "white";
    document.getElementById('demo2').innerHTML="Valid";
}


if(emerr==1){
  return true
}
else{
  return false;
}
}
function validReg(){
 

 if(checkmail()==true &&passError==1){
  return true
 }
 else
  return false
}


</script>

 <style type="text/css">



#registerSection input[type=tele],#registerSection input[type=text],#registerSection input[type=password]{
  width:70%;
  height:45px;
  background:#242c32;
  margin-left: 20px;
  border:0;
  border-radius:3px;
  border-bottom:1px solid #646c72;
  outline:0;
  padding-left:30px;
  font-family:'Ubuntu'; 
  color:#fff;
  margin-bottom:10px;
}
#id02 .modal-content .container{
  margin:auto;
  width: 80%;
  height: 80%;
  border-radius:3px;
  border-top:1px solid #464c4c;
  background: rgb(26,34,37);
  background: -moz-linear-gradient(top,  rgba(26,34,37,.96) 0%, rgba(75,87,94,0.96) 65%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(26,34,37,.96)), color-stop(65%,rgba(75,87,94,.96)));
  background: -webkit-linear-gradient(top,  rgba(26,34,37,.96) 0%,rgba(75,87,94,.96) 65%);
  background: -o-linear-gradient(top,  rgba(26,34,37,.96) 0%,rgba(75,87,94,.96) 65%);
  background: -ms-linear-gradient(top,  rgba(26,34,37,.96) 0%,rgba(75,87,94,.96) 65%);
  background: linear-gradient(to bottom,  rgba(26,34,37,.96) 0%,rgba(75,87,94,.96) 65%);
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1a2225', endColorstr='#4b575e',GradientType=0 );
}
 </style>

</div>

      </div>
      <!--Form Section End-->
    </section>
    <!--Register Section End-->


    <!--Calculate BMI Section Start-->
    <section class="bmi">

      <!--Heding Start-->
       <div class="heading wow fadeInLeftBig">
        <div class="icon">
        <i class="fa fa-gg"  style="font-size:56px"></i>
      </div>
      <div class="serviceTitle">
      <h1 class="title text-center service" style="color: black">Calculate BMI</h1>
      </div>
    </div>
    <!--Heading  End-->

    <!--Form  Start-->
  <div class="formbmi container">  
  <p class="text-center wow zoomIn">It's Totally Free</p>
  <form class="col-lg-6 xs-12 sm-12 wow lightSpeedIn" >
    <div class="form-group">      
      <input class="form-control" id="inputdefault" type="text" placeholder="Weight(KG)">
    </div>    
    <div class="form-group row">
    <div class="form-group  col-lg-6">
      <label for="sel1">FT</label>
      <select class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
      </select>
    </div>
    <div class="form-group col-lg-6">
      <label for="sel2">INCH</label>
      <select class="form-control input-lg" id="sel2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
      </select>
    </div> 
   </div>
   <label for="inputbmi">BMI SCORE</label>
   <div class="form-group row">     
    <div class="form-group col-lg-6">
    <input class="form-control" id="inputbmi" type="text" placeholder="BMI">
    </div>
    <div class="form-group col-lg-6">
       <p id="Demo"></p>
     </div>     
    </div>
    <script type="text/javascript" src="js/main.js"></script>
    <button type="button" onclick="bmiCalc()" class="btn btn-danger">Calculate</button> 
      <!--for smooth scrooling (error) available sec-->
     <div id="available"></div>  

  </form>
    <!--Form End-->

</div>


</section>


<section >
         <!--Available Section Heding Start-->
     <div class="heading wow fadeInLeftBig">
        <div class="icon">
        <i class="fa fa-pie-chart"  style="font-size:56px"></i>
      </div>
      <div class="serviceTitle">
      <h1 class="title text-center service" style="color: black">Available Donor's</h1>
      </div>
    </div>
     <!--Heading End-->


      <!--Available Donors Start-->
    <div class="container-fluid avail">

       <!--Left Side Start-->
      <div class="flexleft wow fadeInLeftBig" data-wow-delay=".25s" >
      <div class="Bloodsec1 "  >
        <p class="donor" >30033</p>
          <div class="bloodName" >A+</div>         
      </div>
      <div class="Bloodsec2" style="width: 80%">
         <p class="donor">12033</p>
         <div class="bloodName">A-</div>         
      </div>
      <div class="Bloodsec3" style="width: 80%">
        <p class="donor">20033</p>
         <div class="bloodName">AB+</div>          
      </div>
      <div class="Bloodsec4"   style="width: 100%">
        <p class="donor">19933</p>
         <div class="bloodName">AB-</div>         
      </div>
     </div>

      <!--left Side End-->

       <!--Centre Strat-->
     <div class="flexCentre wow zoomIn" data-wow-delay=".50s" >     
         <div class="centre-me">TOTAL</div>
         <div class="cnumber">448</div>
     </div>
      <!--Centre End-->


       <!--Right Side Start-->
     <div class="flexright wow fadeInRightBig" data-wow-delay=".30s">    
           <div class="Bloodsec1 " >
            <div class="bloodName" >B+</div>
        <p class="donor" >630033</p>          
      </div>
      <div class="Bloodsec2 " style="width: 80%;margin-left: 20%" >
        <div class="bloodName"  >B-</div> 
         <p class="donor">212033</p>                
      </div>
      <div class="Bloodsec3 "  style="width: 80%;margin-left: 20%">
         <div class="bloodName">O+</div>
        <p class="donor">420033</p>                  
      </div>
      <div class="Bloodsec4"  >
         <div class="bloodName">O-</div>
        <p class="donor">1933</p>         
      </div>

       <!--About Section Smooth Scrooling (Error)s-->
      <div id="about"></div>
      </div>
       <!--Right Side End-->

    </div>
     <!--Available End-->
</section>
       <!--Available Whole Section End-->

       <!--About Sec Start-->
<section  >
  
<div class="aboutsection">
  <!--Heading start-->
  <div class="heading wow fadeInLeftBig">
        <div class="icon">
        <i class="fa fa-bookmark"  style="font-size:56px"></i>
      </div>
      <div class="serviceTitle">
      <h1 class="title text-center service" style="color: black">About Us</h1>
      </div>
    </div>
    <!--Heading End-->
    <!--About Section Main Page Start-->
<div class="container aboutmain">
  <div class="first wow bounceInLeft">
    <h5>Donate For Life</h5>
    <hr>
    <img src="img/blood.jpg">
    <p> Voluntary blood donation camps should be organized in schools, colleges, villages and towns, so that nonblood donors are exposed to features of such camps.</p>
  </div>

  <div class="second wow fadeIn">
    <h5>Why Donate Blood?</h5>
    <hr>
    <ul style=" font-family: 'Cantora One', sans-serif;">
    <li>If You’re a Universal Donor, You Owe It To World To Donate Blood.</li>
    <li>Donating Blood Is Healthy</li>
    <li>Donating Blood Is Personally Rewarding</li>
    <li>Donating Blood Makes You A Stronger Person</li>
    </ul>

    <p>Some of us give blood because we were asked by a friend. Some know that a family member or a friend might need blood some day. Some believe it is the right thing we do.

You don’t need a special reason to give blood.
You just need your own reason.</p>
    

  </div>

  <div class="third wow bounceInRight" >
    <h5>14<sup>th</sup> June</h5>
    <hr>
   
    <img src="img/blood1.jpg" height="200px" width="250px">
     <p>World Blood Donor's Day</p>
    <p>On 14 June 2011, countries worldwide will celebrate World Blood Donor Day with events to raise awareness of the need for safe blood.</p>
    
  </div>
</div>
<!--Main Section End-->
</div>
</section>
    <!--About Section End-->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
       <p style="color: #9c9fa3;text-align: center;">&copy Blood Donor's Network-developed by AM</p>
      </div>
      <!-- /.container -->
    </footer>
    
  </body>

</html>

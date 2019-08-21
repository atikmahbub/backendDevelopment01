

new WOW().init();

  //BMI Calculation Start
  function bmiCalc() {   

    var weight,ft,inc ,bmi=0,number,msg;
    weight = Number(document.getElementById("inputdefault").value);
    ft= Number(document.getElementById("sel1").value);

    inc= Number(document.getElementById("sel2").value);

    if (isNaN(weight)) {
      msg = "Input is not a number";
    }   
    else if(weight==""){
      msg="Input Is Empty";
    }

    else {
    number = (ft*30.48)+(inc*2.54) ;
    number = Math.pow((number/100),2);

    bmi= weight/number;
    bmi= bmi.toFixed(2);
   
    if( bmi < 15 ){
        msg="Very severely underweight";
      }             

    else if( bmi < 18.5 && bmi >= 15 ){
      msg="Underweight";
      }

    else if( bmi >= 18.5 && bmi <= 25 ){
        msg="Normal";
      }
    else if( bmi > 25 && bmi<=30 ){
      msg="Overweight";
      }
    else if( bmi > 30 && bmi < 40 ) {
      msg="Obesity";
    }
    else if( bmi >= 40 ){
      msg="Very severely obese";
      }
    }
    document.getElementById("inputbmi").value = bmi;     
    document.getElementById("Demo").innerHTML = msg ;

      //document.getElementById("inputdefault").value="";
      //document.getElementById("sel1").value="1";
      //document.getElementById("sel2").value="1";
  }
    //Bmi Calculation End


    //navbar active class start
var header = document.getElementById("navbarResponsive");
var btns = header.getElementsByClassName("nav-link");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
  




  //smooth scrool start
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});

//smooth scroll end


var modal = document.getElementById('id01');


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal ) {
        modal.style.display = "none";
    }
}


  //input button red light
$(".username").on("input", function() {
  if ($(this).val().length > 0)
  {
   
    $(this).closest('.input').addClass('border-color');
  }
  else
  {
    
    $(this).closest('.input').removeClass('border-color');
  }
});

$(".password").on("input", function() {
  if ($(this).val().length > 0)
  {
   
    $(this).closest('.input').addClass('border-color');
  }
  else
  {
    
    $(this).closest('.input').removeClass('border-color');
  }
});


//Email Validation


$(document).ready(function(){
    var $regexname=/^([a-zA-Z ]{0,30})$/;
    $('.name').on('keypress keydown keyup',function(){
             if (!$(this).val().match($regexname)) {
              // there is a mismatch, hence show the error message
                 $('.emsg').removeClass('hidden');
                 $('.emsg').show();
             }
           else{
                // else, do not display message
                $('.emsg').addClass('hidden');
               }
         });

     var $re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

     $('.emailname').on('keypress keydown keyup',function(){
             if (!$(this).val().match($re)) {
              // there is a mismatch, hence show the error message
                 $('.emsg').removeClass('hidden');
                 $('.emsg').show();
             }
           else{
                // else, do not display message
                $('.emsg').addClass('hidden');
               }
         });
});



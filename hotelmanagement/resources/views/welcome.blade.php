<!doctype html>
<html lang="{{ app()->getLocale() }}">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Hotel Project CSCE 553</title>

      <!-- Fonts -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
     
     
     

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="/register" class="w3-bar-item w3-button w3-padding-large w3-hide-small">REGISTRATION</a>
    <a href="/booking" class="w3-bar-item w3-button w3-padding-large w3-hide-small">BOOKING</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">ABOUT US<i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">Brennan Guidry</a>
        <a href="#" class="w3-bar-item w3-button">Ippili Aashish</a>
        <a href="#" class="w3-bar-item w3-button">Oyetokunbo Ipaye</a>
        <a href="#" class="w3-bar-item w3-button">Taghreed Alghamdi</a>
      </div>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>



<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="/picture/p1.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Elegant, Inspirations </h3>
      <p><b>We provide the best enviroment for our staff.</b></p>   
    </div>
  </div>
 
  <div class="mySlides w3-display-container w3-center">
    <img src="/picture/p2.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3> Food and Relaxation</h3>
      <p><b>You won't need to leave work for food or a break!.</b></p>    
    </div>

  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="/picture/p3.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Out of Work!?</h3>
      <p><b>Don't miss Hotel Facilities</b></p>    
    </div>
  </div>

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">Hotel Management System </h2>
    <p class="w3-opacity"><i>We make Life easier </i></p>
    <p class="w3-justify">Hotel Management System helps to coordinate administrative duties.Where manager can check in on the maintenance status of the hotel. Also, schedule meetings and events, and determining cost vs. revenue, the appropriate salary of each employee, and write reports about staff and employees .. Each staff member will have different permission and tasks to work with. .</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
       
        <a href="{{route('login')}}"> Manager Login </a>
        
        <!-- <a href="/loginmanger">  Login </a> -->

        <img src="/picture/managr.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:62%">
      </div>


      
      <div class="w3-third">
      <p>
        <a href="/stafflogin"> Staff Login</a> </p>
        <img src="/picture/staff.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>
        <a href="/staffLogin"> Admin Login</a> </p>
        <img src="/picture/IT.png" class="w3-round" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>

 

  
<!-- End Page Content -->
</div>



<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">© Copyright 2017 Hotel Management System team @UL <a href="https://www.louisiana.edu" target="_blank">www.louisiana.edu</a></p>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


</body>
</html>


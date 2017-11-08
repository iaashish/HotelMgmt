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
    
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Image Banner -->
<div class="w3-container w3-bar w3-black w3-card">
  <img src="picture/p4.jpg" alt="Hallway" class="w3-image" width="1920" height="600">
  
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:1000px;margin-top:46px">



  <!-- Middle Page Table -->
  <div class="w3-container">
  <h2><center>Staff Homepage</center></h2>
  <p><center>Table to Monitor Guest Information<center></p>

  <table class="w3-table-all w3-card">
    <thead>
      <tr class="w3-black">
        <th>First Name</th>
        <th>Last Name</th>
        <th>Room#</th>
        <th>Check In Date</th>
        <th>Check Out Date</th>
      </tr>
    </thead>
    <tr>
    <th>----------</th>
    <th>----------</th>
    <th>----------</th>
    <th>----------</th>
    <th>----------</th>
    </tr>
    <tr>
    <th>----------</th>
    <th>----------</th>
    <th>----------</th>
    <th>----------</th>
    <th>----------</th>
    </tr>
    <tr>
    <th>----------</th>
    <th>----------</th>
    <th>----------</th>
    <th>----------</th>
    <th>----------</th>
    </tr>
    <tr>
    <th>----------</th>
    <th>----------</th>
    <th>----------</th>
    <th>----------</th>
    <th>----------</th>
    </tr>
    <tr>
    <th>----------</th>
    <th>----------</th>
    <th>----------</th>
    <th>----------</th>
    <th>----------</th>
    </tr>
    <tr>
    <th>----------</th>
    <th>----------</th>
    <th>----------</th>
    <th>----------</th>
    <th>----------</th>
    </tr>
  </table>
</div>
<br></br>
<p><center>Input Guests to Update Table<center></p>
  <!-- Guest Input Form -->
  <div class="w3-card-4" style="max-width:500px;margin-top:46px;margin-bottom:46px; margin-right:300px; margin-left:300px;" align = "center">
  <div class="w3-container w3-black" style="max-width:500px;margin-top:46px;margin-bottom:46px" align = "center">
  
    <h4><center>Guest Input</center></h4>
  </div>
  <form class="w3-container" action="/action_page.php">
    <p>      
    <label class="w3-text-black"><b>First Name</b></label>
    <input class="w3-input w3-border w3-sand" name="first" type="text"></p>
    <p>      
    <label class="w3-text-black"><b>Last Name</b></label>
    <input class="w3-input w3-border w3-sand" name="last" type="text"></p>
    <p>
    <button class="w3-btn w3-black">Register</button></p>
  </form>
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
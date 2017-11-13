<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet"/>

    <link rel="stylesheet" href="{{asset('css/managerstyle.css')}}"/>


<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>


<nav class="navbar navbar-trans navbar-fixed-top" role="navigation" style="position:relative"> 
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapsible">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand text-danger" href="#">Hotel Management System</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar-collapsible">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#section1">Home</a></li>
                <li><a href="/manageraddstaff">Staff</a></li>
                <li><a href="/managermange">Manage</a></li>
               


                <li>&nbsp;</li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="/picture/mang.png" style="width:50%" alt="ManagerPicture">
          <div class="w3-display-bottomleft w3-container w3-text-black">
          
          </div>
        </div>
        <div class="w3-container">

        <hr>
           <u>         <h4>Personal Informationa:</h4> </u>
          
           <p><i class="fa fa-fw fa-envelope"></i> Sarah.Nick@gmail.com</p>

          <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
        <p>
            <hr>
                <u>  <h4>Bank account Information</h4></u>
        <p><i class="fa fa-fw fa-cc-amex"></i> Amex info</p>
        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card info</p>
        <hr>
        <address>
       <u> <strong> <i class="fa fa-fw fa-map-marker"></i> Address</strong></u>
                    <br>
                    215 Republic Ave, Apt 5306<br>
                    Lafayette, LA 70508<br>
                    P: (123) 456-7890
                </address>
          <hr>

          

          
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Current Staff</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b> All Staff haired since: </b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Aug 2017 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p></p>
          <hr>
          <div class="w3-third">

<section class="w3-container">
    @include('staff.stafflist')

</section>

</div>
          
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity "><b>Staff member not found</b></h5>
          <p>Cto add new staff member, please go to staff first and register the employee, then you can assign a task.</p>
          <a href="/manageraddstaff" class="w3-text-teal">Click here</a>

          <hr>
        </div>
      
        </div>
      </div>

      

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
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

</body>
</html>


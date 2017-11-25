<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('images//android-icon-192x192.png')}}">
    <title>{{ config('app.name', 'Staff') }}</title>

    <!-- Styles -->
    <style>
        
        footer
    {
        position:absolute;
        width:100%;
        bottom:0px;
    }
        </style>

</head>

<body>

<!-- header -->

<div class="w3-container w3-center  w3-black w3-large">

<p> <a href="/" class="w3-left w3-button w3-padding-xlarge w3-hover-blue">HOME</a>

<img src="/picture/logo.png" style="float:center;width:10%" >

<p>
    

</div>
<div>
<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center  w3-black w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">© Copyright 2017 Hotel Management System team @UL <a href="https://www.louisiana.edu" target="_blank">www.louisiana.edu</a></p>
</footer>
</div>
</body>
</html>


@yield('content')
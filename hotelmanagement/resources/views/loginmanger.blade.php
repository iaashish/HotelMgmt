<!doctype html>
<html lang="{{ app()->getLocale() }}">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Hotel Project CSCE 553</title>
<!-- Fonts -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/styles.css')}}">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<head>
</head>
<style>
    body {
        font-family: "Lato", sans-serif
    }
</style>
<body>
<nav class="w3-black navbar navbar-inverse ">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="/" style="height: 80px;">
                <img class="w3-left" src="/picture/logo.png" style="height: 10%;
                                                                    padding: 15px;
                                                                    width: 10%;">
            </a>
        </div>
    </div>
</nav>
<div class="w3-container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="w3-display-container w3-center">
            </div>
            @if ($errors->has('email'))
                <div class="alert alert-warning alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <strong>{{ $errors->first('email') }}</strong>
                </div>
            @endif
            <div class="w3 w3-xlarge">
                <br>
                <h1 class="w3-wide w3-center">Manager Login Page</h1>
                <p class="w3-wide w3-center"><i>If you have problem in login, please contact us!</i>
                </p>
                <p class="w3-opacity w3-center">
                    </i> Phone: +00 151515
                    <br>
                </p>
                <p class="w3-opacity w3-center">
                    </i> Email: HotelUL-project@mail.com
                    <br>
                </p>
                <div class="login-manager-wrap panel panel-default">
                    <div class="login-html">
                        <label for="tab-1" class="tab" style="color: aliceblue;">Sign In</label>
                        <form class="form-horizontal" method="POST" action="{{route('login')}}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email" class="label col-md-4 control-label">E-Mail</label>
                                <div class="col-md-8">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="label col-md-4 control-label">Password</label>
                                <div class="col-md-8">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <div class="checkbox" style="float: right;margin: 4px;">
                                        <input class="check" type="checkbox" id="remember" name="remember" {{ old( 'remember') ? 'checked' : '' }}>
                                    </div>
                                </div>
                                <label class="label" for="remember" style="margin: -13px -12px 14px -22px;">Remember Me
                                </label>
                            </div>
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
<footer class="w3-container w3-center  w3-black w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">© Copyright 2017 Hotel Management System team @UL <a href="https://www.louisiana.edu" target="_blank">www.louisiana.edu</a>
    </p>
</footer>
</body>
</html>



<!DOCTYPE html>
<html>

<head>
<title>{{$title}}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" rel="stylesheet"/>
    <script
            src="https://code.jquery.com/jquery-2.2.4.js"
            integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/managerstyle.css')}}"/>
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('images//android-icon-192x192.png')}}">

    <style>
        html,
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Roboto", sans-serif
        }
        html {
    position: relative;
    min-height: 100%;
}
footer {
    background-color: orange;
    position: absolute;
    left: 0;
    bottom: 0;
    height: 100px;
    width: 100%;
    overflow:hidden;
}

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
            <a class="navbar-brand text-danger" href="/">Hotel Management System</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar-collapsible">
            <ul class="nav navbar-nav navbar-left">
                <li class="nav-item" ><a class="{{$classnamehome}}" href="/home">Home</a>
                </li>
                <li class="nav-item"><a class="{{$classnameaddstaff}}" href="/manageraddstaff">Staff</a>
                </li>
                <li class="nav-item"><a class="{{$classnamemanagestaff}}" href="/managermange">Manage</a>
                </li>
                <li class="nav-item"><a class="{{$classnameroles}}" href="/managerroles">Roles</a>
                </li>
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




</head>
   
<body>
@yield('content')



<!-- Scripts -->

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
</body>


    <script>
        $(document).on('change','#role',function(){
            $y = $(this).val();
            $('#staffroles').children('option:not(:first)').remove();
            $.ajax
            ({
                url: '{{ url('getselectvalues') }}/'+$y,
                type: 'GET',
                dataType: 'html',
                success: function(data)
                {
                $("#staffroles").append(data);
                }
            });
        });
//
//        $('#role').change(function(e) {
//            e.preventDefault();
//            console.log("aa");
//            alert($y);
//        });
    </script>

</html>
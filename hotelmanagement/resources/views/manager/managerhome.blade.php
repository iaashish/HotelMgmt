@extends('layouts.managerheader')
@section('content')
    <body class="w3-light-grey">
    <!-- Page Container -->
    <div class="w3-content w3-margin-top" style="max-width:1400px;">

        <!-- The Grid -->
        <div class="w3-row-padding">

            <!-- Left Column -->
            <div class="w3-third">

                <div class="w3-white w3-text-grey w3-card-4">
                    <div class="w3-display-container">
                        <img src="{{asset('/picture/mang.png')}}" style="width:50%" alt="ManagerPicture">
                        <div class="w3-display-bottomleft w3-container w3-text-black">
                        </div>
                    </div>
                    <div class="w3-container">
                        <hr>
                        <u><h4>Personal Informationa:</h4></u>
                        <p><i class="fa fa-fw fa-envelope"></i> {{Auth::user()->email}}</p>
                        <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
                        <p>
                        <hr>
                        <u><h4>Bank account Information</h4></u>
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
                </div>
                <br>
                <!-- End Left Column -->
            </div>
            <!-- Right Column -->
            <div class="w3-twothird">
                <div class="w3-container w3-card w3-white w3-margin-bottom">
                    <h2 class="w3-text-grey w3-padding-16"><i
                                class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Current Staff
                    </h2>
                    <div class="w3-container">
                        <h5 class="w3-opacity"><b> All Staff haired since: </b></h5>
                        <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Aug 2017 - <span
                                    class="w3-tag w3-teal w3-round">Current</span></h6>
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
                        <p>Click to  add new staff member, please go to staff first and register the employee, then you can
                            assign
                            a task.</p>
                        <a href="/manageraddstaff" class="btn btn-primary ">Click here</a>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@endsection

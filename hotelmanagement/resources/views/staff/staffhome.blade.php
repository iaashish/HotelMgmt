@extends('layouts.staffhomelayout')
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
                        <img src="{{asset('/picture/staffprofile.png')}}" style="width:50%" alt="ManagerPicture">
                        <div class="w3-display-bottomleft w3-container w3-text-black">
                        </div>
                    </div>
                    <div class="w3-container">
                        <hr>
                        <u>
                            <h4>Personal Information:</h4>
                        </u>
                        <p><i class="fa fa-fw fa-envelope"></i>{{Auth::user()->email}}</p>
                        <p><i class="fa fa-fw fa-phone"></i> {{Auth::user()->phonenumber}}</p>
                        <hr>
                        <u>
                            <h4>Bank account Information</h4>
                        </u>
                        <p><i class="fa fa-fw fa-cc-amex"></i> Amex info</p>
                        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card info</p>
                        <hr>
                        <address>
                            <u> <strong> <i class="fa fa-fw fa-map-marker"></i> Address</strong></u>
                            <br>
                            {{Auth::user()->address}}
                        </address>
                        @role('Receptionist')
                        <form method="POST" action="/registerbooking">
                            {{ csrf_field() }}
                            <div class="w3-row-padding" style="margin:0 -16px;">
                                <div class="w3-half w3-margin-bottom">
                                    <label><i class="fa fa-calendar-o"></i> Check In</label>
                                    <input input id="checkin" class="w3-input w3-border" type="date"
                                           placeholder="DD MM YYYY" name="checkin" required>
                                </div>
                                <div class="w3-half">
                                    <label><i class="fa fa-calendar-o"></i> Check Out</label>
                                    <input id="checkout" class="w3-input w3-border" type="date"
                                           placeholder="DD MM YYYY" name="checkout" required>
                                </div>
                            </div>
                            <div class="w3-row-padding" style="margin:8px -16px;">
                                <div class="w3-half w3-margin-bottom">
                                    <label>First Name</label>
                                    <input id="first" class="w3-input w3-border" type="text" name="first">
                                    <label>Last Name</label>
                                    <input id="last" class="w3-input w3-border" type="text" name="last">
                                </div>
                                <div class="w3-half">
                                    <label><i></i>Email</label>
                                    <input id="email" class="w3-input w3-border" type="text" name="email">
                                </div>
                            </div>
                            <button class="w3-button w3-dark-grey" type="submit"><i class=" w3-margin-right"></i>
                                Reserve Room
                            </button>
                        </form>
                        @endrole
                        @role('Accountant')
                        <form method="POST" action="/addsalary">
                            {{ csrf_field() }}
                            <select title="Select Type" class="form-control" id="staffrole" name="role">
                                <option selected="true" disabled="disabled" placeholder="Choose Staff Type">
                                    Choose Role Type
                                </option>
                                @foreach ($roles as $object )
                                    <option value="{{$object->id}}">{{$object->name}}</option>
                                @endforeach
                            </select>
                            <br>
                            <select title="Select Type" class="form-control" name="staffid" id="staffnames">
                                <option selected="true" disabled="disabled" placeholder="Choose Staff Type">
                                    Choose Staff
                                </option>
                                {{--@foreach ($staff as $object )--}} {{--
                        <option value="{{$object->id}}">{{$object->first.' '.$object->last}}</option>--}} {{--@endforeach--}}
                            </select>
                            <br>
                            <label for="salary">Salary</label>
                            <input type="number" name="salary" id="salary">
                            <button class="w3-button w3-dark-grey" type="submit"><i class=" w3-margin-right"></i>
                                Add salary
                            </button>
                        </form>
                        @endrole
                        <hr>
                    </div>
                </div>
            </div>

            <div class="w3-twothird  w3-white">
                <div class="w3-content" style="max-width:1000px;margin-top:46px">
                    @role('Receptionist')
                    <div class="w3-container">
                        <h2>
                            <center>Receptionist Homepage</center>
                        </h2>
                        <p>
                            Table to Monitor Guest Information
                        </p>
                        <table class="w3-table-all  ">
                            <thead>
                            <tr class="w3-black">
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Room#</th>
                                <th>Check In Date</th>
                                <th>Check Out Date</th>
                            </tr>
                            @foreach($data as $object)
                                <tr>
                                    <td>{{$object->first}}</td>
                                    <td>{{$object->last}}</td>
                                    <td>{{$object->id}}</td>
                                    <td>{{$object->checkin}}</td>
                                    <td>{{$object->checkout}}</td>
                                </tr>
                            @endforeach
                            </thead>
                        </table>
                    </div>
                    @endrole
                    @role('Accountant')
                    <div class="w3-container">
                        <h2>
                            <center>Accountant Homepage</center>
                        </h2>
                        <p>
                            Table to Monitor Accounts Information
                        </p>
                        <table class="w3-table-all  ">
                            <thead>
                            <tr class="w3-black">
                                <th>#</th>
                                <th>Name</th>
                                <th>SSN</th>
                                <th>Type</th>
                                <th>Salary</th>
                            </tr>
                            @foreach($accountant as $object)
                                <tr>
                                    <th>{{$object->id}}</th>
                                    <td>{{$object->first.' '.$object->last}}</td>
                                    <td>{{$object->ssn}}</td>
                                    <td>{{$object->staff_type}}</td>
                                    <td>{{$object->salary}}</td>
                                </tr>
                            @endforeach
                            </thead>
                        </table>
                    </div>
                    @endrole
                    <br>
                    <!-- Guest Input Form -->
                    <div class="w3-card-4 w3-white"
                         style="max-width:700px;margin-top:46px;margin-bottom:46px; margin: 0 auto; margin-right:600px; margin-right:100px;"
                         align="center">
                        <div class="w3-container  w3-black" style="max-width:700px;margin-top:46px;" align="center">
                            <h4>
                                <center>You task for today</center>
                            </h4>
                        </div>
                        <table class="table table-bordered table-striped">
                            <thead>
                            <th>Task</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            </thead>
                            <tbody>
                            @foreach($task as $object)
                                <tr>
                                    <td>{{$object->task}}</td>
                                    <td>{{$object->starttime}}</td>
                                    <td>{{$object->endtime}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection



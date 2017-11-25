<!doctype html>
<html lang="{{ app()->getLocale() }}">
 
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

.container {
    position: relative;
    height:100%;
    width: 100%;
    top: 10%;

}


</style>
<body>


@extends('layouts.managerheader')
@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-warning">
                    <div class="panel-heading">Staff List</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="/tasks">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="address" class="col-md-4 control-label">Staff Type</label>
                                <div class="col-md-6">
                                    <select title="Select Type" class="form-control" name="item_id">
                                        <option selected="true" disabled="disabled" placeholder="Choose Staff Type">
                                            Choose Staff Type
                                        </option>
                                        @foreach ($data as $object )
                                            <option>{{$object}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address" class="col-md-4 control-label">Staff name</label>
                                <div class="col-md-6">
                                    <select title="Staff Name" class="form-control" name="staffname">
                                        <option selected="true" disabled="disabled">Select Staff</option>
                                        @foreach($staffnames as $object)

                                            <option value="{{$object->id}}">{{$object->first." ".$object->last}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dob" class="col-md-4 control-label">Date </label>
                                <div class="col-md-6">
                                    <input id="dob" type="date" class="form-control" name="dob">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="starttime" class="col-md-4 control-label">Start Time </label>
                                <div class="col-md-6">
                                    <input id="starttime" type="time" class="form-control" name="starttime">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="endtime" class="col-md-4 control-label">End Time </label>
                                <div class="col-md-6">
                                    <input id="endtime" type="time" class="form-control" name="endtime">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="task" class="col-md-4 control-label">Tasks </label>


                                <div class="col-md-6">
                                    <select id="task" title="select" class="form-control" name="task">
                                        <option> Main Lobby: Reservations & Direct</option>
                                        <option> Main Lobby: Maintains telecommunication system
                                        </option>
                                        <option> Main Office: Assists in distribution of office
                                            supplies
                                        </option>
                                        <option> Main Office: Monitoring logbook & Maintains
                                            security
                                        </option>
                                        <option>accountant List</option>
                                        <option> Main Office: Cash handling & Input General Cashier
                                            Summary
                                        </option>
                                        <option> Main Office: Assist with financial and tax audits
                                        </option>
                                        <option> Main Office: Bill out credit cards (AMEX, DINERS,
                                            etc.)
                                        </option>
                                        <option> Main Office: Review and approve all reconciliation<
                                        </option>
                                        <option> Main Office: Reconciles bank statements<</option>
                                        <option> Main Office: Reviewing all ledger details guest
                                            ledger
                                        </option>
                                        <option> Main Office: Review and approve all reconciliation
                                        </option>
                                        <option> Main Office: Perform follow-up billing</option>
                                        <option> Maintenance List</option>
                                        <option> Hotel Facilities: General Maintenanc for(Pool /
                                            Gym) ,
                                            See Notes
                                        </option>
                                        <option>Hotel Facilities: Check Missing Articles, See Notes
                                        </option>
                                        <option> Hotel Facilities: Safety Checks / Alarm System, See
                                            Notes
                                        </option>
                                        <option> Main Lobby: General Repairs(Vending machines/
                                            Wi-Fi)
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" onclick="submitform()" class="btn btn-primary">
                                        Assign task
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

</body>
</html>

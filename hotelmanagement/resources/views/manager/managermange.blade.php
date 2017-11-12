<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Mange Staff</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"/>
   

    <link rel="stylesheet" href="{{asset('css/manage.css')}}"/>


   <!-- Fonts -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

      <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
     
     
     

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">






<!-- Navbar -->
<div class="w3">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="/" class="w3-bar-item w3-button w3-padding-large">Bakc</a>
  
      </div>
  
</div>

</head>
<body>
  


<div class="container-center ">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
                <div class="panel-heading">Staff List</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/registerstaff">
                        {{ csrf_field() }}

                      
                                            
                        <div class="form-group">
                        <label for="address" class="col-md-4 control-label">Staff Type</label>
                        <div class="col-md-6">

                          <select class="form-control" name="item_id">
                          <option value="0"></option>
                          <option value="receptionist">Receptionist</option>
                          <option value="maintenance">Maintenance Staff</option>
                          <option value="accountant">Accountant </option>
                           </select>
                        </div>
                        </div>

                                              
                        <div class="form-group">
                        <label for="address" class="col-md-4 control-label">Staff name</label>
                        <div class="col-md-6">

                          <select class="form-control" name="item_id">
                              <option value="staffname">Pull list of names fronm database </option>
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
                                <input id="starttime" type="time" class="form-control" name="start stime">
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
                            
                        <select id="a">

                        <option value="receptionist" data-sync="receptionist">receptionist</option>
                        <option value="accountant" data-sync="accountant" selected>Accountant</option>
                        <option value="maintenance" data-sync="maintenance">Maintenance</option>
                      </select>
                    </div>
                    </div>
                        

                          <div class="form-group">
                             <label for="endtime" class="col-md-4 control-label"></label>

                                  <div class="col-md-6">

                                  <select id="b">
                                  <option value="receptionist"> Main Lobby: Reservations & Direc</option>
                                  <option value="receptionist"> Main Lobby:  Maintains telecommunication system</option>
                                  <option value="receptionist"> Main Office: Assists in distribution of office supplies</option>
                                  <option value="receptionist"> Main Office: Monitoring logbook & Maintains security</option>                                  
                                  <option value="accountant">accountant List</option>
                                  <option value="accountant"> Main Office: Cash handling & Input General Cashier Summary </option>
                                  <option value="accountant"> Main Office: Assist with financial and tax audits </option>
                                  <option value="accountant"> Main Office:  Bill out credit cards (AMEX, DINERS, etc.) </option>
                                  <option value="accountant"> Main Office: Review and approve all reconciliation<</option>
                                  <option value="accountant"> Main Office:  Reconciles bank statements<</option>
                                  <option value="accountant"> Main Office: Reviewing all ledger details guest ledger </option>
                                  <option value="accountant"> Main Office: Review and approve all reconciliation</option>
                                  <option value="accountant"> Main Office: Perform follow-up billing </option>
                                <option value="maintenance"> Maintenance List</option>
                                <option value="maintenance"> Hotel Facilities: General Maintenanc for(Pool / Gym) , See Notes   </option>
                                <option value="maintenance">Hotel Facilities: Check Missing Articles, See Notes </option>
                                <option value="maintenance"> Hotel Facilities: Safety Checks / Alarm System, See Notes </option>
                                <option value="maintenance"> Main Lobby: General Repairs(Vending machines/ Wi-Fi)</option>
                        </select>



                                </div>
                               </div>

                                      <div class="form-group">
                                          <div class="col-md-6 col-md-offset-4">
                                              <button type="submit" class="btn btn-primary">
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
       window.onload=function() { 
        document.getElementById("a").onchange=function() {
          document.getElementById("b").value=this.options[this.selectedIndex].getAttribute("data-sync"); 
        }
        document.getElementById("a").onchange(); // trigger when loading
      }
        </script>


</body>
</html>

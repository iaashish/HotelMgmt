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
    bottom: 2%;

}

body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" name="form" method="POST" action="/registerstaff">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('first') ? ' has-error' : '' }}">
                            <label for="first" class="col-md-4 control-label">First name</label>
                            <div class="col-md-6">
                                <input id="first" type="text" placeholder="First name" class="form-control" name="first"
                                       value="{{ old('first') }}" required> @if ($errors->has('first'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first') }}</strong>
                                    </span> @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('last') ? ' has-error' : '' }}">
                            <label for="last" class="col-md-4 control-label">Last Name</label>

                            <div class="col-md-6">
                                <input id="last" type="text" class="form-control" placeholder="Last name" name="last"
                                       value="{{ old('last') }}" required> @if ($errors->has('last'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last') }}</strong>
                                    </span> @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" placeholder="Email" name="email"
                                       value="{{ old('email') }}" required> @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" placeholder="Password"
                                       name="password" required> @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder="Confirm password"
                                       class="form-control" name="password_confirmation" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-md-4 control-label">Address</label>
                            <div class="col-md-6">
                                <input id="address" placeholder="Address" type="text" class="form-control"
                                       name="address">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phonenumber" class="col-md-4 control-label">phone</label>
                            <div class="col-md-6">
                                <input id="phonenumber" placeholder="Phone" pattern="^\d{3}-\d{3}-\d{4}$" type="tel" class="form-control"
                                       name="phonenumber" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dob" class="col-md-4 control-label">DOB</label>
                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dateofhire" class="col-md-4 control-label">DOJ</label>
                            <div class="col-md-6">
                                <input id="dateofhire" type="date" class="form-control" name="dateofhire">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ssn" class="col-md-4 control-label">SSN</label>
                            <div class="col-md-6">
                                <input id="ssn" type="number" class="form-control" name="ssn">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="ssn" class="col-md-4 control-label">Staff Type</label>
                            <div class="col-md-6">
                                <select title="select staff " name="staff_type" id="staff_type" class="form-control">
                                    <option selected="true" disabled="disabled" placeholder="Choose Staff Type">Choose
                                        Staff Type
                                    </option>
                                    @foreach ($data as $object )
                                        <option>{{$object}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button id="register" dusk="register-button" type="submit" class="btn btn-primary"><a
                                            onclick="form.submit();" href="#">Register</a></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
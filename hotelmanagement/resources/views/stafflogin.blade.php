@extends('layouts.stafflayout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="w3-display-container w3-center">
                </div>
                <div class=" w3-opacity w3-light-grey w3-xlarge">

                    <h2 class="w3-wide w3-center">staff  Login Page</h2>
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
                    <div class="login-wrap panel panel-default">

                        <div class="login-html">
                            <label for="tab-1" class="tab">Sign In</label>
                            <form class="form-horizontal" method="POST" action="stafflogin">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="label col-md-4 control-label">E-Mail</label>

                                    <div class="col-md-8">
                                        <input placeholder="Email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="label col-md-4 control-label">Password</label>

                                    <div class="col-md-8">
                                        <input id="password" type="password" class="form-control" name="password" required> @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-md-6">
                                        <div class="checkbox" style="float: right;margin: 4px;">
                                            <input class="check" type="checkbox" id="remember" name="remember" {{ old( 'remember') ? 'checked' : '' }}>

                                        </div>
                                    </div>
                                    <label class="label" for="remember" style="margin: -13px -12px 14px -22px;">Remember Me</label>
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
                </div>
            </div>
        </div>
    </div>
@endsection


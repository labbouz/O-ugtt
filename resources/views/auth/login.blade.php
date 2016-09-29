@extends('layouts.login')

@section('content')
<section id="wrapper" class="login-register">
    <div class="login-box login-sidebar">
        <div class="white-box">
            <form class="form-horizontal form-material" id="loginform" action="{{ url('/login') }}" role="form" method="POST">
                    {{ csrf_field() }}
                <a href="javascript:void(0)" class="text-center db"><img src="{{ Request::root() }}/plugins/images/eliteadmin-logo-dark.png" alt="Home" />
                    <br/>
                    <img src="{{ Request::root() }}/plugins/images/eliteadmin-text-dark.png" alt="Home" />
                    </a>




                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} m-t-40">
                    <div class="col-xs-12">
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required="" placeholder="{{ trans('auth.email') }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="col-xs-12">
                        <input id="password" type="password" class="form-control" name="password" required="" placeholder="{{ trans('auth.password') }}">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <div class="checkbox checkbox-primary pull-left p-t-0">
                            <input id="checkbox-signup" type="checkbox" name="remember">
                            <label for="checkbox-signup"> {{ trans('auth.remember') }} </label>
                        </div>
                        <a href="{{ url('/password/reset') }}" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> {{ trans('auth.forgot_pwd') }}</a> </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">{{ trans('auth.submit_login') }}</button>
                    </div>
                </div>
            </form>
            <form class="form-horizontal" id="recoverform" action="index.html">
                <div class="form-group ">
                    <div class="col-xs-12">
                        <h3>Recover Password</h3>
                        <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" required="" placeholder="Email">
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

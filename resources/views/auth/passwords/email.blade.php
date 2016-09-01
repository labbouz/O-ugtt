@extends('layouts.login')

<!-- Main Content -->
@section('content')
<section id="wrapper" class="login-register">
    <div class="login-box">
        <div class="white-box">
            <form class="form-horizontal form-material"  role="form" method="POST" action="{{ url('/password/email') }}">
                {{ csrf_field() }}
                <h3 class="box-title m-b-20">{{ trans('passwords.recap_pass') }}</h3>

                <p class="text-muted m-b-30 font-13">{{ trans('passwords.desc_recap_pass') }}</p>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="col-xs-12">
                        <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required="" placeholder="{{ trans('passwords.email') }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group text-center m-t-20">
                    <div class="col-xs-12">
                        <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light " type="submit">{{ trans('passwords.send_pass') }}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

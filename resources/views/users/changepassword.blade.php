@extends('layouts.app')



@section('page-title')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('main.mypofile') </h4>
    </div>
@endsection

@section('breadcrumb')
    {!! Breadcrumbs::render() !!}
@endsection


@section('header')

@endsection



@section('content')
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading"> @lang('users.change_my_password')</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        {{ Form::model($user, [ 'route' => ['password.update', $user->id], 'method' => 'PATCH', 'data-toggle' => 'validator', 'class' => 'form-horizonta'  ] ) }}

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            {{ Form::label('password', 'كلمة المرور') }}
                            <input name="password" type="password" data-toggle="validator" data-minlength="6" class="form-control" id="password" data-match-error="Minimum of 6 characters"  required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            {{ Form::label('password-confirm', 'تأكيد كلمة المرور') }}
                            <input name="password_confirmation" type="password" class="form-control" id="password-confirm" data-match="#password" data-match-error="Whoops, these don't match" required>

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>



                            <div class="form-group">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">@lang('users.save_new_pass')</button>
                                <button type="button" class="btn btn-inverse waves-effect waves-light" onclick="history.go(-1);return false;">@lang('users.close')</button>
                            </div>

                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
@endsection


@section('footer')

    <!--Style Switcher -->
    {!! Html::script('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') !!}

    {!! Html::script('js/validator.js') !!}

@endsection


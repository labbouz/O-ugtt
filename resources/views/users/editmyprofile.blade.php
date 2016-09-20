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
                <div class="panel-heading"> @lang('users.change_my_profile')</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        {{ Form::model($profile, [ 'route' => ['myprofile.update', $profile->id], 'method' => 'PATCH', 'data-toggle' => 'validator', 'class' => 'form-horizonta'  ] ) }}

                        <div class="form-group{{ $errors->has('nom') ? ' has-error' : '' }}">
                            {{ Form::label('nom', trans('users.nom'), array('class' => 'control-label')) }}
                            {{ Form::text('nom', old('nom') , array('class' => 'form-control', 'required' => 'required')) }}

                            @if ($errors->has('nom'))
                                <span class="help-block"><strong>{{ $errors->first('nom') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('prnom') ? ' has-error' : '' }}">
                            {{ Form::label('prnom', trans('users.prenom'), array('class' => 'control-label')) }}
                            {{ Form::text('prnom', old('prnom') , array('class' => 'form-control', 'required' => 'required')) }}

                            @if ($errors->has('prnom'))
                                <span class="help-block"><strong>{{ $errors->first('prnom') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('societe') ? ' has-error' : '' }}">
                            {{ Form::label('societe', trans('users.societe'), array('class' => 'control-label')) }}
                            {{ Form::text('societe', old('societe') , array('class' => 'form-control')) }}

                            @if ($errors->has('societe'))
                                <span class="help-block"><strong>{{ $errors->first('societe') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('structure_syndicale_id') ? ' has-error' : '' }}">
                            {{ Form::label('structure_syndicale_id', trans('users.structure_syndicale'), array('class' => 'control-label')) }}
                            {!! Form::select('structure_syndicale_id',$StructuresSyndicalestList,$profile->structure_syndicale_id,['class' => 'form-control', 'required' => 'required']) !!}

                            @if ($errors->has('structure_syndicale_id'))
                                <span class="help-block"> <strong>{{ $errors->first('structure_syndicale_id') }}</strong> </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            {{ Form::label('phone_number', trans('users.telephone'), array('class' => 'control-label')) }}
                            {{ Form::text('phone_number', old('phone_number') , array('class' => 'form-control', 'required' => 'required')) }}

                            @if ($errors->has('phone_number'))
                                <span class="help-block"><strong>{{ $errors->first('phone_number') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('email2') ? ' has-error' : '' }}">
                            {{ Form::label('email2', trans('users.email2'), array('class' => 'control-label')) }}
                            {{ Form::text('email2', old('email2') , array('class' => 'form-control')) }}

                            @if ($errors->has('email2'))
                                <span class="help-block"><strong>{{ $errors->first('email2') }}</strong></span>
                            @endif
                        </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">@lang('users.save_info')</button>
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


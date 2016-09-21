@extends('layouts.app')


{{-- Block page-title --}}

@section('page-title')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('main.edit_user') {{ $user->name }} </h4>
    </div>
@endsection


{{-- Block breadcrumb --}}

@section('breadcrumb')
    {!! Breadcrumbs::render('users.edit', $user) !!}
@endsection


{{-- Block header--}}

@section('header')

@endsection


{{-- Block content --}}

@section('content')
    <div class="row">
        {{ Form::model($user, [ 'route' => ['users.update', $user->id], 'method' => 'PATCH'  ] ) }}
        <div class="col-md-3">
            <div class="white-box">
                <h3 class="box-title m-b-0"> @lang('users.details_user') </h3>

                <p class="text-muted m-b-30 font-13"> @lang('users.desc_details_user')  </p>


                @include('users.form')


                <div class="form-group">
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">تسجيل</button>
                    <a href="javascript:void(0)" class="btn btn-inverse waves-effect waves-light" onclick="history.go(-1);return false;">إلغاء</a>
                </div>

            </div>
        </div>
        <div class="col-md-9">

            <div class="panel panel-primary">
                <div class="panel-heading">@lang('users.la_permission_secteur')</div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        @include('users.permissions_secteur')
                    </div>

                </div>
            </div>
            <div class="panel panel-info">
                <div class="panel-heading">@lang('users.la_permission_regional')</div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        @include('users.permissions_region')
                    </div>

                </div>
            </div>
        </div>
        {{ Form::close() }}
    </div>
    <!-- .row -->
@endsection


{{-- Block footer --}}

@section('footer')
    {!! Html::script('js/validator.js') !!}
    <script>
        jQuery(document).ready(function() {

        });
    </script>
@endsection

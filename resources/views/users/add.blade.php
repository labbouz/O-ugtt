@extends('layouts.app')


{{-- Block page-title --}}

@section('page-title')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('main.add_user')  </h4>
    </div>
@endsection



{{-- Block breadcrumb --}}

@section('breadcrumb')
    {!! Breadcrumbs::render() !!}
@endsection



{{-- Block header--}}

@section('header')

@endsection


{{-- Block content --}}

@section('content')
    <div class="row">
        {!! Form::open( ['route' => 'users.store', 'data-toggle' => 'validator'] ) !!}
        <div class="col-md-3">
            <div class="white-box">
                <h3 class="box-title m-b-0">  @lang('users.details_user') </h3>

                <p class="text-muted m-b-30"> @lang('users.desc_details_user') </p>


                @include('users.form')


                <div class="form-group">
                    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">تسجيل</button>
                    <a href="javascript:void(0)" class="btn btn-inverse waves-effect waves-light" onclick="history.go(-1);return false;">إلغاء</a>
                </div>

            </div>
        </div>
        @role('administrator')
        <div class="col-md-9">
            <div class="panel panel-primary permissions_secteurs">
                <div class="panel-heading">@lang('users.la_permission_secteur')</div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        @include('users.permissions_secteur')
                    </div>

                </div>
            </div>
            <div class="panel panel-info permissions_regional">
                <div class="panel-heading">@lang('users.la_permission_regional')</div>
                <div class="panel-wrapper collapse in">
                    <div class="panel-body">
                        @include('users.permissions_region')
                    </div>

                </div>
            </div>
        </div>
        @else

            <?php
            $roles_observateur = Auth::user()->getRoles();
            array_pull($roles_observateur, 2);
            ?>
            @foreach ($roles_observateur as $role_observateur)
                {!! Form::hidden('permissions[]', $role_observateur) !!}
            @endforeach


            @endrole
        {{ Form::close() }}
        </div>

    </div>
    <!-- .row -->
@endsection


{{-- Block footer --}}

@section('footer')

    {!! Html::script('js/validator.js') !!}

    <script>
        jQuery(document).ready(function() {

            switch ($("#role_id").val()) {
                case '1':
                    $(".permissions_secteurs input:checkbox").attr("checked",true).prop("checked",true);
                    $(".permissions_regional input:checkbox").attr("checked",true).prop("checked",true);
                    $(".permissions_secteurs").fadeIn('fast');
                    $(".permissions_regional").fadeIn('fast');
                    break;

                case '3':
                    $(".permissions_secteurs input:checkbox").attr("checked",false).prop("checked",false);
                    $(".permissions_regional input:checkbox").attr("checked",true).prop("checked",true);
                    $(".permissions_regional").fadeOut('fast', function() {
                        $(".permissions_secteurs").fadeIn('fast');
                    });

                    break;

                case '2':
                case '4':
                    $(".permissions_secteurs input:checkbox").attr("checked",true).prop("checked",true);
                    $(".permissions_regional input:checkbox").attr("checked",false).prop("checked",false);
                    $(".permissions_secteurs").fadeOut('fast', function() {
                        $(".permissions_regional").fadeIn('fast');
                    });
                    break;
            }

            $( "#role_id" ).change(function() {
                switch ($(this).val()) {
                    case '1':
                        $(".permissions_secteurs input:checkbox").attr("checked",true).prop("checked",true);
                        $(".permissions_regional input:checkbox").attr("checked",true).prop("checked",true);
                        $(".permissions_secteurs").fadeIn('fast');
                        $(".permissions_regional").fadeIn('fast');
                        break;

                    case '3':
                        $(".permissions_secteurs input:checkbox").attr("checked",false).prop("checked",false);
                        $(".permissions_regional input:checkbox").attr("checked",true).prop("checked",true);
                        $(".permissions_regional").fadeOut('fast', function() {
                            $(".permissions_secteurs").fadeIn('fast');
                        });
                        break;

                    case '2':
                    case '4':
                        $(".permissions_secteurs input:checkbox").attr("checked",true).prop("checked",true);
                        $(".permissions_regional input:checkbox").attr("checked",false).prop("checked",false);
                        $(".permissions_secteurs").fadeOut('fast', function() {
                            $(".permissions_regional").fadeIn('fast');
                        });
                        break;
                }
            });
        });
    </script>

@endsection

@extends('layouts.app')


{{-- Block page-title --}}

@section('page-title')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('violations.add_violation')  </h4>
    </div>
@endsection



{{-- Block breadcrumb --}}

@section('breadcrumb')

    @if(!isset($typeViolation))
        {!! Breadcrumbs::render() !!}
    @else
        {!! Breadcrumbs::render('violation.create_via_type', $typeViolation) !!}
    @endif
@endsection



{{-- Block header--}}

@section('header')

    <!-- Color picker plugins css -->
    {!! Html::style('plugins/bower_components/jquery-asColorPicker-master/css/asColorPicker.css') !!}

@endsection


{{-- Block content --}}

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">  @lang('violations.add_violation') </h3>

                <p class="text-muted m-b-30"> @lang('violations.detail_violation_edit') </p>

                {!! Form::open( ['route' => 'violation.store', 'data-toggle' => 'validator'] ) !!}
                @include('violation.form')
                {{ Form::close() }}

            </div>
        </div>
    </div>
    <!-- .row -->
@endsection


{{-- Block footer --}}

@section('footer')
    {!! Html::script('js/validator.js') !!}

    <!-- Color Picker Plugin JavaScript -->
    {!! Html::script('plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js') !!}
    {!! Html::script('plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js') !!}
    {!! Html::script('plugins/bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js') !!}

    <script>
        $(document).ready(function(){

            $(".colorpicker").asColorPicker({
                readonly:true
            });

        });
    </script>
@endsection

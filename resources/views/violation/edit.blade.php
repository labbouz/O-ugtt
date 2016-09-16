@extends('layouts.app')


{{-- Block page-title --}}

@section('page-title')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('violations.edit_violation')</h4>
    </div>
@endsection


{{-- Block breadcrumb --}}

@section('breadcrumb')
    {!! Breadcrumbs::render('violation.edit', $violation) !!}
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
                <h3 class="box-title m-b-0"> @lang('violations.edit_violation') </h3>

                <p class="text-muted m-b-30 font-13"> @lang('violations.edit_violation') {{ $violation->nom_violation}}  </p>

                {{ Form::model($violation, [ 'route' => ['violation.update', $violation->id], 'method' => 'PATCH'  ] ) }}
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
        $(".colorpicker").asColorPicker({
            readonly:true
        });
    </script>
@endsection

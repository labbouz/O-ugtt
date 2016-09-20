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

    <!-- page CSS -->
    {!! Html::style('plugins/bower_components/bootstrap-select/bootstrap-select.min.css') !!}


@endsection


{{-- Block content --}}

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">  @lang('users.details_user') </h3>

                <p class="text-muted m-b-30"> @lang('users.desc_details_user') </p>

                {!! Form::open( ['route' => 'users.store', 'data-toggle' => 'validator'] ) !!}
                @include('users.form')
                {{ Form::close() }}

            </div>
        </div>
    </div>
    <!-- .row -->
@endsection


{{-- Block footer --}}

@section('footer')

    {!! Html::script('plugins/bower_components/bootstrap-select/bootstrap-select.min.js') !!}

    {!! Html::script('js/validator.js') !!}

    <script>
        jQuery(document).ready(function() {
            $('.selectpicker').selectpicker();
        });
    </script>
@endsection

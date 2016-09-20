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
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0"> @lang('users.details_user') </h3>

                <p class="text-muted m-b-30 font-13"> @lang('users.desc_details_user')  </p>

                {{ Form::model($user, [ 'route' => ['users.update', $user->id], 'method' => 'PATCH'  ] ) }}
                @include('users.form')
                {{ Form::close() }}

            </div>
        </div>
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

@extends('layouts.app')


{{-- Block page-title --}}

@section('page-title')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('secteur.edit_user') {{ $secteur->name }} </h4>
    </div>
@endsection


{{-- Block breadcrumb --}}

@section('breadcrumb')
    {!! Breadcrumbs::render('secteur.edit', $secteur) !!}
@endsection


{{-- Block header--}}

@section('header')

@endsection


{{-- Block content --}}

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0"> @lang('secteur.details_user') </h3>

                <p class="text-muted m-b-30 font-13"> @lang('secteur.desc_details_user')  </p>

                {{ Form::model($secteur, [ 'route' => ['secteur.update', $secteur->id], 'method' => 'PATCH'  ] ) }}
                @include('secteur.form')
                {{ Form::close() }}

            </div>
        </div>
    </div>
    <!-- .row -->
@endsection


{{-- Block footer --}}

@section('footer')
    {!! Html::script('js/validator.js') !!}
@endsection

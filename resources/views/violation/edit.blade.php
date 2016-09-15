@extends('layouts.app')


{{-- Block page-title --}}

@section('page-title')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('delegations.edit_delegation') {{ $delegation->nom_delegation}}</h4>
    </div>
@endsection


{{-- Block breadcrumb --}}

@section('breadcrumb')
    {!! Breadcrumbs::render('delegation.edit', $delegation) !!}
@endsection


{{-- Block header--}}

@section('header')

@endsection


{{-- Block content --}}

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0"> @lang('delegations.detail_delegation') </h3>

                <p class="text-muted m-b-30 font-13"> @lang('delegations.edit_delegation') {{ $delegation->nom_delegation}}  </p>

                {{ Form::model($delegation, [ 'route' => ['delegation.update', $delegation->id], 'method' => 'PATCH'  ] ) }}
                @include('delegation.form')
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

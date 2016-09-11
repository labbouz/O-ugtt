@extends('layouts.app')


{{-- Block page-title --}}

@section('page-title')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('move.edit_move') {{ $move->nom_move}}</h4>
    </div>
@endsection


{{-- Block breadcrumb --}}

@section('breadcrumb')
    {!! Breadcrumbs::render('move.edit', $move) !!}
@endsection


{{-- Block header--}}

@section('header')

@endsection


{{-- Block content --}}

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0"> @lang('move.detail_move') </h3>

                <p class="text-muted m-b-30 font-13"> @lang('move.edit_move') {{ $move->nom_move}}  </p>

                {{ Form::model($move, [ 'route' => ['move.update', $move->id], 'method' => 'PATCH'  ] ) }}
                @include('move.form')
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

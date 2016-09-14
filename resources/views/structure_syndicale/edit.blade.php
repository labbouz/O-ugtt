@extends('layouts.app')


{{-- Block page-title --}}

@section('page-title')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('syndicale.edit_structure_syndicale') {{ $structure_syndicale->type_structure_syndicale}}</h4>
    </div>
@endsection


{{-- Block breadcrumb --}}

@section('breadcrumb')
    {!! Breadcrumbs::render('structure_syndicale.edit', $structure_syndicale) !!}
@endsection


{{-- Block header--}}

@section('header')

@endsection


{{-- Block content --}}

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0"> @lang('syndicale.detail_move') </h3>

                <p class="text-muted m-b-30 font-13"> @lang('syndicale.edit_structure_syndicale') {{ $structure_syndicale->type_structure_syndicale}}  </p>

                {{ Form::model($structure_syndicale, [ 'route' => ['structure_syndicale.update', $structure_syndicale->id], 'method' => 'PATCH'  ] ) }}
                @include('structure_syndicale.form')
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

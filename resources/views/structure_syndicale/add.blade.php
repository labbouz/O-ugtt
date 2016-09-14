@extends('layouts.app')


{{-- Block page-title --}}

@section('page-title')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('syndicale.add_structure_syndicale')  </h4>
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
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">  @lang('syndicale.add_structure_syndicale') </h3>

                <p class="text-muted m-b-30"> @lang('syndicale.detail_structure_syndicale_edit') </p>

                {!! Form::open( ['route' => 'structure_syndicale.store', 'data-toggle' => 'validator'] ) !!}
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

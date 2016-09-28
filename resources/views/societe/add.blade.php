@extends('layouts.app')


{{-- Block page-title --}}

@section('page-title')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('societe.add_societe')  </h4>
    </div>
@endsection



{{-- Block breadcrumb --}}

@section('breadcrumb')
    {!! Breadcrumbs::render() !!}
@endsection



{{-- Block header--}}

@section('header')
    <!-- Date picker plugins css -->
    {!! Html::style('plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css') !!}

@endsection


{{-- Block content --}}

@section('content')
    <div class="row">
        <div class="col-md-6">

            <div class="panel panel-info">
                <div class="panel-heading">
                    @lang('societe.add_societe')
                </div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <p class="text-muted m-b-30"> @lang('societe.detail_societe_edit') </p>

                        {!! Form::open( ['route' => 'societe.store', 'data-toggle' => 'validator'] ) !!}
                        @include('societe.form')
                        {{ Form::close() }}
                    </div>
                </div>
            </div>



        </div>

    </div>
    <!-- .row -->
@endsection


{{-- Block footer --}}

@section('footer')

    <!-- Date Picker Plugin JavaScript -->
    {!! Html::script('plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js') !!}

    {!! Html::script('js/validator.js') !!}

    <script>
        // Date Picker
        jQuery('.mydatepicker').datepicker({
            format: 'yyyy-mm-dd'
        });

        $(document).ready(function() {

            $("#gouvernorat_id").change(function() {
                $.getJSON("{{ url('/ajax/delegations') }}/" + $(this).val(), function(data) {
                    var $delegations = $("#delegation_id");
                    $delegations.empty();
                    $.each(data, function(index, value) {
                        $delegations.append('<option value="' + index +'">' + value + '</option>');
                    });
                    $("#delegation_id").trigger("change");
                });
            });

            $("#secteur_id").change(function() {
                $.getJSON("{{ url('/ajax/conventions') }}/" + $(this).val(), function(data) {
                    var $conventions = $("#convention_id");
                    $conventions.empty();
                    $.each(data, function(index, value) {
                        $conventions.append('<option value="' + index +'">' + value + '</option>');
                    });
                    $("#convention_id").trigger("change");
                });
            });

        });



    </script>
@endsection

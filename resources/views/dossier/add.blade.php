@extends('layouts.app')


{{-- Block page-title --}}

@section('page-title')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('dossier.add_dossier')  </h4>
    </div>
@endsection



{{-- Block breadcrumb --}}

@section('breadcrumb')
    {!! Breadcrumbs::render('dossier.create', $societe) !!}
@endsection



{{-- Block header--}}

@section('header')

@endsection


{{-- Block content --}}

@section('content')

    <div class="row">
        <div class="col-md-6">

            <div class="panel panel-info">
                <div class="panel-heading">
                    @lang('dossier.les_violation')
                </div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        @foreach($types_violations as $type_violation)
                        <h3 class="box-title m-b-0">{{ $type_violation->description_type_violation }}</h3>
                            <div class="row">
                                <?php
                                //$TypeViolation = App\TypeViolation::find($type_violation->id);
                                 ?>

                            </div>

                        @endforeach


                    </div>
                </div>
            </div>



        </div>
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    @lang('dossier.info_societe')
                </div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <p class="text-muted m-b-30"> @lang('societe.detail_societe_edit') </p>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('societe.nom_societe') :</label><br>
                                    <strong>{{ $societe->nom_societe }}</strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('societe.type_societe') :</label><br>
                                    <strong>{{ $societe->type_societe->nom_type_societe }}</strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('societe.gouvernorat') :</label><br>
                                    <strong>{{ $societe->gouvernorat->nom_gouvernorat }}</strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('societe.delegatio') :</label><br>
                                    <strong>{{ $societe->delegation->nom_delegation }}</strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label">@lang('societe.convention') :</label><br>
                                    <strong>{{ $societe->convention->nom_convention }}</strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('societe.nombre_travailleurs') :</label><br>
                                    <strong>{{ $societe->nombre_travailleurs }}</strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('societe.cdi') :</label><br>

                                    @if($societe->cdi)
                                        <strong>@lang('dossier.cdi_oui')</strong>
                                    @else
                                        <strong>@lang('dossier.cdi_non')</strong>
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('societe.date_cration_societe') :</label><br>
                                    <?php
                                    $date_cration_societe = explode("-", $societe->date_cration_societe);
                                    ?>
                                    <strong>{{ $date_cration_societe[0] }} / {{ $date_cration_societe[1] }} / {{ $date_cration_societe[2] }}</strong>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
        </div>

    </div>




    <!-- .row -->
@endsection


{{-- Block footer --}}

@section('footer')
    {!! Html::script('js/validator.js') !!}
@endsection

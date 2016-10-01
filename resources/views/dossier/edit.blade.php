@extends('layouts.app')


{{-- Block page-title --}}

@section('page-title')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('dossier.edit_dossier') {{ $dossier->societe->nom_societe}}</h4>
    </div>
@endsection


{{-- Block breadcrumb --}}

@section('breadcrumb')
    {!! Breadcrumbs::render('dossier.edit', $dossier) !!}
@endsection


{{-- Block header--}}

@section('header')
    <!-- Date picker plugins css -->
    {!! Html::style('plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css') !!}

    <!--alerts CSS -->
    {!! Html::style('plugins/bower_components/sweetalert/sweetalert.css') !!}
@endsection


{{-- Block content --}}

@section('content')
    <div class="row">
        {{-- Info societe --}}
        <div class="col-md-12">
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
                                    <label>@lang('societe.nom_societe') :</label>
                                    <strong>{{ $societe->nom_societe }}</strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('societe.type_societe') :</label>
                                    <strong>{{ $societe->type_societe->nom_type_societe }}</strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('societe.gouvernorat') :</label>
                                    <strong>{{ $societe->gouvernorat->nom_gouvernorat }}</strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('societe.delegatio') :</label>
                                    <strong>{{ $societe->delegation->nom_delegation }}</strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('societe.secteur') :</label>
                                    <strong>{{ $societe->secteur->nom_secteur }}</strong>
                                </div>
                            </div>
                            @if($societe->convention_cadre_commun)
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>@lang('societe.convention') :</label>
                                        <strong>{{ $societe->convention->nom_convention }}</strong>
                                    </div>
                                </div>
                            @endif
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('societe.accord_de_fondation') :</label>

                                    @if($societe->accord_de_fondation)
                                        <strong>@lang('societe.existe')</strong>
                                    @else
                                        <strong>@lang('societe.not_existe')</strong>
                                    @endif

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('societe.nombre_travailleurs_cdi') :</label>
                                    <strong>{{ $societe->nombre_travailleurs_cdi }}</strong>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('societe.nombre_travailleurs_no_cdi') :</label>
                                    <strong>{{ $societe->nombre_travailleurs_cdd }}</strong>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>@lang('societe.date_cration_societe') :</label>
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

        {{-- Info les violations --}}
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    @lang('dossier.les_violation')
                </div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        @foreach($types_violations as $type_violation)
                            <h3 class="box-title  m-b-0">{{ $type_violation->description_type_violation }}</h3>
                            <div class="row">

                                @foreach($type_violation->violations as $violation)
                                    <div class="col-lg-6 col-md-6">
                                        <div class="checkbox checkbox-primary">
                                            <input id="checkbox_violation_{{ $violation->id }}" name="violations[]" type="checkbox" value="{{ $violation->id }}" class="violation_controle">
                                            <label for="checkbox_violation_{{ $violation->id }}"> {{ $violation->nom_violation }} </label>
                                        </div>
                                    </div>
                                @endforeach

                            </div>

                        @endforeach


                    </div>
                </div>
            </div>
        </div>

        {{-- tous les violation --}}
        @foreach($ListViolations as $violation)
            <div class="col-md-12" id="panel_violation_{{ $violation->id }}" >
                <div class="panel panel-info">
                    <div class="panel-heading">
                        {{ $violation->nom_violation }}
                    </div>


                    <form id="form_violation_{{ $violation->id }}" method="post" >
                        <div class="panel-wrapper collapse in" aria-expanded="true">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="table_violation_{{ $violation->id }}" class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th class="text-nowrap" width="50%">المتضررين </th>
                                                <th>المعتدين </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                        <hr>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3>المتضرر</h3>
                                    <hr>

                                    @if($violation->type_violation_id==1)

                                        <div class="form-group">
                                            <label for="nom_endommage" class="control-label">اللقب</label>
                                            <input class="form-control" required="required" name="nom_endommage" type="text" value="" id="nom_endommage">
                                        </div>

                                        <div class="form-group">
                                            <label for="prenom_endommage" class="control-label">الاسم</label>
                                            <input class="form-control" required="required" name="prenom_endommage" type="text" value="" id="prenom_endommage">
                                        </div>

                                        <div class="form-group">
                                            <label for="structure_syndicale_id" class="control-label">الهيكل النقابي</label>
                                            {!! Form::select('structure_syndicale_id',$StructuresSyndicalestList,null,['class' => 'form-control', 'required' => 'required', 'id' => 'structure_syndicale_id_'.$violation->id]) !!}
                                        </div>

                                        <div class="form-group">
                                            <label for="date_violation" class="control-label"> تاريخ الأنتهاك</label>
                                            {{ Form::text('date_violation', old('date_violation') , array('class' => 'form-control mydatepicker')) }}
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3 m-t-10"><label for="nom" class="control-label">الجنس</label></div>
                                                <div class="col-md-3"><div class="radio radio-info">
                                                        <input type="radio" name="sex" id="sex_{{ $violation->id }}_m" value="m">
                                                        <label for="sex_{{ $violation->id }}_m"> ذكر  </label>
                                                    </div></div>
                                                <div class="col-md-3"><div class="radio radio-info">
                                                        <input type="radio" name="sex" id="sex_{{ $violation->id }}_f" value="f">
                                                        <label for="sex_{{ $violation->id }}_f"> انثى   </label>
                                                    </div></div>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3"><label for="nom" class="control-label">العمر </label></div>
                                                <div class="col-md-9">
                                                    <div class="radio radio-info">
                                                        <input type="radio" name="age" id="moins_{{ $violation->id }}_35" value="moins_35">
                                                        <label for="moins_{{ $violation->id }}_35"> أقل من 35  </label>
                                                    </div>

                                                    <div class="radio radio-info">
                                                        <input type="radio" name="age" id="betwin_{{ $violation->id }}_35_50" value="betwin_35_50">
                                                        <label for="betwin_{{ $violation->id }}_35_50"> من 35 إلى 50 </label>
                                                    </div>

                                                    <div class="radio radio-info">
                                                        <input type="radio" name="age" id="plus_{{ $violation->id }}_50" value="plus_50">
                                                        <label for="plus_{{ $violation->id }}_50"> أكبر من 50 </label>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3"><label for="nom" class="control-label">الحالة المدنية </label></div>
                                                <div class="col-md-9">
                                                    <div class="radio radio-info">
                                                        <input type="radio" name="etat_civile" id="etat_civile_{{ $violation->id }}_1" value="1">
                                                        <label for="etat_civile_{{ $violation->id }}_1"> متزوج</label>
                                                    </div>

                                                    <div class="radio radio-info">
                                                        <input type="radio" name="etat_civile" id="etat_civile_{{ $violation->id }}_2" value="2">
                                                        <label for="etat_civile_{{ $violation->id }}_2">أعزب </label>
                                                    </div>

                                                    <div class="radio radio-info">
                                                        <input type="radio" name="etat_civile" id="etat_civile_{{ $violation->id }}_3" value="3">
                                                        <label for="etat_civile_{{ $violation->id }}_3">مطلق </label>
                                                    </div>

                                                    <div class="radio radio-info">
                                                        <input type="radio" name="etat_civile" id="etat_civile_{{ $violation->id }}_4" value="4">
                                                        <label for="etat_civile_{{ $violation->id }}_4">أرمل  </label>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="nom" class="control-label">عدد الأطفال في الكفالة</label>
                                            <input class="form-control" required="required" name="nb_enfant" type="number" value="" id="nb_enfant">
                                        </div>

                                        <div class="form-group">
                                            <label for="nom" class="control-label">الهاتف </label>
                                            <input class="form-control" required="required" name="nb_enfant" type="tel" value="" id="nb_enfant">
                                        </div>

                                        <div class="form-group">
                                            <label for="nom" class="control-label">البريد الاكتروني</label>
                                            <input class="form-control" required="required" name="nb_enfant" type="email" value="" id="nb_enfant">
                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-3 m-t-10"><label for="nom" class="control-label">الترسيم</label></div>
                                                <div class="col-md-3"><div class="radio radio-info">
                                                        <input type="radio" name="cdi" id="cdi_{{ $violation->id }}_oui" value="oui">
                                                        <label for="cdi_{{ $violation->id }}_oui"> مترسم   </label>
                                                    </div></div>
                                                <div class="col-md-3"><div class="radio radio-info">
                                                        <input type="radio" name="cdi" id="cdi_{{ $violation->id }}_non" value="non">
                                                        <label for="cdi_{{ $violation->id }}_non"> غير مترسم   </label>
                                                    </div></div>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-5"><label for="nom" class="control-label">الأقدمية في المسؤولية النقابية </label></div>
                                                <div class="col-md-7">
                                                    <div class="radio radio-info">
                                                        <input type="radio" name="ancianite" id="moins_{{ $violation->id }}_an" value="moins_an">
                                                        <label for="moins_{{ $violation->id }}_an"> أقل من سنة  </label>
                                                    </div>

                                                    <div class="radio radio-info">
                                                        <input type="radio" name="ancianite" id="betwin_{{ $violation->id }}_1_3" value="betwin_1_3">
                                                        <label for="betwin_{{ $violation->id }}_1_3"> من سنة إلى 3 سنوات </label>
                                                    </div>

                                                    <div class="radio radio-info">
                                                        <input type="radio" name="ancianite" id="betwin_{{ $violation->id }}_3_8" value="betwin_3_8">
                                                        <label for="betwin_{{ $violation->id }}_3_8"> من 3 إلى 8 سنوات </label>
                                                    </div>

                                                    <div class="radio radio-info">
                                                        <input type="radio" name="ancianite" id="plus_{{ $violation->id }}_8" value="plus_8">
                                                        <label for="plus_{{ $violation->id }}_8"> أكثر من 8 سنوات </label>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    @else
                                        <div class="form-group">
                                            <label for="nom" class="control-label">الهيكل النقابي</label>
                                            {!! Form::select('structure_syndicale_id',$StructuresSyndicalestList,null,['class' => 'form-control', 'required' => 'required', 'id' => 'structure_syndicale_id_'.$violation->id]) !!}
                                        </div>

                                        <div class="form-group">
                                            <label for="nom" class="control-label"> تاريخ الأنتهاك</label>
                                            {{ Form::text('date_violation', old('date_violation') , array('class' => 'form-control mydatepicker')) }}
                                        </div>
                                    @endif



                                </div>
                                <div class="col-md-6">
                                    <h3>المعتدي</h3>
                                    <hr>
                                    <div class="form-group">
                                        <label for="nom" class="control-label">اللقب</label>
                                        <input class="form-control" required="required" name="nom" type="text" value="" id="nom">
                                    </div>

                                    <div class="form-group">
                                        <label for="prenom" class="control-label">الاسم</label>
                                        <input class="form-control" required="required" name="prenom" type="text" value="" id="prenom">
                                    </div>

                                    <div class="form-group">
                                        <label for="nationalite" class="control-label">جنسيته</label>
                                        <input class="form-control" required="required" name="nationalite" type="text" value="" id="nationalite">
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-5"><label for="nom" class="control-label">المسؤولية التي يمثلها</label></div>
                                            <div class="col-md-7">

                                                <div class="checkbox checkbox-info">
                                                    <input type="checkbox" name="la_responsabilite[]" id="res_{{ $violation->id }}_1" value="1">
                                                    <label for="res_{{ $violation->id }}_1">  رئيسك في العمل  </label>
                                                </div>

                                                <div class="checkbox checkbox-info">
                                                    <input type="checkbox" name="la_responsabilite[]" id="res_{{ $violation->id }}_2" value="2">
                                                    <label for="res_{{ $violation->id }}_2"> ادارة موارد بشرية </label>
                                                </div>

                                                <div class="checkbox checkbox-info">
                                                    <input type="checkbox" name="la_responsabilite[]" id="res_{{ $violation->id }}_3" value="3">
                                                    <label for="res_{{ $violation->id }}_3"> ادارة عامة او مركزية </label>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="button" class="btn btn-block btn-info btn-lg  sa-success" data-ajax="{{ $violation->id }}"><i class="fa fa-plus-circle m-l-5"></i>    سجل الإنتهاك </button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
        {{-- tous les violation --}}

        {{ Form::model($dossier, [ 'route' => ['dossier.update', $societe->id], 'method' => 'PATCH', 'data-toggle' => 'validator'] ) }}
        @include('dossier.form')
        {{ Form::close() }}


    </div>
@endsection


{{-- Block footer --}}

@section('footer')
    <!-- Date Picker Plugin JavaScript -->
    {!! Html::script('plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js') !!}

    <!-- Sweet-Alert  -->
    {!! Html::script('plugins/bower_components/sweetalert/sweetalert.min.js') !!}
    {!! Html::script('plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js') !!}

    {!! Html::script('js/validator.js') !!}

    <script>
        // Date Picker
        jQuery('.mydatepicker').datepicker({
            format: 'yyyy-mm-dd'
        });

        jQuery(document).ready(function() {

            $('.sa-success').click(function(){

                // reset forms
                var _id_violation = $(this).attr('data-ajax');


                var _violation_form = $('#form_violation_'+_id_violation);

                /**** INFO violation ****/

                var _nom_endommage = _violation_form.find('input[name="nom_endommage"]').val();
                var _prenom_endommage = _violation_form.find('input[name="prenom_endommage"]').val();
                var _structure_syndicale = $('#structure_syndicale_id_'+_id_violation+' option:selected').text();
                var _date_violation = _violation_form.find('input[name="date_violation"]').val();

                var _nom = _violation_form.find('input[name="nom"]').val();
                var _prenom = _violation_form.find('input[name="prenom"]').val();


                $('#table_violation_'+_id_violation+' > tbody').append("" +
                        "<tr>" +
                        "<td class='text-nowrap'>" +
                        " <strong>اللقب : </strong>" + _nom_endommage +
                        "<strong> الاسم  : </strong>" + _prenom_endommage +
                        "<br><br><strong> الهيكل النقابي  : </strong>" + _structure_syndicale +
                        "<br><br><strong> تاريخ الأنتهاك  : </strong>" + _date_violation +
                        "</td>" +
                        "<td>" +
                        " <strong>اللقب : </strong>" + _nom +
                        "<strong> الاسم  : </strong>" + _prenom +
                        "</td></tr>");

                swal("إضافة إنتهاك", "لقد تم بالفعل إضافة إنتهاك جديد في النظام تحت هذا الملف وسيتم إعلام الراصدين المعنيين بالأمر.", "success")
                $('#form_violation_'+_id_violation)[0].reset();
            });

            jQuery('.violation_controle').each(function() {

                var _violation_controle = $(this);

                var _id = _violation_controle.val();


                if(_violation_controle.is(':checked')) {
                    $("#panel_violation_"+_id).show();  // checked
                } else {
                    $("#panel_violation_"+_id).hide();
                }
            });

            $( ".violation_controle" ).change(function() {
                var _violation_controle = $(this);
                var _id = _violation_controle.val();
                if(_violation_controle.is(':checked')) {
                    $("#panel_violation_"+_id).show();  // checked
                } else {
                    $("#panel_violation_"+_id).hide();
                }
            });

        });
    </script>
@endsection


<div class="col-md-5">

    <div class="form-group{{ $errors->has('nom_societe') ? ' has-error' : '' }}">
        {{ Form::label('nom_societe', trans('societe.nom_societe'), array('class' => 'control-label')) }}
        {{ Form::text('nom_societe', old('nom_societe') , array('class' => 'form-control', 'required' => 'required')) }}

        @if ($errors->has('nom_societe'))
            <span class="help-block">
                        <strong>{{ $errors->first('nom_societe') }}</strong>
                    </span>
        @endif
    </div>

</div>

<div class="col-md-4">

    <div class="form-group{{ $errors->has('nom_marque') ? ' has-error' : '' }}">
        {{ Form::label('nom_marque', trans('societe.nom_marque'), array('class' => 'control-label')) }}
        {{ Form::text('nom_marque', old('nom_marque') , array('class' => 'form-control')) }}

        @if ($errors->has('nom_marque'))
            <span class="help-block">
                        <strong>{{ $errors->first('nom_marque') }}</strong>
                    </span>
        @endif
    </div>

</div>


<div class="col-md-3">
    <div class="form-group{{ $errors->has('type_societe_id') ? ' has-error' : '' }}">
        {{ Form::label('type_societe_id', trans('societe.type_societe'), array('class' => 'control-label')) }}

        @if(!isset($societe))
            {!! Form::select('type_societe_id',$TypesSocietestList,null,['class' => 'form-control', 'required' => 'required']) !!}
        @else
            {!! Form::select('type_societe_id',$TypesSocietestList,$societe->type_societe_id,['class' => 'form-control', 'required' => 'required']) !!}
        @endif

        @if ($errors->has('type_societe_id'))
            <span class="help-block">
                        <strong>{{ $errors->first('type_societe_id') }}</strong>
                    </span>
        @endif
    </div>
</div>
<div class="col-md-6">
    <div class="form-group{{ $errors->has('gouvernorat_id') ? ' has-error' : '' }}">
        {{ Form::label('gouvernorat_id', trans('societe.gouvernorat'), array('class' => 'control-label')) }}

        @if( $GouvernoratsList->count()>1)

            {{-- Listing pour sélectionner --}}
            @if(!isset($societe))
                {!! Form::select('gouvernorat_id',$GouvernoratsList,null,['class' => 'form-control', 'required' => 'required']) !!}
            @else
                {!! Form::select('gouvernorat_id',$GouvernoratsList,$societe->gouvernorat_id,['class' => 'form-control', 'required' => 'required']) !!}
            @endif

        @else
            {{-- Mette en hiden & display--}}
            <?php
            foreach ($GouvernoratsList as $key => $value){
                $gouvernorat_id_role = $key;
                $gouvernorat_name_role = $value;
            }
            ?>
            @if(!isset($societe))
                {!! Form::hidden('gouvernorat_id',$gouvernorat_id_role) !!}
            @else
                {!! Form::hidden('gouvernorat_id',$societe->gouvernorat_id) !!}
            @endif

            {!! Form::text('gouvernorat_nom',$gouvernorat_name_role,['class' => 'form-control', 'disabled' => 'disabled']) !!}


        @endif

        @if ($errors->has('gouvernorat_id'))
            <span class="help-block">
                        <strong>{{ $errors->first('gouvernorat_id') }}</strong>
                    </span>
        @endif
    </div>
</div>
<div class="col-md-6">
    <div class="form-group{{ $errors->has('delegation_id') ? ' has-error' : '' }}">
        {{ Form::label('delegation_id', trans('societe.delegatio'), array('class' => 'control-label')) }}

        @if(!isset($societe))
            {!! Form::select('delegation_id',$DelegationsList,null,['class' => 'form-control', 'required' => 'required']) !!}
        @else
            {!! Form::select('delegation_id',$DelegationsList,$societe->delegation_id,['class' => 'form-control', 'required' => 'required']) !!}
        @endif

        @if ($errors->has('delegation_id'))
            <span class="help-block">
                        <strong>{{ $errors->first('delegation_id') }}</strong>
                    </span>
        @endif
    </div>
</div>
<div class="col-md-6">
    <div class="form-group{{ $errors->has('secteur_id') ? ' has-error' : '' }}">
        {{ Form::label('secteur_id', trans('societe.secteur'), array('class' => 'control-label')) }}

        @if(!isset($societe))
            {!! Form::select('secteur_id',$SecteurstList,null,['class' => 'form-control', 'required' => 'required']) !!}
        @else
            {!! Form::select('secteur_id',$SecteurstList,$societe->secteur_id,['class' => 'form-control', 'required' => 'required']) !!}
        @endif

        @if ($errors->has('secteur_id'))
            <span class="help-block">
                        <strong>{{ $errors->first('secteur_id') }}</strong>
                    </span>
        @endif
    </div>
</div>
<div class="col-md-6">
    <div class="form-group{{ $errors->has('convention_id') ? ' has-error' : '' }}">
        {{ Form::label('convention_id', trans('societe.convention'), array('class' => 'control-label')) }}

        @if(!isset($societe))
            {!! Form::select('convention_id',$ConventionstList,null,['class' => 'form-control', 'required' => 'required']) !!}
        @else
            {!! Form::select('convention_id',$ConventionstList,$societe->convention_id,['class' => 'form-control', 'required' => 'required']) !!}
        @endif

        @if ($errors->has('convention_id'))
            <span class="help-block">
                        <strong>{{ $errors->first('convention_id') }}</strong>
                    </span>
        @endif
    </div>
</div>
<div class="col-md-6">

    <div class="form-group{{ $errors->has('nombre_travailleurs_cdi') ? ' has-error' : '' }}">
        {{ Form::label('nombre_travailleurs_cdi', trans('societe.nombre_travailleurs_cdi'), array('class' => 'control-label')) }}
        {{ Form::number('nombre_travailleurs_cdi', old('nombre_travailleurs_cdi') , array('class' => 'form-control')) }}

        @if ($errors->has('nombre_travailleurs_cdi'))
            <span class="help-block">
                        <strong>{{ $errors->first('nombre_travailleurs_cdi') }}</strong>
                    </span>
        @endif
    </div>

</div>

<div class="col-md-6">

    <div class="form-group{{ $errors->has('nombre_travailleurs_cdd') ? ' has-error' : '' }}">
        {{ Form::label('nombre_travailleurs_cdd', trans('societe.nombre_travailleurs_no_cdi'), array('class' => 'control-label')) }}
        {{ Form::number('nombre_travailleurs_cdd', old('nombre_travailleurs_cdd') , array('class' => 'form-control')) }}

        @if ($errors->has('nombre_travailleurs_cdd'))
            <span class="help-block">
                        <strong>{{ $errors->first('nombre_travailleurs_cdd') }}</strong>
                    </span>
        @endif
    </div>

</div>

<div class="col-md-6">

    <div class="form-group{{ $errors->has('date_cration_societe') ? ' has-error' : '' }}">

        {{ Form::label('date_cration_societe', trans('societe.date_cration_societe'), array('class' => 'control-label')) }}


        <div class="example">
            <div class="input-group">
                {{ Form::text('date_cration_societe', old('date_cration_societe') , array('class' => 'form-control mydatepicker')) }}
                <span class="input-group-addon"><i class="icon-calender"></i></span> </div>
        </div>

    </div>

</div>




<div class="col-md-12">
    <div class="form-group">
        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">تسجيل</button>
        <button type="button" class="btn btn-inverse waves-effect waves-light" onclick="history.go(-1);return false;">إلغاء</button>
    </div>
</div>

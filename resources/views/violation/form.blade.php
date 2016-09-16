

<div class="form-group{{ $errors->has('nom_violation') ? ' has-error' : '' }}">
    {{ Form::label('nom_violation', trans('violations.la_violation'), array('class' => 'control-label')) }}
    {{ Form::text('nom_violation', old('nom_violation') , array('class' => 'form-control', 'placeholder'=>trans('violations.nom_violation'), 'required' => 'required')) }}

    @if ($errors->has('nom_violation'))
        <span class="help-block">
                    <strong>{{ $errors->first('nom_violation') }}</strong>
                </span>
    @endif
</div>

<div class="form-group{{ $errors->has('type_violationt_id') ? ' has-error' : '' }}">
    {{ Form::label('type_violationt_id', trans('violations.type_violation'), array('class' => 'control-label')) }}

    @if(!isset($violation))

        @if(!isset($typeViolation))
            {!! Form::select('type_violationt_id',$TypeViolationtList,null,['class' => 'form-control', 'required' => 'required']) !!}
        @else
            {!! Form::select('type_violationt_id',$TypeViolationtList,$typeViolation->id,['class' => 'form-control', 'required' => 'required']) !!}
        @endif

    @else
        {!! Form::select('type_violationt_id',$TypeViolationtList,$violation->type_violationt_id,['class' => 'form-control', 'required' => 'required']) !!}
    @endif

    @if ($errors->has('type_violationt_id'))
        <span class="help-block">
                    <strong>{{ $errors->first('type_violationt_id') }}</strong>
                </span>
    @endif
</div>

<div class="form-group{{ $errors->has('gravite_id') ? ' has-error' : '' }}">
    {{ Form::label('gravite_id', trans('violations.gravite'), array('class' => 'control-label')) }}

    @if(!isset($violation))
        {!! Form::select('gravite_id',$GraviteList,null,['class' => 'form-control', 'required' => 'required']) !!}
    @else
        {!! Form::select('gravite_id',$GraviteList,$violation->gravite_id,['class' => 'form-control', 'required' => 'required']) !!}
    @endif

    @if ($errors->has('gravite_id'))
        <span class="help-block">
                    <strong>{{ $errors->first('gravite_id') }}</strong>
                </span>
    @endif
</div>

<div class="form-group{{ $errors->has('class_color_violation') ? ' has-error' : '' }}">
    {{ Form::label('class_color_violation', trans('violations.color'), array('class' => 'control-label')) }}
    {{ Form::text('class_color_violation', old('class_color_violation') , array('class' => 'colorpicker form-control', 'placeholder'=>trans('violations.class_color'))) }}

    @if ($errors->has('class_color_violation'))
        <span class="help-block">
                    <strong>{{ $errors->first('class_color_violation') }}</strong>
                </span>
    @endif
</div>

<div class="form-group{{ $errors->has('description_violation') ? ' has-error' : '' }}">
    {{ Form::label('description_violation', trans('violations.description_violation'), array('class' => 'control-label')) }}
    {{ Form::textarea('description_violation', old('description_violation') , array('class' => 'form-control', 'placeholder'=>trans('violations.description_type_violation'))) }}

    @if ($errors->has('description_violation'))
        <span class="help-block">
                    <strong>{{ $errors->first('description_violation') }}</strong>
                </span>
    @endif
</div>







<div class="form-group">
    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">تسجيل</button>
    <a href="javascript:void(0)" class="btn btn-inverse waves-effect waves-light" onclick="history.go(-1);return false;">إلغاء</a>
</div>

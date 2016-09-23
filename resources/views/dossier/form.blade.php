

<div class="form-group{{ $errors->has('nom_delegation') ? ' has-error' : '' }}">
    {{ Form::label('nom_delegation', trans('delegations.la_delegation'), array('class' => 'control-label')) }}
    {{ Form::text('nom_delegation', old('nom_delegation') , array('class' => 'form-control', 'placeholder'=>trans('delegations.delegation'), 'required' => 'required')) }}

    @if ($errors->has('nom_delegation'))
        <span class="help-block">
                    <strong>{{ $errors->first('nom_delegation') }}</strong>
                </span>
    @endif
</div>


<div class="form-group{{ $errors->has('nom_delegation') ? ' has-error' : '' }}">
    {{ Form::label('gouvernorat_id', trans('gouvernorats.gouvernorat'), array('class' => 'control-label')) }}

    @if(!isset($delegation))
        {!! Form::select('gouvernorat_id',$GouvernorastList,null,['class' => 'form-control', 'required' => 'required']) !!}
    @else
        {!! Form::select('gouvernorat_id',$GouvernorastList,$delegation->gouvernorat_id,['class' => 'form-control', 'required' => 'required']) !!}
    @endif

    @if ($errors->has('gouvernorat_id'))
        <span class="help-block">
                    <strong>{{ $errors->first('gouvernorat_id') }}</strong>
                </span>
    @endif
</div>



<div class="form-group">
    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">تسجيل</button>
    <button type="button" class="btn btn-inverse waves-effect waves-light" onclick="history.go(-1);return false;">إلغاء</button>
</div>

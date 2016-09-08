

<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {{ Form::label('nom_secteur', trans('secteur.secteur_nom'), array('class' => 'control-label')) }}
    {{ Form::text('nom_secteur', old('nom_secteur') , array('class' => 'form-control', 'placeholder'=>"الاسم", 'required' => 'required')) }}

    @if ($errors->has('nom_secteur'))
        <span class="help-block">
                    <strong>{{ $errors->first('nom_secteur') }}</strong>
                </span>
    @endif
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">تسجيل</button>
    <a href="javascript:void(0)" class="btn btn-inverse waves-effect waves-light" onclick="history.go(-1);return false;">إلغاء</a>
</div>



<div class="form-group{{ $errors->has('type_structure_syndicale') ? ' has-error' : '' }}">
    {{ Form::label('type_structure_syndicale', trans('syndicale.type_structure_syndicale'), array('class' => 'control-label')) }}
    {{ Form::text('type_structure_syndicale', old('type_structure_syndicale') , array('class' => 'form-control', 'placeholder'=>trans('syndicale.type_structure_syndicale_nom'), 'required' => 'required')) }}

    @if ($errors->has('type_structure_syndicale'))
        <span class="help-block">
                    <strong>{{ $errors->first('type_structure_syndicale') }}</strong>
                </span>
    @endif
</div>

<div class="form-group{{ $errors->has('description_type') ? ' has-error' : '' }}">
    {{ Form::label('description_type', trans('syndicale.description_type'), array('class' => 'control-label')) }}
    {{ Form::textarea('description_type', old('description_type') , array('class' => 'form-control', 'placeholder'=>trans('syndicale.description_type_structure_syndicale'))) }}

    @if ($errors->has('description_type'))
        <span class="help-block">
                    <strong>{{ $errors->first('description_type') }}</strong>
                </span>
    @endif
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">تسجيل</button>
    <a href="javascript:void(0)" class="btn btn-inverse waves-effect waves-light" onclick="history.go(-1);return false;">إلغاء</a>
</div>

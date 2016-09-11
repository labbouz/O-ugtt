

<div class="form-group{{ $errors->has('nom_move') ? ' has-error' : '' }}">
    {{ Form::label('nom_move', trans('move.move_nom'), array('class' => 'control-label')) }}
    {{ Form::text('nom_move', old('nom_move') , array('class' => 'form-control', 'placeholder'=>"الاسم", 'required' => 'required')) }}

    @if ($errors->has('nom_move'))
        <span class="help-block">
                    <strong>{{ $errors->first('nom_move') }}</strong>
                </span>
    @endif
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">تسجيل</button>
    <a href="javascript:void(0)" class="btn btn-inverse waves-effect waves-light" onclick="history.go(-1);return false;">إلغاء</a>
</div>

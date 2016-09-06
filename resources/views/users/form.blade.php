<div class="box-body">


    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {{ Form::label('name', 'اسم المستخدم') }}
        {{ Form::text('name', old('name') , array('class' => 'form-control', 'placeholder'=>"الاسم")) }}

        @if ($errors->has('name'))
            <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
        @endif
    </div>


    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        {{ Form::label('email', 'البريد الإلكتروني') }}
        {{ Form::email('email', old('email') , array('class' => 'form-control', 'placeholder'=>"البريد الإلكتروني")) }}

        @if ($errors->has('email'))
            <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
        @endif
    </div>

    @if(!isset($user))

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            {{ Form::label('password', 'كلمة المرور') }}
            <input id="password" type="password" class="form-control" name="password" placeholder="كلمة المرور">

            @if ($errors->has('password'))
                <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            {{ Form::label('password-confirm', 'تأكيد كلمة المرور') }}
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="تأكيد كلمة المرور">

            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
            @endif
        </div>

    @endif

    <div class="form-group{{ $errors->has('admin') ? ' has-error' : '' }}">
        {{ Form::label('is_admin', 'الصلاحيات') }}
        {{ Form::select('is_admin', array('0' => 'عضو', '1' => 'مدير'), null, ['class' => 'form-control'] ) }}

        @if ($errors->has('is_admin'))
            <span class="help-block">
                    <strong>{{ $errors->first('is_admin') }}</strong>
                </span>
        @endif
    </div>


</div>
<!-- /.box-body -->

<div class="box-footer">
    <button type="submit" class="btn btn-primary">تسجيل</button>
</div>



    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {{ Form::label('name', 'اسم المستخدم', array('class' => 'control-label')) }}
        {{ Form::text('name', old('name') , array('class' => 'form-control', 'placeholder'=>"الاسم", 'required' => 'required')) }}

        @if ($errors->has('name'))
            <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
        @endif
    </div>


    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        {{ Form::label('email', 'البريد الإلكتروني', array('class' => 'control-label')) }}
        <div class="input-group">
        {{ Form::email('email', old('email') , array('class' => 'form-control', 'placeholder'=>"البريد الإلكتروني", 'required' => 'required', 'data-error'=>'عنوان البريد الإلكتروني غير صالح')) }}
            <div class="input-group-addon"><i class="ti-email"></i></div>
        </div>
        <div class="help-block with-errors"></div>
        @if ($errors->has('email'))
            <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
        @endif
    </div>


    <div class="form-group{{ $errors->has('admin') ? ' has-error' : '' }}">
        {{ Form::label('role_id', 'الصلاحيات') }}

        @if(!isset($user))
            {!! Form::select('role_id',$RolestList,null,['class' => 'form-control', 'required' => 'required']) !!}
        @else
            {!! Form::select('role_id',$RolestList,$user->role_id,['class' => 'form-control', 'required' => 'required']) !!}
        @endif

        @if ($errors->has('role_id'))
            <span class="help-block">
                    <strong>{{ $errors->first('role_id') }}</strong>
                </span>
        @endif
    </div>

    @if(!isset($user))

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            {{ Form::label('password', 'كلمة المرور', array('class' => 'control-label')) }}

            <div class="row">

                <div class="form-group col-sm-6">
                    <input name="password" type="password" data-toggle="validator" data-minlength="6" class="form-control" id="password" data-match-error="Minimum of 6 characters" placeholder="كلمة المرور" required>
                    <div class="help-block with-errors"></div> </div>
                <div class="form-group col-sm-6">
                    <input name="password_confirmation" type="password" class="form-control" id="password-confirm" data-match="#password" data-match-error="Whoops, these don't match" placeholder="تأكيد كلمة المرور" required>
                    <div class="help-block with-errors"></div> </div>
                </div>

            @if ($errors->has('password'))
                <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
            @endif

        </div>

    @endif


    <div class="form-group">
        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">تسجيل</button>
        <a href="javascript:void(0)" class="btn btn-inverse waves-effect waves-light" onclick="history.go(-1);return false;">إلغاء</a>
    </div>

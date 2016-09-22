

@if(!isset($user))

    @foreach ($SeteuresRolesList as $SeteureRole)

        <div class="col-lg-6 col-md-6">
            <div class="checkbox checkbox-primary">
                <input id="checkbox{{ $SeteureRole->id }}" name="permissions[]" type="checkbox" value="{{ $SeteureRole->slug }}">
                <label for="checkbox{{ $SeteureRole->id }}"> {{ $SeteureRole->name }} </label>
            </div>
        </div>

    @endforeach

@else

    @foreach ($SeteuresRolesList as $SeteureRole)

        <div class="col-lg-6 col-md-6">
            <div class="checkbox checkbox-primary">
                <input id="checkbox{{ $SeteureRole->id }}" name="permissions[]" type="checkbox" value="{{ $SeteureRole->slug }}"@if($user->is($SeteureRole->slug)) checked @endif>
                <label for="checkbox{{ $SeteureRole->id }}"> {{ $SeteureRole->name }} </label>
            </div>
        </div>

    @endforeach

@endif




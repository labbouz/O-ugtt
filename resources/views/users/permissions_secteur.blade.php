@if(!isset($user))

    @foreach ($SeteuresPermissionList as $SeteurePermission)

        <div class="col-md-4">
            <div class="checkbox checkbox-primary">
                <input id="checkbox{{ $SeteurePermission->id }}" name="permissions[]" type="checkbox" value="{{ $SeteurePermission->name }}">
                <label for="checkbox{{ $SeteurePermission->id }}"> {{ $SeteurePermission->description }} </label>
            </div>
        </div>

    @endforeach

@else

    @foreach ($SeteuresPermissionList as $SeteurePermission)

        <div class="col-md-4">
            <div class="checkbox checkbox-primary">
                <input id="checkbox{{ $SeteurePermission->id }}" name="permissions[]" type="checkbox" value="{{ $SeteurePermission->name }}"@permission($SeteurePermission->name) checked @endpermission>
                <label for="checkbox{{ $SeteurePermission->id }}"> {{ $SeteurePermission->description }} </label>
            </div>
        </div>

    @endforeach

@endif




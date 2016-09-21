@if(!isset($user))

    @foreach ($GouvernorastPermissionList as $GouvernorastPermission)

        <div class="col-md-4">
            <div class="checkbox checkbox-info">
                <input id="checkbox{{ $GouvernorastPermission->id }}" name="permissions[]" type="checkbox" value="{{ $GouvernorastPermission->name }}">dd{{ $GouvernorastPermission->name }}dd
                <label for="checkbox{{ $GouvernorastPermission->id }}"> {{ $GouvernorastPermission->description }} </label>
            </div>
        </div>

    @endforeach

@else

    @foreach ($GouvernorastPermissionList as $GouvernorastPermission)

        <div class="col-md-4">
            <div class="checkbox checkbox-info">
                <input id="checkbox{{ $GouvernorastPermission->id }}" name="permissions[]" type="checkbox" value="{{ $GouvernorastPermission->name }}"@permission($GouvernorastPermission->name) checked @endpermission>
                <label for="checkbox{{ $GouvernorastPermission->id }}"> {{ $GouvernorastPermission->description }} </label>
            </div>
        </div>

    @endforeach

@endif




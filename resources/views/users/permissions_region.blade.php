@if(!isset($user))

    @foreach ($GouvernorastRolesList as $GouvernorastRole)

        <div class="col-lg-4 col-md-4">
            <div class="checkbox checkbox-info">
                <input id="checkbox{{ $GouvernorastRole->id }}" name="permissions[]" type="checkbox" value="{{ $GouvernorastRole->slug }}">
                <label for="checkbox{{ $GouvernorastRole->id }}"> {{ $GouvernorastRole->name }} </label>
            </div>
        </div>

    @endforeach

@else

    @foreach ($GouvernorastRolesList as $GouvernorastRole)

        <div class="col-lg-4 col-md-4">
            <div class="checkbox checkbox-info">
                <input id="checkbox{{ $GouvernorastRole->id }}" name="permissions[]" type="checkbox" value="{{ $GouvernorastRole->slug }}"@if($user->is($GouvernorastRole->slug)) checked @endif>
                <label for="checkbox{{ $GouvernorastRole->id }}"> {{ $GouvernorastRole->name }} </label>
            </div>
        </div>

    @endforeach

@endif




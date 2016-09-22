@extends('layouts.app')


{{-- Block page-title --}}

@section('page-title')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('main.contacts')  </h4>
    </div>
@endsection


{{-- Block breadcrumb --}}

@section('breadcrumb')
    {!! Breadcrumbs::render() !!}
@endsection


{{-- Block header--}}

@section('header')


@endsection


{{-- Block content --}}

@section('content')

    <div class="row">
        @foreach($users as $user)
        <!-- .col -->
        <div class="col-md-4 col-sm-4">
            <div class="white-box">
                <div class="row">
                    <?php
                    $profile = \App\User::find($user->id)->profile;
                    $avatar = $profile->avatar; ?>
                    <div class="col-md-4 col-sm-4 text-center"><a href="javascript:void(0)">
                            @if(strlen($avatar)>0)
                                <img src="{{ Request::root() }}/{{ $avatar }}" alt="user-img" class="img-circle img-responsive">
                            @else
                                <img src="{{ Request::root() }}/plugins/images/anonyme.jpg" alt="user" class="img-circle img-responsive">
                            @endif
                        </a></div>
                    <div class="col-md-8 col-sm-8">
                        <h3 class="box-title m-b-0">{{ $user->name }}</h3><br/>
                        <small class="label label-{{ $user->class_color }}">{{ $user->role_name }}</small>
                        <address>
                            <br/><a href="mailto:{{ $user->email }}"><span class="label label-default">{{ $user->email }}</span></a><br/><br/>

                            <small>@lang('users.prenom') :</small>
                            @if ( strlen($profile->prnom) )
                                <span class="label label-success">{{ $profile->prnom }}</span>
                            @else
                                <span class="label label-danger">@lang('users.comple_info_incopmlet')</span>
                            @endif
                            <br/><br/>


                            <small>@lang('users.nom') :</small>
                            @if ( strlen($profile->nom) )
                                <span class="label label-success">{{ $profile->nom }}</span>
                            @else
                                <span class="label label-danger">@lang('users.comple_info_incopmlet')</span>
                            @endif
                            <br/><br/>

                                <small>@lang('users.societe') :</small>
                            @if ( strlen($profile->societe) )
                                <span class="label label-success">{{ $profile->societe }}</span>
                            @else
                                <span class="label label-danger">@lang('users.comple_info_incopmlet')</span>
                            @endif
                            <br/><br/>

                            <small>@lang('users.telephone') :</small>
                            @if ( strlen($profile->phone_number) )
                                <span class="label label-success">{{ $profile->phone_number }}</span>
                            @else
                                <span class="label label-danger">@lang('users.comple_info_incopmlet')</span>
                            @endif

                        </address>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col -->
        @endforeach
    </div>
    <!-- /.row -->

@endsection


{{-- Block footer --}}

@section('footer')
    <script>
        $(document).ready(function(){

        });
    </script>
@endsection

@extends('layouts.app')



@section('page-title')
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('main.mypofile') </h4>
    </div>
@endsection

@section('breadcrumb')
    {!! Breadcrumbs::render() !!}
@endsection


@section('header')

    <!-- Cropper CSS -->
     {!! Html::style('plugins/bower_components/cropper/cropper.min.css') !!}

@endsection



@section('content')

    <div id="crop-avatar">
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <div class="white-box">
                <div class="user-bg"> <img width="100%" alt="user" src="{{ Request::root() }}/plugins/images/large/img1.jpg">
                    <div class="overlay-box">
                        <div class="user-content">
                            <a href="javascript:void(0)" class="avatar-view">
                                @if(strlen($profile->avatar)>0)
                                    <img src="{{ Request::root() }}/{{ $profile->avatar }}" alt="user-img" class="thumb-lg img-circle">
                                @else
                                    <img src="{{ Request::root() }}/plugins/images/anonyme.jpg" alt="user-img" class="thumb-lg img-circle">
                                @endif
                            </a>
                            <h4 class="text-white">{{ $user->name }}</h4>
                            <h5 class="text-white">{{ $user->email }}</h5>
                        </div>
                    </div>
                </div>


                <div class="user-btm-box">
                    <h3 class="box-title"><strong>@lang('users.role')</strong> </h3>
                    @foreach ($roles_profile as $role_profile)
                        <p><span class="label label-{{ $role_profile->class_color }} ">{{ $role_profile->name }}</span></a>
                    @endforeach



                    <hr>
                    <a href="{{ route('changepassword') }}" class="btn btn-block btn-info btn-lg">@lang('users.change_my_password')</a>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading"> @lang('users.general_account_aettings')</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('myprofile.edit') }}">
                            {{ csrf_field() }}

                            <div class="form-body">
                                <h3 class="box-title">@lang('users.Information_system')</h3>
                                <hr class="m-t-0 m-b-40">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-5">@lang('users.prenom') :</label>
                                            <div class="col-md-7">
                                                <p class="form-control-static">
                                                    @if ( strlen($profile->prnom) )
                                                        <span class="label label-success">{{ $profile->prnom }}</span>
                                                    @else
                                                        <span class="label label-danger">@lang('users.comple_info')</span>
                                                    @endif
                                                 </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-5">@lang('users.nom') :</label>
                                            <div class="col-md-7">
                                                <p class="form-control-static">
                                                    @if ( strlen($profile->nom) )
                                                        <span class="label label-success">{{ $profile->nom }}</span>
                                                    @else
                                                        <span class="label label-danger">@lang('users.comple_info')</span>
                                                    @endif
                                                 </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-5">@lang('users.societe') :</label>
                                            <div class="col-md-7">
                                                <p class="form-control-static">
                                                    @if ( strlen($profile->societe) )
                                                        <span class="label label-success">{{ $profile->societe }}</span>
                                                    @else
                                                        <span class="label label-danger">@lang('users.comple_info')</span>
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-5">@lang('users.structure_syndicale') :</label>
                                            <div class="col-md-7">
                                                <p class="form-control-static">
                                                    @if ( $profile->structure_syndicale_id > 0 )
                                                        <span class="label label-success">{{ $profile->structure_syndicale->type_structure_syndicale }} </span>
                                                    @else
                                                        <span class="label label-danger">@lang('users.comple_info')</span>
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-5">@lang('users.telephone') :</label>
                                            <div class="col-md-7">
                                                <p class="form-control-static">
                                                    @if ( strlen($profile->phone_number) )
                                                        <span class="label label-success">{{ $profile->phone_number }}</span>
                                                    @else
                                                        <span class="label label-danger">@lang('users.comple_info')</span>
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-5">@lang('users.email2') :</label>
                                            <div class="col-md-7">
                                                <p class="form-control-static">
                                                    @if ( strlen($profile->email2) )
                                                        <span class="label label-success">{{ $profile->email2 }}</span>
                                                    @else
                                                        <span class="label label-danger">@lang('users.comple_info')</span>
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                </div>
                                <!--/row-->
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-offset-5col-md-7">
                                                <button type="submit"  class="btn btn-info"> <i class="fa fa-pencil"></i> @lang('users.change_my_profile')</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6"> </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- Cropping modal -->
    <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form class="avatar-form" action="{{ route('myprofile.crop') }}" enctype="multipart/form-data" method="post">
                    {{ csrf_field() }}
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" id="avatar-modal-label">@lang('users.change_avatar')</h4>
                    </div>
                    <div class="modal-body">
                        <div class="avatar-body">

                            <!-- Upload image and data -->
                            <div class="avatar-upload">
                                <input type="hidden" class="avatar-src" name="avatar_src">
                                <input type="hidden" class="avatar-data" name="avatar_data">
                                <label for="avatarInput">Local upload</label>
                                <input type="file" class="avatar-input" id="avatarInput" name="avatar_file">
                            </div>

                            <!-- Crop and preview -->
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="avatar-wrapper"></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="avatar-preview preview-lg"></div>
                                    <div class="avatar-preview preview-md"></div>
                                    <div class="avatar-preview preview-sm"></div>
                                </div>
                            </div>

                            <div class="row avatar-btns">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary btn-block avatar-save">@lang('users.done_change_avatar')</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div><!-- /.modal -->
    </div>

@endsection


@section('footer')

    <!-- Image cropper JavaScript -->

    {!! Html::script('plugins/bower_components/cropper/cropper.min.js') !!}
    {{--
    {!! Html::script('plugins/bower_components/cropper/cropper-init.js') !!}
    --}}
    {!! Html::script('js/main_cropper.js') !!}


    <!--Style Switcher -->
    {!! Html::script('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') !!}

@endsection


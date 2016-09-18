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

    <!--alerts CSS -->
    {!! Html::style('plugins/bower_components/sweetalert/sweetalert.css') !!}

@endsection



@section('content')
    <div class="row">
        <div class="col-md-4 col-xs-12">
            <div class="white-box">
                <div class="user-bg"> <img width="100%" alt="user" src="../plugins/images/large/img1.jpg">
                    <div class="overlay-box">
                        <div class="user-content"> <a href="javascript:void(0)"><img src="../plugins/images/users/genu.jpg" class="thumb-lg img-circle" alt="img"></a>
                            <h4 class="text-white">User Name</h4>
                            <h5 class="text-white">info@myadmin.com</h5>
                        </div>
                    </div>
                </div>
                <div class="user-btm-box">
                    <h3 class="box-title"><strong>@lang('users.role')</strong> </h3>
                     <h2><span class="label label-success">@lang('users.observateur_regional')</span></h2>
                    <h3 class="box-title"><strong>@lang('users.region')</strong></h3>
                    <h2><span class="label label-danger">@lang('gouvernorats.Ariana')</span></h2>


                    <hr>
                    <a class="btn btn-block btn-info btn-lg">@lang('users.change_my_password')</a>
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
                                                <p class="form-control-static"> John </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-5">@lang('users.nom') :</label>
                                            <div class="col-md-7">
                                                <p class="form-control-static"> Doe </p>
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
                                                <p class="form-control-static"> John </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-5">@lang('users.structure_syndicale') :</label>
                                            <div class="col-md-7">
                                                <p class="form-control-static"> Doe </p>
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
                                                <p class="form-control-static"> Male </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/span-->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label col-md-5">@lang('users.email2') :</label>
                                            <div class="col-md-7">
                                                <p class="form-control-static"> 11/06/1987 </p>
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
                                                <button type="submit"  class="btn btn-info btn-lg"> <i class="fa fa-pencil"></i> @lang('users.change_my_profile')</button>
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
@endsection


@section('footer')

    {!! Html::script('js/jasny-bootstrap.js') !!}
    <!--Style Switcher -->
    {!! Html::script('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') !!}

    <!-- Sweet-Alert  -->
    {!! Html::script('plugins/bower_components/sweetalert/sweetalert.min.js') !!}
    {!! Html::script('plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js') !!}

@endsection


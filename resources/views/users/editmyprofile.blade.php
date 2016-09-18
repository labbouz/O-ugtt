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
                <div class="panel-heading"> @lang('users.change_my_profile')</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">@lang('users.prenom') :</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">@lang('users.nom') :</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">@lang('users.societe') :</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">@lang('users.structure_syndicale') :</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">@lang('users.telephone') :</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">@lang('users.email2') :</label>
                                <input type="text" class="form-control" id="recipient-name">
                            </div>


                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">@lang('users.close')</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>

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


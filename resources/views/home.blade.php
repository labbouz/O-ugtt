@extends('layouts.app')


@section('page-title')
     <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Starter Page</h4>
    </div>
@endsection


@section('breadcrumb')
    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
        <a href="https://themeforest.net/item/elite-admin-responsive-dashboard-web-app-kit-/16750820" target="_blank" class="btn btn-danger pull-right m-l-20 btn-rounded btn-outline hidden-xs hidden-sm waves-effect waves-light">Buy Now</a>
        <ol class="breadcrumb">
            <li><a href="#">Dashboard</a></li>
            <li class="active">Starter Page</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">Blank Starter page</h3>
        </div>
    </div>
@endsection

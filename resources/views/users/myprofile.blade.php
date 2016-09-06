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

@endsection



@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title"> @lang('main.page') @lang('main.mypofile') </h3>
        </div>
        <pre>
        <?php
        print_r($user);
        ?>
        </pre>

    </div>
</div>
<!-- .row -->
@endsection


@section('footer')

@endsection


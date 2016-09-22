@extends('layouts.app')

{{-- Block page-title --}}

@section('page-title')
     <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('main.dashboard')  </h4>
    </div>
@endsection



{{-- Block breadcrumb --}}

@section('breadcrumb')
    {!! Breadcrumbs::render() !!}
@endsection


{{-- Block header--}}

@section('header')
    <!-- toast CSS -->
    {!! Html::style('plugins/bower_components/toast-master/css/jquery.toast.css') !!}

    <!-- morris CSS -->
    {!! Html::style('plugins/bower_components/morrisjs/morris.css') !!}
@endsection


{{-- Block content --}}

@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="row row-in">
                    <div class="col-lg-3 col-sm-6 row-in-br">
                        <div class="col-in row">
                            <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic" ></i>
                                <h5 class="text-muted vb">@lang('cpanel.1')</h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h3 class="counter text-right m-t-15 text-danger">23</h3>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 row-in-br  b-r-none">
                        <div class="col-in row">
                            <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe01b;"></i>
                                <h5 class="text-muted vb">@lang('cpanel.2')</h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h3 class="counter text-right m-t-15 text-megna">169</h3>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 row-in-br">
                        <div class="col-in row">
                            <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe00b;"></i>
                                <h5 class="text-muted vb">@lang('cpanel.3')</h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h3 class="counter text-right m-t-15 text-primary">157</h3>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6  b-0">
                        <div class="col-in row">
                            <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon="&#xe016;"></i>
                                <h5 class="text-muted vb">@lang('cpanel.4')</h5>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <h3 class="counter text-right m-t-15 text-success">431</h3>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-7 col-lg-9 col-sm-12 col-xs-12">
            <div class="white-box">
                <h3 class="box-title">@lang('cpanel.8')</h3>
                <ul class="list-inline text-right">
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>@lang('cpanel.9')</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #fb9678;"></i>@lang('cpanel.10')</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #9675ce;"></i>@lang('cpanel.11')</h5>
                    </li>
                </ul>
                <div id="morris-area-chart" style="height: 340px;"></div>
            </div>
        </div>

        <div class="col-md-5 col-lg-3 col-sm-6 col-xs-12">
            <div class="white-box bg-purple m-b-15">
                <h3 class="text-white box-title">انتهاكات حسب الخطورة</h3>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6  m-t-30">
                        <h1 class="text-white">70%</h1>
                        <b class="text-white">خطيرة جدا</b> </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div id="sales1" class="text-center"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5 col-lg-3 col-sm-6 col-xs-12">
            <div class="bg-theme m-b-15">
                <div id="myCarouse2" class="carousel vcarousel slide p-20">
                    <!-- Carousel items -->
                    <div class="carousel-inner ">
                        <div class="active item">
                            <h3 class="text-white">@lang('cpanel.7')</h3>
                            <div class="twi-user"><img src="../plugins/images/users/logo.jpg" alt="user" class="img-circle img-responsive pull-left">
                            </div>
                        </div>
                        <div class="item">
                            <h3 class="text-white">منضومة المرصد الوطني للحقوق والحريات النقابية <span class="font-bold"> "عين حشاد"</span>  </h3>
                            <div class="twi-user"><img src="../plugins/images/users/logo.jpg" alt="user" class="img-circle img-responsive pull-left">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title"> @lang('main.page') @lang('main.dashboard') </h3>

           </div>
        </div>
    </div>
    <!-- .row -->
@endsection


{{-- Block footer --}}

@section('footer')
    <!--Counter js -->
    {!! Html::script('plugins/bower_components/waypoints/lib/jquery.waypoints.js') !!}
    {!! Html::script('plugins/bower_components/counterup/jquery.counterup.min.js') !!}
    <!--Morris JavaScript -->
    {!! Html::script('plugins/bower_components/raphael/raphael-min.js') !!}
    {!! Html::script('plugins/bower_components/morrisjs/morris.js') !!}
    <!-- Custom Theme JavaScript -->
    {!! Html::script('js/dashboard1.js') !!}
    <!-- Sparkline chart JavaScript -->
    {!! Html::script('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') !!}
    {!! Html::script('plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js') !!}
    {!! Html::script('plugins/bower_components/toast-master/js/jquery.toast.js') !!}
    <script type="text/javascript">

        $(document).ready(function() {
            $.toast({
                heading: '@lang('cpanel.6')',
                text: '@lang('cpanel.5')',
                position: 'top-right',
                loaderBg:'#ff6849',
                icon: 'info',
                hideAfter: 3500,

                stack: 6
            })
        });
    </script>

@endsection

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
        <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="white-box">
                <h3 class="box-title"> ملاحظات جديدة من الراصدين التابعين لنفس الجهة</h3>
                <div class="comment-center">
                    <div class="comment-body">
                        <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"></div>
                        <div class="mail-contnet">
                            <h5>Pavan kumar</h5>
                            <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</span> <span class="label label-rounded label-info">PENDING</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2016</span></div>
                    </div>
                    <div class="comment-body">
                        <div class="user-img"> <img src="../plugins/images/users/sonu.jpg" alt="user" class="img-circle"> </div>
                        <div class="mail-contnet">
                            <h5>Sonu Nigam</h5>
                            <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</span><span class="label label-rounded label-success">APPROVED</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2016</span></div>
                    </div>
                    <div class="comment-body">
                        <div class="user-img"> <img src="../plugins/images/users/arijit.jpg" alt="user" class="img-circle"> </div>
                        <div class="mail-contnet">
                            <h5>Arijit Sinh</h5>
                            <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat. </span><span class="label label-rounded label-danger">REJECTED</span><a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2016</span></div>
                    </div>
                    <div class="comment-body b-none">
                        <div class="user-img"> <img src="../plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"></div>
                        <div class="mail-contnet">
                            <h5>Pavan kumar</h5>
                            <span class="mail-desc">Donec ac condimentum massa. Etiam pellentesque pretium lacus. Phasellus ultricies dictum suscipit. Aenean commodo dui pellentesque molestie feugiat.</span> <span class="label label-rounded label-info">PENDING</span> <a href="javacript:void(0)" class="action"><i class="ti-close text-danger"></i></a> <a href="javacript:void(0)" class="action"><i class="ti-check text-success"></i></a><span class="time pull-right">April 14, 2016</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
            <div class="white-box">
                <h3 class="box-title">عدد الإنتهاكات حسب القطاع
                    <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                        <select class="form-control pull-right row b-none">
                            <option>شهر سبتمبر 2016</option>
                            <option> شهر أوت 2016 </option>
                            <option> شهر جويلية 2016 </option>
                            <option> شهر جوان 2016 </option>
                        </select>
                    </div>
                </h3>
                <div class="row sales-report">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <h2>شهر سبتمبر 2016</h2>
                        <p> تقرير الإنتهاكات</p>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6 ">
                        <h1 class="text-right text-success m-t-20">183 إنتهاك </h1>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table ">
                        <thead>
                        <tr>

                            <th>القطاع</th>
                            <th>اعتداءات على المسؤول النقابي </th>
                            <th>اعتداءات على الحق النقابي</th>
                            <th>عدد الإنتهاكات</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            <td class="txt-oflo">قطاع المعاش و السياحة </td>
                            <td>3 </td>
                            <td>6</td>
                            <td><span class="text-success">9</span></td>
                        </tr>
                        <tr>

                            <td class="txt-oflo">قطاع النفط و المواد الكيميائية</td>
                            <td>8</td>
                            <td>13</td>
                            <td><span class="text-info">21</span></td>
                        </tr>
                        <tr>

                            <td class="txt-oflo">قطاع المهن المختلفة</td>
                            <td>52</td>
                            <td>13</td>
                            <td><span class="text-danger">65</span></td>
                        </tr>
                        <tr>

                            <td class="txt-oflo">قطاع المعادن</td>
                            <td>2</td>
                            <td>7</td>
                            <td><span class="text-success">9</span></td>
                        </tr>
                        <tr>

                            <td class="txt-oflo">قطاع النسيج </td>
                            <td>0</td>
                            <td>3</td>
                            <td><span class="text-success">3</span></td>
                        </tr>
                        <tr>

                            <td class="txt-oflo">قطاع الصحة </td>
                            <td>11</td>
                            <td>33</td>
                            <td><span class="text-danger">44</span></td>
                        </tr>
                        <tr>

                            <td class="txt-oflo">قطاع النقل </td>
                            <td>2</td>
                            <td>1</td>
                            <td><span class="text-success">3</span></td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="#">شاهد جميع الإحصائيات</a> </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
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
                position: 'top-left',
                loaderBg:'#ff6849',
                icon: 'info',
                hideAfter: 3500,

                stack: 6
            })
        });
    </script>

@endsection

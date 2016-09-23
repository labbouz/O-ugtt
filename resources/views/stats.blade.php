@extends('layouts.app')

{{-- Block page-title --}}

@section('page-title')
     <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title"> @lang('main.stats')  </h4>
    </div>
@endsection



{{-- Block breadcrumb --}}

@section('breadcrumb')
    {!! Breadcrumbs::render() !!}
@endsection


{{-- Block header--}}

@section('header')
    <!-- morris CSS -->
    {!! Html::style('plugins/bower_components/morrisjs/morris.css') !!}

@endsection


{{-- Block content --}}

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="white-box">
                <h3 class="box-title">عدد الانتهاكات حسب الأشهر</h3>
                <ul class="list-inline text-center m-t-40">
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #444b4c;"></i>العدد الجملي للإنتهاكات</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #fdc006;"></i>إنتهاكات على المسؤل النقابي</h5>
                    </li>
                    <li>
                        <h5><i class="fa fa-circle m-r-5" style="color: #808f8f;"></i>إنتهاكات على النشاط النقابي</h5>
                    </li>
                </ul>
                <div id="morris-area-chart" style="height: 340px;"></div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-lg-12 col-xs-12">
            <div class="white-box">
                <h3>  خطورة الإنتهاكات حسب كل جهة</h3>

                <div class="row">
                    <div class="col-sm-2 col-xs-6"><span class="pie" data-peity='{ "fill": ["#13dafe", "#f2f2f2"]}'>1/5</span>
                        <div>أريانة : 1/5</div>
                    </div>
                    <div class="col-sm-2 col-xs-6"><span class="pie" data-peity='{ "fill": ["#6164c1", "#f2f2f2"]}'>226/360</span>
                        <div>باجة : 226/360</div>
                    </div>
                    <div class="col-sm-2 col-xs-6"><span class="pie" data-peity='{ "fill": ["#f96262", "#f2f2f2"]}'>52/561</span>
                        <div>بن عروس : 52/561</div>
                    </div>
                    <div class="col-sm-2 col-xs-6"><span class="pie" data-peity='{ "fill": ["#99d683", "#f2f2f2"]}'>1,4</span>
                        <div>بنزرت : 1,4</div>
                    </div>
                    <div class="col-sm-2 col-xs-6"><span class="pie" data-peity='{ "fill": ["#ffca4a", "#f2f2f2"]}'>226,134</span>
                        <div>قابس : 226,134</div>
                    </div>
                    <div class="col-sm-2 col-xs-6"><span class="pie" data-peity='{ "fill": ["#4c5667", "#f2f2f2"]}'>50,170</span>
                        <div>قفصة : 170, 50</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <!-- row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3> خطورة الإنتهاكات حسب كل قطاع</h3>
                <div class="row">
                    <div class="col-sm-2 col-xs-6"><span class="donut" data-peity='{ "fill": ["#13dafe", "#f2f2f2"]}'>1/5</span>
                        <div>المعاش و السياحة : 1/5</div>
                    </div>
                    <div class="col-sm-2 col-xs-6"><span class="donut" data-peity='{ "fill": ["#6164c1", "#f2f2f2"]}'>226/360</span>
                        <div>المهن المختلفة : 226/360</div>
                    </div>
                    <div class="col-sm-2 col-xs-6"><span class="donut" data-peity='{ "fill": ["#f96262", "#f2f2f2"], "innerRadius": 16, "radius": 32 }'>52/1561</span>
                        <div>الصحة : 52/1561</div>
                    </div>
                    <div class="col-sm-2 col-xs-6"><span class="donut" data-peity='{ "fill": ["#99d683", "#f2f2f2"], "innerRadius": 20, "radius": 32 }'>1,4</span>
                        <div>النقل : 1,4</div>
                    </div>
                    <div class="col-sm-2 col-xs-6"><span class="donut" data-peity='{ "fill": ["#ffca4a", "#f2f2f2"], "innerRadius": 23, "radius": 32 }'>226,134</span>
                        <div>التعليم الخاص : 226,134</div>
                    </div>
                    <div class="col-sm-2 col-xs-6"><span class="donut" data-peity='{ "fill": ["#4c5667", "#f2f2f2"], "innerRadius": 8, "radius": 32 }'>1041,52</span>
                        <div>الإعلام و التثقيف : 52, 1041</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

    <!-- /.row -->
    <!-- .row -->
    <div class="row">
        <div class="col-lg-6 col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">عدد الأنتهاكات</h3>
                        <ul class="list-inline two-part">
                            <li><i class="icon-people text-info"></i></li>
                            <li class="text-right"><span class="counter">228</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">عدد الملفات الجملي</h3>
                        <ul class="list-inline two-part">
                            <li><i class="icon-folder text-purple"></i></li>
                            <li class="text-right"><span class="counter">169</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">عدد الأنتهاكات على المسؤول النقابي</h3>
                        <ul class="list-inline two-part">
                            <li><i class="icon-folder-alt text-danger"></i></li>
                            <li class="text-right"><span class="">311</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title">عدد الأنتهاكات على النشاط النقابي</h3>
                        <ul class="list-inline two-part">
                            <li><i class="ti-wallet text-success"></i></li>
                            <li class="text-right"><span class="">117</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div  class="white-box">
                        <h3 class="box-title">انتهاكات حسب الجنس</h3>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-9  m-t-30">
                                <h1 class="text-warning">70%</h1>
                                <b>(نساء)</b> </div>
                            <div class="col-md-6 col-sm-6 col-xs-6">
                                <div id="sales1" class="text-center"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="white-box">
                                <h3 class="box-title">نسب حسب نوع الإنتهاك</h3>
                                <div id="sparkline11"  class="text-center"></div>
                                <p><strong> 62% </strong>من  الإنتهاكات على المسؤول النقابي</p>
                            </div>
                        </div>
                    </div>
                    <!-- /Portlet -->
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
                            <td><span class="text-info">21</td>
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
    {!! Html::script('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js') !!}
    {!! Html::script('plugins/bower_components/jquery-sparkline/jquery.charts-sparkline.js') !!}

    <!-- jQuery peity -->
    {!! Html::script('plugins/bower_components/peity/jquery.peity.min.js') !!}
    {!! Html::script('plugins/bower_components/peity/jquery.peity.init.js') !!}

    <!-- Custom Theme JavaScript -->
    {!! Html::script('js/dashboard3.js') !!}


    <script type="text/javascript">

        $(document).ready(function() {

        });
    </script>

@endsection

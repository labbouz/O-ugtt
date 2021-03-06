<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Observatoire UGTT</title>

    <!-- Bootstrap Core CSS -->
    {!! Html::style('plugins/bower_components/bootstrap-rtl-master/dist/css/bootstrap-rtl.min.css') !!}
    @yield('header')

    <!-- This is Sidebar menu CSS -->
    {!! Html::style('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css') !!}
    <!-- This is a Animation CSS -->
    {!! Html::style('css/animate.css') !!}
    <!-- Custom CSS -->
    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/style-ar.css') !!}
    <!-- color CSS you can use different color css from css/colors folder -->
    {!! Html::style('css/colors/default.css') !!}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="fix-sidebar">

    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <!-- End Preloader -->

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <!-- Toggle icon for mobile view -->
                <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="{{ url('/home') }}">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b>
                            <!--This is dark logo icon--><img src="{{ Request::root() }}/plugins/images/eliteadmin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="{{ Request::root() }}/plugins/images/eliteadmin-logo-dark.png" alt="home" class="light-logo" />
                        </b>
                        <!-- Logo text image you can use text also -->
                        <span class="hidden-xs">
                        <!--This is dark logo text--><img src="{{ Request::root() }}/plugins/images/eliteadmin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="{{ Request::root() }}/plugins/images/eliteadmin-text-dark.png" alt="home" class="light-logo" />
                     </span>
                    </a>
                </div>
                <!-- /Logo -->

                <!-- Search input and Toggle icon -->
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-right-circle ti-menu"></i></a></li>
                    {{--<li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="@lang('main.search') ..." class="form-control">
                            <a href=""><i class="fa fa-search"></i></a>
                        </form>
                    </li>--}}
                </ul>

                <!-- This is the message dropdown -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                            <i class="icon-envelope"></i>
                            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                        </a>
                        <ul class="dropdown-menu mailbox animated bounceInDown">
                            <li>
                                <div class="drop-title">You have 4 new messages</div>
                            </li>
                            <li>
                                <div class="message-center">
                                    <a href="#">
                                        <div class="user-img"> <img src="{{ Request::root() }}/plugins/images/users/pawandeep.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                        <div class="mail-contnet">
                                            <h5>Pavan kumar</h5>
                                            <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span>
                                        </div>
                                    </a>
                                </div>
                            </li>
                            <li> <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="fa fa-angle-right"></i> </a></li>
                        </ul>
                        <!-- /.dropdown-messages -->
                    </li>
                    <!-- .Task dropdown -->
                    <li class="dropdown">
                        <a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                            <i class="icon-note"></i>
                            <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                        </a>
                        <ul class="dropdown-menu dropdown-tasks animated slideInUp">
                            <li>
                                <a href="javascript:void(0)">
                                    <div>
                                        <p> <strong>Task 1</strong> <span class="pull-right text-muted">40% Complete</span> </p>
                                        <div class="progress progress-striped active">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li> <a class="text-center" href="#"> <strong>See All Tasks</strong> <i class="fa fa-angle-right"></i> </a> </li>
                        </ul>
                    </li>
                    <!-- /.Task dropdown -->
                    </li>
                    <!-- /.dropdown -->
                    <li class="right-side-toggle"> <a class="waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->


        <!-- Left navbar-header Navigation -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">

                <!-- .User Profile -->
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div>
                            <?php $avatar = Auth::user()->profile->avatar; ?>
                            @if(strlen($avatar)>0)
                                    <img src="{{ Request::root() }}/{{ $avatar }}" alt="user-img" class="img-circle">
                            @else
                                    <img src="{{ Request::root() }}/plugins/images/anonyme.jpg" alt="user-img" class="img-circle">
                            @endif
                        </div>
                        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu animated flipInY">
                            <li><a href="{{ url('/myprofile') }}"><i class="ti-user"></i> @lang('main.mypofile')</a></li>
                            <li><a href="#"><i class="ti-email"></i> @lang('main.inbox')</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> @lang('main.configuration_compte')</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-power-off"></i> @lang('main.logout')</a></li>
                        </ul>
                    </div>
                </div>
                <!-- .User Profile -->
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- / Search input-group this is only view in mobile-->
                        <div class="input-oup custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
                        </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    @include('layouts.nav')
                </ul>
            </div>
        </div>
        <!-- Left navbar-header Navigation end -->

        <!-- Start Page wrapper -->
        <div id="page-wrapper">

            <!-- Start Container -->
            <div class="container-fluid">
                <div class="row bg-title">
                    <!-- .page title -->
                    @yield('page-title')
                    <!-- /.page title -->
                    <!-- .breadcrumb -->
                    @yield('breadcrumb')
                    <!-- /.breadcrumb -->
                </div>
                <!-- .row -->

                @yield('content')

                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li><a href="javascript:void(0)"><img src="{{ Request::root() }}/plugins/images/users/varun.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a></li>
                                <li><a href="javascript:void(0)"><img src="{{ Request::root() }}/plugins/images/users/genu.jpg" alt="user-img"  class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a></li>
                                <li><a href="javascript:void(0)"><img src="{{ Request::root() }}/plugins/images/users/ritesh.jpg" alt="user-img"  class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a></li>
                                <li><a href="javascript:void(0)"><img src="{{ Request::root() }}/plugins/images/users/arijit.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a></li>
                                <li><a href="javascript:void(0)"><img src="{{ Request::root() }}/plugins/images/users/govinda.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a></li>
                                <li><a href="javascript:void(0)"><img src="{{ Request::root() }}/plugins/images/users/hritik.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a></li>
                                <li><a href="javascript:void(0)"><img src="{{ Request::root() }}/plugins/images/users/john.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a></li>
                                <li><a href="javascript:void(0)"><img src="{{ Request::root() }}/plugins/images/users/pawandeep.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.right-sidebar -->
            </div>
            <!-- End container -->

            <!-- footer -->
            <footer class="footer text-center"> 2016 &copy; <strong>@lang('main.system')</strong>  @lang('main.observatoir')</footer>
            <!-- footer -->
        </div>
        <!-- End Page wrapper -->
    </div>
    <!-- End Wrapper -->

    <!-- jQuery -->
    {!! Html::script('plugins/bower_components/jquery/dist/jquery.min.js') !!}
    <!-- Bootstrap Core JavaScript -->
    {!! Html::script('plugins/bower_components/bootstrap-rtl-master/dist/js/bootstrap-rtl.min.js') !!}
    <!-- Menu Plugin JavaScript -->
    {!! Html::script('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') !!}
    <!--slimscroll JavaScript -->
    {!! Html::script('js/jquery.slimscroll.js') !!}
    <!--Wave Effects -->
    {!! Html::script('js/waves.js') !!}
    <!-- Custom Theme JavaScript -->
    {!! Html::script('js/custom.min.js') !!}


@yield('footer')

</body>
</html>
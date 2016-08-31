<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ Request::root() }}/plugins/images/favicon.png">
    <title>Elite Admin - is a responsive admin template</title>
    <!-- Bootstrap Core CSS -->
    {!! Html::style('bootstrap/dist/css/bootstrap.min.css') !!}
    <!-- animation CSS -->
    {!! Html::style('css/animate.css') !!}
    <!-- Custom CSS -->
    {!! Html::style('css/style.css') !!}
    <!-- color CSS -->
    {!! Html::style('css/colors/blue.css') !!}
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
@yield('content')
<!-- jQuery -->
{!! Html::script('plugins/bower_components/jquery/dist/jquery.min.js') !!}
<!-- Bootstrap Core JavaScript -->
{!! Html::script('bootstrap/dist/js/bootstrap.min.js') !!}
<!-- Menu Plugin JavaScript -->
{!! Html::script('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') !!}

<!--slimscroll JavaScript -->
{!! Html::script('js/jquery.slimscroll.js') !!}
<!--Wave Effects -->
{!! Html::script('js/waves.js') !!}
<!-- Custom Theme JavaScript -->
{!! Html::script('js/custom.min.js') !!}
</body>
</html>

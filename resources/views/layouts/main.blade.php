<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="bootstrap admin template">
    <meta name="author" content="">
    <title>VAscii</title>
    {{--<link rel="apple-touch-icon" href="../../../assets/images/apple-touch-icon.png">--}}
    {{--<link rel="shortcut icon" href="../../../assets/images/favicon.ico">--}}
    <link rel="stylesheet" href="/css/theme.css">
    <link rel="stylesheet" href="/css/plugins.css">
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
    <!--[if lt IE 9]>
    <script src="/js/ie9.js"></script>
    <![endif]-->
    <!--[if lt IE 10]>
    <script src="/js/ie10.js"></script>
    <![endif]-->
    <!-- Scripts -->
    <script src="/js/breakpoints.js"></script>
    <script>
        Breakpoints();
    </script>
</head>
<body class="animsition site-navbar-small app-media page-aside-left">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
@include('layouts.header.header')
@include('layouts.header.menubar')
<div class="page bg-white">
    @include('layouts.sidebar')
    <div class="page-main">
        @yield('content')
    </div>
</div>
@yield('action')
<footer class="site-footer">
    <div class="site-footer-legal">© {{ date('Y') }} <a href="http://lakeheadu.ca">Lakehead University</a></div>
    {{--<div class="site-footer-right">--}}
        {{--Crafted with <i class="red-600 wb wb-heart"></i> by <a href="http://themeforest.net/user/amazingSurge">amazingSurge</a>--}}
    {{--</div>--}}
</footer>
<script src="/js/core.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/scripts.js"></script>
<script src="/js/config.js"></script>
{{--<script>--}}
    {{--Config.set('assets', '../../../assets');--}}
{{--</script>--}}
<script src="/js/page.js"></script>
</body>
</html>
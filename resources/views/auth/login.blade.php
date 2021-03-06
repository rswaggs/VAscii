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
    <link rel="stylesheet" href="/css/login.css">
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
<body class="animsition page-login-v3 layout-full">
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
    <div class="page-content vertical-align-middle animation-slide-top animation-duration-1">
        <div class="panel">
            <div class="panel-body">
                <div class="brand">
                    {{--<img class="brand-img" src="../../assets/images/logo-blue.png" alt="...">--}}
                    <h2 class="brand-text font-size-18">VAscii</h2>
                </div>
                <form method="post" action="{{ route('login') }}">
                    <div class="form-group form-material floating{{ $errors->has('email') ? ' has-error' : '' }}"
                         data-plugin="formMaterial">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                               autofocus/>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                        <label class="floating-label">Email</label>
                    </div>
                    <div class="form-group form-material floating{{ $errors->has('password') ? ' has-error' : '' }}"
                         data-plugin="formMaterial">
                        <input type="password" class="form-control" name="password"/>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                        <label class="floating-label">Password</label>
                    </div>
                    <div class="form-group clearfix">
                        <div class="checkbox-custom checkbox-inline checkbox-primary checkbox-lg float-left">
                            <input type="checkbox" id="inputCheckbox"
                                   name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label for="inputCheckbox">Remember me</label>
                        </div>
                        <a class="float-right" href="{{ route('password.request') }}">Forgot password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg mt-40">Sign in</button>
                </form>
                <p>Still no account? Please go to <a href="{{ route('register') }}">Sign up</a></p>
            </div>
        </div>
    </div>
</div>
<script src="/js/core.js"></script>
<script src="/js/plugins.js"></script>
<script src="/js/scripts.js"></script>
<script src="/js/config.js"></script>
<script src="/js/page.js"></script>
</body>
</html>
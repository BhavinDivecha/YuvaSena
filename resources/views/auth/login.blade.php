<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Login </title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('template/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('template/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('template/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('template/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ URL::asset('template/assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('template/assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ URL::asset('template/assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
    <link href="{{ URL::asset('template/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{ URL::asset('template/assets/pages/css/login-2.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    
<!-- END HEAD -->

<body class=" login">
<!-- BEGIN LOGO -->
<div class="logo">
    <a href="{{ URL('/') }}">
        
    </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" action="{{ url('/login') }}" method="post" role="form">
        {{ csrf_field() }}
        <div class="form-title">
            <span class="form-title">Welcome.</span>
            <span class="form-subtitle">Please login.</span>
        </div>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Enter email and password. </span>
        </div>
        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label for="email" class="control-label visible-ie8 visible-ie9">Email</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" id="email" value="{{ old('email') }}" />

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif

        </div>

        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" id="password" />

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

        </div>
        <div class="form-actions">
            <button type="submit" class="btn red btn-block uppercase">Login</button>
        </div>
        <div class="form-actions">
            <div class="pull-left">
                <label class="rememberme mt-checkbox mt-checkbox-outline">
                    <input type="checkbox" name="remember" /> Remember me
                    <span></span>
                </label>
            </div>
            <div class="pull-right forget-password-block">
            <a href="{{ route('password.request') }}" id="forget-password" class="forget-password">Forgot Password?</a>
            </div>
        </div>
    </form>
    <!-- END LOGIN FORM -->
</div>
<div class="copyright hide"> <script>document.write(new Date().getFullYear())</script> © Lazy Bone Publications.</div>
<!-- END LOGIN -->
<!--[if lt IE 9]>
<script src="{{ URL::asset('template/assets/global/plugins/respond.min.js')}}"></script>
<script src="{{ URL::asset('template/assets/global/plugins/excanvas.min.js')}}"></script>
<script src="{{ URL::asset('template/assets/global/plugins/ie8.fix.min.js')}}"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ URL::asset('template/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ URL::asset('template/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ URL::asset('template/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
<script src="{{ URL::asset('template/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{ URL::asset('template/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{ URL::asset('template/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ URL::asset('template/assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
<script src="{{ URL::asset('template/assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
<script src="{{ URL::asset('template/assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ URL::asset('template/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ URL::asset('template/assets/pages/scripts/login.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>
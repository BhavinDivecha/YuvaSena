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
    <link rel="shortcut icon" href="{{ URL::asset('template/custom-assets/img/favicon.png')}}" /> </head>
<!-- END HEAD -->

<body class="" style="background-color: #5c97bd">
<!-- BEGIN LOGIN -->
<div class="content">
    <div class="row" style="margin: 100px;">
        <div class="col-md-12">
            <div class="col-md-5" style="border: 1px solid #bfbfbf; padding: 15px;background-color: white;">
                <center>
                    <a href="{{URL('/login')}}"> 

                        <h2><img src="{{ URL::asset('template/custom-assets/img/admin.png')}}" height="350"></h2>
                        <h2>Admin Login</h2>
                    </a>    
                </center>        
            </div>
            <div class="col-md-5 pull-right" style="border: 1px solid #bfbfbf; padding: 15px;background-color: white;">
                <center>
                    <a href="{{URL('/test-login')}}"> 

                        <h2><img src="{{ URL::asset('template/custom-assets/img/exam.png')}}" height="350"></h2>
                        <h2>Take Test</h2>
                    </a>    
                </center>        
            </div>
        </div>
    </div>

</div>
<div class="copyright hide"> <script>document.write(new Date().getFullYear())</script> </div>
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
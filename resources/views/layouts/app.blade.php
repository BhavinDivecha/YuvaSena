<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
@php
    $baseurl = str_replace(env('BREADCRUM_URL'), "", Request::url());
    $urls = explode('/', $baseurl);
@endphp

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="LazyERP" name="description" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="/template/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/template/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/template/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/template/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
@yield('page-level-css')
<!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/template/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/template/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/template/assets/layouts/layout2/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="/template/assets/layouts/layout2/css/themes/grey.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="/template/assets/layouts/layout2/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    
    <!-- JQuery Plugin -->
    <script src="/template/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <link href="{{URL('/css/style.css')}}" rel="stylesheet" id="style_components" type="text/css" />
    <style type="text/css">
        #loading-img {height: 100%;width: 100%;margin-top: -300px;z-index: 30;}
        .overlay {display : block;position : fixed;z-index: 100;background: url('{{URL('/img/tos-gif.gif')}}') center center no-repeat;background-color:#fff;opacity : 0.6;background-repeat : no-repeat;background-position : center;left : 0;bottom : 0;right : 0;top : 0;}
    </style>

</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner ">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            
            
            <div class="menu-toggler sidebar-toggler">
                
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">

                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            
                            <span class="username username-hide-on-mobile"> {{ (Auth::user()) ? Auth::user()->name : '' }} </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="{{ url('/logout') }}">
                                    <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<!-- BEGIN HEADER & CONTENT DIVIDER -->

<!-- END HEADER & CONTENT DIVIDER -->
<!-- BEGIN CONTAINER -->
@php
    $permissionList = [];
@endphp
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- END SIDEBAR -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
            <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
            <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
            <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
            <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
            <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
            <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                

                <li class="nav-item">
                    <a href="{{URL('/admin/students')}}" class="nav-link ">
                        <i class="fa-lg fa fa-user"></i>
                        <span class="title">Students</span>
                    </a>
                </li>
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
        <!-- END SIDEBAR -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEADER-->
            <h1 class="page-title"> @yield('title')
                <small>@yield('subtitle')</small>
            </h1>
            <!-- <div class="page-bar">
                <ul class="page-breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="{{ url('/') }}">@yield('title')</a>
                    </li>
                </ul>
            </div> -->
            <!-- END PAGE HEADER-->
            @include('layouts.breadcum')
            <div class="overlay" id="overlay">
                <div id="loading-img"></div>
            </div>
            @yield('content')

        </div>
        <!-- END CONTENT BODY -->
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="page-footer">
    <div class="page-footer-inner"> <script>document.write(new Date().getFullYear())</script> &copy;  
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
</div>
<!-- END FOOTER -->
<!--[if lt IE 9]>
<script src="/template/assets/global/plugins/respond.min.js"></script>
<script src="/template/assets/global/plugins/excanvas.min.js"></script>
<script src="/template/assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="/template/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/template/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="/template/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/template/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/template/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/template/assets/global/plugins/moment.min.js" type="text/javascript"></script>
<script src="/template/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
<script src="/template/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
<script src="/template/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
<script src="/template/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
@yield('page-level-plugins-js')
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="/template/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
@yield('page-level-scripts-js')
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="/template/assets/layouts/layout2/scripts/layout.min.js" type="text/javascript"></script>
<script src="/template/assets/layouts/layout2/scripts/demo.min.js" type="text/javascript"></script>
<script src="/template/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="/template/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
<script src="{{URL('/js/function.js')}}" type="text/javascript"></script>

<script type="text/javascript">
    var lang = lang || {};
    $.extend(true, lang, {!!  isset($js_data) ? json_encode($js_data): json_encode([]) !!});
     $( document ).ready(function() {
        $('.overlay').hide();
     });
</script>
<!-- END THEME LAYOUT SCRIPTS -->
</body>

</html>
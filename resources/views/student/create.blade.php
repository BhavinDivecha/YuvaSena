<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>Student registration</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="/template/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/template/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/template/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/template/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="/template/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="/template/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/template/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/template/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="/template/assets/pages/css/login-2.min.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <!-- END THEME LAYOUT STYLES -->
    <link id="bsdp-css" href="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/css/bootstrap-datepicker3.min.css" rel="stylesheet">

    
<!-- END HEAD -->

<body>

    <div class="row">
        <div class="col-md-12 ">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-notebook font-dark"></i>
                        <span class="caption-subject bold uppercase"> Student register</span>
                    </div>
                </div>
                <div class="portlet-body form">

                    @if($errors != NULL)
                        <div class="row">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li><h5 style="color: red">{{$error}}</h5></li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{route('student-register' )}}" method="post">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="name">First Name <span class="required" aria-required="true">*</span></label>
                                    <input name="first_name" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name">Last Name <span class="required" aria-required="true">*</span></label>
                                    <input name="last_name" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name">School Name <span class="required" aria-required="true">*</span></label>
                                    <input name="school_name" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name">Districts <span class="required" aria-required="true">*</span></label>
                                    <select name="district_id" id="district_id" class="form-control selectpicker" required>
                                        <option value="">Select</option>
                                        @foreach($districts as $key => $value)
                                        <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name">Vidhansabha <span class="required" aria-required="true">*</span></label>
                                    <select name="vidhansabha_id" id="vidhansabha_id" class="form-control selectpicker" required>
                                        <option value="">Select</option>
                                        @foreach($vidhansabha as $key => $value)
                                        <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name">Taluka <span class="required" aria-required="true">*</span></label>
                                    <select name="taluka_id" id="taluka_id" class="form-control selectpicker" required>
                                        <option value="">Select</option>
                                        @foreach($taluka as $key => $value)
                                        <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name">Phone No <span class="required" aria-required="true">*</span></label>
                                    <input name="phone_no" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name">Email <span class="required" aria-required="true">*</span></label>
                                    <input name="email" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name">Address <span class="required" aria-required="true">*</span></label>
                                    <input name="address" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name">Pin Code <span class="required" aria-required="true">*</span></label>
                                    <input name="pincode" class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name">Date Of Birth <span class="required" aria-required="true">*</span></label>
                                    <input name="dob" class="form-control datepicker">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name">gender <span class="required" aria-required="true">*</span></label>
                                    <select name="gender" id="gender" class="form-control selectpicker" required>
                                        <option value="">Select</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn green submit">Save</button>
                        </div>
                    </form>

                </div>
            </div>
            <!-- END SAMPLE FORM PORTLET-->
        </div>

    </div>
    </div>
<div class="copyright hide"> <script>document.write(new Date().getFullYear())</script> © Lazy Bone Publications.</div>
<!-- END LOGIN -->
<!--[if lt IE 9]>
<script src="/template/assets/global/plugins/respond.min.js"></script>
<script src="/template/assets/global/plugins/excanvas.min.js"></script>
<script src="/template/assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="/template/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/template/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/template/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="/template/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/template/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/template/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/template/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="/template/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
<script src="/template/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="/template/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/template/assets/pages/scripts/login.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END THEME LAYOUT SCRIPTS -->

<script src="https://unpkg.com/bootstrap-datepicker@1.9.0/dist/js/bootstrap-datepicker.min.js"></script>


<script type="text/javascript">
    $(function () {
        $('.datepicker').datepicker({
            format: "dd-mm-yyyy",
            weekStart: 0,
            calendarWeeks: true,
            autoclose: true,
            todayHighlight: true, 
            orientation: "auto"
        });
    });
</script>
</body>

</html>

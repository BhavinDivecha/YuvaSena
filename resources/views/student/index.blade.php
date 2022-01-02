@extends('layouts.app')

@section('title') Students @endsection
@section('subtitle') Students @endsection

@section('page-level-css')
    <link href="/template/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
    <link href="/template/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-rocket font-dark"></i>
                        <span class="caption-subject bold uppercase"> Students</span>
                    </div>
                </div>

                <div class="portlet-body table-both-scroll">
                    
                    <table class="table table-striped table-bordered table-hover order-column" id="student">
                        <thead>
                        <tr>
                            <th> First Name </th>
                            <th> Last Name </th>
                            <th> School Name </th>
                            <th> District </th>
                            <th> Vidhansabha </th>
                            <th> Taluka </th>
                            <th> Phone Number </th>
                            <th> Email </th>
                            <th> Address </th>
                            <th> Pincode </th>
                            <th> Date Of Birth </th>
                            <th> Gender </th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>


            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>

@endsection

@section('page-level-plugins-js')
    <script src="/template/assets/global/scripts/datatable.js" type="text/javascript"></script>
    <script src="/template/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
    <script src="/template/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
@endsection

@section('page-level-scripts-js')


    <script>
        $( document ).ready(function() {

            $('#student').dataTable({
                processing: true,
                serverSide: true,

                ajax: {

                    url: '{{ url('admin/students',
                    method: 'GET'
                },
                columns: [

                    {data: 'first_name' },
                    {data: 'last_name' },
                    {data: 'school_name' },
                    {data: 'district' },
                    {data: 'vidhansabha' },
                    {data: 'taluka' },
                    {data: 'phone_no' },
                    {data: 'email' },
                    {data: 'address' },
                    {data: 'pincode' },
                    {data: 'dob' },
                    {data: 'gender' },

                ],

                "bStateSave": false, // save datatable state(pagination, sort, etc) in cookie.

                "lengthMenu": [
                    [10, 15, 20, -1],
                    [10, 15, 20, "All"] // change per page values here
                ],
                // set the initial value
                "pageLength": 10,

                "order": [], // set first column as a default sort by asc

                "pagingType": "bootstrap_full_number",

                "dom": "<'row' <'col-md-12'B>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",                // horizobtal scrollable datatable
                buttons: [
                    { extend: 'excel', className: 'btn green btn-outline ' },
                    { extend: 'csv', className: 'btn purple btn-outline ' },
                    { extend: 'colvis', className: 'btn dark btn-outline', text: 'Columns'}
                ],
            });

        });
    </script>

@endsection

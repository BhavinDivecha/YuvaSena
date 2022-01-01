@extends('layouts.app')

@section('title') Dashboard @endsection
@section('subtitle') Dashboard  @endsection

@section('page-level-css')
    <link href="{{ URL::asset('template/assets/global/plugins/bootstrap-select/css/bootstrap-select.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('template/assets/global/plugins/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('template/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link href="{{ URL::asset('css/bootstrap-datepicker.css') }}" rel="stylesheet" type="text/css" /> --}}

    <style type="text/css">
        table th{
            min-width: 120px;
        }
        
    </style>
@endsection

@section('content')
@endsection

@section('page-level-plugins-js')

    <script src="{{ URL::asset('template/assets/global/scripts/datatable.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('template/assets/global/plugins/datatables/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('template/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('template/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('template/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}" type="text/javascript"></script>

@endsection

@section('page-level-scripts-js')
    <script src="{{ URL::asset('template/assets/pages/scripts/dashboard.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('template/assets/pages/scripts/components-bootstrap-select.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('template/assets/pages/scripts/components-date-time-pickers.js')}}" type="text/javascript"></script>


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    @if(Session::has('status'))
        <script>alert('{{Session::get('status')}}');</script>
    @endif


@endsection
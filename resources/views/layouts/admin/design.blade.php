<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edmin</title>
        <link type="text/css" href="{{ asset('backend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('backend/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('backend/css/theme.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('backend/images/icons/css/font-awesome.css') }}" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
<body>
    @include('layouts.common.header')
    @include('layouts.admin.sidebar')
    @yield('content')
    @include('layouts.common.footer')
    <script src="{{ asset('backend/scripts/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('backend/scripts/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('backend/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('backend/scripts/flot/jquery.flot.js') }}" type="text/javascript"></script>
        <script src="{{ asset('backend/scripts/flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
        <script src="{{ asset('backend/scripts/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
        <script src="{{ asset('backend/scripts/common.js') }}" type="text/javascript"></script>
      
    </body>
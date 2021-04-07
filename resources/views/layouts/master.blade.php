<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>

        @stack('prepend-style')
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
        {{-- my font style --}}
        <link rel="stylesheet" type="text/css" href="{{asset('style.css')}}"> 
        {{-- datatables --}}
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.css"/>
        @stack('addon-style')

    </head>
    <body class="hold-transition sidebar-mini">
        <!-- Site wrapper -->
        <div class="wrapper">
                {{-- NAVBAR --}}
                @include('layouts.includes._navbar')

                {{--LEFT SIDEBAR --}}
                @include('layouts.includes._sidebar')

                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    
                    {{-- Main Content --}}
                    @yield('content')

                </div>
                <!-- /.content-wrapper -->
                
                {{-- Footer --}}
                @include('layouts.includes._footer')
        
        </div>
        <!-- ./wrapper -->

    @stack('prepend-script')
    <!-- jQuery -->
    <script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('adminlte/dist/js/demo.js')}}"></script>
    {{-- Datatables --}}
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.js"></script>
    @stack('addon-script')
    </body>
</html>

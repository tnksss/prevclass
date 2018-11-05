<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PrevClass</title>
    
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminlte/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminlte/dist/css/skins/skin-yellow.min.css') }} ">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">    
    <link rel="shortcut icon" href="{{ asset('prevclass.ico') }}" >
    @include('admin.partials.shim')

    </head>
    <body class="hold-transition skin-yellow sidebar-mini ">
        
        <div class="wrapper">
    
            @include('admin.partials.navbar')        
            @include('admin.partials.sidebar')
            <div class="content-wrapper">
                <section class="content-header">
                    @yield('content_header')
                </section>
                @yield('content')
            </div>
        </div>

    <script src="{{ asset('js/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery/dist/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/adminlte.min.js') }}"></script>

    </body>
</html>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PrevClass - Professor</title>
        <link rel="shortcut icon" href="{{ asset('prevclass.ico') }}" >
        
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        {{ Html::style('css/bootstrap.css')}}
        {{ Html::style('css/font-awesome/css/font-awesome.min.css')}}
        {{ Html::style('css/Ionicons/css/ionicons.min.css')}}
        {{ Html::style('css/custom/custom.css')}}
        {{ Html::style('css/adminlte/dist/css/AdminLTE.min.css')}}
        {{ Html::style('css/adminlte/dist/css/skins/skin-blue.min.css')}}
        {{ Html::style('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic')}}

        
        @include('manager.partials.shim')

    </head>
    <body class="hold-transition skin-blue sidebar-mini ">
        <div class="wrapper">
            @include('teacher.partials.navbar')        
            @include('teacher.partials.sidebar')
            <div class="content-wrapper">
                <section class="content-header">
                    @yield('content_header')
                </section>
                @yield('content')
            </div>
        </div>
        {{ Html::script('js/jquery/dist/jquery.min.js') }}
        {{ Html::script('js/jquery/dist/jquery.slimscroll.min.js') }}
        {{ Html::script('js/bootstrap.min.js') }}
        {{ Html::script('js/jquery.dataTables.min.js') }}
        {{ Html::script('js/adminlte.min.js') }}
        {{ Html::script('js/custom.modal.js') }}

    </body>
</html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @include('layouts.shim')

    <title>PrevClass - Login Professor</title>

    {{ Html::style('css/bootstrap.css')}}
    {{ Html::style('css/font-awesome/css/font-awesome.min.css')}}
    {{ Html::style('css/Ionicons/css/ionicons.min.css')}}  
    {{ Html::style('css/adminlte/dist/css/AdminLTE.css')}}
    {{ Html::style('css/adminlte/plugins/iCheck/square/blue.css')}}  
    {{ Html::style('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic')}}
  </head>

  <body class="hold-transition login-page">
    
    @yield('content')

    {{ Html::script('js/jquery/dist/jquery.min.js') }}        
    {{ Html::script('js/bootstrap.min.js') }}
    {{ Html::script('js/icheck.min.js') }}   
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
    
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PrevClass</title>
    <link rel="shortcut icon" href="{{ asset('prevclass.ico') }}" >


    
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Ionicons/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminlte/dist/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/adminlte/dist/css/skins/skin-blue.min.css') }} ">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">    
    
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
        <script src="{{ asset('js/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('js/jquery/dist/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        {{-- <script src="{{ asset('js/select2.min.js') }}"></script> --}}
        <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('js/adminlte.min.js') }}"></script>
        <script>
            $('#exampleModal').on('show.bs.modal',function (event){
                
            var button = $(event.relatedTarget)
            var id = button.data('myconceptid')
            var comment = button.data('mycomment')
            var criterion_1 = button.data('mycriterion1') == "1" ? true : false;
            var criterion_2 = button.data('mycriterion2')
            var criterion_3 = button.data('mycriterion3')
            var criterion_4 = button.data('mycriterion4')
            var criterion_5 = button.data('mycriterion5')
            var criterion_6 = button.data('mycriterion6')
            var criterion_7 = button.data('mycriterion7')
            var criterion_8 = button.data('mycriterion8')
            // var deve_marcar = ($(this).val() == "1") ? true : false;

            var modal = $(this)
            
            modal.find('.modal-body #concept_id').val(id);
            modal.find('.modal-body #comment').val(comment);
            
            modal.find('.modal-body #criterion_1').val(button.data('mycriterion1'))
            modal.find('.modal-body #criterion_1').prop('checked',criterion_1);

            modal.find('.modal-body #criterion_1').val(button.data('mycriterion2'))
            modal.find('.modal-body #criterion_2').attr('checked',criterion_2);

            modal.find('.modal-body #criterion_1').val(button.data('mycriterion3'))
            modal.find('.modal-body #criterion_3').attr('checked',criterion_3);

            modal.find('.modal-body #criterion_1').val(button.data('mycriterion4'))
            modal.find('.modal-body #criterion_4').attr('checked',criterion_4);
            modal.find('.modal-body #criterion_5').attr('checked',criterion_5);
            modal.find('.modal-body #criterion_6').attr('checked',criterion_6);
            modal.find('.modal-body #criterion_7').attr('checked',criterion_7);
            modal.find('.modal-body #criterion_8').attr('checked',criterion_8);
            })
        </script>
    </body>
</html>
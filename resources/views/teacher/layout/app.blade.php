<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PrevClass - Professor @yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('prevclass.ico') }}" >
    
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    {{ Html::style('css/bootstrap.css')}}
    {{ Html::style('css/font-awesome/css/font-awesome.min.css')}}
    {{ Html::style('css/Ionicons/css/ionicons.min.css')}}
    {{ Html::style('css/custom/custom.css')}}
    {{ Html::style('css/adminlte/dist/css/AdminLTE.min.css')}}
    {{ Html::style('css/adminlte/dist/css/skins/skin-blue.min.css')}}
    {{ Html::style('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic')}}
    
    @include('layouts.shim')
    
</head>
<body class="hold-transition skin-blue sidebar-mini ">
    <div class="wrapper">
        @include('teacher.partials.navbar')        
        @include('teacher.partials.sidebar')
        <div class="content-wrapper">
            <section class="content-header">
                @yield('content_header')
            </section>
            <section class="content">
                @yield('content')
            </section>
        </div>
    </div>
    {{ Html::script('js/jquery/dist/jquery.min.js') }}
    {{ Html::script('js/bootstrap.min.js') }}
    {{ Html::script('js/jquery.dataTables.min.js') }}
    {{ Html::script('js/adminlte.min.js') }}
    {{ Html::script('js/custom.modal.js') }}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script>
        var x = document.getElementById("teste").value;
        new Chart(document.getElementById("pie-chart"), {
            
            type: 'pie',
            data: {
                labels: ["Avaliado","Não Avaliados"],
                datasets: [{
                    label: "Conceitos por professor",
                    backgroundColor: ["#00a65a","#f39c12"],
                    data: [42,x]
                }]
            },
            options: {
                title: {
                    display: true,
                    text: 'Alunos Avaliados'
                }
            }
        });
        new Chart(document.getElementById("bar-chart-grouped"), {
            type: 'bar',
            data: {
                labels: ["Desinteresse","Não Produz", "Faltoso", "Indisciplinado", "Dificuldade", "Bom comportamento", "Boas Notas"],
                datasets: [
                {
                    label: "1º Trimestre",
                    backgroundColor: "#3e95cd",
                    data: [3,4,4,6,3,0,1,2]
                }, {
                    label: "2º Trimestre",
                    backgroundColor: "#8e5ea2",
                    data: [3,3,2,4,1,2,0,2]
                },
                {
                    label: "3º Trimestre",
                    backgroundColor: "#c45850",
                    data: [5,4,5,6,5,0,1,6]
                }
                ]
            },
            options: {
                title: {
                    display: true,
                    text: 'Conceitos por trimestre'
                }
            }
        });
        
        
    </script>
    
</body>
</html>
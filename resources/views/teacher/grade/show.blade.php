@extends('teacher.layout.app')

@section('content_header')
<h1>Lançar Conceitos - {{$grade->course->unity->name}}</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('manager.home') }}">Dashboard</a></li>
    <li><a href="{{ route('grades.index') }}"></a>Turmas</a></li>
    <li>{{$grade->name}}</li>
</ol>
<br>
@stop

@section('content')
<div class=" container-fluid col-md-12 ">
    
    <div class="box box-success">
        <div class="box-header with-border">
            @include('admin.partials.errors')

            <table class="table">
              <tbody>
                <tr>
                  <td style="width: 10px"><strong>Curso :</strong> {{$grade->course->name}}</td>
                  <td style="width: 10px"><strong>Seriação: </strong> {{$grade->degree}}</td>
                  <td style="width: 10px"><strong>Turno: </strong> {{$grade->shift($grade->shift)}}</td>
                  <td style="width: 10px"><strong>Turma: </strong> {{$grade->order}}</td>
                </tr>
              </tbody>
            </table>
        </div>
        <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Alunos:</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody>
                  <tr>
                  
                  
                  <th>Nome</th>
                  <th>Idade</th>
                  <th>Sit. Matrícula</th>
                  
                </tr>
                
                @foreach($enrollments as $enrollment)
                <tr>
                    
                  {{-- <td>student->avatar</td> --}}
                  
                  
                  <td>{{$enrollment->student->name}}</td>
                  <td>{{$enrollment->student->age()}}</td>
                  <td>{{$enrollment->status}}</td>
                  
                </tr>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>

    </div>
    
          

</div>
@stop
    
    
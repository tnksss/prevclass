@extends('manager.layout.app')

@section('content_header')
<h1>Unidade</h1>
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
            <h3><p><strong>Curso:</strong> {{$grade->course->name}}</p></h3>
                <h3><p><strong>Série/Ano:</strong> {{$grade->degree}}</p></h3>
                <h3><p><strong>Turno:</strong> {{$grade->shift($grade->shift)}}</p></h3>
        </div>
    </div>
    
    <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Alunos:</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody><tr>
                  <th style="width: 10px">ID</th>
                  <th>CGM</th>
                  <th>Nome</th>
                  <th>Idade</th>
                  <th>Sit. Matrícula</th>
                  <th>Data Matr/Mov</th>
                </tr>
                
                @foreach($enrollments as $enrollment)
                <tr>
                    
                  {{-- <td>student->avatar</td> --}}
                  <td>{{$enrollment->student->id}}</td>
                  <td>{{$enrollment->student->cgm}}</td>
                  <td>{{$enrollment->student->name}}</td>
                  <td>student->age</td>
                  <td>student->situation</td>
                  <td>{{$enrollment->enrollmentDate}}</td>
                </tr>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>

</div>
@stop
    
    
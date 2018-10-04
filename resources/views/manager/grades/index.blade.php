@extends('manager.layout.app')

@section('content_header')
    <h1>Turmas</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('manager.home') }}">Dashboard</a></li>
        <li>Turmas</a></li>
    </ol>
    <br>	
@stop


@section('content')
<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="{{ route('grades.create') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> <strong>Cadastrar Turma</strong></a>       
              
              <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input name="table_search" class="form-control pull-right" placeholder="Procurar" type="text">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Curso</th>
                  <th>Nome</th>
                  <th>Série/Ano</th>
                  <th>Turno</th>
                  <th>Turma</th>
                  <th>Ações</th>
                </tr>
                
                @foreach($grades as $grade)
                  <tr>
                      
                      <td>{{ $grade->id }}</td>
                      <td>{{ $grade->course->name }}</td>
                      <td>{{ $grade->name }}</td>
                      <td>{{ $grade->degree }}</td>
                      <td>{{ $grade->shift }}</td>
                      <td>{{ $grade->order }}</td>
                      <td>
                        @include('manager.partials.grade_buttons')
                      </td>
                  </tr>
                @endforeach    


              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
@stop
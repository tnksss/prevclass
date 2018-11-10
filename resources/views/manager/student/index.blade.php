@extends('manager.layout.app')
@section('content_header')
<h1>Alunos</h1>
<ol class="breadcrumb">
  <li><a href="{{ route('manager.home') }}">Dashboard</a></li>
  <li>Alunos</a></li>
</ol>	
@stop
@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <a href="{{ route('students.create') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> <strong>Cadastrar Aluno</strong></a>       
        
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
            <th>CGM</th>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Editar</th>
            
          </tr>
          
          @foreach($students as $student)
          <tr>            
            <td>{{ $student->id }}</td>
            <td>{{ $student->cgm }}</td>
            <td>{{ $student->name }}</td>
            <td>{{ $student->bornDateFormatted() }}</td>
            <td>
              <div class="responsive">
                <a href="{{ route('students.edit',['id' => $student->id]) }}" class="btn-sm btn btn-warning"><i class="fa fa-edit"></i></a>
              </div>
            </td>
          </tr>
          @endforeach    
        </tbody></table>
        {{$students->links()}}
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
@stop
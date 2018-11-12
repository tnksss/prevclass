@extends('manager.layout.app')

@section('content_header')
  <h1>Professores</h1>
  @include('admin.partials.errors')
  <ol class="breadcrumb">
    <li><a href="{{ route('manager.home') }}">Dashboard</a></li>
    <li>Professores</li>
  </ol>
@stop
@section('content')
<div class="row">
<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <a href="{{ route('teachers.create') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> <strong>Cadastrar Professor</strong></a>       
      
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
          <th>Foto</th>
          <th>ID</th>
          <th>Nome</th>
          <th>CPF</th>
          <th>Email</th>
          <th>Ações</th>
        </tr>
        
        @foreach($teachers as $teacher)
        <tr>            
            <td><img class="img-circle img-bordered-sm img-mini"  src="{{url('storage/teachers/'.$teacher->avatar)}}" /></td> 
          
          <td>{{ $teacher->id }}</td>
          <td>{{ $teacher->name }}</td>
          <td>{{ $teacher->cpf }}</td>
          <td>{{ $teacher->email }}</td>
          <td>@include('manager.partials.teacher_buttons')</td>
        </tr>
        @endforeach    
        
        
      </tbody></table>
      {{$teachers->links()}}
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
</div>
@stop
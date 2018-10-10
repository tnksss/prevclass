@extends('admin.layout.app')

@section('content_header')
    <h1>Cursos</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li>Cursos</a></li>
    </ol>
    <br>	
@stop


@section('content')
<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="{{ route('courses.create') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> <strong>Cadastrar Curso</strong></a>       
              
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
                  <th>Nome</th>
                  <th>Código</th>
                  <th>Ações</th>
                </tr>
                
                @foreach($courses as $course)
                  <tr>
                      
                      <td>{{ $course->id }}</td>
                      <td>{{ $course->name }}</td>
                      <td>{{ $course->code }}</td>
                      <td>
                        @include('admin.partials.course_buttons')
                      </td>
                  </tr>
                @endforeach    

                  {!!$courses->links()!!}
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
@stop
@extends('admin.layout.app')

@section('content_header')
    <h1>Disciplinas</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li>Disciplinas</a></li>
    </ol>
    <br>	
@stop


@section('content')
<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="{{ route('disciplines.create') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> <strong>Cadastrar Disciplina</strong></a>       
              
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
                
                @foreach($disciplines as $discipline)
                  <tr>
                      
                      <td>{{ $discipline->id }}</td>
                      <td>{{ $discipline->name }}</td>
                      <td>{{ $discipline->code }}</td>
                      <td>
                        @include('admin.partials.discipline_buttons')
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
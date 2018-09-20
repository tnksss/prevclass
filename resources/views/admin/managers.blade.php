@extends('admin.layout.app')

@section('content_header')
    <h1>Secretários</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li>Secretários</a></li>
    </ol>
    <br>	
@stop


@section('content')
<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="#" class="btn btn-primary"><i class="fa fa-plus-circle"></i> <strong>Cadastrar Unidade</strong></a>       
              
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
                  <th>Email</th>
                  <th>Colégio</th>
                  <th>Ações</th>
                </tr>
                
                @foreach($managers as $manager)
                  <tr>
                      
                      <td>{{ $manager->id }}</td>
                      <td>{{ $manager->name }}</td>
                      <td>{{ $manager->email }}</td>
                      
                      <td>{{ $manager->unity->name }}</td>
                      
                      <td>
              
                          
                        
                          
                          
                      
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
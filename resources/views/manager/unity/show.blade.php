@extends('manager.layout.app')

@section('content_header')
<h1>Unidade</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('manager.home') }}">Dashboard</a></li>
    <li><a href="{{ route('unities.show',['id' => $unity->id]) }}"></a>{{$unity->name}}</a></li>
</ol>
<br>
@stop

@section('content')
<div class=" container-fluid col-md-12 ">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title"><p><strong>Município:</strong> {{$unity->city->name}}</p>
                <p><strong>Nome da Unidade:</strong> {{$unity->name}}</p></h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Endereço:</strong>
                    {{$unity->address}}</p>
                </div>
            <div class="col-md-3">
                <p><strong>Número:</strong>
                {{$unity->number}}</p>
            </div>
            <div class="col-md-3">
                <p><strong>Município:</strong>
                    {{$unity->city->name}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <p><strong>Telefone:</strong>
               {{$unity->phone}}</p>
            </div>
            <div class="col-md-6">
                <p><strong>Email:</strong>
                {{$unity->email}}</p>
            </div>
        </div>
    </div>
    
    <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Secretário</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
                <tbody><tr>
                  <th style="width: 10px">ID</th>
                  <th>Nome</th>
                  <th>RG</th>
                  <th>CPF</th>
                  <th>Email</th>
                </tr>
                @foreach($unity->managers as $manager)
                <tr>
                
                  <td>{{$manager->id}}</td>
                  <td>{{$manager->name}}</td>
                  <td>999999-9</td>
                  <td>444444444-44</td>
                 <td>{{$manager->email}}</td>
                </tr>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>

          {{-- Anos letivos --}}
          <div class="box box-warning">
                <div class="box-header">
                  <h3 class="box-title">Ano Letivo</h3>
                  <a href="{{ route('school-year.create', ['id' => $unity->id]) }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> <strong>Add Ano Letivo</strong></a>       
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <table class="table table-striped">
                    <tbody><tr>
                      <th>Ano</th>
                      <th>Status</th>
                    </tr>
                    <tr>
                      <td>###</td>
                      <td>###</td>
                    </tr>
                  </tbody></table>
                </div>
                <!-- /.box-body -->
              </div>
</div>
@stop
    
    
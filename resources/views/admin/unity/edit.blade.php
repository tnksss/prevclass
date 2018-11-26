@extends('admin.layout.app')
@section('title','| Editar unidade')
@section('content_header')
<h1>Unidade</h1>
@include('layouts.notifications')
<ol class="breadcrumb">
    <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
    <li><a href="{{ route('unities.index') }}">Unidades</a></li>
    <li><a href=""></a>{{$unity->name}}</a></li>
</ol>
@stop

@section('content')
<div class="row">
    <div class=" container-fluid col-md-12 ">
        <div class="box box-warning ">
            <div class="box-header with-border">
                <h3 class="box-title"><h3 class="box-title"><p><strong>Município:</strong> {{$unity->city->name}}</p>
                <p><strong>Nome da Unidade:</strong> {{$unity->name}}</p></h3></h3>
            </div>
            <div class="box-body">
                {!! Form::open(['route' => ['unities.update', $unity->id], 'method' => 'patch']) !!}                    @include('admin.unity.form')
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Salvar">
                {!! Form::close() !!}
                    <a href="{{ route('unities.index' )}}"class="btn btn-danger">Voltar</a>                    
                </div>
            </div>
        </div>
    </div>
</div>
@stop
    
    
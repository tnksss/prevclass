@extends('manager.layout.app')

@section('content_header')
<h1>Novo Suprimento</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('manager.home') }}">Dashboard</a></li>
    <li><a href="{{ route('manager.home') }}">Suprimentos</a></li>
    <li>Novo</a></li>
</ol>
@stop

@section('content')
<div class="row">
    <div class=" container-fluid col-md-12 ">
        <div class="box box-info ">
            <div class="box-header with-border">
                <h3 class="box-title">Busca por CPF</h3>
                @include('layouts.notifications')
            </div>
            <div class="box-body">
                {!! Form::open(['route' => 'supplies.find']) !!}				    
                <div class="form-group">
                    <label for="cpf" >CPF do Professor</label>
                    <input id="cpf" name="cpf" class="form-control" style="width: 200px;" >
                </div>
                <div>  
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Pesquisar">
                        {!! Form::close() !!} 
                        <a href="{{ route('manager.home' )}}"class="btn btn-danger">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop


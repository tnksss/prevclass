@extends('admin.layout.app')
@section('content_header')
<h1>Cadastro de Unidade</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
    <li><a href="{{ route('unities.index') }}">Unidades</a></li>
    <li>Nova</a></li>
</ol>
@stop

@section('content')
<div class="row">
    <div class=" container-fluid col-md-12 ">
        <div class="box box-info ">
            <div class="box-header with-border">
                <h3 class="box-title">Formulário de Cadastro</h3>
                @include('admin.partials.errors')
            </div>
            <div class="box-body">
                {!! Form::open(['route' => 'unities.store']) !!}
                @include('admin.unity.form')
                <div class="form-group">
                    {{ Form::submit('Salvar', ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}
                    <a href="{{ route('unities.index' )}}"class="btn btn-danger">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop


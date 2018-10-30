@extends('admin.layout.app')

@section('content_header')
    <h1>Cadastro de Unidade</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li><a href="{{ route('unities.index') }}">Unidades</a></li>
        <li>Nova</a></li>
	</ol>
	<br>	
@stop

@section('content')
<div class=" container-fluid col-md-12 ">
    <div class="box box-info ">
        <div class="box-header with-border">
            <h3 class="box-title">Formulário de Cadastro</h3>
            @include('admin.partials.errors')
        </div>
        <div class="box-body">
        {!! Form::open(['route' => 'unities.store']) !!}
            <div class="form-group">
                <label for="name"> Nome da Unidade </label>
                <input  id="name" name="name" class="form-control" value="" autofocus>
            </div>
                <div class="form-group">
                    <label for="address"> Endereço </label>
                    <input  id="address" name="address" class="form-control">
                </div>
            <div class="form-group">
                <label for="number"> Número </label>
                <input  id="number" name="number" class="form-control">
            </div>
            <div class="form-group">
                <label for="city_id">Município</label>
                <select name="city_id" class="form-control">
                    @foreach ($cities as $city)
                        <option class="form-control" value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="phone"> Telefone </label>
                <input  id="phone" name="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="email"> E-mail </label>
                <input  id="email" name="email" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Salvar">
                {!! Form::close() !!}
                <a href="{{ route('unities.index' )}}"class="btn btn-danger">Voltar</a>
            </div>
        </div>
    </div>
</div>
@stop


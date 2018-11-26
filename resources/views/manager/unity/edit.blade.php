@extends('admin.layout.app')
@section('title','| Editar unidade')
@section('content_header')
    <h1>Unidade</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li><a href="{{ route('unities.index') }}">Unidades</a></li>
        <li><a href=""></a>{{$unity->name}}</a></li>
	</ol>
	<br>
@stop

@section('content')
<div class=" container-fluid col-md-12 ">
<div class="box box-warning ">
    <div class="box-header with-border">
        <h3 class="box-title">Formulário de Edição de Cadastro</h3>
    </div>
    <div class="box-body">
	{!! Form::open(['route' => ['unities.update', $unity->id], 'method' => 'patch']) !!} 
		    	
		    	<div class="form-group">
				    <label for="name"> Nome da Unidade </label>
				    <input  id="name" name="name" class="form-control" value="{{ old('name') ?? $unity->name ?? null }}" autofocus>
				</div>
                <div class="form-group">
				    <label for="address"> Endereço </label>
				    <input  id="address" name="address" class="form-control" value="{{ old('address') ?? $unity->address ?? null }}">
				</div>
                <div class="form-group">
				    <label for="number"> Número </label>
				    <input  id="number" name="number" class="form-control" value="{{ old('number') ?? $unity->number ?? null}}">
				</div>
				<div class="form-group">
    				<label for="city_id">Município</label>
    				<select name="city_id" class="form-control">
    					@foreach ($cities as $city)
    						<option class="form-control" value="{{old($city->id) ?? $city->id ?? null}}">{{old($city->name) ?? $city->name ?? null}}</option>
    					@endforeach
    				</select>
				</div>
                <div class="form-group">
				    <label for="phone"> Telefone </label>
				    <input  id="phone" name="phone" class="form-control" value="{{ old('phone') ?? $unity->phone ?? null}}">
				</div>
				<div class="form-group">
				    <label for="email"> E-mail </label>
				    <input  id="email" name="email" class="form-control" value="{{ old('email') ?? $unity->email ?? null}}">
				</div>
            	<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Salvar">
					{!! Form::close() !!} 

					<a href="{{ route('unities.index' )}}"class="btn btn-danger">Voltar</a>

				</div>
                
                
			</fieldset>
				
    </div>
</div>
</div>
@stop


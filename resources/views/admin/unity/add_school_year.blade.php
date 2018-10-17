@extends('admin.layout.app')

@section('content_header')
    <h1>Inclusão de Ano Letivo</h1>
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
			<h3 class="box-title">Municipio e Escola</h3>
		</div>
		<div class="box-body">
			<div class="form-group">
				<h3> {{$unity->name}} </h3>
			</div>
			{!! Form::open(['route' => 'schoolYear.store']) !!}
			<input id="unity_id" name="unity_id" type="hidden" value="{{$unity->id}}" >
			<div class="form-group">
				<p><label for="year"> Ano </label></p>
				{{ Form::selectRange('year', 2018,2010	) }}
			</div>
			<div class="form-group">
				<p>{{ Form::label('status', 'Status') }}</p>
				{{ Form::radio('status', '1') }} Aberto
				{{ Form::radio('status', '0') }} Fechado
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
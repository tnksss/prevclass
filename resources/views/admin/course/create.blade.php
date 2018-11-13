@extends('admin.layout.app')
@section('content_header')
<h1>Curso</h1>
<ol class="breadcrumb">
	<li><a href="{{ route('admin.home') }}">Dashboard</a></li>
	<li>Novo</a></li>
</ol>
@stop
@section('content')
<div class="row">
	<div class=" container-fluid col-md-12 ">
		<div class="box box-info ">
			<div class="box-header with-border">
				<h3 class="box-title">Formulário de Cadastro</h3>	
				@include('layouts.notifications')
			</div>
			<div class="box-body">
				{!! Form::open(['route' => ['courses.store', $id]]) !!}
				@include('admin.course.form')
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Salvar">
					{!! Form::close() !!}
					<a href="{{ Route('unities.show', $id) }}"class="btn btn-danger">Voltar</a>
				</div>
			</div>
		</div>
	</div>
</div>
@stop


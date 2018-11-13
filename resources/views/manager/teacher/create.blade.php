@extends('manager.layout.app')

@section('content_header')
<h1>Cadastro de Professor</h1>
<ol class="breadcrumb">
	<li><a href="{{ route('manager.home') }}">Dashboard</a></li>
	<li><a href="{{ route('teachers.index') }}">Professores</a></li>
	<li>Novo</li>
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
				{!! Form::open(['route' => 'teachers.store']) !!} 
				@include('manager.teacher.form')
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Salvar">
					{!! Form::close() !!} 
					<a href="{{ route('teachers.index' )}}"class="btn btn-danger">Voltar</a>
				</div>
			</div>
		</div>
	</div>
</div>
@stop


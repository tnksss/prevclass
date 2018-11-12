@extends('manager.layout.app')

@section('content_header')
<h1>Cadastro de Aluno</h1>
@include('layouts.notifications')
<ol class="breadcrumb">
	<li><a href="{{ route('manager.home') }}">Dashboard</a></li>
	<li><a href="{{ route('students.index') }}">Alunos</a></li>
	<li>Novo</a></li>
</ol>	
@stop
@section('content')
<div class="row">
	<div class="col-md-12 ">
		<div class="box box-info ">
			<div class="box-header with-border">
				<h3 class="box-title">Formulário de Cadastro</h3>
			</div>
			<div class="box-body">
				{!! Form::open(['route' => 'students.store', 'enctype' => 'multipart/form-data']) !!} 
				@include('manager.student.form')				
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Salvar">
					{!! Form::close() !!} 
					<a href="{{ route('students.index' )}}"class="btn btn-danger">Voltar</a>
				</div>
			</div>
		</div>
	</div>
</div>
@stop


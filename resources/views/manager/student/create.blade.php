@extends('manager.layout.app')

@section('content_header')
    <h1>Cadastro de Aluno</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('manager.home') }}">Dashboard</a></li>
        <li><a href="{{ route('students.index') }}">Alunos</a></li>
        <li>Nova</a></li>
	</ol>
	<br>	
@stop

@section('content')
<div class=" container-fluid col-md-12 ">
	<div class="box box-info ">
		<div class="box-header with-border">
			<h3 class="box-title">Formulário de Cadastro</h3>
		</div>
		<div class="box-body">
			{!! Form::open(['route' => 'students.store']) !!} 
			<div class="row">
				<div class="col-md-8">
					<div class="form-group">
						{{ Form::label('name','Nome do Aluno')}}
						{{ Form::text('name', null, array_merge(['class' => 'form-control','autofocus'])) }}                        
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						{{ Form::label('cgm','CGM')}}
						{{ Form::text('cgm', null, array_merge(['class' => 'form-control','autofocus'])) }}                        
					</div>
				</div>
			</div>		    					
			<div class="form-group">
				{{-- {{ Form::input('submit','salvar',['class' => 'btn btn-primary'])}} --}}
				<input type="submit" class="btn btn-primary" value="Salvar">
			{!! Form::close() !!} 
				<a href="{{ route('students.index' )}}"class="btn btn-danger">Voltar</a>
			</div>
		</div>
	</div>
</div>
@stop


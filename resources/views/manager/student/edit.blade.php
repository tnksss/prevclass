@extends('manager.layout.app')
@section('title','| Editar aluno')
@section('content_header')
<h1>Editar Aluno</h1>
<ol class="breadcrumb">
	<li><a href="{{ route('manager.home') }}">Dashboard</a></li>
	<li><a href="{{ route('students.index') }}">Alunos</a></li>
	<li><a href=""></a>{{$student->name}}</a></li>
</ol>
@stop
@section('content')
<div class="row">
	<div class=" container-fluid col-md-12 ">
		<div class="box box-warning ">
			<div class="box-header with-border">		
			</div>
			<div class="box-body">
				{!! Form::open(['route' => ['students.update', $student->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!} 
				@include('manager.student.form')
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Alterar">
					{!! Form::close() !!} 
					<a href="{{ route('students.index' )}}"class="btn btn-danger">Voltar</a>
				</div> 
			</div>
		</div>
	</div>
</div>
@stop


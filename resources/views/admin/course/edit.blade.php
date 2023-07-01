@extends('admin.layout.app')
@section('title','| Editar curso')
@section('content_header')
<h1>Editar Curso</h1>
<ol class="breadcrumb">
	<li><a href="{{ route('admin.home') }}">Dashboard</a></li>
	<li><a href="{{ route('admin.home') }}">Cursos</a></li>
</ol>
@stop

@section('content')
<div class="row">
	<div class=" container-fluid col-md-12 ">
		<div class="box box-warning ">
			<div class="box-header with-border">
				<h3 class="box-title">Editar Curso</h3>
				@include('layouts.notifications')
			</div>
			<div class="box-body">
				{!! Form::open(['route' => ['courses.update', 'course'=>$course->id],  'method' => 'patch']) !!}
				@include('admin.course.form')
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Salvar">
					{!! Form::close() !!}
					<a href="{{ Route('courses.index') }}"class="btn btn-danger">Voltar</a>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
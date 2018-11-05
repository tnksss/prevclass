@extends('admin.layout.app')



@section('content_header')
    <h1>Editar Curso</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.home') }}">Cursos</a></li>
        <li><a href=""></a>{{$course->name}}</a></li>
	</ol>
	<br>
@stop

@section('content')
<div class=" container-fluid col-md-12 ">
	<div class="box box-warning ">
		<div class="box-header with-border">
			<h3 class="box-title">Editar Curso</h3>
			@include('admin.partials.errors')
		</div>
		<div class="box-body">
		{!! Form::open(['route' => ['courses.update', $course->unity->id,$course->id], 'method' => 'patch']) !!}
			<div class="row">
				<div class="col-md-8">
		    		<div class="form-group">
				    	<label for="name"> Nome do Curso </label>
				    	<input  id="name" name="name" class="form-control" value="{{ old('name') ?? $course->name ?? null }}" autofocus>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="code"> Código </label>
						<input  id="code" name="code" class="form-control" value="{{ old('code') ?? $course->code ?? null }}">
					</div>
				</div>
			</div>                
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Salvar">
				{!! Form::close() !!}
				<a href="{{ route('manager.home' )}}"class="btn btn-danger">Voltar</a>
			</div>
    	</div>
	</div>
</div>
@stop
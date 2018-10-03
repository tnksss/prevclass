@extends('manager.layout.app')

@section('content_header')
    <h1>Cadastro de Turma</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('manager.home') }}">Dashboard</a></li>
        <li><a href="{{ route('grades.index') }}">Turmas</a></li>
        <li>Novo</a></li>
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
	{!! Form::open(['route' => 'grades.store']) !!} 
		<div class="row">
			<div class="col-md-8">
				<div class="form-group">
					<label for="course_id">Curso</label>
					<select name="course_id" class="form-control" >
						@foreach ($courses as $course)
							<option class="form-control" value="{{$course->id}}">{{$course->name}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="name"> Nome da Turma </label>
					<input  id="name" name="name" class="form-control" value="" autofocus>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="degree"> Série/Ano </label>
					<input  id="degree" name="degree" class="form-control">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="shift">Turno</label>
					{{ Form::select('shift', array(1 => 'Manhã',
												  2 => 'Intermediário-Manhã',
												  3 => 'Tarde',
												  4 => 'Intermediário-Tarde',
												  5 => 'Noite'),['class'=>'form-control']) }}

				</div>    
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="order"> Turma </label>
					<input  id="order" name="order" class="form-control" width="20px">
				</div>        
			</div>
		</div>
				
				
			
			
            
			
            <div class="form-group">
				<input type="submit" class="btn btn-primary" value="Salvar">
	{!! Form::close() !!} 
	
	<a href="{{ route('grades.index' )}}"class="btn btn-danger">Voltar</a>
				</div>
                
                
			</fieldset>
				
		    
    </div>
</div>
</div>
@stop


@extends('manager.layout.app')



@section('content_header')
    <h1>Editar Turma</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li><a href="{{ route('grades.index') }}">Turmas</a></li>
        <li><a href=""></a>{{$grade->name}}</a></li>
	</ol>
	<br>
@stop

@section('content')
<div class=" container-fluid col-md-12 ">
<div class="box box-warning ">
    <div class="box-header with-border">


    </div>
    <div class="box-body">
	{!! Form::open(['route' => ['grades.update', $grade->id], 'method' => 'patch']) !!} 
			<div class="row">
				<div class="col-md-8">
		    		<div class="form-group">
				    	<label for="course_id">Curso</label>
					<select name="course_id" class="form-control" autofocus>
						@foreach ($courses as $course)
							<option class="form-control" value="{{old($grade->course->id) ?? $course->id ?? null }}">{{old($grade->course->name) ?? $course->name ?? null}}</option>
						@endforeach 
					</select>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="name"> Nome da Turma </label>
					<input  id="name" name="name" class="form-control" value="{{old('name') ?? $grade->name ?? null }}">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="degree"> Série/Ano </label>
						<input  id="degree" name="degree" class="form-control" value="{{old('degree') ?? $grade->degree ?? null }}">
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="shift">Turno</label>
						<select name="shift" id="shift">
							<option value=""> ----- </option>
							
							@foreach($shifts as $key => $value):
								{{'<option value="'.$key.'">'.$value.'</option>'}}
							@endforeach
						</select>
						
	
					</div>    
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="order"> Turma </label>
						<input  id="order" name="order" class="form-control" value="{{old('order') ?? $grade->order ?? null }}">
					</div>        
				</div>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Salvar">
					{!! Form::close() !!} 

					<a href="{{ route('courses.index' )}}"class="btn btn-danger">Voltar</a>

			</div> 
                
			
				
    </div>
</div>
</div>
@stop


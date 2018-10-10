@extends('manager.layout.app')



@section('content_header')
    <h1>Editar Aluno</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('manager.home') }}">Dashboard</a></li>
        <li><a href="{{ route('students.index') }}">Alunos</a></li>
        <li><a href=""></a>{{$student->name}}</a></li>
	</ol>
	<br>
@stop

@section('content')
<div class=" container-fluid col-md-12 ">
<div class="box box-warning ">
    <div class="box-header with-border">


    </div>
    <div class="box-body">
	{!! Form::open(['route' => ['students.update', $student->id], 'method' => 'patch']) !!} 
			<div class="row">
				<div class="col-md-8">
		    		<div class="form-group">
				    	<label for="name"> Nome da Aluno </label>
				    	<input  id="name" name="name" class="form-control" value="{{ old('name') ?? $student->name ?? null }}" autofocus>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="cgm"> CGM </label>
						<input  id="cgm" name="cgm" class="form-control" value="{{ old('cgm') ?? $student->cgm ?? null }}">
					</div>
				</div>
			</div>                
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Salvar">
					{!! Form::close() !!} 

					<a href="{{ route('students.index' )}}"class="btn btn-danger">Voltar</a>

			</div> 
                
			
				
    </div>
</div>
</div>
@stop


@extends('manager.layout.app')

@section('content_header')
    <h1>Nova Matrícula</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li><a href="{{ route('grades.index') }}">Turmas</a></li>
        <li>Nova</a></li>
	</ol>
	<br>	
@stop

@section('content')
<div class=" container-fluid col-md-12 ">
<div class="box box-info ">
    <div class="box-header with-border">
        <h3 class="box-title">Busca por CGM</h3>
    </div>
    <div class="box-body">
                {!! Form::open(['route' => 'enrollment.find']) !!}				
                
                				
				<div class="form-group">
                    <label for="cgm" >CGM do Aluno</label>
					<input id="cgm" name="cgm" class="form-control" style="width: 200px;" >
				</div>
             	

			</div>  
				
            	<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Pesquisar">

					{!! Form::close() !!} 
					<a href="{{ route('grades.index' )}}"class="btn btn-danger">Voltar</a>
				</div>
                
                
			</fieldset>
				
		    
    </div>
</div>
</div>
@stop


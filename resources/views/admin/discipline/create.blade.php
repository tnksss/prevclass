@extends('admin.layout.app')

@section('content_header')
    <h1>Cadastro de Disciplina</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
        <li><a href="{{ route('disciplines.index') }}">Disciplinas</a></li>
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
    {!! Form::open(['route' => 'disciplines.store']) !!} 
			<div class="row">
				<div class="col-md-8">
					<div class="form-group">
						<label for="name"> Nome da Disciplina </label>
						<input  id="name" name="name" class="form-control" value="" autofocus>
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<label for="code"> Código </label>
						<input  id="code" name="code" class="form-control">
					</div>
				</div>
			</div>		    	
                
            	<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Salvar">

					{!! Form::close() !!} 
					<a href="{{ route('disciplines.index' )}}"class="btn btn-danger">Voltar</a>
				</div>
                
                
			</fieldset>
				
		    
    </div>
</div>
</div>
@stop


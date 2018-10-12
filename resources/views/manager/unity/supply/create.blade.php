@extends('manager.layout.app')

@section('content_header')
    <h1>Novo Suprimento</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('manager.home') }}">Dashboard</a></li>
        <li><a href="{{ route('unities.index') }}">Unidades</a></li>
        <li>Novo</a></li>
	</ol>
	<br>	
@stop

@section('content')
<div class=" container-fluid col-md-12 ">
<div class="box box-info ">
        @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
        @endif
        @if(session('error'))
        <div class="alert alert-warning">
            {{session('error')}}
        </div>
        @endif
    <div class="box-header with-border">
        <h3 class="box-title">Municipio e Escola</h3>
    </div>
    <div class="box-body">
                <div class="form-group">
				    <h3> {{$unity->name}} </h3>				    
                </div>
                
                {!! Form::open(['route' => 'supplies.store','unity'=> $unity]) !!}
				<div class="form-group">
					<p><label for="year"> Ano </label></p>
					{{ Form::selectRange('year', 2018,2010	) }}
				</div>
                <div class="form-group">
                    <label for="user_id">Professor</label>
                    <select name="user_id" class="form-control">
                    @foreach ($teachers as $teacher)
                        <option class="form-control" value="{{$teacher->id}}">{{$teacher->name}}</option>                            
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="discipline_id">Disciplina</label>
                    <select name="discipline_id" class="form-control">
                    @foreach ($disciplines as $discipline)
                        <option class="form-control" value="{{$discipline->id}}">{{$discipline->name}}</option>                            
                    @endforeach
                    </select>
                </div>
            
				
			</div>  
				
            	<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Salvar">

					{!! Form::close() !!} 
					<a href="{{ route('unities.index' )}}"class="btn btn-danger">Voltar</a>
				</div>
                
                
			</fieldset>
				
		    
    </div>
</div>
</div>
@stop


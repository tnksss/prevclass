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
            @include('admin.partials.errors')
        </div>
        <div class="box-body">
        {!! Form::open(['route' => 'grades.store']) !!}
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        {{ Form::label('course_id','Curso')}}
                        {{ Form::select('course_id',$courses->pluck('name','id'),null,['placeholder'=>'Selecione um curso','class'=>'form-control'])}}
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {{ Form::label('year','Ano')}}
                        {{ Form::selectRange('year', 2018, 2015,null,array('class' => 'form-control','placeholder'=>'Selecione um ano')) }}

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                     <p>{{ Form::label('status', 'Status') }}</p>
                        {{ Form::radio('status', '1') }} Aberto   
                        {{ Form::radio('status', '0') }} Fechado
                    </div>  
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        {{ Form::label('degree','Seriação')}}
                        {{ Form::text('degree', null, array_merge(['class' => 'form-control'])) }}                        
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {{ Form::label('shift','Turno')}}
                        {{ Form::select('shift', $shifts ,null,['placeholder'=>'Selecione um turno','class'=>'form-control']) }}

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        {{ Form::label('order','Turma')}}
                        {{ Form::text('order', null, array_merge(['class' => 'form-control', 'style' => 'width:40px;'])) }}                        
                    </div>
                </div>
            </div>
            <div class="form-group">
				<input type="submit" class="btn btn-primary" value="Salvar">
                {!! Form::close() !!}
	            <a href="{{ route('grades.index' )}}"class="btn btn-danger">Voltar</a>
			</div>
        </div>
    </div>
</div>
@stop


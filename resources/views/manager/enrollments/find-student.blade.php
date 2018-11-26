@extends('manager.layout.app')
@section('title','| Buscar aluno')
@section('content_header')
<h1>Nova Matrícula</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
    <li>Nova Matrícula</a></li>
</ol>
@stop

@section('content')
<div class="row">
    <div class="col-md-12 ">
        <div class="box box-info ">
            <div class="box-header with-border">
                <h3 class="box-title">Busca por CGM</h3>
                @include('layouts.notifications')
            </div>
            <div class="box-body">
                {!! Form::open(['route' => 'enrollment.find']) !!}				
				<div class="form-group">
                    <label for="cgm" >CGM do Aluno</label>
					<input id="cgm" name="cgm" class="form-control" style="width: 200px;" >
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Pesquisar">
                    {!! Form::close() !!} 
                    <a href="{{ route('grades.index' )}}"class="btn btn-danger">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop


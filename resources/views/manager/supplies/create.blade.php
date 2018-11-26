@extends('manager.layout.app')
@section('title','| Criar suprimento')
@section('content_header')
<h1>Suprimento de professor</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('manager.home') }}">Dashboard</a></li>
    <li><a href="{{ route('manager.home') }}">Suprimentos</a></li>
    <li>Novo</a></li>
</ol>
@stop

@section('content')
<div class="row">
    <div class=" container-fluid col-md-12 ">
        <div class="box box-info ">
            <div class="box-header with-border">
                <h3 class="box-title">Inclusão</h3>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-4">
                        <p><strong> CPF: </strong></p>
                        <p>{{$teacher->cpf}}</p>                        
                    </div>
                    
                    <div class="col-md-6    ">
                        <p><strong> Nome: </strong></p>
                        <p>{{$teacher->name}}</p>                        
                    </div>                
                </div>
                <hr>
                {!! Form::open(['route' => ['supplies.store', $teacher->id]]) !!}
                {{ Form::hidden('user_id',$teacher->id)}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            {{ Form::label('grade_id','Turma')}}
                            <select name="grade_id" class="form-control">
                                @foreach ($grades as $grade)
                                <option class="form-control" value="{{$grade->id}}" >
                                    {{$grade->course->name .' - '. $grade->degree.' '. $grade->order.' - '
                                    .$grade->shift($grade->shift)}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                {{ Form::label('supplyDate', 'Data do suprimento')}}
                                {{ Form::date('supplyDate', '\Carbon\Carbon::now()',array('class'=> 'form-control') )}}
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
    </div>
@stop
    
    
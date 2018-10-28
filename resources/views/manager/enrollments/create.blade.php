@extends('manager.layout.app')

@section('content_header')
    <h1>Matrícula de Aluno</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('manager.home') }}">Dashboard</a></li>
        <li><a href="{{ route('grades.index') }}">Turmas</a></li>
        <li>Nova</a></li>
	</ol>
	<br>	
@stop

@section('content')
<div class=" container-fluid col-md-12 ">
    <div class="box box-info ">
        <div class="box-header with-border">
            <h3 class="box-title">Inclusão</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <p><strong> CGM: </strong></p>
                    <p>{{$student->cgm}}</p>                        
                </div>
                
                <div class="col-md-6    ">
                    <p><strong> Nome: </strong></p>
                    <p>{{$student->name}}</p>                        
                </div>                
            </div>
            <hr>
            {!! Form::open(['route' => ['enrollments.store', $student->id]]) !!}
             {{ Form::hidden('student_id',$student->id)}}
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
                        {{ Form::label('status', 'Situação Matrícula')}}
                        {{ Form::select('status',$statuses,null,['class'=>'form-control', 'placeholder' => 'Informe a situação'])}}                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        {{ Form::label('enrollmentDate', 'Data da Matrícula')}}
                        {{ Form::date('enrollmentDate', '\Carbon\Carbon::now()',array('class'=> 'form-control') )}}
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


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
				<div class="col-md-4">
					<div class="form-group">
							{{ Form::label('course_id','Curso')}}
							{{ Form::select('course_id',
											$courses->pluck('name','id'),
											$grade->course_id,
											['class'=>'form-control'])
											}}						
					</div>
				</div>
				<div class="col-md-4">
                    <div class="form-group">
							{{ Form::label('year','Ano')}}
							{{ Form::selectRange('year', 2018, 2015,$grade->year,array('class' => 'form-control','placeholder'=>'Selecione um ano')) }}
                    </div>
                </div>
				<div class="col-md-4">
                    <div class="form-group">
					 <p>{{ Form::label('status', 'Status') }}</p>
						@if($grade->status ==1)
							{{ Form::radio('status', '1','checked') }} Aberto
							{{ Form::radio('status', '0') }} Fechado	
						@else
							{{ Form::radio('status', '1') }} Aberto
							{{ Form::radio('status', '0','checked') }} Fechado	
						@endif                        
                    </div>  
                </div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						{{ Form::label('degree','Seriação')}}
						{{ Form::text('degree', $grade->degree, array_merge(['class' => 'form-control'])) }}                        
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						{{ Form::label('shift','Turno')}}
						{{ Form::select('shift', $shifts ,$grade->shift,['class'=>'form-control']) }}
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
							{{ Form::label('order','Turma')}}
							{{ Form::text('order', $grade->order, array_merge(['class' => 'form-control', 'style' => 'width:40px;'])) }}                        
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


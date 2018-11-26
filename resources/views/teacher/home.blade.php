@extends('teacher.layout.app')
@section('title','| Home')
@section('content_header')
<h1>Meu Dashboard</h1>
@stop

@section('content')
@include('layouts.notifications')

<div class="row">
    <div class="col-md-12">
        <div class="box-info box">
            <div class="box-body">
                <div class="col-sm-6">
                    <div class="box">
                        <div class="box-header">
                            <h4>Turmas</h4>
                        </div>
                        <div class="box-body">
                            @if($teacher->has('supplies'))
                            <div class="row">
                                @foreach ($teacher->grades as $grade )
                                <div class="col-sm-6 col-xs-6">
                                    <div class="small-box bg-aqua">
                                        <div class="inner">
                                            <h3>{{$grade->degree}} {{$grade->order}}</h3> 
                                            <p>{{$grade->course->unity->name}}</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-child"></i>
                                        </div>
                                        <a href="{{route('teacher.grade.show', ['id' => $grade->id])}}"
                                            class="small-box-footer">
                                            Detalhes <i class="fa fa-arrow-circle-right"></i>
                                        </a>
                                    </div>
                                </div>     
                                @endforeach
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="box">
                        <div class="box-header">
                            <h4>Informativos</h4>
                        </div>
                        <div class="box-body">
                            <canvas id="pie-chart"></canvas>
                        </div>
                    </div>  
                </div>
            </div>
        </div>     
    </div>    
</div>
@endsection
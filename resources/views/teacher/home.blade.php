@extends('teacher.layout.app')

@section('content_header')
    
        <h1>Meu Dashboard</h1>
    @stop

    @section('content')
        @include('admin.partials.errors')
        @if($teacher->has('supplies'))
        <div class="row">


        @foreach ($teacher->grades as $grade )
        <div class="col-lg-3 col-xs-6">
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
    
@endsection


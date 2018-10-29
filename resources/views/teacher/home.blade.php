@extends('teacher.layout.app')

@section('content')
    <section class="content-header">
        <h1>Dashboard</h1>
    </section>
    <section class="content">
        <p>You are logged in!</p>
        @if($teacher->has('supplies'))
        <div class="row">
            
    
        @foreach ($teacher->supplies as $supply)
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                    <div class="inner">
                    <h3><li>{{$supply->grade->degree}} {{$supply->grade->order}}</li></h3>
        
                        <p>New Orders</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>     
            
        @endforeach
        </div>
        @endif
    </section>
@endsection


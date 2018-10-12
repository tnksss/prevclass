@extends('manager.layout.app')

@section('content_header')
<h1>Suprimento</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
    <li><a href="{{ route('unities.show',['id' => $unity->id]) }}"></a>{{$unity->name}}</a></li>
    <li><a href="#">Suprimentos</a></li>
</ol>
<br>
@stop

@section('content')
<div class=" container-fluid col-md-12 ">
    <div class="box box-success">
        <div class="box-header with-border">
            <h3 class="box-title"><p><strong>Município:</strong> {{$unity->city->name}}</p>
                <p><strong>Nome da Unidade:</strong> {{$unity->name}}</p></h3>
        </div>
        <div class="box-body">
            
        </div>
    </div>
</div>
@stop
    
    
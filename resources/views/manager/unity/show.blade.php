@extends('manager.layout.app')



@section('content_header')
    <h1>Unidade</h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('manager.home') }}">Dashboard</a></li>
        <li><a href="{{ route('unities.index') }}">Unidades</a></li>
        <li><a href="{{ route('unities.show',['id' => $unity->id]) }}"></a>{{$unity->name}}</a></li>
	</ol>
	<br>
@stop

@section('content')
<div class=" container-fluid col-md-12 ">
<div class="box box-success">
    <div class="box-header with-border">
        <h3 class="box-title">Dados da Unidade</h3>
    </div>
    <div class="box-body">
                
        
        <h3>Nome da Unidade:</h3>
            <p>{{$unity->name}}</p>
        <h3>Endereço:</h3>
            <p>{{$unity->address}}</p>
        <h3>Número</h3>
            <p>{{$unity->number}}</p>
        <h3>Município:</h3>
            <p>{{$unity->city->name}}</p>
        <h3>Telefone:</h3>
            <p>{{$unity->phone}}</p>
        <h3>Email:</h3>
            <p>{{$unity->email}}</p>

                
    </div>
</div>
</div>
@stop


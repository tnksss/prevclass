@extends('admin.layout.app')
@section('title','| Editar secretário')
@section('content_header')
<h1>Secretário</h1>
<ol class="breadcrumb">
	<li><a href="{{ route('admin.home') }}">Dashboard</a></li>
	<li><a href="{{ route('unities.show', $manager->unity->id) }}">{{$manager->unity->name}}</a></li>
	<li>Editar secretário</a></li>
</ol>
@stop
@section('content')
<div class="row">
	<div class=" container-fluid col-md-12 ">
		<div class="box box-info ">
			<div class="box-header with-border">
				<h3 class="box-title">Formulário de Edição</h3>
			</div>
			@include('layouts.notifications')
			<div class="box-body">
				<div class="form-group">
					<h3> {{$manager->unity->name}} </h3>
				</div>
				{!! Form::open(['route' => ['unities.managers.update', 'manager'=>$manager->id, 'unity' => $manager->unity->id],  'method' => 'patch']) !!}
				
				@include('admin.manager.form')
				<a href="{{ route('unities.index' )}}"class="btn btn-danger">Voltar</a>
			</div>
			
		</div>
	</div>
</div>
</div>
@stop
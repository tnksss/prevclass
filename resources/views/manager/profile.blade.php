@extends('manager.layout.app')
@section('title','| Meu perfil')
@section('content_header')
<h1>Perfil</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('manager.home') }}">Dashboard</a></li>
    <li><a href=""></a>{{$manager->name}}</a></li>
</ol>
@stop

@section('content')
<div class="row">
    <div class=" container-fluid col-md-12 ">
        <div class="box box-warning ">
            <div class="box-header with-border">
                <h3 class="box-title">Meu Perfil</h3>
                @include('layouts.notifications')
            </div>
            <div class="box-body">
                {!! Form::open(['route' => ['manager-profile.update', $manager->id], 'method' => 'patch', 'enctype' => 'multipart/form-data']) !!} 
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="name"> Nome </label>
                            <input  id="name" name="name" class="form-control" value="{{ old('name') ?? $manager->name ?? null }}" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="email"> Email </label>
                            <input  id="email" name="email" class="form-control" value="{{ old('email') ?? $manager->email ?? null }}">
                        </div>
                        <div class="form-group">
                            <label for="password"> Senha </label>
                            <input  id="password" name="password" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        
                        <input type="file" id="avatar" name="avatar" type="hidden" class="upload_file" />                        
                        <label id="avatar" for="avatar"><img src="{{url('storage/managers/'.$manager->avatar)}}" width="200px" height="200px"/></label>
                        
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
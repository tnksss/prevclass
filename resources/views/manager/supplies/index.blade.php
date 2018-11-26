@extends('manager.layout.app')
@section('title','| Suprimentos')
@section('content_header')
<h1>Professores Supridos</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('manager.home') }}">Dashboard</a></li>
    <li>Professores</a></li>
    @include('layouts.notifications')
</ol>
@stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>CPF</th>
                            <th>Turmas</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        @forelse($supplies as $supply)
                        
                        <tr>
                            
                            <td><img class="img-circle img-bordered-sm img-mini" src="{{url('storage/managers/'.$supply->teacher->avatar)}}" alt="Teacher Image"></td>     
                            <td>{{$supply->teacher->profile}}</td>
                            <td>{{$supply->teacher->name}}</td>
                            <td>{{$supply->teacher->email}}</td>
                            <td>{{$supply->teacher->cpf}}</td>
                            <td>{{$supply->teacher->grades->count()}}</td>
                        </tr>
                        @empty
                        <tr>
                            
                            <td>Sem professores supridos até o momento.</td>
                        </tr>
                        @endforelse                        
                    </tbody>
                </table>
            </div>
            <div>
            </div>
        </div>
        @stop
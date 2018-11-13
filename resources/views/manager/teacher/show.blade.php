@extends('manager.layout.app')

@section('content_header')
<h1>Professor</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('manager.home') }}">Dashboard</a></li>
    <li><a href="{{ route('grades.index') }}"></a>Professores</a></li>
    <li>{{$teacher->name}}</li>
</ol>
@stop

@section('content')
<div class="row">
    <div class=" container-fluid col-md-12 ">
        <div class="box box-success">
            <div class="box-header with-border">
                @include('layouts.notifications')
                <h3>{{$teacher->name}}</h3>
                <h4>CPF: {{$teacher->cpf}}</h4>
                <h4>Email: {{$teacher->email}}</h4>
                
                <a href="{{URL::previous()}}"class="btn btn-info  btn-xs">Voltar</a>
            </div>
            <div class="box-body">
                    <h4>Suprimentos</h4>
                    <table class="table">
                            <tbody>
                                <tr>
                                    <th >Unidade</td>  
                                    <th >Curso </td>
                                    <th >Seriação</td>
                                    <th >Turno</td>
                                    <th >Turma</td>
                                </tr>
                                @foreach($supplies as $supply)
                                <tr>
                                    
                                    <td >{{$supply->grade->course->unity->name}}</td>  
                                    <td >{{$supply->grade->course->name}}</td>
                                    <td >{{$supply->grade->degree}}</td>
                                    <td >{{$supply->grade->shift($supply->grade->shift)}}</td>
                                    <td >{{$supply->grade->order}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
            </div>
        </div>
    </div>
</div>
@stop
                        
                        
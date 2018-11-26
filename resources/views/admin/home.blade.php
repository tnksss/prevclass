@extends('admin.layout.app')
@section('title','| Home')
@section('content_header')
<h1>Dashboard</h1>
@stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-body">
                <div class="col-md-6">
                    <div class="info-box bg-aqua">
                        <span class="info-box-icon"><i class="fa fa-institution"></i></span>                        
                        <div class="info-box-content">
                            <span class="info-box-text">Unidades</span>
                            <span class="info-box-number">{{$unities->count()}}</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 40%"></div>
                            </div>
                            <span class="progress-description">
                                40% Increase in 30 Days
                            </span>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="info-box bg-green">
                        <span class="info-box-icon"><i class="fa fa-pencil"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Secretários</span>
                            <span class="info-box-number">{{$teachers->count()}}</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 20%"></div>
                            </div>
                            <span class="progress-description">
                                20% Increase in 30 Days
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box bg-red">
                        <span class="info-box-icon"><i class="fa fa-archive"></i></span>
                        
                        <div class="info-box-content">
                            <span class="info-box-text">Matrículas</span>
                            <span class="info-box-number">{{$enrollments->count()}}</span>
                            
                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                70% Increase in 30 Days
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box bg-yellow">
                        <span class="info-box-icon"><i class="fa fa-briefcase"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Suprimentos</span>
                            <span class="info-box-number">{{$supplies->count()}}</span>
                            
                            <div class="progress">
                                <div class="progress-bar" style="width: 50%"></div>
                            </div>
                            <span class="progress-description">
                                50% Increase in 30 Days
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box bg-navy">
                        <span class="info-box-icon"><i class="fa fa-mortar-board"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Professores</span>
                            <span class="info-box-number">{{$managers->count()}}</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 70%"></div>
                            </div>
                            <span class="progress-description">
                                70% Increase in 30 Days
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="info-box bg-purple">
                        <span class="info-box-icon"><i class="fa fa-child"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Alunos</span>
                            <span class="info-box-number">{{$students->count()}}</span>
                            <div class="progress">
                                <div class="progress-bar" style="width: 50%"></div>
                            </div>
                            <span class="progress-description">
                                50% Increase in 30 Days
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


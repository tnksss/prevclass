@extends('admin.layout.app')

@section('content_header')
<h1>Unidades</h1>
<ol class="breadcrumb">
    <li><a href="{{ route('admin.home') }}">Dashboard</a></li>
    <li>Unidades</a></li>
    @include('admin.partials.errors')
</ol>
@stop
@section('content')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <a href="{{ route('unities.create') }}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> <strong>Cadastrar Unidade</strong></a>
                <div class="box-tools">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input name="table_search" class="form-control pull-right" placeholder="Procurar" type="text">
                        <div class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Município</th>
                            <th>Telefone</th>
                            <th>Ações</th>
                        </tr>
                        @foreach($unities as $unity)
                        <tr>
                            <td>{{ $unity->id }}</td>
                            <td>{{ $unity->name }}</td>
                            <td>{{ $unity->city->name }}</td>
                            <td>{{ $unity->phone }}</td>
                            <td>
                                @include('admin.partials.unity_buttons')
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop
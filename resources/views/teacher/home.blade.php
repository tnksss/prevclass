@extends('teacher.layout.app')

@section('content')
    <section class="content-header">
        <h1>Dashboard</h1>
    </section>
    <section class="content">
        <p>You are logged in!</p>
        @foreach ($teacher->supplies as $supply)
            <li>{{$supply->grade->name}}</li>
            
        @endforeach
    </section>
@endsection


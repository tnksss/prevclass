@extends('teacher.layout.session')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{route('teacher.home')}}"><b>Prev</b>Class</a>
        
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">Recuperar Senha</p>    
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif    
        <form method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}
            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                <span class="fa fa-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <br>
                <div class="col-xs-8">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Link para Resetar Senha</button>
                </div>
                <div class="col-xs-4">
                    <a href="{{route('login')}}" class="btn btn-default btn-block btn-flat">Voltar</a>
                </div>
                <br>
            </div>   
        </form>
    </div>    
</div>
@endsection
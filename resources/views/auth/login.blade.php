@extends('teacher.layout.session')
@section('content')
<div class="login-box">
    <div class="login-logo">
        <a href="{{route('teacher.home')}}"><b>Prev</b>Class</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Acesse sua conta</p>
        
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" id="email" name="email" class="form-control" placeholder="Email">
                <span class="fa fa-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                <span class="fa fa-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                     </span>
                @endif
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar-me
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Entrar</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <div class="row">
            <div class="col-xs-8">
                <a href="{{ route('password.request') }}">Esqueceu a senha?</a><br>
            </div>
            <div class="col-xs-4">
                <a href="{{route('manager.home')}}">Secretária(o)?</a><br>    
            </div>
        </div>
        
    </div>    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
@endsection
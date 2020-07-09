@extends('layouts.app')

@section('htmlheader_title')
    Register
@endsection

@section('main-content')


        <div class="register-box-body">
            <p class="login-box-msg">Registrar Usuarios</p>
            <form action="{{ url('/register') }}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ old('name') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email" value="{{ old('email') }}"/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Contraseña" name="password"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Repetir Contraseña" name="password_confirmation"/>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
        
              
                    <div class="col-xs-4 col-xs-push-1">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                    </div><!-- /.col -->
                </div>
            </form>
        </div><!-- /.form-box -->
    </div><!-- /.register-box -->

</body>

@endsection

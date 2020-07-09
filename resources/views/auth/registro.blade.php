@extends('layouts.app')

@section('htmlheader_title')
    Registro Usuarios
@endsection


@section('main-content')

<div class="register-box-body ">
            <b><p class="login-box-msg">Registrar Usuarios</p></b>
            <form action="{{ action('UsuariosController@create') }}" method="post" name="create">
                <input required type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group has-feedback">
                    <input required type="text" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input required type="text" class="form-control" placeholder="Nombres" name="name" value="{{ old('name') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input required type="text" class="form-control" placeholder="Apellidos" name="apellidos" value="{{ old('apellidos') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input required type="text" class="form-control" placeholder="Cedula" name="cedula" value="{{ old('cedula') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input required type="email" class="form-control" placeholder="{{ trans('adminlte_lang::message.email') }}" name="email" value="{{ old('email') }}"/>
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input required type="password" class="form-control" placeholder="Contraseña" name="password"/>
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input required type="password" class="form-control" placeholder="Repetir Contraseña" name="password_confirmation"/>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>

                @if (Auth::guest())

                @else
                <div class="form-group has-feedback">
                                <select id="tipo" name="tipo"  class="form-control" required>
                                <option value="" selected>Tipo de Usuario</option>
                                <option value="admin">Administrador</option>
                                <option value="operador">Operador</option>                                
                                <option value="usuario">Usuario</option>                                
                                </select>
                </div>
                @endif

                           
                    <div class="col-xs-4 col-xs-push-1">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                    </div>
                    
                    <div class="col-xs-4 col-xs-push-1">
                        <a href="{{ url('/login') }}" class="btn btn-danger btn-block btn-flat">Volver</a>
                    </div>
            
                </div>
                </form>
        </div><!-- /.form-box -->


@endsection
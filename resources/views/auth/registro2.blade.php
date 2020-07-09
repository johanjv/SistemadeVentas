@extends('layouts.app')

@section('htmlheader_title')
    Registro Usuarios
@endsection


@section('main-content')

<div class="col-md-8 col-md-offset-2">
<div class="register-box-body">
            <p class="login-box-msg">Registrar Usuarios</p>
            <form action="{{ action('UsuariosSinLoginController@create') }}" method="post" name="createsin">
                <input required type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group has-feedback">
                    <input required type="text" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input required type="text" class="form-control" placeholder="Nombre" name="name" value="{{ old('name') }}"/>
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
                <div class="form-group has-feedback">
                    <input type="hidden" class="form-control" name="tipo" id="tipo" value="usuario" >
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
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

                <div class="form-group has-feedback">
                    <label>Codigo de Afiliacion</label>
                    <input readonly type="text" class="form-control" name="codigo" value="A{{rand()}}"/>
                </div>

                 <div class="form-group has-feedback">
                    <label>¿Tiene un Codigo de Afiliacion?</label>
                    <input type="text" class="form-control" name="codigoref" value=""/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

              
                    <div class="col-xs-4 col-xs-push-1">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                    </div><!-- /.col -->

                    <div class="col-xs-4 col-xs-push-1">
                        <a href="{{ url('/login') }}" class="btn btn-danger btn-block btn-flat">Volver</a>
                    </div><!-- /.col -->
            </form>
                </div>

        </div><!-- /.form-box -->

@endsection
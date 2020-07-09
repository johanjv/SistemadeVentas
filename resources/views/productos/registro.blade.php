@extends('layouts.app')

@section('htmlheader_title')
    Registro Productos
@endsection


@section('main-content')

<div class="register-box-body ">
            <b><p class="login-box-msg">Registrar Productos</p></b>
            <form action="{{ action('ProductosController@create') }}" method="post" name="create">
                <input required type="hidden" name="_token" value="{{ csrf_token() }}">
                
                <div class="form-group has-feedback">
                    <input required type="text" class="form-control" placeholder="Nombres del Producto" name="nombre" value="{{ old('nombre') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input required type="text" class="form-control" placeholder="Descripcion" name="descripcion" value="{{ old('descripcion') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input required type="text" class="form-control" placeholder="Precio" name="precio" value="{{ old('precio') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input required type="text" class="form-control" placeholder="Cantidad" name="cantidad" value="{{ old('cantidad') }}"/>
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>                   
                    <div class="col-xs-4 col-xs-push-1">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
                    </div>
                    
                    <div class="col-xs-4 col-xs-push-1">
                        <a href="#" class="btn btn-danger btn-block btn-flat">Volver</a>
                    </div>
            
                </div>
                </form>
        </div><!-- /.form-box -->


@endsection
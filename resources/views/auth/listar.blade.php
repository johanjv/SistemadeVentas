@extends('layouts.app')

@section('htmlheader_title')
    Listar
@endsection


@section('main-content')
  <h4 class="text-center">Lista de Usuarios</h4> 

<div style="text-align: center">
    <div class="media">
        <a class="pull-left" href="#" style="text-align: center"></a>
        <div  class="media-body">
            <!-- Table -->
          <table id="tablaReg" class="table table-hover">
            <tr class='active'>
                <td class="info text-center" width="2%"><strong>Username</strong></td>
                <td class="info text-center"><strong>Nombre</strong></td>
                <td class="info text-center"><strong>Tipo</strong></td>
                <td class="info text-center"><strong>Email</strong></td>
                <td class="info text-center"><strong>Accion</strong></td>
            </tr>
            @if(isset($usuarios[0]))

                @foreach($usuarios as $usuario)
                <tr >
                    <td>  {{ $usuario->username }} </td>
                    <td>  {{ $usuario->name }} </td>
                    <td>  {{ $usuario->tipo }} </td>
                    <td>  {{ $usuario->email }} </td>
                    <td> 
                                 {!! Form::open(['action' => ['UsuariosController@delete', $usuario->id],'method' => 'POST']) !!}

              <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></button>


                    {!! Form::close() !!}
                   </td>
                </tr>
                @endforeach
            @else
                <tr >
                    <td colspan="7">No existen registros</td>
                </tr>
            @endif

          </table>
          <div class="pagination" style="text-align:center">
                {!! $usuarios->render() !!}
          </div> 
           <p> Página {{ $usuarios->currentPage() }} de {{ $usuarios->lastPage() }} </p>
        </div>
    </div>

@endsection
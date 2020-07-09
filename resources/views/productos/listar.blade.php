@extends('layouts.app')

@section('htmlheader_title')
    Listar
@endsection


@section('main-content')
  <h4 class="text-center">Lista de Productos</h4> 

<div style="text-align: center">
    <div class="media">
        <a class="pull-left" href="#" style="text-align: center"></a>
        <div  class="media-body">
            <!-- Table -->
          <table id="tablaReg" class="table table-hover">
            <tr class='active'>
                <td class="info text-center"><strong>Nombre</strong></td>
                <td class="info text-center"><strong>Descripcion</strong></td>
                <td class="info text-center"><strong>Precio</strong></td>
                <td class="info text-center"><strong>Cantidad</strong></td>
            </tr>
            @if(isset($productos[0]))

                @foreach($productos as $producto)
                <tr >
                    <td>  {{ $producto->nombre }} </td>
                    <td>  {{ $producto->descripcion }} </td>
                    <td>  {{ $producto->precio }} </td>
                    <td>  {{ $producto->cantidad }} </td>
                    <td> 
                                 {!! Form::open(['action' => ['ProductosController@delete', $producto->id],'method' => 'POST']) !!}

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
                {!! $productos->render() !!}
          </div> 
           <p> Página {{ $productos->currentPage() }} de {{ $productos->lastPage() }} </p>
        </div>
    </div>

@endsection
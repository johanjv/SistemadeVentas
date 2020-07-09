@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection




@section('main-content')

<div class="row">
        <div class="col-md-12">
          <div class="box box-success box-solid">
            <div class="box-header with-border">
              <center><h4 class="box-title">Registra tus Ventas</h4></center>
            </div>
            <!-- /.box-header -->
            <div class="box-body">

           
            <div class="col-md-12">
            <h4 class="page-header">
                Comprobantes
            </h4>

            <a class="btn btn-default btn-lg btn-block" href="{{ url('administracion/add') }}">Nuevo comprobante</a>

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="width:100px;" class="text-right">Client</th>
                        <th style="width:100px;" class="text-right">IVA</th>
                        <th style="width:160px;" class="text-right">Sub Total</th>
                        <th style="width:160px;" class="text-right">Total</th>
                        <th style="width:180px;" class="text-right">Creado</th>
                        <th style="width:30px;"></th>
                    </tr>
                </thead>
                <tbody>
                
                <?php for ($i=0; $i <= 3 ; $i++): ?>
                  <?php
                  $total = 1180 * $i;
                  $subtotal = $total / 1.18;
                  $iva = $total - $subtotal;
                  
                 ?>

                    <tr>
                        <td class="text-right">{{$i}}</td>
                        <td class="text-right">{{ number_format($iva, 2) }}</td>
                        <td class="text-right">{{ number_format($subtotal, 2) }}</td>
                        <td class="text-right">{{ number_format($total, 2) }}</td>
                        <td class="text-right">20/10/2020</td>
                        
                        
                    </tr>
                        <?php endfor; ?>
                </tbody>
            </table>
        </div>
 


            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      
@endsection

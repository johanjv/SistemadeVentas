@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')

<div class="row">
	<div class="col-md-12">
<br>
 
        @if (Auth::user()->tipo == 'admin')

              @include('administracion.home')

        @else
        
              @include('usuarios.home')

        @endif
	</div>
</div>

      
@endsection

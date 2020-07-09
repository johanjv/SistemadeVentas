@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')

<div class="row">
<br>
        <div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h4 class="box-title">Bienvenid@ {{ Auth::user()->name }} </h4>
            </div>
            <div class="box-body">
                <div>
                  <label class="label label-success">{{ Auth::user()->name }}</label>
                </div>

                <div>
                   <br>
                      @foreach ($referidos as $ref)
                        &nbsp; -> <label class="label label-danger"> {{ $ref->name }} </label> 
                      @endforeach    
                </div>
               
                
            </div>
          </div>
      </div>
</div>

      
@endsection

@extends('layouts.panel')

@section('content')

   <div class="card shadow">
    <div class="card-header border-0">
      <div class="row align-items-center">
        <div class="col">
          <h3 class="mb-0">Nueva Info</h3>
        </div>
        <div class="col text-right">
          <a href="{{ url('index') }}" class="btn btn-sm btn-default">Cancelar y volver</a>
        </div>
      </div>
    </div>
    <div class="card-body">
	   
      @if ($errors->any())
         <div class="alert alert-danger" role="alert">
          @foreach ($errors ->all() as $error)
            <li>{{ $error    }}</li>
          @endforeach
        </div>
      @endif
      <form action="{{ url('info') }}" method="post">
	    	@csrf
	    	<div class="form-group">
	    		<label for="name">Descripcion</label>
	    		<input type="text" name="descripcion" class="form-control" value="{{ old('descripcion') }}">
	    	</div>
	    	 <div class="form-group">
			    <label for="exampleFormControlSelect1">Tipo</label>
			   <select class="form-control" id="tipo" name="tipo">
          <option disabled selected> - Seleccione Tipo - </option>
            @foreach ( $tipos as $tipo )
               <option value="{{ $tipo->desc_tipo }}">{{ $tipo->desc_tipo }}</option>
            @endforeach
          </select>
         </div>      
        <div class="form-group">
          <label for="name">Telefono</label>
          <input type="text" name="fono" class="form-control" value="{{ old('fono') }}">
        </div>

         <div class="form-group">
          <div  style="width: 20rem;">
            <label for="fec_vigencia_ini">Fecha Inicial</label>
            <input class="form-control" type="date" name="fec_vigencia_ini" value="{{ $now->format('Y-m-d') }}" id="example-date-input">
             <label for="fec_vigencia_fin">Fecha Final</label>
            <input class="form-control" type="date" name="fec_vigencia_fin" value="{{ $now->format('Y-m-d') }}" id="example-date-input2">
          </div>
        </div>

        
	    	<button type="submit" class="btn btn-primary">Guardar</button>
	    </form>
    </div>
           
    </div>
@endsection
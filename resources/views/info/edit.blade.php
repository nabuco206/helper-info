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
      <form action="{{ url('info/'.$info->id) }}" method="post">
	    	@csrf
        @method('PUT')
	    	<div class="form-group">
	    		<label for="name">Descripcion</label>
	    		<input type="text" name="descripcion" class="form-control" value="{{ old('descripcion', $info->descripcion) }}">
	    	</div>
	    	 <div class="form-group">
			    <label for="exampleFormControlSelect1">Tipo - {{ $info->tipo }}</label>
			   <select class="form-control" id="tipo" name="tipo">
          <option> {{ $info->tipo }} </option>
            @foreach ( $tipos as $tipo )
               <option value="{{ $tipo->desc_tipo }}">{{ $tipo->desc_tipo }}</option>
            @endforeach
          </select>
         </div>      
        <div class="form-group">
          <label for="name">Telefono</label>
          <input type="text" name="fono" class="form-control" value="{{ old('fono', $info->fono) }}">
        </div>

         <div class="form-group">
          <div class="card" style="width: 20rem;">
            <label for="fec_vigencia_ini">Fecha Inicial</label>
            <input class="form-control" name="fec_vigencia_ini" type="date" value="{{ old('fec_vigencia_ini', $info->fec_vigencia_ini) }}" id="example-date-input">
             <label for="fec_vigencia_fin">Fecha Final</label>
            <input class="form-control" name="fec_vigencia_fin" type="date" value="{{ old('fec_vigencia_fin', $info->fec_vigencia_fin) }}" id="example-date-input2">
          </div>
        </div>

        
	    	<button type="submit" class="btn btn-primary">Editar</button>
	    </form>
    </div>
           
    </div>
@endsection
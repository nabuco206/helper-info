  @extends('layouts.panel')

  @section('content')


  <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center"> 
                 <div class="col">
                  <h2 class="mb-0">Mantenedor de Informacón</h3>
                </div> 
                <div class="col text-right">
                  <a href="{{ url('info/create') }}" class="btn btn-success">Nuevo Registro</a>
               
                 <a href="{{ route('home') }}" class="btn btn-sm btn-default">Volver</a>
               </div>
            </div>
            </div>
            <div class="card-body">
              @if (session('notification'))
              <div class="alert alert-success" role="alert">
                 {{ session('notification') }}
               </div>
              @endif 
            </div> 



    <div class="col-md-12 mb-4">
        <div class="card">             
            <div class="table-responsive">
            <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th scope="col">Fiscalia</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Descripcion</th>
                         <th scope="col">Telefono</th>
                        <th scope="col">Vigencia</th>
                        <th scope="col">Opciones</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($infosx as $infosxxx)
                          <tr>
                            <th scope="row">
                             {{ $infosxxx->fiscalia }}
                            </th>
                             <th scope="row">
                             {{ $infosxxx->tipo }}
                            </th>
                            <td>
                               {{ $infosxxx->descripcion }}
                            </td>
                            <td>
                               {{ $infosxxx->fono }}
                            </td>
                             <td>{{ date('d-M-y', strtotime($infosxxx->fec_vigencia_ini)) }} - {{ date('d-M-y', strtotime($infosxxx->fec_vigencia_fin)) }}</td>
                                <td>
                                  <form action="{{ url('/info/'.$infosxxx ->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                   <a href="{{ url('/info/'.$infosxxx ->id.'/edit') }}" class="btn btn-sm btn-primary">Editar</a>
                                   <button class="btn btn-sm btn-danger" type="submit">Eliminar</button>
                                </form>
                               
                              </td>
                          </tr>
                        @endforeach

                    </tbody>
                  </table>
                </div>
                <div class="card-body">
                    {{ $infosx->appends($_GET)->links()  }}
                </div> 
        </div>
    </div>

@endsection
 @extends('layouts.panel')

@section('content')

   <div class="card shadow">
           
        <form class="navbar-search">
        <div class="row">
            <div class="col-xl-3 col-md-6">
            
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                       <select class="form-control form-control-sm" name="sel_fiscalia">
                           <option disabled selected> - Seleccione Fiscalia - </option>
                          @foreach ( $fiscalias as $fls )
                             <option value="{{ $fls->gls_fiscalia }}">{{ $fls->gls_fiscalia }}</option>
                          @endforeach
                        </select>
                    </div>
                  </div>
                </div>
             
            </div>
            <div class="col-xl-3 col-md-6">
              
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                    <select class="form-control form-control-sm" name="sel_tipo">
                       <option disabled selected> - Seleccione Tipo - </option>
                          @foreach ( $tipos as $tipo )
                             <option value="{{ $tipo->desc_tipo }}">{{ $tipo->desc_tipo }}</option>
                          @endforeach
                    </select>
                    </div>
                  </div>
                </div>
            
            </div>
           
            <div class="col-xl-3 col-md-6">
             
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">  
                    <button type="submit" class="btn btn-secondary btn-sm">Buscar . . . </button>
                    </div>
                  </div>
                </div>
           
            </div> 
              
        </div>
        </form>

                 

            
            <div class="table-responsive">
              <div class="col-md-12 mb-4">
                 <div class="card">    

              <!-- Projects table -->
                <table class="table align-items-center table-flush">
                  <thead class="thead-light">
                    <tr>
                      <th scope="col">Fiscalia</th>
                      <th scope="col">Tipo</th>
                      <th scope="col">Descripcion</th>
                      <th scope="col">Telefono</th>
                      <th scope="col" colspan="2">Vigencia</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($infos as $infosxxx)
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
                           <!--<td>{{-- $infosxxx->fec_vigencia_ini --}}</td>-->
                           <td>{{ date('d-M-y', strtotime($infosxxx->fec_vigencia_ini)) }} - {{ date('d-M-y', strtotime($infosxxx->fec_vigencia_fin)) }}</td>
                          <td>                       
                          </td>
                        </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
              </div>
            </div>
          <div class="card-body">
                {{  $infos->appends($_GET)->links()  }}
          </div> 
          </div>
@endsection




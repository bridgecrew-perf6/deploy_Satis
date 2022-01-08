@extends('layouts.plantillaD')
@section('content')
<title>Lista Empresas</title>


          <nav class="navbar" >
            <div class="brand-title">TALLER DE INGENIERIA DE SOFTWARE</div>
            <a href="#" class="toggle-button">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </a>
            <div class="navbar-links">
              <ul>
                <li><a href="{{ route('admin.inicioA') }}">Inicio</a></li>
                <li  class="nav-item {{!Route::is('admin.lista')?:'active'}}"><a href="{{ route('admin.lista') }}">Lista de empresas</a></li>
                <li class="nav-item {{!Route::is('admin.docentes')?:'active'}}"><a href="{{ route('admin.docentes') }}">Lista de docentes</a></li>
                <li><a href="{{ route('auth.register2') }}">Registrar docentes</a></li>
                <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>
                
              </ul>
            </div>
          </nav>
          @endsection
          @section('cuerpo')

          @section('cuerpo')
          <section>
            {{ Breadcrumbs::render('admin.lista') }}
            
            <div class="container mt-5 mb-5 ">
              <h2 class="align-items-center avisos text-light">
                FUNDA EMPRESA
                </h2>
              <h1 class="text-center">Seleccione la gestión correspondiente de la  empresa</h1>
              <div class="col-md-1">Gestión:
                <form method="POST" action="{{ route('admin.lista') }}">
                  @csrf
                 
                  <select name="gestion" class="form-control" required>
                    <option value="1/2009">1/2009</option>
                    <option value="2/2009">2/2009</option>
                    <option value="1/2010">1/2010</option>
                    <option value="2/2010">2/2010</option>
                    <option value="1/2011">1/2011</option>
                    <option value="2/2011">2/2011</option>
                    <option value="1/2012">1/2012</option>
                    <option value="2/2012">2/2012</option>
                    <option value="1/2013">1/2013</option>
                    <option value="2/2013">2/2013</option>
                    <option value="1/2021">1/2021</option>
                    <option value="2/2021">2/2021</option>
                  </select>
                  <button type="submit" class="btn btn-primary">Buscar</button>
                </form>
              </div>
              @if (count($data)==0)
              <div class="container mt-5 mb-5">
<div class="col-sm-12 sinEmp">
<h1 class="align-items-center avisos text-light">
La gestión seleccionada no tiene grupo empresas registradas.
</h1>


</div>

</div> 
@else
            
            <div class=" row d-flex justify-content-between cards ">
             
             
              <table class="table tabla">
                <!--<h1 class="text-center">Seleccione la empresa</h1>-->
                                   
                <thead class="tablaL">
                  
                  <th class="text-center" border="1">Nombre corto</th>
                  <th class="text-center" border="1">Nombre Largo</th>
                  <th class="text-center" border="1">Gestión</th>
                  <th class="text-center" border="1">Docente</th>
                </thead>
                <tbody>
                   @foreach($data as $key=>$item)
                            
                  <tr>
                  
              
                      <td align="center">
                          {{$item->nombreC}}
                          
                      </td>
                      <td align="center">
                          {{$item->nombreL}}                                
                      </td>
                      <td align="center">
                        {{$item->gestion}}                                
                      </td>
            
                      <td align="center">
                        {{$item->nombre}}                           
                      </td>

                  </tr>
                  
              @endforeach
                </tbody>
              </table>
             
             
             
              {{--  <div class="col-sm-6">
              <h2><label for="empresas" class="form-label">Grupo Empresas</label></h2>
                    <style>
                        table, th, td {
                            border: 2px solid black;
                            padding: 10px;
                        }
                    </style>
                    <table name="empresas" border="1">
                        <tr>
                                <th class="text-center" border="1">Nombre corto</th>
                                <th class="text-center" border="1">Nombre Largo</th>
                        </tr>
                        
                        @foreach($data as $key=>$item)
                            
                            <tr>
                                <td align="center">
                                    {{$item->nombreC}}
                                    
                                </td>
                                <td>
                                    {{$item->nombreL}}                                
                                </td>
                            </tr>
                            
                        @endforeach
                        
                    </table>
              </div> --}}
                
            </div>
            @endif
            </div>
        </section>
    @endsection

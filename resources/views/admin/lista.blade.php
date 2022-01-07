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
            <div class=" row d-flex justify-content-between cards ">
             
              <table class="table tabla">
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
            </div>
        </section>
    @endsection

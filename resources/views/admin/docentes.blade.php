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
            {{ Breadcrumbs::render('admin.docentes') }}
            <div class="container mt-5 mb-5 ">
            <div class=" row d-flex justify-content-between cards ">
             
              <table class="table tabla">
                <thead class="tablaL">
                  
                  <th class="text-center" border="1">Correo</th>
                  <th class="text-center" border="1">Nombre</th>                  
                </thead>
                <tbody>
                   @foreach($data as $key=>$item)
                            
                  <tr>                 
              
                      <td align="center">
                          {{$item->username}}
                          
                      </td>
                      <td align="center">
                          {{$item->nombre}}                                
                      </td>                

                  </tr>
                  
              @endforeach
                </tbody>
              </table>
            </div>
            </div>
        </section>
    @endsection

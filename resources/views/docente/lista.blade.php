@extends('layouts.plantillaD')
@section('content')
          <nav class="navbar" >
            <div class="brand-title">TALLER DE INGENIERIA DE SOFTWARE</div>
            <a href="#" class="toggle-button">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </a>
            <div class="navbar-links">
              <ul>
                <li><a href="{{ route('docente.inicioD') }}">Inicio</a></li>
                <li><a href="{{ route('docente.convocatoriasD') }}">Agregar convocatoria</a></li>
              <li><a href="{{ route('docente.avisosD') }}">Agregar Avisos</a></li>
                <li><a href="{{ url('/docente/lista') }}">Lista de empresas</a></li>
                <li><a href="{{ route('auth.register') }}">Registrar estudiantes</a></li>
                <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>
                
              </ul>
            </div>
          </nav>
          @endsection
          @section('cuerpo') 

    <section>
        <div class=" mt-5 mb-5 ">
        <div class=" row d-flex justify-content-center cards ">
          <div class="col-sm-6">
            <h2 class="text-center"  for="empresas" class="form-label">Grupo Empresas</h2>
                <style>
                    table, th, td {
                        border: 2px solid black;
                        padding: 10px;
                       
                    }
                </style>
                @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
                @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
                @endif
                @if(Session::get('fail2'))
                <div class="alert alert-danger">
                    {{ Session::get('fail2') }}
                </div>
                @endif
                <table class="table tabl"name="empresas" border="1">
                    <tr  class="tablaL" > 
                            <th class="text-center" border="1">Nombre corto</th>
                            <th class="text-center" border="1">Nombre Largo</th>
                            <th class="text-center" colspan="2">Documentos</th>
                    </tr>
                    
                    @foreach($data as $key=>$item)
                        
                        <tr>
                            <td align="center">
                                {{$item->nombreC}}
                                
                            </td>
                            <td>
                                {{$item->nombreL}}                                
                            </td>
                            <td>
                                <form method="post" action="{{ route('estudiante.parteA') }}" enctype="multipart/form-data">                               
                                @csrf
                                <div class="d-flex justify-content-evenly" >
                                        
                                <div class=" " >
                                <button type="submit"  name="parteA" value="{{$item->id}}" class="btn btn-primary"  style="background-color: #215f88;">ParteA</button>
                            
                                </div>
                                </div>
                                </form>
                            </td>
                            <td>
                                <form method="post" action="{{ route('estudiante.parteB') }}" enctype="multipart/form-data">                               
                                @csrf
                                <div class="d-flex justify-content-evenly" >
                                        
                                <div class=" " >
                                <button type="submit"  name="parteB" value="{{$item->id}}" class="btn btn-primary"  style="background-color: #215f88;">ParteB</button>
                            
                                </div>
                                </div>
                                </form>
                            </td>
                        </tr>
                        
                    @endforeach
                    
                </table>
          </div>
            
        </div>
        </div>
    </section>
    @endsection

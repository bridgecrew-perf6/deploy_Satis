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
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  ver
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="{{ route('docente.planP') }}">Plan de pagos</a></li>
                  <li><a class="dropdown-item" href="{{ route('planTrabajos.index') }}">Plan de Trabajo</a></li>
                 
                </ul>
              </li>
              <li><a href="{{ url('/docente/calendario') }}">Calendario</a></li>
                <li><a href="{{ route('auth.register') }}">Registrar estudiantes</a></li>
                <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>
            
          </ul>
        </div>
      </nav>
      @endsection
      @section('cuerpo')
      <table name="empresas"  class="table tabla">
        <thead class="tablaL">
                <th class="text-center"><h4>Nombre corto</h4></th>  
                <th class="text-center"><h4>Nombre Largo</h4></th>
                <th class="text-center" colspan="9"><h4>Documentos</h4></th>
        </thead>
        
        @foreach($data as $key=>$item)
            
            <tr>
               
                <td  align="center">
                    <h5> {{$item->nombreC}}</h5>
                    
                </td>
            
                <td>
                    <h5>{{$item->nombreL}}</h5>
                                                  
                </td>
                <td>
                    <form method="post" action="{{ route('docente.planPshow') }}" enctype="multipart/form-data">                               
                    @csrf
                    <div class="d-flex justify-content-evenly" >
                            
                    <div class=" " >
                    <button type="submit"   value="{{$item->id}}" class="btn btn-primary"  style="background-color: #215f88;">ver Pago</button>
                
                    </div>
                    </div>
                    </form>
                </td>
            </tr>
            
        @endforeach  
    </table>
</section>
      @endsection
@extends('layouts.plantillaD')
@section('content')
          <nav class="navbar " >
            
            <div class="brand-title">TALLER DE INGENIERIA DE SOFTWARE</div>
            <a href="#" class="toggle-button">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </a>
            <div class="navbar-links">
              
              <ul>
                <li><a href="{{ route('estudiante.inicioE') }}">Inicio</a></li>
                <li><a href="{{ route('estudiante.empresa') }}">Empresa</a></li>
                <li><a href="{{ route('estudiante.documentosB') }}">Documentos base</a></li>
                <li><a href="{{ url('/estudiante/lista') }}">Lista de empresas</a></li>
                
                <li><a href="{{ url('/notificaciones') }}">Notificaciones @if(count($notificaciones)>0) {{count($notificaciones)}} @endif</a></li>
                
             <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registrar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{ route('fundaempresa') }}">Registrar funda empresa TIS</a></li>
            <li><a class="dropdown-item" href="{{ route('pagos.index') }}">Registrar plan de pagos</a></li>
            <li><a class="dropdown-item" href="{{ route('planTrabajos.index') }}">Registrar plan de Trabajo</a></li>
           
          </ul>
        </li>
                <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>
            
          </ul>
        </div>
      </div>
      </nav>
      @endsection
    
      @section('cuerpo')
      <section>
        
        <div class="mt-5 mb-5 ">
          <div class=" row d-flex justify-content-between cards ">
            <div class="col-sm-6 avisotes">
              <h2 class="align-items-center avisos text-light">
                Publicacion de convocatoria TIS
              </h2>
              <div class="card ">
                @foreach ($convocatorias as $convocatorias)
                <h5 class="card-title text-ligth">{{$convocatorias->name }}</h5>
                
                <p class="card-text">Documento:
                {{$convocatorias->nombre }}</p>
                <p class="card-text">Codigo: {{$convocatorias->codigo }}</p>
                <p class="card-text">Gestion: {{$convocatorias->gestion }}</p>
                <p class="card-text">Semestre: {{$convocatorias->semestre}}</p> 
              
              <form method="post" action="{{ route('docente.convocatoriaPdf') }}" enctype="multipart/form-data">                               
                @csrf
                <div class="d-flex justify-content-evenly" >
                        
                <div class=" " >
                <button type="submit"  name="archivote" value="{{$convocatorias->id}}" class="btn btn-primary"  style="background-color: #215f88;">Ver Documento</button>
            
                </div>
                </div>
                </form>
                
                
              @endforeach 
                <div class="card-body">
               
                </div>
              </div>
            </div>
  
            <div class="col-sm-6 avisotes">
              <h2 class="align-items-center avisos text-light">
                Avisos
              </h2>
              <div class="cardazo">
                @foreach ($avisos as $avisos)
                <h2 class="card-title text-ligth">{{$avisos->name }}</h2>
                
                <p class="card-text">{{$avisos->descripcion }}</p>
                <p class="card-text">codigo: {{$avisos->codigo }}</p>
                <p class="card-text">Gestion: {{$avisos->gestion }}</p>
                <p class="card-text">Semestre: {{$avisos->semestre}}</p> 
                @endforeach   
                <div class="card-body">

                </div>
              </div>            
            </div>
          </div>
        </div>
        </section>
@endsection

@extends('layouts.plantillaP')
@section('content')
<title>Documentos Base</title>
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
      <li><a href="{{ route('estudiante.documentosBaseView') }}">Documentos base</a></li>
      <li><a href="{{ url('/estudiante/lista') }}">Lista de empresas</a></li>
      
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
      <section >
        <div class="container mt-5 mb-5">
        <div class=" row d-flex justify-content-between cards ">
          <div class="col-sm-12">
            <h2 class="align-items-center avisos text-light">
              DOCUMENTOS BASE
            </h2>
            <div class="card ">
            @foreach ($documentos as $documentos)
                  <h3 class="card-title text-ligth">{{$documentos->name }}</h3>
                  
                  <p class="card-text">Documento:
            {{$documentos->nombre }}</p>
              
                  <p class="card-text">Gestion: {{$documentos->gestion }}</p>
                <form method="post" action="{{ route('docente.documentosDisplay') }}" enctype="multipart/form-data">                               
                  @csrf
                  <div class="d-flex justify-content-evenly" >
                          
                  <div class=" " >
                  <button type="submit"  name="archivote" value="{{$documentos->id}}" class="btn btn-primary"  style="background-color: #215f88;margin-bottom:20px;">Ver documento</button>
              
                  </div>
                  </div>
                  </form>
                  
                  
                @endforeach 
              </div>

          </div>
        </div>
      </div>
      </section>
@endsection

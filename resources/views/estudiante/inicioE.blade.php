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
                <li><a href="{{ route('estudiante.inicioE') }}">Inicio</a></li>
<<<<<<< HEAD
=======
                <li><a href="{{ route('estudiante.documentosB') }}">Documentos base</a></li>
>>>>>>> AleRaiCH
                <li><a href="{{ url('/estudiante/lista') }}">Lista de empresas</a></li>
                <li><a href="{{ route('fundaempresa') }}">Registrar funda empresa TIS</a></li>
                <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>
            
          </ul>
        </div>
      </nav>
      @endsection
    
      @section('cuerpo')
      <section>
        <div class="container mt-5 mb-5 ">
        <div class=" row d-flex justify-content-between cards ">
          <div class="col-sm-6">
            <h2 class="align-items-center avisos text-light">
              Publicacion de convocatoria TIS
            </h2>
            <div class="card ">
              @foreach ($convocatorias as $convocatorias)
                <h5 class="card-title text-ligth">{{$convocatorias->name }}</h5>
                
                <p class="card-text">link documento:
                <a class="" href="https://drive.google.com/file/d/1Kpy9tuMYdj1oB15c8nPVqKenT2fMZ2XX/view?usp=sharing">{{$convocatorias->nombre }}</a></p>
                <p class="card-text">codigo: {{$convocatorias->codigo }}</p>
                <p class="card-text">Gestion: {{$convocatorias->gestion }}</p>
                <p class="card-text">Semestre: {{$convocatorias->semestre}}</p> 
                @endforeach 
             


            
             
              <div class="card-body">
              
              </div>
            </div>
<<<<<<< HEAD
            <h2 class="align-items-center avisos text-light">
              DOCUMENTOS BASE
            </h2>
            <a class="card" href="https://drive.google.com/file/d/1Kpy9tuMYdj1oB15c8nPVqKenT2fMZ2XX/view?usp=sharing">Pliego de Especificaciones (PETIS)-II/2021</a>
=======
>>>>>>> AleRaiCH
          </div>

          <div class="col-sm-5 avisotes">
            <h2 class="align-items-center avisos text-light">
              Avisos
            </h2>



   <div class = "cars">
            <div class="cardazo">
              @foreach ($avisos as $avisos)
              <h5 class="card-title text-ligth">{{$avisos->name }}</h5>
              

              <p class="card-text">{{$avisos->descripcion }}</p>
              <p class="card-text">codigo: {{$avisos->codigo }}</p>
              <p class="card-text">Gestion: {{$avisos->gestion }}</p>
              <p class="card-text">Semestre: {{$avisos->semestre}}</p> 
              @endforeach   
              <div class="card-body">
         
           
              </div>
            </div>
           {{--  <div class="cardazo">

              <div class="card-body">
                <h5 class="card-title">Aviso importante   :</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

              </div>
            </div> --}}
            </div> 
          </div>
        </div>
      </div>
      </section>
@endsection

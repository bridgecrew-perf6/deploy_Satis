@extends('layouts.plantillaEstudiante')

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
                  
                  <p class="card-text">link documento:
                  <a class="" href="https://drive.google.com/file/d/1Kpy9tuMYdj1oB15c8nPVqKenT2fMZ2XX/view?usp=sharing">{{$convocatorias->nombre }}</a></p>
                  <p class="card-text">codigo: {{$convocatorias->codigo }}</p>
                  <p class="card-text">Gestion: {{$convocatorias->gestion }}</p>
                  <p class="card-text">Semestre: {{$convocatorias->semestre}}</p> 
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

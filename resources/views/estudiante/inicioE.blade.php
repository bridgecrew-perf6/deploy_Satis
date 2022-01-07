@extends('layouts.plantillaNotificaciones')
      @section('cuerpo')
      <section>
        {{ Breadcrumbs::render('estudiante.inicioE') }}
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

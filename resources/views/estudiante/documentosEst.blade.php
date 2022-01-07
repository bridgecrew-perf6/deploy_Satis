@extends('layouts.plantillaEstudiante')
@section('content')
<title>Documentos Base</title>
@endsection
      @section('cuerpo')
      <section >
        {{ Breadcrumbs::render('estudiante.documentosBaseView') }}
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

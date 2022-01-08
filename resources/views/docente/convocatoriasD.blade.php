@extends('layouts.plantillaDocente')
 @section('cuerpo')
 {{ Breadcrumbs::render('docente.convocatoriasD') }}
 <title>Convocatoria</title>
         
 <div class="container mt-5 formulario">
          <div class="formCyA">
            <h1 Style="text-align: center;">CONVOCATORIA</h1>
            <div class="text-center">
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
          </div>
          <form class="row g-3"  method="post" action="{{ route('docente.subirPdf') }}" enctype="multipart/form-data">
          
            @csrf
         <div class="col-md-4">
              <label for="firstName" class="form-label">Mensaje:</label>
              <input type="text" class="form-control" name="name" required >
            </div>
    
          <div Style="margin-top: 40px;"  >
            <label  for="convocatoria" >Elegir Documento:</label>
            <input name= "archivote" type="file" name="convocatoria" id="convocatoria" required>
            

            </div>

            <div class="col-md-6 d-flex justify-content-between ">
              <button type="submit" class="btn btn-primary "style="background-color: #215f88;">Publicar</button>
              
            </div>
          </form> 
          </div>
          </form>
      </div>
      <section>
        <div class="container mt-5 mb-5">
            <div class=" row d-flex justify-content-between cards ">
                <div class="col-sm-12">
                    <h2 class="align-items-center avisos text-light">
                        CONVOCATORIAS PUBLICADAS
                    </h2>
                    <div class="card ">
                      @foreach ($convocatorias as $convocatorias)
                      <h5 class="card-title text-ligth">{{ $convocatorias->name }}</h5>

                      <p class="card-text">Documento:
                          {{ $convocatorias->nombre }}</p>
                          <div class="container d-flex justify-content-end">
                            <form action="{{ route('convocatorias.destroy', $convocatorias) }}" method="POST"
                                onclick="return confirm('¿Esta seguro que desea eliminar la convocatoria?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    style="border: none; background-color:transparent;margin-right: 50px;">
                                    <i class="fas fa-trash fa-lg text-danger"></i>

                                </button>
                            </form>
                            <form action="">
                                <a href="{{ route('convocatorias.edit', $convocatorias) }}">
                                    <i class="fas fa-edit  fa-lg"></i>

                                </a>
                            </form>
                        </div>

                  <form method="post" action="{{ route('docente.convocatoriaPdf') }}"
                          enctype="multipart/form-data">
                          @csrf
                          <div class="d-flex justify-content-evenly">

                              <div class=" ">
                                  <button type="submit" name="archivote" value="{{ $convocatorias->id }}"
                                      class="btn btn-primary" style="background-color: #215f88;margin-bottom:20px;">Ver
                                      Documento</button>

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

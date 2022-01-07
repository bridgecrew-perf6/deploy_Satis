@extends('layouts.plantillaDocente')
 @section('cuerpo')
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
      @endsection
     
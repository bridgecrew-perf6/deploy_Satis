@extends('layouts.plantillaDocente')
@section('cuerpo')
    {{ Breadcrumbs::render('docente.documentosB') }}
    <title>Documento Base</title>
    <div class="container mt-5 formularioDocu">
        <div class="formCyA">
            <h1 Style="text-align: center;">Documentos Base</h1>
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
            <form class="row g-3" method="post" action="{{ route('docente.subirDocuB') }}"
                enctype="multipart/form-data">
               
                @csrf
                <div class="col-md-12">
                    <label class="form-label">Mensaje:</label>
                    <textarea name="name" class="form-control" placeholder="" id="floatingTextarea2"
                        style="height: 100px" required></textarea>
                </div>
                <div Style="margin-top: 40px;">
                    <label for="convocatoria">Elegir Documento:</label>
                    <input name="archivote" type="file" name="convocatoria" id="convocatoria" required>


                </div>

                <div class="col-md-6 d-flex justify-content-between ">
                    <button type="submit" class="btn btn-primary " style="background-color: #215f88;">Publicar</button>

                </div>


            </form>

        </div>
        </form>
   
    
        <h1 class="text-center">DOCUMENTOS BASE PUBLICADOS</h1>
        <div class="formCyA">
        
            <div class="">
            <div class="container">
            @foreach ($documentos as $documentos)
                <h3 class="card-title text-ligth">{{ $documentos->name }}</h3>

                <p class="card-text">Documento:
                    {{ $documentos->nombre }}</p>

                <p class="card-text">Gestion: {{ $documentos->gestion }}</p>
            </div>   
                <div class="container d-flex justify-content-end">
                <form  action="{{ route('documento.destroy', $documentos) }}" method="POST"onclick="return confirm('¿Esta seguro que desea eliminar el documento base?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="border: none; background-color:transparent;margin-right: 50px;">
                        <i class="fas fa-trash fa-lg text-danger"></i>

                    </button>
                </form>
             
              
                <form action="" >

                <a href="{{ route('documentos.edit',$documentos) }}">
                    <i class="fas fa-edit  fa-lg"></i>

                </a>
                </form>
                </div>
            
        </div>
                <form method="post" action="{{ route('docente.documentosDisplay') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex justify-content-evenly">

                        <div class=" ">
                            <button type="submit" name="archivote" value="{{ $documentos->id }}" class="btn btn-primary"
                                style="background-color: #215f88;margin-bottom:20px;">Ver documento</button>

                        </div>
                    </div>
                </form>

            </div>
        </div>
            @endforeach
        
@endsection


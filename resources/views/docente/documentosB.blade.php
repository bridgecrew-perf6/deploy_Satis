@extends('layouts.plantillaDocente')
@section('cuerpo')
    <title>Documento Base</title>
    <div class="container mt-5 formularioDocu">
        <div class="formCyA">
            <h1 Style="text-align: center;">Documentos Base</h1>

            <form class="row g-3" method="post" action="{{ route('docente.subirDocuB') }}"
                enctype="multipart/form-data">
                @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif
                @csrf
                <div class="col-md-12">
                    <label class="form-label">Mensaje:</label>
                    <textarea name="name" class="form-control" placeholder="" id="floatingTextarea2"
                        style="height: 100px" required></textarea>
                </div>

                <div class="container">
                    <div class=" col-md-2">
                        <label class="form-label">Codigo:</label>
                        <input name="codigo" type="text" class="form-control" required>
                    </div>
                    <div class="col-md-1">Año:
                        <select name="gestion" class="form-control" required>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-2"> Elegir semestre :

                    <select name="semestre" class="form-control " required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>

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
    </div>
    <div class="container mt-5 formularioDocu">
        <h1 class="text-center">DOCUMENTOS BASE PUBLICADOS</h1>
        <div class="formCyA">
            @foreach ($documentos as $documentos)
                <h3 class="card-title text-ligth">{{ $documentos->name }}</h3>

                <p class="card-text">Documento:
                    {{ $documentos->nombre }}</p>

                <p class="card-text">Gestion: {{ $documentos->gestion }}</p>

                <form action="{{ route('documento.destroy', $documentos) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="border: none; background-color:transparent;">
                        <i class="fas fa-trash fa-lg text-danger"></i>

                    </button>
                </form>

                <form method="post" action="{{ route('docente.documentosDisplay') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex justify-content-evenly">

                        <div class=" ">
                            <button type="submit" name="archivote" value="{{ $documentos->id }}" class="btn btn-primary"
                                style="background-color: #215f88;margin-bottom:20px;">Ver documento</button>

                        </div>
                    </div>
                </form>


            @endforeach
        </div>
    </div>

@endsection

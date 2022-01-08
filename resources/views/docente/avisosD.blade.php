@extends('layouts.plantillaDocente')
@section('cuerpo')
    {{ Breadcrumbs::render('docente.avisosD') }}
    <title>Aviso</title>
    <div class="container mt-5 formulario">

        <div class="formCyA">
            <h1 Style="text-align: center;">AVISOS</h1>
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
            <form class="row g-3 " method="post" action="{{ route('docente.avisosDos') }}"
                enctype="multipart/form-data">
                @csrf
                <div class="col-md-4">
                    <label  class="form-label">Titulo:</label>
                    <input type="text" class="form-control" name="name" required>
                    <span class="text-danger">@error('name'){{ $message }} @enderror</span>


                </div>
                {{-- <div  class="col-md-12">Fecha:
            <input Style="margin-left: 40px;" type="date" value="2021-09-30" min="2021-01-01" max="2021-12-31">
            </div> --}}
            
                <div class="form-floating">

                    <textarea name="descripcion" class="form-control" placeholder="" id="floatingTextarea2"
                        style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Escribir Aviso</label>
                    <span class="text-danger">@error('descripcion'){{ $message }} @enderror</span>
                </div>

                <div class="col-md-6 d-flex justify-content-between ">
                    <button type="submit" class="btn btn-primary" style="background-color: #215f88;">Publicar</button>

                </div>
            </form>
        </div>
    </div>
    <section>
        <div class="container mt-5 mb-5">
            <div class=" row d-flex justify-content-between cards ">
                <div class="col-sm-12">
                    <h2 class="align-items-center avisos text-light">
                        AVISOS PUBLICADOS
                    </h2>
                    <div class="card ">
                        @foreach ($avisos as $avisos)
                            <h3 class="card-title text-ligth">{{ $avisos->name }}</h3>

                            <p class="card-text">Descripcion:
                                {{ $avisos->descripcion }}</p>
                            <div class="container d-flex justify-content-end" style="margin-bottom: 50px">
                                <form action="{{ route('avisos.destroy', $avisos) }}" method="POST"
                                    onclick="return confirm('¿Esta seguro que desea eliminar el aviso?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        style="border: none; background-color:transparent;margin-right: 50px;">
                                        <i class="fas fa-trash fa-lg text-danger"></i>

                                    </button>
                                </form>
                                <form action="">
                                    <a href="{{ route('avisos.edit', $avisos) }}">
                                        <i class="fas fa-edit  fa-lg"></i>

                                    </a>
                                </form>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

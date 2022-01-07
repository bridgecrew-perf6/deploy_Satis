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
                    <label for="firstName" class="form-label">Titulo:</label>
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
@endsection

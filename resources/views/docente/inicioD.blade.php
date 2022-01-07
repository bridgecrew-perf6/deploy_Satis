@extends('layouts.plantillaDocente')
@section('cuerpo')
    <title>INICIO</title>

    <section>
       
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

        <div class="mt-5 mb-5 ">
            <div class=" row d-flex justify-content-between cards ">
                <div class="col-sm-6 avisotes">
                    <h2 class="align-items-center avisos text-light">
                        Publicacion de convocatoria TIS
                    </h2>
                    <div class="card ">

                        @foreach ($convocatorias as $convocatorias)
                            <h5 class="card-title text-ligth">{{ $convocatorias->name }}</h5>

                            <p class="card-text">Documento:
                                {{ $convocatorias->nombre }}</p>





                            <form action="{{ route('convocatorias.destroy', $convocatorias) }}" onclick="return confirm('¿Esta seguro que desea eliminar la convocatoria?')"
                                method="POST">
                                <script>
                                    $(document).on("submit", "#formulario-eliminar", function(ev) {
                                        ev.preventDefault();
                                    });
                                    
                                </script>
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="border: none; background-color:transparent;">
                                    <i class="fas fa-trash fa-lg text-danger"></i>

                                </button>
                            </form>

                        <form method="post" action="{{ route('docente.convocatoriaPdf') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="d-flex justify-content-evenly">

                                    <div class=" ">
                                        <button type="submit" name="archivote" value="{{ $convocatorias->id }}"
                                            class="btn btn-primary" style="background-color: #215f88;">Ver
                                            Documento</button>

                                    </div>
                                </div>
                            </form>
                            

                        @endforeach
{{-- 
                        <script>
                            $('#formulario-eliminar').submit(function(e) {
                                e.preventDefault();
                            });
                              Swal.fire({
                                    title: 'Are you sure?',
                                    text: "You won't be able to revert this!",
                                    icon: 'warning',
                                    showCancelButton: true,
                                    confirmButtonColor: '#3085d6',
                                    cancelButtonColor: '#d33',
                                    confirmButtonText: 'Yes, delete it!'
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        Swal.fire(
                                            'Deleted!',
                                            'Your file has been deleted.',
                                            'success'
                                        )
                                    }
                                }) 
                        </script> --}}
                       
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
                            <h2 class="card-title text-ligth">{{ $avisos->name }}</h2>

                            <p class="card-text">{{ $avisos->descripcion }}</p>


                            <form action="{{ route('avisos.destroy', $avisos) }}" method="POST"onclick="return confirm('¿Esta seguro que desea eliminar el aviso?')">
                                @csrf
                                @method('DELETE')

                                <button type="submit" style="border: none; background-color:transparent;">
                                    <i class="fas fa-trash fa-lg text-danger"></i>

                                </button>
                            </form>
                        @endforeach

                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

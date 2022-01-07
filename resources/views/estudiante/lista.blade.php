@extends('layouts.plantillaEstudiante')
<title>Lista de empresas</title>
@section('cuerpo')
    <section>

        <div class="container mt-5 mb-5 ">
            <div class=" row d-flex justify-content-between cards ">

                <table class="table tabla">
                    <thead class="tablaL">

                        <th class="text-center" border="1">Nombre corto</th>
                        <th class="text-center" border="1">Nombre Largo</th>
                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)

                            <tr>


                                <td align="center">
                                    {{ $item->nombreC }}

                                </td>
                                <td align="center">
                                    {{ $item->nombreL }}
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
        </div>
    </section>
@endsection

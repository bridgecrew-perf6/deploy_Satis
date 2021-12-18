@extends('layouts.plantilla')

@section('cuerpo')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Registro Plan de Plan de Trabajo </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('planTrabajos.create') }}" title="Crear un plan de Trabajo"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <!--<th>No</th>-->
            <th>N° Sprint</th>
            <th>Resultado</th>
            <th>Duración</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>

            <th width="280px">Acción</th>

        </tr>
        @foreach ($planTrabajos as $planTrabajo)
            <tr>
                <!--<td>{{ ++$i }}</td>-->
                <td>{{ $planTrabajo->sprint }}</td>
                <td>{{ $planTrabajo->resultado }}</td>
                <td>{{ $planTrabajo->duración}}</td>
                <td>{{ $planTrabajo->fecha_inicio}}</td>
                <td>{{ $planTrabajo->fecha_fin}}</td>


                <td>

                    <form action="{{ route('planTrabajos.destroy', $planTrabajo->id) }}" method="POST">

                        <a href="{{ route('planTrabajos.show', $planTrabajo->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('planTrabajos.edit', $planTrabajo->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>


            </tr>
        @endforeach
    </table>



@endsection

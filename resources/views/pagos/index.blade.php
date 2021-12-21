@extends('layouts.plantilla')

@section('cuerpo')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Registro Plan de Pagos </h2>
            </div>
            @if ($LoggedUserInfo->tipo===2)
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pagos.create') }}" title="Crear un pago"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
            @endif
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Estado del Proyecto</th>
            <th>Entregable</th>
            <th>Fecha de Entrega</th>
            <th>Porcentaje</th>
            <th>Costo(BS.)</th>
            @if ($LoggedUserInfo->tipo===2)
            <th width="280px">Acción</th>
            @endif

        </tr>
        @foreach ($pagos as $pago)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pago->estado_del_proyecto }}</td>
                <td>{{ $pago->entregable }}</td>
                <td>{{ $pago->fecha_de_entrega}}</td>
                <td>{{ $pago->porcentaje}}</td>
                <td>{{ $pago->costo }}</td>

                <td>
                    @if ($LoggedUserInfo->tipo===2)
                    <form action="{{ route('pagos.destroy', $pago->id) }}" method="POST">

                        <a href="{{ route('pagos.show', $pago->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="{{ route('pagos.edit', $pago->id) }}">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
                @endif

            </tr>
        @endforeach
    </table>



@endsection

@extends('layouts.plantilla')

@section('cuerpo')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Registro Plan de Pagos </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pagos.create') }}" title="Create a pago"> <i class="fas fa-plus-circle"></i>
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
            <th>No</th>
            <th>Estado del Proyecto</th>
            <th>Entregable</th>
            <th>Fecha de Entrega</th>
            <th>Porcentaje</th>
            <th>Costo(BS.)</th>

            <th width="280px">Acción</th>

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

            </tr>
        @endforeach
    </table>

    {!! $pagos->links() !!}

@endsection

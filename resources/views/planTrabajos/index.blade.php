@extends('layouts.plantilla')
@section('content')
          <nav class="navbar">
            <div class="brand-title">TALLER DE INGENIERIA DE SOFTWARE</div>
            <a href="#" class="toggle-button">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </a>
            <div class="navbar-links">
              <ul>
                <li><a href="{{ route('estudiante.inicioE') }}">Inicio</a></li>
                <li><a href="{{ route('estudiante.empresa') }}">Empresa</a></li>
                <li><a href="{{ route('estudiante.documentosB') }}">Documentos base</a></li>
                <li><a href="{{ url('/estudiante/lista') }}">Lista de empresas</a></li>
                
             <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registrar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{ route('fundaempresa') }}">Registrar funda empresa TIS</a></li>
            <li><a class="dropdown-item" href="{{ route('pagos.index') }}">Registrar plan de pagos</a></li>
            <li><a class="dropdown-item" href="{{ route('planTrabajos.index') }}">Registrar plan de Trabajo</a></li>
           
          </ul>
        </li>
                <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>
            
          </ul>
            </div>
          </nav>
          @endsection
@section('cuerpo')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Registro Plan de Plan de Trabajo </h2>
            </div>
            @if ($LoggedUserInfo->tipo==3)
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('planTrabajos.create') }}" title="Crear un plan de Trabajo"> <i class="fas fa-plus-circle"></i>
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
            <!--<th>No</th>-->
            <th>N° Sprint</th>
            <th>Resultado</th>
            <th>Duración</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            @if ($LoggedUserInfo->tipo==3)
            <th width="280px">Acción</th>
            @endif
        </tr>
        @foreach ($planTrabajos as $planTrabajo)
            <tr>
                <!--<td>{{ ++$i }}</td>-->
                <td>{{ $planTrabajo->sprint }}</td>
                <td>{{ $planTrabajo->resultado }}</td>
                <td>{{ $planTrabajo->duración}}</td>
                <td>{{ $planTrabajo->fecha_inicio}}</td>
                <td>{{ $planTrabajo->fecha_fin}}</td>

                @if ($LoggedUserInfo->tipo==3)
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
                @endif


            </tr>
        @endforeach
    </table>



@endsection

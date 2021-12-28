@extends('layouts.plantillaP')
@section('content')
          <nav class="navbar " >
            
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
            <li><a class="dropdown-item" href="{{ route('pagos.create') }}">Registrar plan de pagos</a></li>
            <li><a class="dropdown-item" href="{{ route('planTrabajos.index') }}">Registrar plan de Trabajo</a></li>
           
          </ul>
        </li>
                <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>
            
          </ul>
        </div>
      </div>
      </nav>
      @endsection

@section('cuerpo')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Plan de Trabajo</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('planTrabajos.index') }}" title="Go back"> <i
                        class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <!--@if ($errors->any())
        <div class="alert alert-danger">
            <strong>¡Ups!</strong> Hubo algunos problemas con su entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif-->
    <div class="formPlanT">
    <form action="{{ route('planTrabajos.update', $planTrabajo->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>N° Sprint:</strong>
                    <input required type="text" name="sprint" value="{{ $planTrabajo->sprint }}" class="form-control" placeholder="N° Sprint del proyecto">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Resultado:</strong>
                    <textarea class="form-control" style="height:200px" name="resultado"
                        placeholder="Resultado del sprint">{{ $planTrabajo->resultado }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Duración(días) del Sprint:</strong>
                    <textarea class="form-control" style="height:50px" name="duracion"
                        placeholder="Días de duración del Sprint">{{ $planTrabajo->duración }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha Inicio:</strong>
                    <input required type="date" name="fecha_inicio" class="form-control" placeholder="{{ $planTrabajo->fecha_inicio }}"
                        value="{{ $planTrabajo->fecha_inicio }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha Fin:</strong>
                    <input required type="date" name="fecha_fin" class="form-control" placeholder="{{ $planTrabajo->fecha_fin }}"
                        value="{{ $planTrabajo->fecha_fin }}">
                </div>
            </div>


            <div class="col-md-6 d-flex justify-content-between ">
                <button type="submit" class="btn btn-primary" style="background-color: #215f88;margin-top: 50px;">Guardar</button>
            </div>
        </div>

    </form>
</div>
@endsection

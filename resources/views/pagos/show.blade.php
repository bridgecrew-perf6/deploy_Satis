@extends('layouts.plantillaD')
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
                <li  class="nav-item {{!Route::is('estudiante.inicioE')?:'active'}}"><a href="{{ route('estudiante.inicioE') }}">Inicio</a></li>
                <li><a href="{{ route('estudiante.empresa') }}">Empresa</a></li>
                <li><a href="{{ route('estudiante.documentosBaseView') }}">Documentos base</a></li>
                <li><a href="{{ url('/estudiante/lista') }}">Lista de empresas</a></li>
                
             <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registrar
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="{{ route('fundaempresa') }}">Registrar funda empresa TIS</a></li>
            <li><a class="dropdown-item" href="{{ route('pagos.index') }}">Registrar plan de pagos</a></li>
            <li><a class="dropdown-item" href="{{ route('planTrabajos.create') }}">Registrar plan de Trabajo</a></li>
           
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
                <h2> {{ $pago->estado_del_proyecto }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pagos.index') }}" title="Go back"> <i
                        class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    <div class="formPlanT">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Estado del Proyecto:</strong>
                {{ $pago->estado_del_proyecto }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Entregable:</strong>
                {{ $pago->entregable }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha de Entrega:</strong>
                {{ $pago->fecha_de_entrega }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Porcentaje:</strong>
                {{ $pago->porcentaje }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Costo(Bs.):</strong>
                {{ $pago->costo }}
            </div>
        </div>
        <!--<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Created:</strong>
                {{ date_format($pago->created_at, 'jS M Y') }}
            </div>
        </div>-->
    </div>
</div>
@endsection

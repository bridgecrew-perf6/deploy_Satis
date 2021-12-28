@extends('layouts.plantillaD')
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
              
              <li><a href="{{ route('docente.inicioD') }}">Inicio</a></li>
              <li><a href="{{ route('docente.convocatoriasD') }}">Agregar convocatoria</a></li>
                <li><a href="">Agregar Avisos</a></li>
                <li><a href="{{ url('/docente/lista') }}">Lista de empresas</a></li>
              
                <li><a href="{{ url('/docente/calendario') }}">Calendario</a></li>
                <li><a href="{{ route('auth.register') }}">Registrar estudiantes</a></li>
                <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>
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

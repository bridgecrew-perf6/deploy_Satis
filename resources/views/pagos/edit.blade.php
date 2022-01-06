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
                <h2>Editar Plan de Pagos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('pagos.index') }}" title="Go back"> <i
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
    <form action="{{ route('pagos.update', $pago->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
           
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Estado del Proyecto:</strong>
                    <input required type="text" name="estado_del_proyecto" value="{{ $pago->estado_del_proyecto }}" class="form-control" placeholder="Estado del Proyecto">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Entregable:</strong>
                    <textarea class="form-control" style="height:200px" name="entregable"
                        placeholder="Entregable">{{ $pago->entregable }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha de Entrega:</strong>
                    <input required type="date" name="fecha_de_entrega" class="form-control" placeholder="{{ $pago->fecha_de_entrega }}"
                        value="{{ $pago->fecha_de_entrega }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Porcentaje:</strong>
                    <input required type="text" name="porcentaje" class="form-control" placeholder="{{ $pago->porcentaje }}"
                        value="{{ $pago->porcentaje }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Costo(BS):</strong>
                    <input required type="number" step="0.01" name="costo" class="form-control" placeholder="{{ $pago->costo}}"
                        value="{{ $pago->costo }}">
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-between ">
                <button type="submit" class="btn btn-primary" style="background-color: #215f88;margin-top: 50px;">Guardar</button>
            </div>
        </div>

    </form>
</div>
@endsection

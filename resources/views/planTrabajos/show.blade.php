@extends('layouts.plantilla')

@section('cuerpo')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> {{ $planTrabajo->sprint }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('planTrabajos.index') }}" title="Go back"> <i
                        class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>N° Sprint:</strong>
                {{ $planTrabajo->sprint }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Resultado:</strong>
                {{ $planTrabajo->resultado }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Duración(días) del Sprint:</strong>
                {{ $planTrabajo->duración }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha Inicio:</strong>
                {{ $planTrabajo->fecha_inicio }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Fecha Fin:</strong>
                {{ $planTrabajo->fecha_fin }}
            </div>
        </div>

        <!--<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Date Created:</strong>
                {{ date_format($planTrabajo->created_at, 'jS M Y') }}
            </div>
        </div>-->
    </div>
@endsection

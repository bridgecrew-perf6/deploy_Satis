@extends('layouts.plantillaD')

@section('cuerpo')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> {{ $notificacion->mensaje_notificacion }}</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('notificaciones.index') }}" title="Go back"> <i
                        class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>
    <div class="formPlanT">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cuerpo:</strong>
                {{ $notificacion->mensaje_notificacion }}
            </div>
        </div>
        <!--<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Usuario:</strong>
                {{ $notificacion->sender_id }}
            </div>
        </div>-->
        
       
    </div>
</div>
@endsection

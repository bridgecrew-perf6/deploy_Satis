@extends('layouts.plantillaP')


@section('cuerpo')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Escribir mensaje de Notificación</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('notificaciones.index') }}" title="Go back"> <i
                        class="fas fa-backward "></i> </a>
            </div>
        </div>
    </div>

    <div class="formPlanT">
    <form action="{{ route('notificaciones.update', $notificacion->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
           
            <!--<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cuerpo:</strong>
                    <input required type="text" name="mensaje_notificacion" value="{{ $notificacion->mensaje_notificacion }}" class="form-control" placeholder="Cuerpo">
                </div>
            </div>-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cuerpo:</strong>
                    <textarea class="form-control" style="height:200px" name="mensaje_notificacion"
                        placeholder="Cuerpo">{{ $notificacion->mensaje_notificacion }}</textarea>
                </div>
            </div>
            
            
            <div class="col-md-6 d-flex justify-content-between ">
                <button type="submit" class="btn btn-primary" style="background-color: #215f88;margin-top: 50px;">Enviar</button>
            </div>
        </div>

    </form>
</div>
@endsection

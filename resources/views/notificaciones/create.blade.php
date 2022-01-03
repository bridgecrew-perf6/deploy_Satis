@extends('layouts.plantillaD')

@section('cuerpo')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-center">Enviar Notificaciones</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('notificaciones.index') }}" title="Go back"> <i class="fas fa-backward "  ></i> </a>
            </div>
        </div>
    </div>

    
    <!--<div class="formPlanT">-->
    <div class="formPlanT">
    <form action="{{ route('notificaciones.store') }}" method="POST" >
        @csrf

        <div class="container">
            <!--<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cuerpo:</strong>
                    <input required type="text" name="mensaje_notificacion" class="form-control" placeholder="Cuerpo">
                </div>
            </div>-->
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Mensaje:</strong>
                    <textarea required class="form-control" id="myTextarea" style="height:200px;" name="mensaje_notificacion"
                        placeholder="Cuerpo"></textarea>
                </div>
            </div>
            
            
            <div class="col-md-6 d-flex justify-content-between ">
                <button type="submit" class="btn btn-primary" style="background-color: #215f88;margin-top: 50px;">Enviar</button>
            </div>
        </div>
    

    </form>
</div>
@endsection

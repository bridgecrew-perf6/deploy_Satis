@extends('layouts.plantilla')

@section('cuerpo')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Agregar Nuevo Plan de Trabajo</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('planTrabajos.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
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
    <form action="{{ route('planTrabajos.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>N° Sprint:</strong>
                    <input required type="text" name="sprint" class="form-control" placeholder="N° Sprint del proyecto">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Resultado:</strong>
                    <textarea required class="form-control" style="height:50px" name="resultado"
                        placeholder="Resultado del sprint"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Duración(días) del Sprint:</strong>
                    <input required type="text" name="duración" class="form-control" placeholder="Días de duración del Sprint">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha Inicio:</strong>
                    <input required type="date" name="fecha_inicio" class="form-control" placeholder="Fecha Inicio del sprint">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fecha Fin:</strong>
                    <input required type="date" name="fecha_fin" class="form-control" placeholder="Fecha Fin del sprint">
                </div>
            </div>


            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </div>

    </form>
@endsection

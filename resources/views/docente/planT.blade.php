@extends('layouts.plantillaDocente')
 @section('cuerpo')
 <title>Plan de trabajo</title>
      @foreach ($empresas as $empresa)
      @if(@$usuario_empresa->emp && @$usuario_empresa->emp== $empresa->id || $LoggedUserInfo->tipo==2)
      <div class="row">
          <div class="col-lg-12 margin-tb">
              <div class="pull-left">
                  <h2>Grupo Empresa {{$empresa->nombreL}}: Registro Calendario Plan de Trabajo </h2>
              </div>
          </div>
      </div>
  
      <table class="table table-bordered table-responsive-lg">
          <tr>
              <!--<th>No</th>-->
              <th>N° Sprint</th>
              <th>Resultado</th>
              <th>Duración</th>
              <th>Fecha Inicio</th>
              <th>Fecha Fin</th>
          </tr>
          @foreach ($planTrabajos as $planTrabajo)
          @if((@$usuario_empresa->emp==@$planTrabajo->id_empresa || $LoggedUserInfo->tipo==2) && @$planTrabajo->id_empresa == $empresa->id)
              <tr>
                  <!--<td>{{ ++$i }}</td>-->
                  <td>{{ $planTrabajo->sprint }}</td>
                  <td>{{ $planTrabajo->resultado }}</td>
                  <td>{{ $planTrabajo->duración}}</td>
                  <td>{{ $planTrabajo->fecha_inicio}}</td>
                  <td>{{ $planTrabajo->fecha_fin}}</td>
  
              </tr>
              @endif
          @endforeach
      </table>
      @endif
      @endforeach

      @endsection
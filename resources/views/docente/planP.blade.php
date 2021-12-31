@extends('layouts.plantillaDocente')
      @section('cuerpo')
      <title>Plan de pagos</title>
      @foreach ($empresas as $empresa)
      @if(@$usuario_empresa->emp == $empresa->id || $LoggedUserInfo->tipo==2)
      <div class="row">
          <div class="col-lg-12 margin-tb">
              <div class="pull-left">
                  <h2>Grupo Empresa {{$empresa->nombreL}}: Registro Plan de Pagos </h2>
              </div>
          </div>
      </div>
     
      <table class="table table-bordered table-responsive-lg">
          <tr>
              <th>No</th>
              <th>Estado del Proyecto</th>
              <th>Entregable</th>
              <th>Fecha de Entrega</th>
              <th>Porcentaje</th>
              <th>Costo(BS.)</th>
          </tr>
          @foreach ($pagos as $pago)
          @if((@$usuario_empresa->emp==@$pago->id_empresa || $LoggedUserInfo->tipo==2) && @$pago->id_empresa == $empresa->id)
              <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{ $empresa->id }}</td>
                  <td>{{ $pago->entregable }}</td>
                  <td>{{ $pago->fecha_de_entrega}}</td>
                  <td>{{ $pago->porcentaje}}</td>
                  <td>{{ $pago->costo }}</td>
                  @if ($LoggedUserInfo->tipo==3)
                  <td>
                      
                      
                  </td>
                  @endif
  
              </tr>
              @endif
          @endforeach
      </table>
      @endif
      @endforeach
  



    {{--   <table name="empresas"  class="table tabla">
        <thead class="tablaL">
                <th class="text-center"><h4>Nombre corto</h4></th>  
                <th class="text-center"><h4>Nombre Largo</h4></th>
                <th class="text-center" colspan="9"><h4>Documentos</h4></th>
        </thead>
        
        @foreach($data as $key=>$item)
            
            <tr>
               
                <td  align="center">
                    <h5> {{$item->nombreC}}</h5>
                    
                </td>
            
                <td>
                    <h5>{{$item->nombreL}}</h5>
                                                  
                </td>
                <td>
                    <form method="post" action="{{ route('docente.planPshow', $item->id) }}" enctype="multipart/form-data">                               
                    @csrf
                    <div class="d-flex justify-content-evenly" >
                            
                    <div class=" " >
                    <button type="submit"   value="{{$item->id}}" class="btn btn-primary"  style="background-color: #215f88;">ver Pago</button>
                
                    </div>
                    </div>
                    </form>
                </td>
            </tr>
            
        @endforeach  
    </table>
</section> --}}
      @endsection
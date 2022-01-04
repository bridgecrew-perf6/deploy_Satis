@extends('layouts.plantilla')

@section('cuerpo')

        
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        @if ($LoggedUserInfo->tipo==3)
                        <h2>Notificaciones recibidas </h2>
                        @endif
                        @if ($LoggedUserInfo->tipo==2)
                        <h2>Notificaciones enviadas </h2>
                        @endif

                    </div>
                
                    @if ($LoggedUserInfo->tipo==2)
                    <div class="pull-right">
                        <a class="btn btn-success" href="{{ route('notificaciones.create') }}" title="Nuevo Mensaje"> <i class="fas fa-plus-circle"></i>
                            </a>
                    </div>
              @endif
            </div>
            </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered table-responsive-lg">
        <tr>
            <!--<th>No</th>-->
            <th>Mensajes</th>
            <!--<th>Selecionar grupo empresa</th>
            <th>Selecionar grupo empresa2</th>-->
           <!--aqui era tipo 3-->
            

        </tr>
        
        
        @foreach ($notificaciones as $notificacion)
                <tr>
                    <td>{{$notificacion->mensaje_notificacion}}</td>
                
                

            </tr>
        @endforeach
        
        
    </table>
  
   
   
@endsection

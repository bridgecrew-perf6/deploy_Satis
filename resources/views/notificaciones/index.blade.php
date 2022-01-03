@extends('layouts.plantilla')

@section('cuerpo')

        
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Notificaciones enviadas </h2>
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
            <th>Cuerpo</th>
            <!--<th>Selecionar grupo empresa</th>
            <th>Selecionar grupo empresa2</th>-->
           <!--aqui era tipo 3-->
            @if ($LoggedUserInfo->tipo==2)
            <th width="280px">Acción</th>
            @endif

        </tr>
        
        
           
                <tr>
                    <td></td>
                
                    @if ($LoggedUserInfo->tipo==2)  
                <td>
                    
                    <form  method="POST">

                        <a title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a >
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
           @endif

            </tr>
        
        
    </table>
  
   
   
@endsection

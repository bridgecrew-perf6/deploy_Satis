@extends('layouts.plantillaEstudiante')

@section('cuerpo')

        
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        @if ($LoggedUserInfo->tipo==3)
                        <h2>Notificaciones recibidas </h2>
                        <nav class="navbar "style="justify-content: center" >
            
                            <div class="brand-title"></div>
                            <a href="#" class="toggle-button">
                              <span class="bar"></span>
                              <span class="bar"></span>
                              <span class="bar"></span>
                            </a>
                            <div class="navbar-links">
                              
                              <ul>
                                <li  class="nav-item {{!Route::is('estudiante.inicioE')?:'active'}}"><a href="{{ route('estudiante.inicioE') }}">Inicio</a></li>
                                <li class="nav-item {{!Route::is('estudiante.empresa')?:'active'}}"><a href="{{ route('estudiante.empresa') }}">Empresa</a></li>
                                <li><a href="{{ route('estudiante.documentosBaseView') }}">Documentos base</a></li>
                                <li class="nav-item {{!Route::is('estudiante.lista')?:'active'}}"><a href="{{ route('estudiante.lista') }}">Lista de empresas</a></li>
                                
                             <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Registrar
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="{{ route('fundaempresa') }}">Registrar funda empresa TIS</a></li>
                            <li><a class="dropdown-item" href="{{ route('pagos.index') }}">Registrar plan de pagos</a></li>
                            <li><a class="dropdown-item" href="{{ route('planTrabajos.index') }}">Registrar plan de Trabajo</a></li>
                           
                          </ul>
                        </li>
                                
                            
                          </ul>
                        </div>
                      </div>
                      </nav>
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

@extends('layouts.plantillaL')
@section('content')
      <nav class="navbar"style="justify-content: center">
        <div class="brand-title"></div>
        <a href="#" class="toggle-button">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </a>
        <div class="navbar-links">
          <ul>
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="{{ url('/lista') }}">Lista de empresas</a></li>
            <li class="nav-item {{!Route::is('auth.login')?:'active'}}"><a href="{{route('auth.login') }}" >Iniciar Sesión</a></li>
            
          </ul>
        </div>
      </nav>
      @endsection
      @section('cuerpo')

<div class="container">
   <div class="row justify-content-center pt-5 mt-5 m-1 caja">
      <div class="col-md-6 col-sm-8 col-xl-4 col-lg-5 formulario">
      
      <div class="form-group text-center pt-3">
      <h1 class="text-dark">INICIAR SESIÓN</h1>
      </div>

           <form action="{{ route('auth.check') }}" method="post">
            @if(Session::get('fail'))
               <div class="alert alert-danger">
                  {{ Session::get('fail') }}
               </div>
            @endif
  
           @csrf
              <div class="form-group">
                 <label style="color:black">Usuario</label>
                 <input type="text" class="form-control" name="username" placeholder="Ingrese su email" value="{{ old('username') }}">
                 <span class="text-danger">@error('required'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label style="color:black">Contraseña</label>
                 <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña">
                 <span class="text-danger">@error('password'){{ $message }} @enderror</span>
              </div>
              <button type="submit" class="btn btn-block ingresar">Ingresar</button>
              <br>              
           </form>
      </div>
   </div>
</div>
@endsection


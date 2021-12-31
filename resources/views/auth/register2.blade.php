@extends('layouts.plantillaD')
@section('content')
          <nav class="navbar">
            <div class="brand-title">TALLER DE INGENIERIA DE SOFTWARE</div>
            <a href="#" class="toggle-button">
              <span class="bar"></span>
              <span class="bar"></span>
              <span class="bar"></span>
            </a>
            <div class="navbar-links">
              <ul>
                <li><a href="{{ route('admin.inicioA') }}">Inicio</a></li>
                <li><a href="{{ url('/admin/lista') }}">Lista de empresas</a></li>
                <li><a href="{{ route('auth.register2') }}">Registrar docentes</a></li>
                <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>
                
              </ul>
            </div>
          </nav>
          @endsection
          @section('cuerpo')
  <div class="container  mt-5 formulario">
       <div class="formCyA">
        <h1 Style="text-align: center;">REGISTRAR DOCENTE</h1>
           <form action="{{ route('auth.save2') }}" method="post">

           @if(Session::get('success'))
             <div class="alert alert-success">
                {{ Session::get('success') }}
             </div>
           @endif

           @if(Session::get('fail'))
             <div class="alert alert-danger">
                {{ Session::get('fail') }}
             </div>
           @endif

           @csrf
           <div class="form-group">
                 <label>Nombre</label>
                 <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre" value="{{ old('name') }}">
                 <span class="text-danger">@error('name'){{ $message }} @enderror</span>
              </div>              
              <div class="form-group">
                 <label>Contraseña</label>
                 <input type="password" class="form-control" name="password" placeholder="Ingrese una contraseña">
                 <span class="text-danger">@error('password'){{ $message }} @enderror</span>
              </div>
              <button Style=" background-color: #215f88; margin-top: 50px; " type="submit" class="btn btn-primary" >Registrar</button>
              <br>
                          
           </form>
          </div>
        </div>
     </div>
     @endsection
  
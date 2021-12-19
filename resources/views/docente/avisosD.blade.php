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
              
              <li><a href="{{ route('docente.inicioD') }}">Inicio</a></li>
              <li><a href="{{ route('docente.convocatoriasD') }}">Agregar convocatoria</a></li>
                <li><a href="">Agregar Avisos</a></li>
                <li><a href="{{ url('/docente/lista') }}">Lista de empresas</a></li>
                <li><a href="{{ url('/docente/calendario') }}">Calendario</a></li>
                <li><a href="{{ route('auth.register') }}">Registrar estudiantes</a></li>
                <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>
            </div>
          </nav>
@endsection

@section('cuerpo')
         <div class="container mt-5 formulario">

          <div class="cardForm formFunda formA">
            <h1 Style="text-align: center;">AVISOS</h1>
          <form class="row g-3 " method="post" action="{{ route('docente.avisosDos') }}" enctype="multipart/form-data">
           
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
            <div class="col-md-4">
              <label for="firstName" class="form-label">Titulo:</label>
              <input type="text" class="form-control" name="name" required>
              <span class="text-danger">@error('name'){{ $message }} @enderror</span>
              

            </div>
            {{-- <div  class="col-md-12">Fecha:
            <input Style="margin-left: 40px;" type="date" value="2021-09-30" min="2021-01-01" max="2021-12-31">
            </div> --}}
            <div class="container">
            <div class=" col-md-2">
              <label  class="form-label">Codigo:</label>
              <input name="codigo"type="text" class="form-control" required>
              <span class="text-danger">@error('codigo'){{ $message }} @enderror</span>
            </div> 
            <div class="col-md-1">Año:
              <select name="gestion" class="form-control" required>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="2019">2019</option>
                <option value="2018">2018</option>
                <option value="2017">2017</option>
                <option value="2016">2016</option>
                <option value="2015">2015</option>
                <option value="2014">2014</option>
                <option value="2013">2013</option>
              </select>
            </div>
          </div>
            
            <div class="col-md-2"> Elegir semestre :
              
           
              <select name = "semestre" class="form-control " required>
              <option value="1">1</option>
              <option value="2">2</option>
            </select>
            
          </div>
         
            <div class="form-floating">
              
              <textarea name="descripcion" class="form-control" placeholder="" id="floatingTextarea2" style="height: 100px"></textarea>
              <label for="floatingTextarea2">Escribir Aviso</label>
              <span class="text-danger">@error('descripcion'){{ $message }} @enderror</span>
            </div>

            <div class="col-md-6 d-flex justify-content-between ">
              <button type="submit" class="btn btn-primary" style="background-color: #215f88;">Publicar</button>
              
            </div>
          </form> 
          </div>
        </div>
@endsection
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
              <li><a href="{{ route('docente.avisosD') }}">Agregar Avisos</a></li>
              <li><a href="{{ url('/docente/lista') }}">Lista de empresas</a></li>
            
              <li><a href="{{ url('/docente/calendario') }}">Calendario</a></li>
                <li><a href="{{ route('auth.register') }}">Registrar estudiantes</a></li>
                <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>
              </ul>
            </div>
          </nav>
          @endsection
 @section('cuerpo')
         <div class="container mt-5 formulario">
          <div class="formPlanO">
            <h1 Style="text-align: center;">Orden de cambio</h1>
         
          <form class="row g-3"  method="post" action="{{ route('docente.ordenG') }}" enctype="multipart/form-data">
            @if(Session::get('success'))
            <div class="alert alert-success">
               {{ Session::get('success') }}
            </div>
           @endif           
            @csrf
            <h2>Parte A</h2>
            <div class="col-md-12 ">
            <label class="form-label">Caratula</label>
              <input type="text" class="form-control" name="caratulaA" required >
            </div>
            <div class="container">
           <div class="col-md-12">
              <label  class="form-label">Indice</label>
              <input name="indiceA"type="text" class="form-control" required>
            </div> 
            <div class="col-md-12 ">
              <label  class="form-label">Carta de presentacion</label>
              <input name="carta"type="text" class="form-control" required>
            </div> 
            <div class="col-md-12 ">
              <label  class="form-label">Boleta de garantia</label>
              <input name="boleta"type="text" class="form-control" required>
            </div> 
            <div class="col-md-12 ">
              <label  class="form-label">Conformacion de la grupo empresa</label>
              <input name="conforma"type="text" class="form-control" required>
            </div> 
            <div class="col-md-12 ">
              <label  class="form-label">Solvencia tecnica</label>
              <input name="solvencia"type="text" class="form-control" required>
            </div> 
          </div>
          




            <h2>Parte B</h2>
            <div class="col-md-12 ">
              <label  class="form-label">Caratula</label>
              <input name="caratulaB"type="text" class="form-control" required>
            </div> 
            <div class="container">
            <div class="col-md-12 ">
              <label  class="form-label">Indice</label>
              <input name="indiceB"type="text" class="form-control" required>
            </div> 
            <div class="col-md-12 ">
              <label  class="form-label">Propuesta de servicios</label>
              <input name="propuesta"type="text" class="form-control" required>
            </div> 
            <div class="col-md-12 ">
              <label  class="form-label">Plan de trabajo</label>
              <input name="trabajo"type="text" class="form-control" required>
            </div> 
            <div class="col-md-12 ">
              <label  class="form-label">Plan de pagos</label>
              <input name="pagos"type="text" class="form-control" required>
            </div> 
          </div>
            <div class="col-md-6 d-flex justify-content-between ">
              <button type="submit" name="id" value="{{$grupo}}" class="btn btn-primary "style="background-color: #215f88;">Publicar</button>
              </div>
           
                   
          </form>
          </div>
      </div>
      @endsection

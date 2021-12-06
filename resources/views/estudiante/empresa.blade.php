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
                <li><a href="{{ route('estudiante.inicioE') }}">Inicio</a></li>
                <li><a href="{{ route('estudiante.empresa') }}">Empresa</a></li>
                <li><a href="{{ route('estudiante.documentosB') }}">Documentos base</a></li>
                <li><a href="{{ url('/estudiante/lista') }}">Lista de empresas</a></li>
                <li><a href="#">Registrar funda empresa TIS</a></li>
                <li><a href="{{ route('auth.logout') }}">Cerrar sesion</a></li>
                
              </ul>
            </div>
          </nav>
          @endsection
          @section('cuerpo')
        <div class="container mt-5 formulario">
          <div class="card formFunda formA "style="margin-left:200px; margin-right:200px;">
            <h1 Style="text-align: center;">FUNDA EMPRESA</h1>
            <div   >
          <form
          id="funda" class="row g-3" method="post" action="{{ route('empresa.update') }}" enctype="multipart/form-data">
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
            @foreach($data as $empresa)
            <div class="col-md-6 ">
              <label for="nombreC" class="form-label">Nombre corto*</label>
              <input type="text" class="form-control" name="nombreC" value="{{$empresa->nombreC}}" required>
              <span class="text-danger">@error('nombreC'){{ $message }} @enderror</span>
            </div>
            <div class="col-md-6">
              <label for="nombreL" class="form-label">Nombre Largo*</label>
              <input type="text" class="form-control" name="nombreL" value="{{$empresa->nombreL}}" required>
              <span class="text-danger">@error('nombreL'){{ $message }} @enderror</span>
            </div>
   
            <div class="col-md-6">
                
                <table name="integrantes">
                    <tr>                            
                            <th class="text-center">Socios</th>
                    </tr>
                    
                    @foreach($data2 as $key=>$item)
                        
                        <tr>                            
                            <td>
                                {{$item->nombre}}
                                <input type="hidden" name="nombre[]" value="{{$item->nombre}}">
                            </td>
                        </tr>
                    @endforeach
                    
                </table>
            </div>
            <!--<div class="col-md-12">
              <label for="integrantes" class="form-label">Integrantes</label>
              <textarea rows="6" cols="60" class="form-control" name="integrantes" form="funda"
              placeholder="1.Integrante1&#10;2.Integrante2&#10;3.Integrante3&#10;4.Integrante4&#10;5.Integrante5&#10;"></textarea>
              <span class="text-danger">@error('integrantes'){{ $message }} @enderror</span>
            </div>-->
            <div class="container">
            <div class="col-md-12">
              <label for="representante" class="form-label">Representante Legal</label>
              <input type="text" class="form-control" name="representante" value="{{$empresa->representante}}" >
              <span class="text-danger">@error('representante'){{ $message }} @enderror</span>
            </div>
            <div class="col-md-12">
              <label for="correo" class="form-label">Correo de la empresa</label>
              <input type="email" class="form-control" name="correo" value="{{$empresa->correo}}">
              <span class="text-danger">@error('correo'){{ $message }} @enderror</span>
            </div>
            <div class="col-md-12">
              <label for="telefono" class="form-label">Telefono de la empresa</label>
              <input type="text" class="form-control" name="telefono" value="{{$empresa->telefono}}">
              <span class="text-danger">@error('telefono'){{ $message }} @enderror</span>
            </div>
            <div class="col-md-12">
              <label for="direccion" class="form-label">Direccion de la empresa</label>
              <input type="text" class="form-control" name="direccion" value="{{$empresa->direccion}}" >
              <span class="text-danger">@error('direccion'){{ $message }} @enderror</span>
            </div>
            <div class="col-md-12">Los campos con (*) son obligatorios</div>
            <div class="col-md-6 d-flex justify-content-between ">
              <button type="submit" class="btn btn-primary" style="background-color: #215f88;">Actualizar</button>              
            </div>
          </div>
          @endforeach
          </form>
          <form method="post" action="{{ route('empresa.parteA') }}" accept=".pdf" enctype="multipart/form-data">
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
              
            <div class="d-flex justify-content-evenly" style="margin-top:50px;">
              <div>
                    <label for="parteA" class="form-label">Parte A</label>
                    <input type="file" name="parteA"/>
                    <span class="text-danger">@error('parteA'){{ $message }} @enderror</span>
              </div>

         
            <div class=" " >
               <button type="submit"  name="submit_partea" value="Submit" class="btn btn-primary" style="background-color: #215f88;">Subir</button>
               
             
             </div>
            </div>
         </form>
         <form method="post" action="{{ route('empresa.parteB') }}" accept=".pdf" enctype="multipart/form-data">
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
              
            <div class="d-flex justify-content-evenly" style="margin-top:50px;">
              <div>
                    <label for="parteA" class="form-label">Parte B</label>
                    <input type="file" name="parteB"/>
                    <span class="text-danger">@error('parteB'){{ $message }} @enderror</span>
              </div>

         
            <div class=" " >
               <button type="submit"  name="submit_parteb" value="Submit" class="btn btn-primary" style="background-color: #215f88;">Subir</button>
               
             
             </div>
            </div>
         </form>
        </div>
      
      </div>
    </div>
    @endsection

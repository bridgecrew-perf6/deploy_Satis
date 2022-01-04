@extends('layouts.plantillaDocente')

 @section('cuerpo')
 
 <title>Registro estudiantes</title>
</header>
<body>

  <div Style="margin-bottom: 40px;" class="container">
    <div  style="margin-top:45px">
       <div class=" col-md-offset-4">

         <div class="formRegistro ">
            <h1 Style="text-align: center;">Registro de estudiantes</h1>  
            <div id="wrapper">
            <form method="post" action="{{ route('auth.save') }}" accept=".csv" enctype="multipart/form-data">
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
              <div> <input type="file" name="file"/>
              </div>
         
            <div class=" " >
               <button type="submit"  name="submit_file" value="Submit" class="btn btn-primary" style="background-color: #215f88;">Registrar</button>
               {{-- <input type="file" name="file"/>
               <input type="submit" name="submit_file" value="Submit"/> --}}
             
             </div>
            </div>
         </form>
           </div>
           <!--<form action="{{ route('auth.save') }}" method="post">

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
                 <label>Email</label>
                 <input type="text" class="form-control" name="email" placeholder="Ingrese su email" value="{{ old('email') }}">
                 <span class="text-danger">@error('email'){{ $message }} @enderror</span>
              </div>
              <div class="form-group">
                 <label>Contraseña</label>
                 <input type="password" class="form-control" name="password" placeholder="Ingrese una contraseña">
                 <span class="text-danger">@error('password'){{ $message }} @enderror</span>
              </div>
              <button type="submit" class="btn btn-block btn-primary">Registrar</button>
              <br>              
           </form>-->
         </div>
         </div>
   </div>
</div>
    
</body>
@endsection

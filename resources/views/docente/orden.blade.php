@extends('layouts.plantillaDocente')

 @section('cuerpo')
        {{ Breadcrumbs::render('docente.orden') }}
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
            <label class="form-label">*Todos los campos son obligatorios,
            se recomienda que de no existir una orden de cambio escribir "ok"</label>
            <label class="form-label">*Utilizar como maximo 100 caracteres alfanumericos por linea</label>
            <h2>Parte A</h2>
            <div class="col-md-12 ">
            <label class="form-label">Caratula</label>
              <input type="text" pattern="[A-Za-z0-9]{2,100}" class="form-control" name="caratulaA" required >
            </div>
            <div class="container">
           <div class="col-md-12">
              <label  class="form-label">Indice</label>
              <input name="indiceA" pattern="[A-Za-z0-9]{2,100}" type="text" class="form-control" required>
            </div> 
            <div class="col-md-12 ">
              <label  class="form-label">Carta de presentacion</label>
              <input name="carta" pattern="[A-Za-z0-9]{2,100}" type="text" class="form-control" required>
            </div> 
            <div class="col-md-12 ">
              <label  class="form-label">Boleta de garantia</label>
              <input name="boleta" pattern="[A-Za-z0-9]{2,100}" type="text" class="form-control" required>
            </div> 
            <div class="col-md-12 ">
              <label  class="form-label">Conformacion de la grupo empresa</label>
              <input name="conforma" pattern="[A-Za-z0-9]{2,100}" type="text" class="form-control" required>
            </div> 
            <div class="col-md-12 ">
              <label  class="form-label">Solvencia tecnica</label>
              <input name="solvencia" pattern="[A-Za-z0-9]{2,100}" type="text" class="form-control" required>
            </div> 
          </div>
          




            <h2>Parte B</h2>
            <div class="col-md-12 ">
              <label  class="form-label">Caratula</label>
              <input name="caratulaB" pattern="[A-Za-z0-9]{2,100}" type="text" class="form-control" required>
            </div> 
            <div class="container">
            <div class="col-md-12 ">
              <label  class="form-label">Indice</label>
              <input name="indiceB" pattern="[A-Za-z0-9]{2,100}" type="text" class="form-control" required>
            </div> 
            <div class="col-md-12 ">
              <label  class="form-label">Propuesta de servicios</label>
              <input name="propuesta" pattern="[A-Za-z0-9]{2,100}" type="text" class="form-control" required>
            </div> 
            <div class="col-md-12 ">
              <label  class="form-label">Plan de trabajo</label>
              <input name="trabajo" pattern="[A-Za-z0-9]{2,100}" type="text" class="form-control" required>
            </div> 
            <div class="col-md-12 ">
              <label  class="form-label">Plan de pagos</label>
              <input name="pagos" pattern="[A-Za-z0-9]{2,100}" type="text" class="form-control" required>
            </div> 
          </div>
            <div class="col-md-6 d-flex justify-content-between ">
              <button type="submit" name="id" value="{{$grupo}}" class="btn btn-primary "style="background-color: #215f88;">Crear orden</button>
              </div>
           
                   
          </form>
          </div>
      </div>
      @endsection

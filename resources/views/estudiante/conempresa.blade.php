@extends('layouts.plantillaEstudiante')

@section('cuerpo')
      <section>
      {{ Breadcrumbs::render('estudiante.fundaempresa') }}
        <div class="container mt-5 mb-5">
          <div class="col-sm-12 sinEmp">
            <h1 class="align-items-center avisos text-light">
              Usted ya cuenta con una empresa, puede verla en el apartado Empresa
            </h1>
            
            
          </div>
          
        </div>  
      </section>

@endsection

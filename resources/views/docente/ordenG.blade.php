<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Orden de Cambio </title>
  </head>
  <body>
    
    <center><h2>Orden de Cambio</h2></center>
    <h3>De: {{$data2->nombre}}</h3>
    <h3>Fecha: <?php echo date('d-m-Y');?></h3>
    <h3>Para el representante de la grupo empresa: {{$data->nombreL}}</h3>
    <h3>Parte A</h3>
    <h4>Caratula</h4>
    <p>{{$request->caratulaA}}</p>
    <h4>Indice</h4>
    <p>{{$request->indiceA}}</p>
    <h4>Carta de presentacion</h4>
    <p>{{$request->carta}}</p>
    <h4>Boleta de garantia</h4>
    <p>{{$request->boleta}}</p>
    <h4>Corfomacion de la grupo-empresa</h4>
    <p>{{$request->conforma}}</p>
    <h4>Solvencia tecnica</h4>
    <p>{{$request->solvencia}}</p>
    <h3>Parte B</h3>
    <h4>Caratula</h4>
    <p>{{$request->caratulaB}}</p>
    <h4>Indice</h4>
    <p>{{$request->indiceB}}</p>
    <h4>Propuesta de servicios</h4>
    <p>{{$request->propuesta}}</p>
    <h4>Plan de trabajo</h4>
    <p>{{$request->trabajo}}</p>
    <h4>Plan de pagos</h4>
    <p>{{$request->pagos}}</p>
  </body>
</html>

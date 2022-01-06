<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contrato</title>
  </head>
  <body>
    @foreach($data as $key=>$item)
        <center><h2>CONTRATO DE PRESTACIÓN DE SERVICIOS - CONSULTORÍA</h2><center>
        <center><h3><?php echo date('d-m-Y');?></h3><center>
      
        <p align="left" >Que suscriben la empresa Taller de Ingeniería de Software - TIS, que en lo sucesivo se
           denominará TIS, por una parte, y la consultora <b>{{$item->nombreL}}</b> registrada debidamente en
           el Departamento de Procesamiento de Datos y Registro e Inscripciones, domiciliada en la ciudad
           de Cochabamba, que en lo sucesivo se denominará <b>{{$item->nombreC}}</b>, por otra parte, de conformidad a
           las cláusulas que se detallan a continuación:</p>

        <p align="left" ><b>PRIMERA.-</b> TIS contratará los servicios del Contratista para la provisión de un Sistema de Apoyo a
            la Empresa TIS que se realizará, conforme a la modalidad y presupuesto entregado por la
            Consultora, en su documento de propuesta técnica, y normas estipuladas por TIS.</p>

        <p align="left"><b>SEGUNDO.-</b>  El objeto de este contrato es la provisión de un producto software.</p>

        <p align="left"><b>TERCERO.-</b> La consultora {{$item->nombreC}}, se hace responsable por la buena ejecución de las distintas
            fases, que involucren su ingeniería del proyecto, especificadas en la propuesta técnica corregida de
            acuerdo al pliego de especificaciones.</p>

        <p align="left"><b>CUARTO.-</b> Para cualquier otro punto no estipulado en el presente contrato, debe hacerse referencia
            a la Convocatoria Pública CPTIS-0609-2021, al Pliego de Especificaciones PETIS-1409-2021 y/o al
            PG-TIS (Plan Global - TIS)</p>

        <p align="left"><b>QUINTO.-</b> Se pone en evidencia que cualquier incumplimiento de las cláusulas estipuladas en el
            presente contrato, es pasible a la disolución del mismo.</p>

        <p align="left"><b>SEXTO.-</b> La consultora {{$item->nombreC}}, declara su absoluta conformidad con los términos del presente
            contrato. Se deja constancia de que los datos y antecedentes personales jurídicos proporcionados
            por el adjudicatario son verídicos.</p>

        <p align="left"><b>SEPTIMO.-</b> El presente contrato se disuelve también, por cualquier motivo de incumplimiento a
            normas establecidas en PG-TIS (Plan Global - TIS).</p>

        <p align="left"><b>OCTAVO.-</b> Por la disolución del contrato, TIS tiene todo el derecho de ejecutar la boleta de garantía,
            que es entregada por el contratado como documento de seriedad de la empresa.</p>

        <p align="left"><b>NOVENO.-</b>  La información que TIS brinde al contratado debe ser de rigurosa confidencialidad, y no
            utilizarse para otros fines que no sea el desarrollo del proyecto.</p>

        <p align="left"><b>DECIMO.-</b> TIS representada por su directorio Lic. Corina Flores V., Lic. M. Leticia Blanco C., Lic.
            David Escalera F. y Lic. Patricia Rodriguez, y por otra; la consultora {{$item->nombreC}}, representada por
            su representante legal {{$item->representante}}, dan su plena conformidad a los términos y
            condiciones establecidos en el presente Contrato de Prestación de Servicios y Consultoría,
            firmando en constancia al pie de presente documento.</p>
       
        <center><b>Cochabamba,<?php echo date('d-m-Y');?></b><center>
        <br>
        <br>
        <h3> <p>REPRESENTANTE GRUPO-EMPRESA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REPRESENTANTE CONSULTORA TIS</p></h3>
    @endforeach
  </body>
</html>

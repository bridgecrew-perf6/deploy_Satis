<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contrato</title>
  </head>
  <body>
    @foreach($data as $key=>$item)
        <center><h2>CONTRATO DE PRESTACIÓN DE SERVICIOS - CONSULTORÍA</h2><center>
        <center><h3>fecha</h3><center>
        <p>Que suscriben la empresa Taller de Ingeniería de Software - TIS, que en lo sucesivo se
           denominará TIS, por una parte, y la consultora {{$item->nombreL}} registrada debidamente en
           el Departamento de Procesamiento de Datos y Registro e Inscripciones, domiciliada en la ciudad
           de Cochabamba, que en lo sucesivo se denominará {{$item->nombreC}}, por otra parte, de conformidad a
           las cláusulas que se detallan a continuación:</p>

        <p>PRIMERA.- TIS contratará los servicios del Contratista para la provisión de un Sistema de Apoyo a
            la Empresa TIS que se realizará, conforme a la modalidad y presupuesto entregado por la
            Consultora, en su documento de propuesta técnica, y normas estipuladas por TIS.</p>

        <p>SEGUNDO.- El objeto de este contrato es la provisión de un producto software.</p>

        <p>TERCERO.- La consultora {{$item->nombreC}}, se hace responsable por la buena ejecución de las distintas
            fases, que involucren su ingeniería del proyecto, especificadas en la propuesta técnica corregida de
            acuerdo al pliego de especificaciones.</p>

        <p>CUARTO.- Para cualquier otro punto no estipulado en el presente contrato, debe hacerse referencia
            a la Convocatoria Pública CPTIS-0609-2021, al Pliego de Especificaciones PETIS-1409-2021 y/o al
            PG-TIS (Plan Global - TIS)</p>

        <p>QUINTO.- Se pone en evidencia que cualquier incumplimiento de las cláusulas estipuladas en el
            presente contrato, es pasible a la disolución del mismo.</p>

        <p>SEXTO.- La consultora {{$item->nombreC}}, declara su absoluta conformidad con los términos del presente
            contrato. Se deja constancia de que los datos y antecedentes personales jurídicos proporcionados
            por el adjudicatario son verídicos.</p>

        <p>SEPTIMO.- El presente contrato se disuelve también, por cualquier motivo de incumplimiento a
            normas establecidas en PG-TIS (Plan Global - TIS).</p>

        <p>OCTAVO.- Por la disolución del contrato, TIS tiene todo el derecho de ejecutar la boleta de garantía,
            que es entregada por el contratado como documento de seriedad de la empresa.</p>

        <p>NOVENO.- La información que TIS brinde al contratado debe ser de rigurosa confidencialidad, y no
            utilizarse para otros fines que no sea el desarrollo del proyecto.</p>

        <p>DECIMO.- TIS representada por su directorio Lic. Corina Flores V., Lic. M. Leticia Blanco C., Lic.
            David Escalera F. y Lic. Patricia Rodriguez, y por otra; la consultora {{$item->nombreC}}, representada por
            su representante legal {{$item->representante}}, dan su plena conformidad a los términos y
            condiciones establecidos en el presente Contrato de Prestación de Servicios y Consultoría,
            firmando en constancia al pie de presente documento.</p>

        <center>Cochabamba,fecha<center>
        <br>
        <br>
        <br>
        <p>REPRESENTANTE GRUPO-EMPRESA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REPRESENTANTE CONSULTORA TIS</p>
    @endforeach
  </body>
</html>

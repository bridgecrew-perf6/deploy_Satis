<?php

namespace App\Http\Controllers;
use App\Models\Aviso;
use App\Models\Convocatoria;
use Illuminate\Http\Request;

class AvisosController extends Controller
{
    function avisosD(){
        return view('docente.avisosD');
    }
    function convocatoriasD(){
        return view('docente.convocatoriasD');
    }
    function documentosB(){
        return view('estudiante.documentosB');
    }
   
 /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Convocatoria  $planTrabajo
     * @return \Illuminate\Http\Response
     */
    public function destroy( $aviso)
    {
        $aviso=Aviso::find($aviso);
        $aviso->delete();

        return redirect()->route('docente.inicioD')->with('success', 'Aviso borrado exitosamente');
    }
   
     public function destroy2($convocatoria)
    {
        $convocatoria=Convocatoria::find($convocatoria);
        $convocatoria->delete();

        return redirect()->route('docente.inicioD')->with('success', 'convocatoria borrada exitosamente');
    }
   
    
}

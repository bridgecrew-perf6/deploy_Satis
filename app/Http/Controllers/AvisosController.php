<?php

namespace App\Http\Controllers;
use App\Models\Aviso;
use App\Models\Convocatoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    



    function subirPdf(Request $request){

        
            $Convocatoria = new Convocatoria();
        $Convocatoria-> name = $request->name;
        $Convocatoria-> codigo = $request->codigo;
        $Convocatoria-> gestion = $request->gestion;
        $Convocatoria-> semestre = $request->semestre; 
        $Convocatoria-> nombre=$request->file('archivote')->getClientOriginalName();
        $filesource = $request->file('archivote');
        $fileExtension = "";
        if($filesource != null){
            $fileExtension = $filesource->getClientOriginalExtension();
        }
        if(strcmp($fileExtension, "pdf") !== 0){
            return back()->with('fail','Se requiere un archivo con extension .pdf');
        }
                  
        $path = $request->file('archivote')->getRealPath();
        $pdf = file_get_contents($path);
        $base64 = base64_encode($pdf);
        $Convocatoria->archivote =$base64;

                          
        $save = $Convocatoria->save();
        if($save){
            return back()->with('success','Convocatoria publicado exitosamente');
      
         }else{
             return back()->with('fail','La convocatoria ya existe o su nombre no es valido');
         }
      
      
          }
    
       
   
    
}

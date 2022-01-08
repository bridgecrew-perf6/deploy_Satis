<?php

namespace App\Http\Controllers;

use App\Models\Aviso;
use App\Models\Convocatoria;
use App\Models\Documento;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PDF;


class AvisosController extends Controller
{ 
    
    function avisosD()
    {
        $data = ['LoggedUserInfo'=>Usuario::where('id','=', session('LoggedUser'))->first()];
        $Aviso = Aviso::all();
        $Convocatoria = Convocatoria::all();
        return view('docente.avisosD',['usuarios' => $data,'avisos' => $Aviso,'convocatorias' => $Convocatoria]);
    }
    function convocatoriasD()
    {
        $data = ['LoggedUserInfo'=>Usuario::where('id','=', session('LoggedUser'))->first()];
        $Aviso = Aviso::all();
        $Convocatoria = Convocatoria::all();
        return view('docente.convocatoriasD', ['avisos' => $Aviso,'convocatorias' => $Convocatoria,'usuarios' => $data]);
         
    }

    function documentosB()
    {
        $data = ['LoggedUserInfo'=>Usuario::where('id','=', session('LoggedUser'))->first()];
        $Documento = Documento::all();
        return view('docente.documentosB', $data,['documentos' => $Documento,'usuarios' => $data]);
    }
    function verDocumentos()
    {
        return view('estudiante.verDocumento');
    }

    function editDocumentos(Documento $documentos){
       
            return view('/docente/documentosEdit',compact('documentos'));
    }
    public function updateDocumentos(Request $request , Documento $documentos){
        $documentos->name = $request->name;
        $documentos->nombre = $request->file('archivote')->getClientOriginalName();
        $filesource = $request->file('archivote');
        $fileExtension = "";
        if ($filesource != null) {
            $fileExtension = $filesource->getClientOriginalExtension();
        }
        if (strcmp($fileExtension, "pdf") !== 0) {
            return back()->with('fail', 'Se requiere un archivo con extension .pdf');
        }

        $path = $request->file('archivote')->getRealPath();
        $pdf = file_get_contents($path);
        $base64 = base64_encode($pdf);
        $documentos->archivote = $base64;
        $save = $documentos->save();
        if ($save) {
            return redirect()->route('docente.documentosB')->with('success', 'Documento base actualizado exitosamente');
        } else {
            return back()->with('fail', 'El documento base ya existe o su nombre no es valido');
        }
    }

    function editConvocatorias(Convocatoria $convocatorias){
        return view('/docente/convocatoriasEdit',compact('convocatorias'));

    }
    public function updateConvocatorias(Request $request , Convocatoria $convocatorias){
        $convocatorias->name = $request->name;
        $convocatorias->nombre = $request->file('archivote')->getClientOriginalName();
        $filesource = $request->file('archivote');
        $fileExtension = "";
        if ($filesource != null) {
            $fileExtension = $filesource->getClientOriginalExtension();
        }
        if (strcmp($fileExtension, "pdf") !== 0) {
            return back()->with('fail', 'Se requiere un archivo con extension .pdf');
        }

        $path = $request->file('archivote')->getRealPath();
        $pdf = file_get_contents($path);
        $base64 = base64_encode($pdf);
        $convocatorias->archivote = $base64;
        $save = $convocatorias->save();
        if ($save) {
            return redirect()->route('docente.convocatoriasD')->with('success', 'Convocatoria actualizada exitosamente');
        } else {
            return back()->with('fail', 'La convocatoria ya existe o su nombre no es valido');
        }
    }
    function editAvisos(Aviso $avisos){
        return view('/docente/avisosEdit',compact('avisos'));

    }
    function updateAvisos(Request $request , Aviso $avisos){
        $avisos->name = $request->name;
        $avisos->descripcion = $request->descripcion;
        $save = $avisos->save();
        if ($save) {
            return redirect()->route('docente.avisosD')->with('success', 'Aviso actualizado exitosamente');
        } else {
            return back()->with('fail', 'El aviso ya existe o su nombre no es valido');
        }
    }

    public function destroy($aviso)
    {
        $aviso = Aviso::find($aviso);
        $aviso->delete();

        return redirect()->route('docente.avisosD')->with('success', 'Aviso borrado exitosamente');
    }

    public function destroy2($convocatoria)
    {
        $convocatoria = Convocatoria::find($convocatoria);
        $convocatoria->delete();

        return redirect()->route('docente.convocatoriasD')->with('success', 'Convocatoria borrada exitosamente');;
    }
    public function destroy3($documento)
    {
        $documento = Documento::find($documento);
        $documento->delete();

        return redirect()->route('docente.documentosB')->with('success', 'Documento base borrado exitosamente');
        
    }





    function subirPdf(Request $request)
    {


        $Convocatoria = new Convocatoria();
        $Convocatoria->name = $request->name;
        $Convocatoria->nombre = $request->file('archivote')->getClientOriginalName();
        $filesource = $request->file('archivote');
        $fileExtension = "";
        if ($filesource != null) {
            $fileExtension = $filesource->getClientOriginalExtension();
        }
        if (strcmp($fileExtension, "pdf") !== 0) {
            return back()->with('fail', 'Se requiere un archivo con extension .pdf');
        }

        $path = $request->file('archivote')->getRealPath();
        $pdf = file_get_contents($path);
        $base64 = base64_encode($pdf);
        $Convocatoria->archivote = $base64;


        $save = $Convocatoria->save();
        if ($save) {
            return back()->with('success', 'Convocatoria publicado exitosamente');
        } else {
            return back()->with('fail', 'La convocatoria ya existe o su nombre no es valido');
        }
    }
    function displayConv(Request $request)
    {

        $query = DB::table('convocatorias');

        $query->where('id', '=', $request->archivote);

        $data = $query->get();

        $base64 = $data->pluck('archivote');

        if (!$data->isEmpty() && $base64[0] != null) {
            $bin = base64_decode($base64[0]);
            return response($bin)
                ->header('Content-Type', 'application/pdf');
        } else {
            return back()->with('fail', 'Parte A no subida');
        }
    }
    function subirDocuB(Request $request)
    {


        $Documento = new Documento();
        $Documento->name = $request->name;
        $Documento->nombre = $request->file('archivote')->getClientOriginalName();
        $filesource = $request->file('archivote');
        $fileExtension = "";
        if ($filesource != null) {
            $fileExtension = $filesource->getClientOriginalExtension();
        }
        if (strcmp($fileExtension, "pdf") !== 0) {
            return back()->with('fail', 'Se requiere un archivo con extension .pdf');
        }

        $path = $request->file('archivote')->getRealPath();
        $pdf = file_get_contents($path);
        $base64 = base64_encode($pdf);
        $Documento->archivote = $base64;


        $save = $Documento->save();
        if ($save) {
            return back()->with('success', 'Documento Base publicado exitosamente');
        } else {
            return back()->with('fail', 'El documento base ya existe o su nombre no es valido');
        }
    }
    function documentosDisplay(Request $request)
    {

        $query = DB::table('documentos');

        $query->where('id', '=', $request->archivote);

        $data = $query->get();

        $base64 = $data->pluck('archivote');

    

        if (!$data->isEmpty() && $base64[0] != null) {
            $bin = base64_decode($base64[0]);
            return response($bin)
                ->header('Content-Type', 'application/pdf');
                
        } else {
            return back()->with('fail', 'documento no subido');
        }
    }
}

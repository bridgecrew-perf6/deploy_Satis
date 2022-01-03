<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Aviso;
use App\Models\Convocatoria;
use App\Models\Usuario;
use App\Models\Empresa;
use App\Models\Evento;
use App\Models\Pago;
use App\Models\usuario_empresa;
use App\Models\PlanTrabajo;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PDF;
use Response;


class MainController extends Controller
{
    function index(){
        
        $Aviso = Aviso::all();
      $Convocatoria = Convocatoria::all();
      /* $now = Carbon::now();
      $currentDate = $now->format('Y-m-d');
           */
          return view('inicio',array('avisos'=> $Aviso),array('convocatorias'=>$Convocatoria),); 
  }


  function planP(){        
    
    
    $pagos = Pago::all();
    $usuario_empresa = usuario_empresa::where('usr',session('LoggedUser'))->first();
    $empresas = Empresa::all();
    $data = ['LoggedUserInfo'=>Usuario::where('id','=', session('LoggedUser'))->first(),'pagos'=>$pagos,'usuario_empresa'=>$usuario_empresa,'empresas'=>$empresas];
    return view('docente.planP', $data) ->with('i', (request()->input('page', 1) - 1) * 5);
}

function planT(){      
   
    $planTrabajos = PlanTrabajo::all();
    $usuario_empresa = usuario_empresa::where('usr',session('LoggedUser'))->first();
    $empresas = Empresa::all();
    $data = ['LoggedUserInfo'=>Usuario::where('id','=', session('LoggedUser'))->first(),'planTrabajos'=>$planTrabajos, 'usuario_empresa'=>$usuario_empresa,'empresas'=>$empresas];

    return view('docente.planT', $data) ->with('i', (request()->input('page', 1) - 1) * 5);
 
}








  function docentito(){
      
    $Aviso = Aviso::all();
$Convocatoria = Convocatoria::all();
    return view('/docente/inicioD',array('avisos'=> $Aviso),array('convocatorias'=>$Convocatoria)); 
}
function estudiante(){

    $Aviso = Aviso::all();
$Convocatoria = Convocatoria::all();
    return view('/estudiante/inicioE',array('avisos'=> $Aviso),array('convocatorias'=>$Convocatoria)); 
}
function calendario(Request $request){
      if($request->ajax())
    	{            
    		$data = Evento::whereDate('inicio', '>=', $request->inicio)
                       ->whereDate('fin',   '<=', $request->fin)
                       ->get(['id', 'titulo', 'inicio', 'fin']);
            return response()->json($data);
    	}        
    	return view('/docente/calendario');
}
public function convocatoriasDos(Request $request){
   
         
    if($request->hasFile("archivote")){
      $file=$request->file("archivote");
     /*  $request->file('archivote')->getClientOriginalName(); */
    $nombre ="pdf_".time().".".$file->guessExtension(); 
      $ruta = public_path("pdf/".$nombre);

      if($file->guessExtension()=="pdf"){
          copy($file,$ruta);
      }else
      {
          dd("no es pdf bro");
      } 
      $Convocatoria = new Convocatoria();
  $Convocatoria-> name = $request->name;
  $Convocatoria-> codigo = $request->codigo;
  $Convocatoria-> gestion = $request->gestion;
  $Convocatoria-> semestre = $request->semestre;
  $Convocatoria-> archivote = $request->archivote;
  $Convocatoria-> nombre=$request->file('archivote')->getClientOriginalName();
  
  $save = $Convocatoria->save();
  if($save){
      return back()->with('success','Convocatoria publicado exitosamente');

   }else{
       return back()->with('fail','La convocatoria ya existe o su nombre no es valido');
   }


    }

}

function avisosDos(Request $request){
 

  $Aviso = new Aviso();
  $Aviso-> name = $request->name;
  $Aviso-> codigo = $request->codigo;
  $Aviso-> gestion = $request->gestion;
  $Aviso-> semestre = $request->semestre;
  $Aviso-> descripcion = $request->descripcion;
  
  $save = $Aviso->save();
  if($save){
      return back()->with('success','El aviso fue publicado exitosamente');
   }else{
       return back()->with('fail','El aviso ya existe o su nombre no es valido');
   }
 /*  return $avisos; */
}

function administrador(){

$Aviso = Aviso::all();
$Convocatoria = Convocatoria::all();
return view('/admin/inicioA',array('avisos'=> $Aviso),array('convocatorias'=>$Convocatoria)); 
}



    function login(){
        return view('auth.login');
    }
    function register(){
        return view('auth.register');
    }
    function register2(){
        return view('auth.register2');
    }
    function save(Request $request){
        $filesource = $request->file('file');
        $fileExtension = $filesource->getClientOriginalExtension();
        if(strcmp($fileExtension, "csv") !== 0){
            return back()->with('fail','Se requiere un archivo con extension .csv');
        }
        /*$request->validate([
            'file' => 'required|mimes:csv,txt'
            ]);
          */  
        
        
        if(isset($_POST["submit_file"]))
        {
            
            try{  

            $file = $_FILES["file"]["tmp_name"];
            $file_open = fopen($file,"r");
            $usuario = new Usuario;
            $i = 0;
            $c = 0;
            while(($csv = fgetcsv($file_open, 200, ";")) !== false)
            {
                $csv = array_map("utf8_encode", $csv);
                if($i != 0){
                $username = $csv[0];
                $pass = $csv[1];
                $nombre = $csv[2];
                $comprobar = DB::table('usuarios')->where('username','=',$username)->first();
                if($comprobar == null){
                    DB::table('usuarios')->insert([
                        'username' => $username,
                        'pass' => $pass,
                        'nombre' => $nombre,
                        'tipo' => '3'
                    ]);
                    $c++;
                }
                }
                $i++;                        
            }
            if($c==0){
                return back()->with('success',' Se agregaron 0 usuarios');
            }
            return back()->with('success',' Usuarios agregados');
            }catch (Exception $e){
                echo 'Excepción capturada: ',  $e->getMessage(), "\n";
            }
        }        
    }
    function save2(Request $request){
        
        //Validate requests
        $request->validate([
            'name'=>'required:unique',
            'password'=>'required|min:5|max:12'
        ]);

         //Insert data into database
         $admin = new Usuario;
         $admin->username = $request->name;
         $admin->pass = $request->password;
         $admin->nombre = $request->name;
         $admin->tipo = '2';
         $save = $admin->save();

         if($save){
            return back()->with('success','Nuevo docente agregado');
         }else{
             return back()->with('fail','Algo salio mal');
         }
    }
    function save3(Request $request){
       
        $integrantes = $request->seleccion;
        if(($integrantes == null) || (count($integrantes) < 3)){
            return back()->with('fail','Se necesitan al menos 3 socios');
        }
        if(count($integrantes) > 5){
            return back()->with('fail','Maximo 5 socios');
        }
        $nombres = $request->nombre;
        //Validate requests
        $request->validate([
            'nombreC'=>'required|unique:empresas',
            'nombreL'=>'required|min:5|unique:empresas',
            'seleccion'=>'nullable',
            'representante'=>'nullable|unique:empresas',
            'correo'=>'nullable|email|unique:empresas',
            'telefono'=>'nullable|unique:empresas',
            'direccion'=>'nullable|unique:empresas'
        ]);       
        if($request->integrantes == null){
            $request->integrantes = "";
        }
        if($request->representante == null){
            $request->representante = "";
        }
        if($request->correo == null){
            $request->correo = "";
        }
        if($request->telefono == null){
            $request->telefono = "";
        }
        if($request->direccion == null){
            $request->direccion = "";
        }

         //Insert data into database
         $admin = new Empresa;
         $admin->nombreC = $request->nombreC;
         $admin->nombreL = $request->nombreL;
         $admin->integrantes = $request->integrantes;
         $admin->representante = $request->representante;
         $admin->correo = $request->correo;
         $admin->telefono = $request->telefono;
         $admin->direccion = $request->direccion;
         $save = $admin->save();
         

         if($save){
            if($integrantes != null){
                foreach($integrantes as $integrante){
                    DB::table('usuario_empresa')->insert([
	                    'usr' => DB::table('usuarios')->where('nombre', '=', $nombres[$integrante])->first()->id,
                        'emp' => $admin->id
	                ]);                    
                }
            }  
            return back()->with('success','Empresa creada exitosamente');
         }else{
             return back()->with('fail','La empresa ya existe o su nombre no es valido');
         }
    }

    function displayA(Request $request){
        $query = DB::table('documentos_empresa');        
        $query->where('emp', '=', $request->parteA);        
        $data = $query->get();
        $base64 = $data->pluck('parteA');
        if(!$data->isEmpty() && $base64[0]!=null){
            $bin = base64_decode($base64[0]);
            return response($bin)
            ->header('Content-Type', 'application/pdf');
        }else{
            return back()->with('fail','Parte A no subida');
        }
    }
    function displayB(Request $request){
        $query = DB::table('documentos_empresa');        
        $query->where('emp', '=', $request->parteB);        
        $data = $query->get();
        $base64 = $data->pluck('parteB');
        if(!$data->isEmpty() && $base64[0]!=null){
            $bin = base64_decode($base64[0]);
            return response($bin)
            ->header('Content-Type', 'application/pdf');
        }else{
            return back()->with('fail2','Parte B no subida');
        }
    }
    function displayT(Request $request){
        $query = DB::table('documentos_empresa');        
        $query->where('emp', '=', $request->trabajo);        
        $data = $query->get();
        $base64 = $data->pluck('trabajo');
        if(!$data->isEmpty() && $base64[0]!=null){
            $bin = base64_decode($base64[0]);
            return response($bin)
            ->header('Content-Type', 'application/pdf');
        }else{
            return back()->with('fail3','Plan de trabajo no subido');
        }
    }
    function displayP(Request $request){
        $query = DB::table('documentos_empresa');        
        $query->where('emp', '=', $request->pagos);        
        $data = $query->get();
        $base64 = $data->pluck('pagos');
        if(!$data->isEmpty() && $base64[0]!=null){
            $bin = base64_decode($base64[0]);
            return response($bin)
            ->header('Content-Type', 'application/pdf');
        }else{
            return back()->with('fail4','Plan de pagos no subido');
        }
    }
    function displayC(Request $request){
        $query = DB::table('documentos_empresa');        
        $query->where('emp', '=', $request->contrato);        
        $data = $query->get();
        $base64 = $data->pluck('contrato');
        if(!$data->isEmpty() && $base64[0]!=null){
            $bin = base64_decode($base64[0]);
            return response($bin)
            ->header('Content-Type', 'application/pdf');
        }else{
            return back()->with('fail4','Contrato no generado');
        }
    }
    function displayC2(Request $request){
        $query = DB::table('usuario_empresa');        
        $query->where('usr', '=', session('LoggedUser'));        
        $query->get();
        $query2 = DB::table('documentos_empresa')
                            ->where('emp', $query->pluck('emp'));                                  
        $data = $query2->get();
        $base64 = $data->pluck('contrato');
        if(!$data->isEmpty() && $base64[0]!=null){
            $bin = base64_decode($base64[0]);
            return response($bin)
            ->header('Content-Type', 'application/pdf');
        }else{
            return back()->with('fail4','Contrato no generado');
        }
    }
    function displayO(Request $request){
        $query = DB::table('documentos_empresa');        
        $query->where('emp', '=', $request->cambios);        
        $data = $query->get();
        $base64 = $data->pluck('orden');
        if(!$data->isEmpty() && $base64[0]!=null){
            $bin = base64_decode($base64[0]);
            return response($bin)
            ->header('Content-Type', 'application/pdf');
        }else{
            return back()->with('fail5','No existe una orden de cambio');
        }
    }
    function displayO2(Request $request){
        $query = DB::table('usuario_empresa');        
        $query->where('usr', '=', session('LoggedUser'));        
        $query->get();
        $query2 = DB::table('documentos_empresa')
                            ->where('emp', $query->pluck('emp'));                                  
        $data = $query2->get();
        $base64 = $data->pluck('orden');
        if(!$data->isEmpty() && $base64[0]!=null){
            $bin = base64_decode($base64[0]);
            return response($bin)
            ->header('Content-Type', 'application/pdf');
        }else{
            return back()->with('fail5','No existe una orden de cambio');
        }
    }

    function parteA(Request $request){
        $filesource = $request->file('parteA');
        $fileExtension = "";
        if($filesource != null){
            $fileExtension = $filesource->getClientOriginalExtension();
        }
        if(strcmp($fileExtension, "pdf") !== 0){
            return back()->with('fail','Se requiere un archivo con extension .pdf');
        }
        $query = DB::table('usuario_empresa');        
        $query->where('usr', '=', session('LoggedUser'));        
        $query->get();        
        $path = $request->file('parteA')->getRealPath();
        $pdf = file_get_contents($path);
        $base64 = base64_encode($pdf);
        $emp = $query->pluck('emp');
        $query2 = DB::table('documentos_empresa');        
        $query2->where('emp', '=', $emp);        
        $data = $query2->get();
        if(!$data->isEmpty()){
                   $query3 = DB::table('documentos_empresa')
                            ->where('emp', $emp)
                            ->update([
                                    'parteA' => $base64                                   
                                    ]);
                   return back()->with('success','Archivo subido');
        }else{
            DB::table('documentos_empresa')->insert([
                        'emp' => $emp[0],
                        'parteA' => $base64
	                ]);
                    return back()->with('success','Archivo subido');
        }
    }
    function parteB(Request $request){
        $filesource = $request->file('parteB');
        $fileExtension = "";
        if($filesource != null){
            $fileExtension = $filesource->getClientOriginalExtension();
        }
        if(strcmp($fileExtension, "pdf") !== 0){
            return back()->with('fail','Se requiere un archivo con extension .pdf');
        }
        $query = DB::table('usuario_empresa');        
        $query->where('usr', '=', session('LoggedUser'));        
        $query->get();        
        $path = $request->file('parteB')->getRealPath();
        $pdf = file_get_contents($path);
        $base64 = base64_encode($pdf);
        $emp = $query->pluck('emp');
        $query2 = DB::table('documentos_empresa');        
        $query2->where('emp', '=', $emp);        
        $data = $query2->get();
        if(!$data->isEmpty()){
                   $query3 = DB::table('documentos_empresa')
                            ->where('emp', $emp)
                            ->update([
                                    'parteB' => $base64                                   
                                    ]);
                   return back()->with('success','Archivo subido');
        }else{
            DB::table('documentos_empresa')->insert([
                        'emp' => $emp[0],
                        'parteB' => $base64
	                ]);
                    return back()->with('success','Archivo subido');
        }
    }
    function parteT(Request $request){
        $filesource = $request->file('trabajo');
        $fileExtension = "";
        if($filesource != null){
            $fileExtension = $filesource->getClientOriginalExtension();
        }
        if(strcmp($fileExtension, "pdf") !== 0){
            return back()->with('fail','Se requiere un archivo con extension .pdf');
        }
        $query = DB::table('usuario_empresa');        
        $query->where('usr', '=', session('LoggedUser'));        
        $query->get();        
        $path = $request->file('trabajo')->getRealPath();
        $pdf = file_get_contents($path);
        $base64 = base64_encode($pdf);
        $emp = $query->pluck('emp');
        $query2 = DB::table('documentos_empresa');        
        $query2->where('emp', '=', $emp);        
        $data = $query2->get();
        if(!$data->isEmpty()){
                   $query3 = DB::table('documentos_empresa')
                            ->where('emp', $emp)
                            ->update([
                                    'trabajo' => $base64                                   
                                    ]);
                   return back()->with('success','Archivo subido');
        }else{
            DB::table('documentos_empresa')->insert([
                        'emp' => $emp[0],
                        'trabajo' => $base64
	                ]);
                    return back()->with('success','Archivo subido');
        }
    }
    function parteP(Request $request){
        $filesource = $request->file('pagos');
        $fileExtension = "";
        if($filesource != null){
            $fileExtension = $filesource->getClientOriginalExtension();
        }
        if(strcmp($fileExtension, "pdf") !== 0){
            return back()->with('fail','Se requiere un archivo con extension .pdf');
        }
        $query = DB::table('usuario_empresa');        
        $query->where('usr', '=', session('LoggedUser'));        
        $query->get();        
        $path = $request->file('pagos')->getRealPath();
        $pdf = file_get_contents($path);
        $base64 = base64_encode($pdf);
        $emp = $query->pluck('emp');
        $query2 = DB::table('documentos_empresa');        
        $query2->where('emp', '=', $emp);        
        $data = $query2->get();
        if(!$data->isEmpty()){
                   $query3 = DB::table('documentos_empresa')
                            ->where('emp', $emp)
                            ->update([
                                    'pagos' => $base64                                   
                                    ]);
                   return back()->with('success','Archivo subido');
        }else{
            DB::table('documentos_empresa')->insert([
                        'emp' => $emp[0],
                        'pagos' => $base64
	                ]);
                    return back()->with('success','Archivo subido');
        }
    }
    function contratoD(Request $request){
        $filesource = $request->file('contrato');
        $fileExtension = "";
        if($filesource != null){
            $fileExtension = $filesource->getClientOriginalExtension();
        }
        if(strcmp($fileExtension, "pdf") !== 0){
            return back()->with('fail','Se requiere un archivo con extension .pdf');
        }       
        $path = $request->file('contrato')->getRealPath();
        $pdf = file_get_contents($path);
        $base64 = base64_encode($pdf);
        $query2 = DB::table('documentos_empresa');        
        $query2->where('emp', '=', $request->id);        
        $data = $query2->get();
        if(!$data->isEmpty()){
                   $query3 = DB::table('documentos_empresa')
                            ->where('emp', $request->id)
                            ->update([
                                    'contrato' => $base64                                   
                                    ]);
                   return back()->with('success','Archivo subido');
        }else{
                   return back()->with('fail','Faltan documentos de la grupo-empresa');
        }
    }
    function contratoD2(Request $request){
        $filesource = $request->file('contrato');
        $fileExtension = "";
        if($filesource != null){
            $fileExtension = $filesource->getClientOriginalExtension();
        }
        if(strcmp($fileExtension, "pdf") !== 0){
            return back()->with('fail6','Se requiere un archivo con extension .pdf');
        }      
        $path = $request->file('contrato')->getRealPath();
        $pdf = file_get_contents($path);
        $base64 = base64_encode($pdf);
        $query = DB::table('usuario_empresa');        
        $query->where('usr', '=', session('LoggedUser'));        
        $query->get();
        $query2 = DB::table('documentos_empresa')
                            ->where('emp', $query->pluck('emp'));                                  
        $data = $query2->get();
        if($data->pluck('contrato') == null){
            return back()->with('fail6','No se puede subir este documento todavía');
        }
        if(!$data->isEmpty()){
                   $query3 = DB::table('documentos_empresa')
                            ->where('emp', $query->pluck('emp'))
                            ->update([
                                    'contrato' => $base64                                   
                                    ]);
                   return back()->with('success','Archivo subido');
        }else{
                   return back()->with('fail6','Faltan documentos de la grupo-empresa');
        }
    }
    function updateE(Request $request){
        if(($request->nombreC == null) || ($request->nombreL == null)){
            return back()->with('fail','La empresa necesita un nombre');
        }
        if($request->representante == null){
            $request->representante = "";
        }
        if($request->correo == null){
            $request->correo = "";
        }
        if($request->telefono == null){
            $request->telefono = "";
        }
        if($request->direccion == null){
            $request->direccion = "";
        }
        $query = DB::table('usuario_empresa');        
        $query->where('usr', '=', session('LoggedUser'));        
        $query->get();
        $query2 = DB::table('empresas')
                            ->where('id', $query->pluck('emp'))
                            ->update([
                                    'nombreC' => $request->nombreC,
                                    'nombreL' => $request->nombreL,
                                    'representante' => $request->representante,
                                    'correo' => $request->correo,
                                    'telefono' => $request->telefono,
                                    'direccion' => $request->direccion
                                    ]);
        return back()->with('success','Empresa actualizada');
    }

    function funda(Request $request){
        
        $query = DB::table('usuarios');        
        $query->where('tipo', '=', 3);
        $query->whereNotIn('id', DB::table('usuario_empresa')->pluck('usr'));
        
        $data = $query->get();
        return view('fundaempresa',compact('data'));
    }
    function funda2(){        
        $query = DB::table('empresas');         
        $data = $query->get();
        return view('lista',compact('data'));
    }
    function funda3(){        
        $query = DB::table('empresas');         
        $data = $query->get();
        return view('/estudiante/lista',compact('data'));
    }
    function funda4(){        
        $query = DB::table('empresas');         
        $data = $query->get();
        return view('/docente/lista',compact('data'));
    }
    function funda5(){        
        $query = DB::table('empresas');         
        $data = $query->get();
        return view('/admin/lista',compact('data'));
    }
    function empresa(){
        $query = DB::table('usuario_empresa');        
        $query->where('usr', '=', session('LoggedUser'));        
        $data = $query->get();
        if(!$data->isEmpty()){
            //$data2 = DB::table('usuario_empresa')->where('emp', '=', $data->pluck('emp'));
            $query2 = DB::table('usuarios');        
            $query2->join('usuario_empresa','usuario_empresa.usr','=','usuarios.id')->
                         where('usuario_empresa.emp', '=', $data->pluck('emp'));            
            $data2 = $query2->get();
            $query = DB::table('empresas')->where('id', '=', $data->pluck('emp'));
            $data = $query->get();
            return view('estudiante.empresa',compact('data','data2'));
        }else{
            return view('estudiante.sinempresa');
        }
    }


    function check(Request $request){    
        //Validate requests
        $request->validate([
             'username'=>'required',
             'password'=>'required|min:5|max:12'
        ]);
        
        $userInfo = Usuario::where('username','=', $request->username)->first();
        
        if(!$userInfo){
            return back()->with('fail','Usuario no registrado');
        }else{
            //check password
            if($request->password == $userInfo->pass){
                if($userInfo->tipo==1){
                    $request->session()->put('LoggedUser', $userInfo->id);
                    return redirect('admin/inicioA');
                }if($userInfo->tipo==2){
                    $request->session()->put('LoggedUser', $userInfo->id);
                    return redirect('docente/inicioD');
                }if($userInfo->tipo==3){
                    $request->session()->put('LoggedUser', $userInfo->id);
                    return redirect('estudiante/inicioE');
                }else{
                    return back()->with('fail','Pagina no creada');
                }

            }else{                
                return back()->with('fail','Contraseña incorrecta');
            }
        }
    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }

    function dashboard(){
        $data = ['LoggedUserInfo'=>Usuario::where('id','=', session('LoggedUser'))->first()];
        return view('admin.dashboard', $data);
    }
    function dashboard2(){
        $data = ['LoggedUserInfo'=>Usuario::where('id','=', session('LoggedUser'))->first()];
        return view('docente.dashboard', $data);
    }
    function dashboard3(){
        $data = ['LoggedUserInfo'=>Usuario::where('id','=', session('LoggedUser'))->first()];
        return view('estudiante.dashboard', $data);
    }

    public function accion(Request $request)
    {
        return view('estudiante.dashboard', $data);
    	if($request->ajax())
    	{   
            
    		if($request->type == 'add')
    		{
    			$event = Evento::create([
    				'titulo'		=>	$request->titulo,
    				'inicio'		=>	$request->inicio,
    				'fin'		=>	$request->fin
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'update')
    		{
    			$event = Evento::find($request->id)->update([
    				'titulo'		=>	$request->titulo,
    				'inicio'		=>	$request->inicio,
    				'fin'		=>	$request->fin
    			]);

    			return response()->json($event);
    		}

    		if($request->type == 'delete')
    		{
    			$event = Evento::find($request->id)->delete();

    			return response()->json($event);
    		}
    	}
    }

    public function mostrarPDF(Request $request){
      //$pdf = PDF::loadView('pdf', compact('user'));
      $query = DB::table('empresas');        
      $query->where('id', '=', $request->id);        
      $data = $query->get();
      $pdf = PDF::loadView('/docente/contrato', compact('data'));
      $path = $pdf->output('contrato.pdf');
      $base64 = base64_encode($path);
      $query2 = DB::table('documentos_empresa');        
        $query2->where('emp', '=', $request->id);        
        $data = $query2->get();
        if(!$data->isEmpty()){
                    $query3 = DB::table('documentos_empresa')
                            ->where('emp', $request->id)
                            ->update([
                                    'contrato' => $base64                                   
                                    ]);
                    return $pdf->download('contrato.pdf');
        }else{
                   return back()->with('fail','Faltan documentos de la grupo-empresa');
        }
    }
    public function mostrarPDF2(Request $request){
      $query = DB::table('usuario_empresa');        
        $query->where('usr', '=', session('LoggedUser'));        
        $query->get();
        $query2 = DB::table('documentos_empresa')
                            ->where('emp', $query->pluck('emp'));                                  
        $data = $query2->get();
        $base64 = $data->pluck('contrato');
        if(!$data->isEmpty() && $base64[0]!=null){
            $bin = base64_decode($base64[0]);
            $pdf = response($bin)
            ->header('Content-Type', 'application/pdf')->header('Content-disposition','attachment; filename="contrato.pdf"');
            return $pdf;
        }else{
            return back()->with('fail4','Contrato no generado');
        }
    }
    public function orden(Request $request){      
      $grupo = $request->orden;
      return view('/docente/orden',compact('grupo'));
    }
   

    public function ordenG(Request $request){
      $query = DB::table('empresas');        
      $query->where('id', '=', $request->id);        
      $data = $query->first();      
      $pdf = PDF::loadView('/docente/ordenG', compact('data','request'));      
      $path = $pdf->output('orden.pdf');      
      $base64 = base64_encode($path);
      $query2 = DB::table('documentos_empresa');        
      $query2->where('emp', '=', $request->id);        
      $data = $query2->get();
        if(!$data->isEmpty()){
                    $query3 = DB::table('documentos_empresa')
                            ->where('emp', $request->id)
                            ->update([
                                    'orden' => $base64                                   
                                    ]);                   
                    //return $pdf->stream();
                    $query = DB::table('empresas');         
                    $data = $query->get();
                    //return redirect('/docente/lista',compact('data'))->with('success','Archivo subido');
                    return redirect('/docente/lista')->with('success','Archivo subido');
        }else{
                   return back()->with('fail','Faltan documentos de la grupo-empresa');
        }       
    }
    
    /*
    function settings(){
        $data = ['LoggedUserInfo'=>Usuario::where('id','=', session('LoggedUser'))->first()];
        return view('admin.settings', $data);
    }

    function profile(){
        $data = ['LoggedUserInfo'=>Usuario::where('id','=', session('LoggedUser'))->first()];
        return view('admin.profile', $data);
    }
    function staff(){
        $data = ['LoggedUserInfo'=>Usuario::where('id','=', session('LoggedUser'))->first()];
        return view('admin.staff', $data);
    }*/
}

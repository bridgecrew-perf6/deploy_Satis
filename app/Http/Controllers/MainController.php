<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Aviso;
use App\Models\Convocatoria;
use App\Models\Usuario;
use App\Models\Empresa;
use Illuminate\Support\Facades\Hash;
use DB;


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
        if($integrantes == null){
            return back()->with('fail','Se necesitan al menos 3 socios');
        }
        if(count($integrantes) < 3){
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
                    return redirect('admin/dashboard');
                }if($userInfo->tipo==2){
                    $request->session()->put('LoggedUser', $userInfo->id);
                    return redirect('docente/dashboard');
                }if($userInfo->tipo==3){
                    $request->session()->put('LoggedUser', $userInfo->id);
                    return redirect('estudiante/dashboard');
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

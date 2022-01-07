<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Usuario;
use App\Models\Empresa;
use Illuminate\Support\Facades\Hash;
use DB;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function convocatoriasD(){
        $data = ['LoggedUserInfo'=>Usuario::where('id','=', session('LoggedUser'))->first()];
        return view('docente.convocatoriasD');
    }
    function avisosD(){
        return view('docente.avisosD');
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
            while(($csv = fgetcsv($file_open, 200, ";")) !== false)
            {
                if($i != 0){
                $username = $csv[0];
                $pass = Hash::make($csv[1]);
                DB::table('usuarios')->insert([
                    'username' => $username,
                    'pass' => $pass,
                    'tipo' => '3'
                ]);
                }
                $i++;                        
            }
            return redirect('docente/dashboard');
            }catch (Exception $e){
                echo 'Excepción capturada: ',  $e->getMessage(), "\n";
            }
        }        
    }
    function save2(Request $request){
        
        //Validate requests
        $request->validate([
            'name'=>'required',
            'password'=>'required|min:5|max:12'
        ]);

         //Insert data into database
         $admin = new Usuario;
         $admin->username = $request->name;
         $admin->pass = Hash::make($request->password);
         $admin->tipo = '2';
         $save = $admin->save();

         if($save){
            return back()->with('success','New User has been successfuly added to database');
         }else{
             return back()->with('fail','Something went wrong, try again later');
         }
    }
    function save3(Request $request){
       
        //Validate requests
        $request->validate([
            'nombreC'=>'required|unique:empresas',
            'nombreL'=>'required|min:5|unique:empresas',
            'integrantes'=>'nullable|unique:empresas',
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
            return back()->with('success','Empresa creada exitosamente');
         }else{
             return back()->with('fail','La empresa ya existe o su nombre no es valido');
         }
    }
    function funda(Request $request){
        $data = ['LoggedUserInfo'=>Usuario::where('id','=', session('LoggedUser'))->first()]; 
        return view('fundaempresa',['usuarios' => $data]);
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
            if(Hash::check($request->password, $userInfo->pass)){
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

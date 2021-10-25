<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
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
        
        //Validate requests
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:admins',
            'password'=>'required|min:5|max:12'
        ]);

         //Insert data into database
         $admin = new Admin;
         $admin->name = $request->name;
         $admin->email = $request->email;
         $admin->password = Hash::make($request->password);
         $save = $admin->save();

         if($save){
            return back()->with('success','New User has been successfuly added to database');
         }else{
             return back()->with('fail','Something went wrong, try again later');
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
         $admin->tipo = '3';
         $save = $admin->save();

         if($save){
            return back()->with('success','New User has been successfuly added to database');
         }else{
             return back()->with('fail','Something went wrong, try again later');
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
                return ;
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

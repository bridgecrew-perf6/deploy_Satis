<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Notificacion;
use App\Models\Notificacion_usuario;
use App\Models\Usuario;
use App\Models\usuario_empresa;
use Illuminate\Http\Request;

class NotificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $LoggedUserInfo=Usuario::where('id','=', session('LoggedUser'))->first();
        if($LoggedUserInfo->tipo==2){
            $notificaciones = Notificacion::all();

        } else{
            $notificaciones = Notificacion_usuario::where('id_recibido',session('LoggedUser'))
            ->join('notificaciones', 'notificaciones.id', '=', 'notificaciones_de_usuarios.id_notificacion')->get();

            $notifi= Notificacion_usuario::where("id_recibido",session('LoggedUser'))->where('leido',0)->get();
            for ($i=0; $i < count($notifi); $i++) { 
                $notificacion=Notificacion_usuario::find($notifi[$i]->id);
                $notificacion->update(['leido'=>true]);
            }

        }
        
        
            
            $usuario_empresa = usuario_empresa::where('usr',session('LoggedUser'))->first();
            $empresas = Empresa::all();
            $data = ['LoggedUserInfo'=>$LoggedUserInfo,'notificaciones'=>$notificaciones,'usuario_empresa'=>$usuario_empresa,'empresas'=>$empresas];
            


            return view('notificaciones.index', $data)->with('i', (request()->input('page', 1) - 1) * 5);

    }
    function mensajitos(){
        $notificaciones = Notificacion::all();
        $usuario_empresa = usuario_empresa::where('usr',session('LoggedUser'))->first();
        $empresas = Empresa::all();
        $data = ['LoggedUserInfo'=>Usuario::where('id','=', session('LoggedUser'))->first(),'notificaciones'=>$notificaciones,'usuario_empresa'=>$usuario_empresa,'empresas'=>$empresas];
        


        return view('/docente/notificaciones', $data) ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { $empresas = Empresa::all();
        
        return view('notificaciones.create',['empresas'=>$empresas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
    

        if( $request->get('empresa')=='all'){
            $usuario_empresa = usuario_empresa::where('usr',session('LoggedUser'))->first();
            $data_merged = array_merge(['recibe_id'=> 0], $request->all());
            $obj_merged = array_merge(['envia_id'=>session('LoggedUser')], $data_merged);
        
            $nueva_notificacion=Notificacion::create($obj_merged);
            $empresas = Empresa::all();
            
            for ($j=0; $j < count($empresas) ; $j++) { 
                $usuario_recibidos= usuario_empresa::where('emp',$empresas[$j]->id)->get();
                for($i = 0; $i<count($usuario_recibidos); $i++){
                        
                $data_notificacion=[
                  "id_notificacion"=>$nueva_notificacion->id,
                    "id_recibido"=>$usuario_recibidos[$i]->usr
                ];
                Notificacion_usuario::create($data_notificacion);
                }
            }
            
    
            return redirect()->route('notificaciones.index')
                ->with('success', 'Mensaje enviado con éxito');

        }else{
            $usuario_empresa = usuario_empresa::where('usr',session('LoggedUser'))->first();
            $data_merged = array_merge(['recibe_id'=> $request->get('empresa')], $request->all());
            $obj_merged = array_merge(['envia_id'=>session('LoggedUser')], $data_merged);
           
        
            $nueva_notificacion=Notificacion::create($obj_merged);
            $usuario_recibidos= usuario_empresa::where('emp',$request->get('empresa'))->get();
            for($i = 0; $i<count($usuario_recibidos); $i++){
                        
                $data_notificacion=[
                  "id_notificacion"=>$nueva_notificacion->id,
                    "id_recibido"=>$usuario_recibidos[$i]->usr
                ];
                Notificacion_usuario::create($data_notificacion);
            }
    
            return redirect()->route('notificaciones.index')
                ->with('success', 'Mensaje enviado con éxito');
        }
       /* 
        $usuario_empresa = usuario_empresa::where('usr',session('LoggedUser'))->first();
        $data_merged = array_merge(['recibe_id'=> $request->get('empresa')], $request->all());
        $obj_merged = array_merge(['envia_id'=>session('LoggedUser')], $data_merged);
       
    
        $nueva_notificacion=Notificacion::create($obj_merged);
        $usuario_recibidos= usuario_empresa::where('emp',$request->get('empresa'))->get();
        for($i = 0; $i<count($usuario_recibidos); $i++){
                    
            $data_notificacion=[
              "id_notificacion"=>$nueva_notificacion->id,
                "id_recibido"=>$usuario_recibidos[$i]->usr
            ];
            Notificacion_usuario::create($data_notificacion);
        }

        return redirect()->route('notificaciones.index')
            ->with('success', 'Mensaje enviado con éxito');*/
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notificacion  $notificacion
     * @return \Illuminate\Http\Response
     */
    public function show(Notificacion $notificacion)
    {
        return view('notificaciones.show', compact('notificacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notificacion  $notificacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Notificacion $notificacion)
    {
        return view('notificaciones.edit', compact('notificacion'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notificacion  $notificacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notificacion $notificacion)
    {
        $request->validate([
            'mensaje_notificacion' => 'required'
            /*'seleccionar el usuario' => 'required',
            'seleccionar el usuario2' => 'required'*/
            
            
        ]);
        $usuario_empresa = usuario_empresa::where('usr',session('LoggedUser'))->first();
        $obj_merged = array_merge(['recibe_id'=>$usuario_empresa->emp], $request->all());

        $notificacion->update($obj_merged);

        return redirect()->route('notificaciones.index')
            ->with('success', 'mensaje actualizado');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notificacion  $notificacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notificacion $notificacion)
    {
        $notificacion->delete();

        return redirect()->route('notificaciones.index')
            ->with('success', 'Mensaje eliminado');
    }
}

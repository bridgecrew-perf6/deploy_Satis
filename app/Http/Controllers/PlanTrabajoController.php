<?php

namespace App\Http\Controllers;
use App\Models\Empresa;
use App\Models\PlanTrabajo;
use App\Models\Usuario;
use App\Models\usuario_empresa;
use Illuminate\Http\Request;

class PlanTrabajoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$planTrabajos = PlanTrabajo::latest()->paginate(5);
        /*$planTrabajos = PlanTrabajo::all();
        return view('planTrabajos.index', compact('planTrabajos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);*/
            $log = ['LoggedUserInfo'=>Usuario::where('id','=', session('LoggedUser'))->first()]; 
            $planTrabajos = PlanTrabajo::all();
            $usuario_empresa = usuario_empresa::where('usr',session('LoggedUser'))->first();
            $empresas = Empresa::all();
            $data = ['LoggedUserInfo'=>Usuario::where('id','=', session('LoggedUser'))->first(),'planTrabajos'=>$planTrabajos, 'usuario_empresa'=>$usuario_empresa,'empresas'=>$empresas];




            return view('planTrabajos.index', $data,['usuarios' => $log]) ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('planTrabajos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*  $request->validate([
            'estado del projecto' => 'required',
            'entregable' => 'required',
            'feha_de_entrega' => 'required',
            'costo' => 'required'
        ]);*/
        $usuario_empresa = usuario_empresa::where('usr',session('LoggedUser'))->first();
        $obj_merged = array_merge(['id_empresa'=>$usuario_empresa->emp], $request->all());


        //PlanTrabajo::create($request->all());
        PlanTrabajo::create($obj_merged);

        return redirect()->route('planTrabajos.index')
            ->with('success', 'Plan de Trabajo creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PlanTrabajo  $planTrabajo
     * @return \Illuminate\Http\Response
     */
    public function show(PlanTrabajo $planTrabajo)
    {
        return view('planTrabajos.show', compact('planTrabajo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PlanTrabajo $planTrabajo
     * @return \Illuminate\Http\Response
     */
    public function edit(PlanTrabajo $planTrabajo)
    {
        return view('planTrabajos.edit', compact('planTrabajo'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PlanTrabajo  $planTrabajo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PlanTrabajo $planTrabajo)
    {
        $request->validate([
            'sprint' => 'required',
            'resultado' => 'required',
            'fecha_inicio' => 'required',
            'fecha_fin' => 'required'
        ]);
        $usuario_empresa = usuario_empresa::where('usr',session('LoggedUser'))->first();
        $obj_merged = array_merge(['id_empresa'=>$usuario_empresa->emp], $request->all());
        
        $planTrabajo->update($obj_merged);
        //$planTrabajo->update($request->all());

        return redirect()->route('planTrabajos.index')
            ->with('success', 'Plan de Trabajo actualizado exitosamente');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PlanTrabajo  $planTrabajo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlanTrabajo $planTrabajo)
    {
        $planTrabajo->delete();

        return redirect()->route('planTrabajos.index')
            ->with('success', 'Plan de Trabajo borrado exitosamente');
    }
}

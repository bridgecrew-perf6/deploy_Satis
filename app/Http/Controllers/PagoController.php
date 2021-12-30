<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Pago;
use App\Models\Usuario;
use App\Models\usuario_empresa;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pagos = Pago::latest()->paginate(5);
       /* $pagos = Pago::all();
        return view('pagos.index', compact('pagos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);*/
            $pagos = Pago::all();
            $usuario_empresa = usuario_empresa::where('usr',session('LoggedUser'))->first();
            $empresas = Empresa::all();
            $data = ['LoggedUserInfo'=>Usuario::where('id','=', session('LoggedUser'))->first(),'pagos'=>$pagos,'usuario_empresa'=>$usuario_empresa,'empresas'=>$empresas];
            


            return view('pagos.index', $data) ->with('i', (request()->input('page', 1) - 1) * 5);

    }
    function paguitos(){
        $pagos = Pago::all();
        $usuario_empresa = usuario_empresa::where('usr',session('LoggedUser'))->first();
        $empresas = Empresa::all();
        $data = ['LoggedUserInfo'=>Usuario::where('id','=', session('LoggedUser'))->first(),'pagos'=>$pagos,'usuario_empresa'=>$usuario_empresa,'empresas'=>$empresas];
        


        return view('/docente/pagos', $data) ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pagos.create');
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
        //$usuario = Usuario::where('id','=', session('LoggedUser'));
        $usuario_empresa = usuario_empresa::where('usr',session('LoggedUser'))->first();
        $obj_merged = array_merge(['id_empresa'=>$usuario_empresa->emp], $request->all());
    
        Pago::create($obj_merged);

        return redirect()->route('pagos.index')
            ->with('success', 'Plan de Pagos creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function show(Pago $pago)
    {
        return view('pagos.show', compact('pago'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function edit(Pago $pago)
    {
        return view('pagos.edit', compact('pago'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pago $pago)
    {
        $request->validate([
            'estado_del_proyecto' => 'required',
            'entregable' => 'required',
            'fecha_de_entrega' => 'required',
            'porcentaje' => 'required',
            'costo' => 'required'
        ]);
        $usuario_empresa = usuario_empresa::where('usr',session('LoggedUser'))->first();
        $obj_merged = array_merge(['id_empresa'=>$usuario_empresa->emp], $request->all());

        $pago->update($obj_merged);

        return redirect()->route('pagos.index')
            ->with('success', 'Plan de Pagos actualizado exitosamente');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pago  $pago
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pago $pago)
    {
        $pago->delete();

        return redirect()->route('pagos.index')
            ->with('success', 'Plan de pago borrado exitosamente');
    }
}

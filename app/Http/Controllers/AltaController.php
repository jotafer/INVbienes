<?php

namespace sisInventario\Http\Controllers;

use Illuminate\Http\Request;
use sisInventario\Proveedor;
use sisInventario\Grupo;
use sisInventario\Subgrupo;
use sisInventario\Especie;
use sisInventario\Ubicacion;
use sisInventario\Alta;

class AltaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function byGrupo($id)
    {
        return Subgrupo::where('grupo_id', $id)->get();
    }

    public function bySubgrupo($id)
    {
        return Especie::where('subgrupo_id', $id)->get();
    }

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {

        $grupos = Grupo::all();
        $proveedores = Proveedor::all();
        $subgrupos = Subgrupo::all();
        $especies = Especie::all();
        $ubicaciones = Ubicacion::all();
        $altas = Alta::withTrashed()->get();
        return view('/altas/altabien')->with(compact('proveedores','altas', 'grupos','subgrupos','especies','ubicaciones'));
    }

    public function store(Request $request)
    {

        $this->validate($request, Alta::$rules, Alta::$messages);

        Alta::create($request->all());

        return back()->with('notification', 'Alta registrada exitosamente.');
    }

    public function edit($id)
    {
    
        $alta = Alta::findOrFail($id);
        //$grupo = Grupo::where('id', $id)->first();
        return view('altas.edit')->with(compact('alta'));
    }

    public function traslado($id)
    {
    
        $alta = Alta::findOrFail($id);
        //$grupo = Grupo::where('id', $id)->first();
        return view('altas.traslado')->with(compact('alta'));
    }

    public function baja($id)
    {
    
        $alta = Alta::findOrFail($id);
        //$grupo = Grupo::where('id', $id)->first();
        return view('altas.baja')->with(compact('alta'));
    }


    public function update($id, Request $request)
    {
        
        $this->validate($request, Alta::$rules, Alta::$messages);

        Alta::find($id)->update($request->all());

        return back()->with('notification', 'Alta actualizada exitosamente.');
    }

    public function delete($id)
    {
        Alta::find($id)->delete();

        return back()->with('notification','La alta ha sido eliminada.');
        
    }

    public function restore($id)
    {
        Alta::withTrashed()->find($id)->restore();

        return back()->with('notification','La alta se ha restaurado correctamente.');
        
    }

}


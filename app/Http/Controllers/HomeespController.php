<?php

namespace sisInventario\Http\Controllers;

use Illuminate\Http\Request;
use sisInventario\Grupo;
use sisInventario\Subgrupo;
use sisInventario\Especie;
use sisInventario\Ubicacion;
use sisInventario\Altaesp;
use sisInventario\Inventariable;

class HomeespController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function byGrupo($id)
    {
        return Subgrupo::where('grupo_id', $id)->get();
    }

    public function bySubgrupo($id)
    {
        return Especie::where('subgrupo_id', $id)->get();
    }
    
    public function index()
    {
        $altaesps = Altaesp::all();
        return view('homeesp')->with(compact('altaesps'));

    }

    public function store(Request $request)
    {

        $this->validate($request, Alta::$rules, Alta::$messages, Inventariable::$rules, Inventariable::$messages);

        Inventariable::create($request->all());
        //$grupo = new Grupo();    
        //$grupo->nombre = $request->input('nombre');
        //$grupo->codigo = $request->input('codigo');

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
        return view('inventariables.traslado')->with(compact('alta'));
    }

    public function baja($id)
    {
    
        $alta = Alta::findOrFail($id);
        //$grupo = Grupo::where('id', $id)->first();
        return view('inventariables.baja')->with(compact('alta'));
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


    public function scopeSearch($query, $descripcionbien)
    {
        return $query->where('descripcionbien', 'LIKE', "descripcionbien");   
    }    

}


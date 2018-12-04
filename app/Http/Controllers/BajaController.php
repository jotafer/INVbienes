<?php

namespace sisInventario\Http\Controllers;

use Illuminate\Http\Request;
use sisInventario\Http\Controllers\Controller;
use sisInventario\Alta;

class BajaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index(Request $request)
    {
        $descripcionbien = $request->get('descripcionbien');

        $altas = Alta::where('movimiento_id', 1)
            ->descripcionbien($descripcionbien)
            ->paginate(4);

        $traslados = Alta::where('movimiento_id', 3)
            ->descripcionbien($descripcionbien)
            ->paginate(4); 

        return view('bajas/bajabien')->with(compact('altas', 'traslados'));
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


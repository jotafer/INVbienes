<?php

namespace sisInventario\Http\Controllers;

use Illuminate\Http\Request;
use sisInventario\Grupo;
use sisInventario\Subgrupo;
use sisInventario\Especie;
use sisInventario\Ubicacion;
use sisInventario\Alta;

class VerbienesController extends Controller
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

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id)
    {
        $alta = Alta::findOrFail($id);
        return view('inventariables.show')->with(compact('alta'));
    }

    
    public function index()
    {
        $grupos = Grupo::all();
        $ubicaciones = Ubicacion::all();
        $subgrupos = Subgrupo::all();
        $altas = Alta::withTrashed()->get();
        return view('verbienes')->with(compact('altas', 'grupos','subgrupos','ubicaciones'));
    }

    public function store(Request $request)
    {

        $this->validate($request, Alta::$rules, Alta::$messages);

        Alta::create($request->all());
        //$grupo = new Grupo();    
        //$grupo->nombre = $request->input('nombre');
        //$grupo->codigo = $request->input('codigo');

        return back()->with('notification', 'Alta registrada exitosamente.');
    }

    public function traslado($id)
    {
    
        $alta = Alta::findOrFail($id);
        $ubicaciones = Ubicacion::all();
        return view('inventariables.traslado')->with(compact('alta','ubicaciones'));
    }

    public function edit($id)
    {
    
        $alta = Alta::findOrFail($id);
        $ubicaciones = Ubicacion::all();
        return view('inventariables.traslado')->with(compact('alta','ubicaciones'));
    }

    public function editb($id)
    {
    
        $alta = Alta::findOrFail($id);
        $ubicaciones = Ubicacion::all();
        return view('inventariables.darbaja')->with(compact('alta','ubicaciones'));
    }

    public function darbaja($id)
    {
    
        $alta = Alta::findOrFail($id);
        //$grupo = Grupo::where('id', $id)->first();
        $ubicaciones = Ubicacion::all();
        return view('inventariables.darbaja')->with(compact('alta','ubicaciones'));
    }



    public function update($id, Request $request)
    {
        $rules = [
            'fecha' => 'required|date',
            'proveedor' => 'required|string|max:255',
            'ordendecompra' => 'required|string|max:255',
            'factura' => 'required|numeric|digits:4',

            //Codigo Asignado

            'cantidad' => 'required|numeric',
            'descripcionbien' => 'nullable|string|max:255',
            'preciounitario' => 'required|numeric',
            'observaciones' => 'string|max:255',
            'ubicacion_id' => 'required'
        ];

        $messages = [
            'fecha.required' => 'Es necesario ingresar la fecha del traslado.',
            'estado_conservacion.required' => 'Es necesario ingresar el estado del producto.',
            'ubicacion_id.required' => 'Es necesario ingresar el destino del producto.'
        ];
        $this->validate($request, $rules, $messages);

        $alta = Alta::find($id);
        $alta->movimiento_id = $request->input('movimiento_id');
        $alta->fecha = $request->input('fecha');
        $alta->estado_conservacion = $request->input('estado_conservacion');
        $alta->ubicacion_id = $request->input('ubicacion_id');

        $alta->save();
        return back()->with('notification','Movimiento registrado exitosamente.');
    }

    public function updateb($id, Request $request)
    {
        $rules = [
            'fecha' => 'required|date',
            'proveedor' => 'required|string|max:255',
            'ordendecompra' => 'required|string|max:255',
            'factura' => 'required|numeric|digits:4',

            //Codigo Asignado

            'cantidad' => 'required|numeric',
            'descripcionbien' => 'nullable|string|max:255',
            'preciounitario' => 'required|numeric',
            'observaciones' => 'string|max:255',
            'ubicacion_id' => 'required'
        ];

        $messages = [
            'fecha.required' => 'Es necesario ingresar la fecha del traslado.',
            'estado_conservacion.required' => 'Es necesario ingresar el estado del producto.',
            'ubicacion_id.required' => 'Es necesario ingresar el destino del producto.'
        ];
        $this->validate($request, $rules, $messages);

        $alta = Alta::find($id);
        $alta->movimiento_id = $request->input('movimiento_id');
        $alta->fecha = $request->input('fecha');
        $alta->estado_conservacion = $request->input('estado_conservacion');
        $alta->ubicacion_id = $request->input('ubicacion_id');

        $alta->save();
        return back()->with('notification','Baja registrada exitosamente.');
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


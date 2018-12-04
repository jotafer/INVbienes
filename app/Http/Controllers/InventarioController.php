<?php

namespace sisInventario\Http\Controllers;

use Illuminate\Http\Request;

class InventarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
}

public function index(){

	$user = auth()->user();
	Altas::where()
}

public function show($id)
{
	$alta = Alta::findOrFail($id);
	return view('inventariables.show')
}

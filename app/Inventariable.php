<?php

namespace sisInventario;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Inventariable extends Model
{

	use Notifiable;

    use Softdeletes;
    
    public static $rules = [
        'fecha' => 'required|date',
        'proveedor' => 'required|string|max:255',
        'ordendecompra' => 'required|string|max:255',
        'factura' => 'required|numeric|max:6',

        //Codigo Asignado
        'grupo_id' => 'required',
        'subgrupo_id' => 'required',
        'especie_id' => 'required',

        'descripcionbien' => 'nullable|string|max:255',
        'costo_incorporacion' => 'required|numeric|max:8',
        'estado_conservacion' => 'required',
        'usuario' => 'required',
        'observaciones' => 'string|max:255',
        'ubicacion_id' => 'required'
    ];

    public static $messages = [
    	'fecha.required' => 'Es necesario ingresar la fecha de adquisicion.',
    	'proveedor.required' => 'Es necesario ingresar el proveedor del bien.',
        'ordendecompra.required' => 'Es necesario ingresar el orden de compra del bien.',
        'factura.required' => 'Es necesario ingresar la factura del bien.',

        //Codigo asignado
        'grupo_id.required' => 'Es necesario ingresar el grupo del bien.',
        'subgrupo_id.required' => 'Es necesario ingresar el subgrupo del bien.',
        'especie_id.required' => 'Es necesario ingresar la especie del bien.',

        'cantidad.required' => 'Es necesario ingresar la cantidad del bien.',
        'descripcionbien.required' => 'Es necesario ingresar la descripcion del bien.',
        'costo_incorporacion.required' => 'Es necesario ingresar el costo del bien.',
        'estado_conservacion.required' => 'Es necesario ingresar estado del bien.',
        'usuario.required' => 'Es necesario ingresar el usuario que hizo cambios.',
        'ubicacion_id.required' => 'Es necesario ingresar la ubicacion a la que pertenece.'

    ];

    protected $fillable = [
        'fecha', 'proveedor','ordendecompra', 'factura','grupo_id', 'subgrupo_id', 'especie_id', 'descripcionbien', 'costo_incorporacion', 'ubicacion_id', 'altaesp_id', 'estado_conservacion', 'usuario'
    ];

    public function altaesp()
    {
        return $this->belongsTo('sisInventario\Altaesp');
    }

}

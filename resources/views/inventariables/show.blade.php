@extends('layouts.app')

@section('content')


<div class="panel panel-primary">
		<div class="panel-heading">Dashboard</div>

        <div class="panel-body">
			@if (count($errors) > 0)        	
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

			<table class="table table-bordered">
			<thead>
				<tr>
					<th>Codigo</th>
					<th>Fecha</th>
					<th>Proveedor</th>
					<th>Orden de compra</th>
					<th>Factura</th>
					<th>Precio Unitario</th>
				</tr>
			</thead>
			</tbody>
				<tr>
					<td id="alta_codigo">{{ $alta->grupo_id }}x0{{ $alta->subgrupo_id }}x{{ $alta->especie }}x0{{ $alta->numero }}</td>
					<td id="alta_fecha">{{ $alta->fecha }}</td>
					<td id="alta_proveedor">{{ $alta->proveedor }}</td>
					<td id="alta_orden_de_compra">{{ $alta->ordendecompra }}</td>
					<td id="alta_factura">{{ $alta->factura }}</td>
					<td id="alta_precio">{{ $alta->preciounitario }}</td>
				</tr>
			</tbody>
			</table>

			<table class="table table-bordered">
			<tbody>
				<tr>
					<th>Descripcion Producto</th>
					<td id="alta_cantidad">{{ $alta->descripcionbien }}</td>
				</tr>
				<tr>
					<th>Destino</th>
					<td id="alta_destino">{{ $alta->ubicacion_id }}</td>
				</tr>
				<tr>
					<th>Observaciones</th>
					<td id="alta_observaciones">{{ $alta->observaciones }}</td>
				</tr>
			</tbody>
		</table>

	</div>
</div>
@endsection
